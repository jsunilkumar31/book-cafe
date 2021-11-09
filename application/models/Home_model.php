<?php

Class Home_model extends CI_Model
{

    public function record_count($category_id = NULL, $author_id = NULL, $book_title=NULL) {
        if ($category_id) {
            if (is_array($category_id)) {
                $this->db->where_in('book_categories.category_id', $category_id);
            }else{
                $this->db->where('book_categories.category_id', $category_id);
            }
        }
        if ($author_id) {
            if (is_array($author_id)) {
                $this->db->where_in('book_authors.author_id', $author_id);
            }else{
                $this->db->where('book_authors.author_id', $author_id);
            }
        }
        
        if ($book_title) {
            $this->db->like('books.book_title', $book_title);
        }
        $this->db->select("*");
        $this->db->join('book_categories', 'books.id=book_categories.book_id', 'left');
        $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
        $this->db->group_by('books.id');
        $q = $this->db->get("books");
        return $q->num_rows();
    }
    public function getBookList($limit, $start = 1, $author_id = NULL, $category_id = NULL, $book_title = NULL)
    {
        //$this->db->query('SET GLOBAL innodb_buffer_pool_size=402653184;');
        //0*12 , 12 == 0,12
        //1*12 , 12 == 12,12
        //2*12 , 12 == 24,12
        
        if($start == 0){
            $start = 1;
        }
        
        $offSet = ($start-1)*$limit;
        //var_export($offSet);exit;
        $this->db->limit($limit,$offSet);
        if ($category_id) {
            if (is_array($category_id)) {
                $this->db->where_in('book_categories.category_id', $category_id);
            }else{
                $this->db->where('book_categories.category_id', $category_id);
            }
        }
        if ($author_id) {
            if (is_array($author_id)) {
                $this->db->where_in('book_authors.author_id', $author_id);
            }else{
                $this->db->where('book_authors.author_id', $author_id);
            }
        }
        
        if ($book_title) {
            $this->db->like('books.book_title', $book_title);
        }
        $this->db->select('*, GROUP_CONCAT(authors.author_name SEPARATOR ", ") as authors,categories.category_name as category_name');
        $this->db->join('book_categories', 'books.id=book_categories.book_id', 'left');
        $this->db->join('categories', 'book_categories.category_id=categories.id', 'left');
        $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
        $this->db->join('authors', 'authors.id=book_authors.author_id', 'left');
        $this->db->group_by('books.id');
        
        $query = $this->db->get("books");
        
        //var_export($this->db->last_query()); exit;
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function getBookByID($id)
    {
        $this->db->select('*, GROUP_CONCAT(authors.author_name SEPARATOR ", ") as authors');
        $this->db->join('book_categories', 'books.id=book_categories.book_id', 'left');
        $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
        $this->db->join('authors', 'authors.id=book_authors.author_id', 'left');
        $this->db->group_by('books.id');
        $q = $this->db->get_where('books', array('books.id' => $id), 1);
        
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }
    
    public function getTopTenBooks($limit = 12)
    {

        $this->db->from('books');
        $this->db->select('book_title , description, image , (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id) as sales, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND (borrow_status = "pending" OR borrow_status = "lost")) as available, digital_file');
        $this->db->order_by("sales", "desc");
        $this->db->limit($limit);
        $q = $this->db->get(); 

        if ($q->num_rows() > 0) {
            foreach (($q->result()) as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getAllCategories($limit = 10){
        $data = array();
        $query = $this->db->limit($limit)->order_by('RAND()')->get("categories");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    public function getAllAuthors($limit = 10){
        $data = array();
        $query = $this->db->limit($limit)->order_by('RAND()')->get("authors");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function getCategoryByID($id) {
        $this->db->select('*');
        $q = $this->db->get_where('categories', array('categories.id' => $id), 1);
        
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }
    // sunil added code
    public function getSearchResults($postData){
 
        $response = array();
      
        $this->db->select('*');
    
        if($postData['search'] ){
          $this->db->where("book_title like '%".$postData['search']."%' ");
          
          $records = $this->db->get('books')->result();
    
          foreach($records as $row ){
            $response[] = array("value"=>$row->id,"label"=>$row->book_title);
          }
     
        }
        return $response;
      }
      public function getbooksbysimilarcatid($cat_id = null)
      {
          # code...
            $this->db->select('*');
            $this->db->join('books', 'books.id=book_categories.book_id', 'left');
            // $this->db->join('book_authors', 'books.id=book_authors.book_id', 'left');
            // $this->db->join('authors', 'authors.id=book_authors.author_id', 'left');
            // $this->db->group_by('books.id');
            $query = $this->db->get_where('book_categories', array('category_id' => $cat_id));
            // $this->db->where("category_id=?",$cat_id);
          
            // return $query->result();
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
          
      }
    // sunil added code

    // creator Darshan - returns book id of E-books
    public function getEbookByID($id, $dig = FALSE)
    {
        $q = $this->db->get_where('books', array('id' => $id), 1);
        if ($q->num_rows() > 0) {
            return $q->row();
        }
        return FALSE;
    }
    // creator Darshan

    // creator Darshan - returns total number of users 
    public function getUsersCount()
    {
        $query = $this->db->get("users");
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return 0;
    }
    // creator Darshan

}

?>