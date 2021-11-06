<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('books_model');
        $this->digital_upload_path = 'files/';
        $this->upload_path = 'assets/uploads/book_covers';
        $this->thumbs_path = 'assets/uploads/book_covers/thumbs';
        $this->image_types = 'gif|jpg|jpeg|png|tif';
        $this->digital_file_types = 'pdf';
        $this->allowed_file_size = '10720';
        $this->lang->load('books_lang', $this->mLanguage);
       
    }

    /* ------------------------------------------------------------------------------- */
    function index()
    {
        $this->render('books/index');
    }

    public function read($id)
    {
        $this->load->model('home_model');
        $book = $this->books_model->getBookByID($id);

        $this->data['book'] = $book;
        $this->mPageTitle = $book->book_title;

        $this->render('books/read');
    }   
   /* ------------------------------------------------------------------------------- */
    /* ------------------------------------------------------------------------------- */

    function print_barcode()
    {
        $result = $this->books_model->getBarcode();
        foreach ($result as $value) {
            echo $this->product_barcode($value->isbn, $value->book_title);
        }

    }
    function product_barcode($product_code = NULL, $bcs = 'ean13', $height = 60)
    {
        return "<img src='" . site_url('panel/books/gen_barcode/' . $product_code . '/' . $bcs . '/' . $height) . "' alt='{$product_code}' class='bcimg' />";
    }


    function print_barcodes($product_id = NULL)
    {

        $this->form_validation->set_rules('style', lang("style"), 'required');

        if ($this->form_validation->run() == true) {
            $style = $this->input->post('style');
            $bci_size = ($style == 10 || $style == 12 ? 50 : ($style == 14 || $style == 18 ? 30 : 20));
            // $currencies = $this->site->getAllCurrencies();
            $s = isset($_POST['product']) ? sizeof($_POST['product']) : 0;
            if ($s < 1) {
                $this->session->set_flashdata('error', lang('no_book_selected'));
                redirect("panel/books/print_barcodes");
            }
            for ($m = 0; $m < $s; $m++) {
                $pid = $_POST['product'][$m];
                $quantity = $_POST['quantity'][$m];
                $product = $this->books_model->findBookDetByID($pid);
                $barcodes[] = array(
                    'site' => $this->input->post('site_name') ? $this->mSettings->title : FALSE,
                    'name' => $this->input->post('product_name') ? $product->book_title : FALSE,
                    'image' => $this->input->post('product_image') ? $product->image : FALSE,
                    'barcode' => $this->product_barcode($product->isbn, 'ean13', $bci_size),
                    'price' => $this->input->post('price') ? ($product->price) : FALSE,
                    'category' => $this->input->post('category') ? $product->category_name : FALSE,
                    'author' => $this->input->post('author') ? $product->author_name : FALSE,
                    'quantity' => $quantity
                );

            }
            $this->data['barcodes'] = $barcodes;
            $this->data['style'] = $style;
            $this->data['items'] = false;
            $this->render('books/print_barcodes');
        } else {
            if ($product_id) {
                if ($row = $this->books_model->findBookDetByID($product_id)) {
                     $pr[$row->id] = array('id' => $row->id, 'label' => $row->book_title . " (" . $row->isbn . ")", 'code' => $row->isbn, 'name' => $row->book_title, 'price' => $row->price, 'qty' => $row->total_quantity, 'available' => $row->available);
                        $this->session->set_flashdata('message',  lang('product_added_to_list'));
                }
            }
            if ($this->input->get('category')) {
                if ($products = $this->books_model->getBooksByCategoryID($this->input->get('category'))) {
                    foreach ($products as $row) {
                         $pr[$row->id] = array('id' => $row->id, 'label' => $row->book_title . " (" . $row->isbn . ")", 'code' => $row->isbn, 'name' => $row->book_title, 'price' => $row->price, 'qty' => $row->total_quantity, 'available' => $row->available);
                    }
                    $this->session->set_flashdata('message',  lang('product_added_to_list'));

                } else {
                    $pr = array();
                    $this->session->set_flashdata('error',  lang('no_book_selected'));
                }
            }
            if ($this->input->get('author')) {
                if ($products = $this->books_model->getBooksByAuthorID($this->input->get('author'))) {
                    foreach ($products as $row) {
                         $pr[$row->id] = array('id' => $row->id, 'label' => $row->book_title . " (" . $row->isbn . ")", 'code' => $row->isbn, 'name' => $row->book_title, 'price' => $row->price, 'qty' => $row->total_quantity, 'available' => $row->available);
                    }
                    $this->session->set_flashdata('message', lang('product_added_to_list'));

                } else {
                    $pr = array();
                    $this->session->set_flashdata('error', lang('no_book_found'));
                }
            }
            $this->data['items'] = isset($pr) ? json_encode($pr) : false;
            $this->render('books/print_barcodes');
        }
    }

    function gen_barcode($product_code = NULL, $bcs = 'code39', $height = 60, $text = 1) {
        $this->load->library('lms');
        echo $this->lms->barcode($product_code, $bcs, $height, $text, true,true);
    }

    function get_suggestions()
    {
        $term = $this->input->get('term', TRUE);
        if (strlen($term) < 1 || !$term) {
            die("<script type='text/javascript'>setTimeout(function(){ window.top.location.href = '" . site_url('welcome') . "'; }, 10);</script>");
        }
        $this->load->library('lms');

        $rows = $this->books_model->getProductNames($term);
        if ($rows) {
            foreach ($rows as $row) {
                $pr[] = array('id' => $row->id, 'label' => $row->book_title . " (" . $row->isbn . ")", 'code' => $row->isbn, 'name' => $row->book_title, 'price' => $row->price, 'qty' => $row->total_quantity, 'available' => $row->available);
            }
            $this->lms->send_json($pr);
        } else {
            $this->lms->send_json(array(array('id' => 0, 'label' => lang('no_match_found'), 'value' => $term)));
        }
    }

    function getBooks($format = NULL) {

        if ($format) {

            $this->db->select('isbn, (book_title) as book_title, (SELECT GROUP_CONCAT( DISTINCT authors.author_name ) FROM authors LEFT JOIN book_authors ON book_authors.author_id = authors.id WHERE book_authors.book_id =  `books`.id GROUP BY book_authors.book_id ) as authors,book_pub, price, ( SELECT GROUP_CONCAT(DISTINCT categories.category_name ) FROM categories LEFT JOIN book_categories ON book_categories.category_id = categories.id WHERE book_categories.book_id =  `books`.id GROUP BY book_categories.book_id) AS category_name, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "pending") as available, description')
                    ->from('books');

            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                }
            } else {
                redirect('panel/books');
            }

            if (!empty($data)) {
                require_once(FCPATH.'vendor/autoload.php');
              
                $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

                // $this->load->library('excel');
                // $sheet->setActiveSheetIndex(0);
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setTitle("Books Report");
                $sheet->SetCellValue('A1', "ISBN");
                $sheet->SetCellValue('B1', "Book Title");
                $sheet->SetCellValue('C1', "Authors");
                $sheet->SetCellValue('D1', "Book Publisher");
                $sheet->SetCellValue('E1', "Price");
                $sheet->SetCellValue('F1', "Categories");
                $sheet->SetCellValue('G1', "Total Quantity");
                $sheet->SetCellValue('H1', "Available");
                // $sheet->SetCellValue('I1', "Description");
                


                $row = 2;
                foreach ($data as $data_row) {
                    $sheet->SetCellValue('A' . $row, $data_row->isbn);
                    $sheet->SetCellValue('B' . $row, $data_row->book_title);
                    $sheet->SetCellValue('C' . $row, $data_row->authors);
                    $sheet->SetCellValue('D' . $row, $data_row->book_pub);
                    $sheet->SetCellValue('E' . $row, $data_row->price);
                    $sheet->SetCellValue('F' . $row, $data_row->category_name);
                    $sheet->SetCellValue('G' . $row, $data_row->total_quantity);
                    $sheet->SetCellValue('H' . $row, $data_row->available);
                    // $sheet->SetCellValue('I' . $row, $data_row->description);
                    $row++;
                }

                $sheet->getColumnDimension('A')->setWidth(15);
                $sheet->getColumnDimension('B')->setWidth(25);
                $sheet->getColumnDimension('C')->setWidth(20);
                $sheet->getColumnDimension('D')->setWidth(20);
                $sheet->getColumnDimension('E')->setWidth(10);
                $sheet->getColumnDimension('F')->setWidth(25);
                $sheet->getColumnDimension('G')->setWidth(10);
                $sheet->getColumnDimension('H')->setWidth(10);
                // $sheet->getColumnDimension('I')->setWidth(40);

                $filename = 'books_report';
                $sheet->getParent()->getDefaultStyle()->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
               
                
                if ($format == 'pdf') {
                    $styleArray = [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FFFF0000'],
                            ],
                        ],
                    ];
                    $sheet->getStyle('A0:H'.$row)->applyFromArray($styleArray);
                    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
                    header('Cache-Control: max-age=0');
                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Mpdf');
                    $writer->save('php://output');
                    exit();
                }elseif ($format == 'xls') {
                    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                    header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
                    header('Cache-Control: max-age=0');

                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
                    $writer->save('php://output');

                    exit();
                }else{
                    redirect('panel/books/');
                }

            }
                    
        }else{
            $this->load->library('datatables');
            $delete_link = "<a href='#' class='tip po ' title='<b>Delete</b>' data-content=\"<p>".lang('are_you_sure_label')."</p><a class='btn btn-danger po-delete1' id='a__$1' href='" . site_url('panel/books/delete/$1') . "'>".lang('yes_title')."</a> <button class='btn po-close'>".lang('no_title')."</button>\"  rel='popover'><i class=\"fa fa-trash-o\"></i>Delete</a>";
            $edit_link = '<li><a  href="' . site_url('panel/books/edit/$1') . '"><i class="fa fa-edit"></i>'.lang('edit_book_title').'</a></li>';
            $single_barcode = anchor('panel/books/print_barcodes/$1', '<i class="fa fa-print"></i> ' . lang('print_barcode_title'));
           


            $this->datatables
            ->select('books.id as id, image,CONCAT(book_title, "(", isbn, ")", "___", book_pub, "___", (SELECT GROUP_CONCAT( DISTINCT authors.author_name ) FROM authors LEFT JOIN book_authors ON book_authors.author_id = authors.id WHERE book_authors.book_id =  `books`.id GROUP BY book_authors.book_id )) as book_title, book_pub, price, ( SELECT GROUP_CONCAT(DISTINCT categories.category_name ) FROM categories LEFT JOIN book_categories ON book_categories.category_id = categories.id WHERE book_categories.book_id =  `books`.id GROUP BY book_categories.book_id) AS category_name, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM  borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "lost") as total_quantity, book_copies - (SELECT Count(borrowdetails.borrow_id) FROM borrowdetails WHERE books.id = borrowdetails.book_id AND borrow_status = "pending") as available, books.digital_file as digital_file')
            ->from('books');



            $this->datatables->add_column('actions', '<div class="text-center"><div class="btn-group text-left"><button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">'.lang('actions_label').' <span class="caret"></span></button>
                 <ul class="dropdown-menu pull-right" role="menu"><li>'.$delete_link.'</li><li>'.$edit_link.'</li><li>'.$single_barcode.'</li></ul></div></div>', 'id');
            $read = "<a href='".site_url('panel/books/read/$1')."' title='".'$2'."'>$2</a>";
            $this->datatables->add_column('read', $read, 'id, digital_file');

            $this->datatables->unset_column('id');
            $this->datatables->unset_column('digital_file');
            echo $this->datatables->generate();
        }
          

    }
    /* --------------------------------------------------------------------------------------------- */

   

    function view($id = NULL)
    {
        $id = $this->input->post('id');
        $pr_details = $this->books_model->findBookDetByID($id);
        echo json_encode($pr_details);
       
    }
    /* ------------------------------------------------------------------------------- */

    function delete($id = NULL)
    {

        if ($this->input->get('id')) {
            $id = $this->input->get('id');
        }

        if ($this->books_model->deleteBook($id)) {
            if($this->input->is_ajax_request()) {

                echo lang('delete_true'); die();
            }
            $this->session->set_flashdata('message',lang('delete_true'));
            redirect('books');
        }

    }

    /* ----------------------------------------------------------------------------- */

    function add($id = NULL)
    {
        $this->mPageTitle = 'Add Book';


        // $this->form_validation->set_rules();
        $this->form_validation->set_rules('isbn', 'ISBN', 'required|is_unique[books.isbn]');
        $this->form_validation->set_rules('isbn_13', 'ISBN 13', 'required');
        $this->form_validation->set_rules('book_title', 'Book Title', 'required');
        $this->form_validation->set_rules('category_id[]', 'Category', 'required');
        $this->form_validation->set_rules('author_id[]', 'Author', 'required');
        $this->form_validation->set_rules('book_copies', 'No. Of Copies', 'required');
        $this->form_validation->set_rules('book_pub', 'Book Publisher', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('copyright_year', 'Copyright Year', 'required');
        $this->form_validation->set_rules('date_receive', 'Date Recieved', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('amazon_ratings', 'Amazon Ratings', 'required');
        $this->form_validation->set_rules('goodreads_ratings', 'Goodreads Ratings', 'required');
        $this->load->library('upload');

        if ($this->form_validation->run() == true) {
            $custom_fields = $this->mSettings->books_custom_fields;
            $custom_fields = explode(',', $custom_fields);
            $cust = array();
            foreach ($_POST as $key => $var) {
                if (substr($key, 0, 5) === 'cust_' ) {
                    $array[substr($key, 5)] = $var;
                }
            }
            $cust = (json_encode($array));

            $data = array(
                'isbn' => $this->input->post('isbn'),
                'isbn_13' => $this->input->post('isbn_13'),
                'book_title' => $this->input->post('book_title'),
                'book_copies' => $this->input->post('book_copies'),
                'book_pub' => ($this->input->post('book_pub')),
                'date_added' => date("Y-m-d H:i:s"),
                'image' => 'no_image.png',
                'price' => ($this->input->post('price')),
                'copyright_year' => $this->input->post('copyright_year'),
                'date_receive' => $this->input->post('date_receive') ? $this->input->post('date_receive') : date('Y-m-d'),
                'description' => $this->input->post('description'),
                'amazon_ratings' => $this->input->post('amazon_ratings'),
                'goodreads_ratings' => $this->input->post('goodreads_ratings'),
                'custom_fields' => $cust,
            );
           

            if (isset($_FILES['book_image'])) {

                if ($_FILES['book_image']['size'] > 0) {
                    $config['upload_path'] = $this->upload_path;
                    $config['allowed_types'] = $this->image_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['max_filename'] = 25;
                    $config['encrypt_name'] = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('book_image')) {

                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("panel/books/add");
                    }else{
                        $photo = $this->upload->file_name;
                        $data['image'] = $photo;
                        $config = NULL;

                    }
                    
                }
            }
            if (isset($_FILES['digital_file'])) {
                if ($_FILES['digital_file']['size'] > 0) {

                    $config['upload_path'] = $this->digital_upload_path;
                    $config['allowed_types'] = $this->digital_file_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['max_filename'] = 25;
                    $config['encrypt_name'] = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('digital_file')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("panel/books/add");
                    }

                    echo $digital_file = $this->upload->file_name;
                    $data['digital_file'] = $digital_file;
                    
                    $config = NULL;
                }
            }
            if ($_POST['category_id']) {
                $a = sizeof($_POST['category_id']);
                for ($r = 0; $r <= $a; $r++) {
                    if (isset($_POST['category_id'][$r])) {
                        if ($book_cat_func = $this->books_model->getBookCatByPIDandName($id, trim($_POST['category_id'][$r]))) {
                            $this->form_validation->set_message('required', "Author Already exists: ".' ('.$_POST['category_id'][$r].')');
                            $this->form_validation->set_rules('new_product_variant', "New Book Author", 'required');
                        } else {
                            $book_categories[] = array(
                                'category_id' => $_POST['category_id'][$r],
                            );
                        }
                    }
                }

            } else {
                $book_categories = NULL;
            }
            if ($_POST['author_id']) {
                $a = sizeof($_POST['author_id']);
                for ($r = 0; $r <= $a; $r++) {
                    if (isset($_POST['author_id'][$r])) {
                        if ($book_author_func = $this->books_model->getBookAuthorsByPIDandName($id, trim($_POST['author_id'][$r]))) {
                            $this->form_validation->set_message('required', "Author Already exists: ".' ('.$_POST['author_id'][$r].')');
                            $this->form_validation->set_rules('new_product_variant', "New Book Author", 'required');
                        } else {
                            $book_authors[] = array(
                                'author_id' => $_POST['author_id'][$r],
                            );
                        }
                    }
                }

            } else {
                $book_authors = NULL;
            }
        }

            
       
        
        if (($this->form_validation->run() == TRUE)) {
            if (($this->books_model->insert_book($data, $book_categories, $book_authors)) == FALSE) {
                $this->session->set_flashdata('error', lang('book_add_false'));
                redirect('panel/books');
            }else{
                $this->session->set_flashdata('message', lang('book_add_true'));
                redirect('panel/books');
            }
            
        }else {
            // $this->session->set_flashdata('message', "ERROR");
            $this->data['categories'] = $this->books_model->getAllCategories();
            $this->data['authors'] = $this->books_model->getAllAuthors();

            
            $this->render('books/add');
        }
    }
    /* ----------------------------------------------------------------------------- */

    function edit($id = NULL)
    {
        if (empty($id)) {
            redirect('panel/books');
        }
        $book = $this->books_model->getBookDetByID($id);
        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('isbn_13', 'ISBN 13', 'required');
        $this->form_validation->set_rules('book_title', 'Book Title', 'required');
        $this->form_validation->set_rules('category_id[]', 'Category', 'required');
        $this->form_validation->set_rules('author_id[]', 'Author', 'required');
        $this->form_validation->set_rules('book_copies', 'No. Of Copies', 'required');
        $this->form_validation->set_rules('book_pub', 'Book Publisher', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('copyright_year', 'Copyright Year', 'required');
        $this->form_validation->set_rules('date_receive', 'Date Recieved', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('amazon_ratings', 'Amazon Ratings', 'required');
        $this->form_validation->set_rules('goodreads_ratings', 'Goodreads_ratings', 'required');
        $this->load->library('upload');
        if ($book->isbn !== $this->input->post('isbn')) {
            $this->form_validation->set_rules('isbn', 'ISBN', 'required|is_unique[books.isbn]');
        }

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('book_id');

            $custom_fields = $this->mSettings->books_custom_fields;
            $custom_fields = explode(',', $custom_fields);
            $cust = array();
            foreach ($_POST as $key => $var) {
                if (substr($key, 0, 5) === 'cust_' ) {
                    $array[substr($key, 5)] = $var;
                }
            }
            $cust = (json_encode($array));

            $data = array(
                'isbn' => $this->input->post('isbn'),
                'isbn_13' => $this->input->post('isbn_13'),
                'book_title' => $this->input->post('book_title'),
                'book_copies' => $this->input->post('book_copies'),
                'book_pub' => ($this->input->post('book_pub')),
                'date_added' => date("Y-m-d H:i:s"),
                'price' => ($this->input->post('price')),
                'copyright_year' => $this->input->post('copyright_year'),
                'date_receive' => $this->input->post('date_receive') ? $this->input->post('date_receive') : date('Y-m-d'),
                'description' => $this->input->post('description'),
                'amazon_ratings' => $this->input->post('amazon_ratings'),
                'goodreads_ratings' => $this->input->post('goodreads_ratings'),
                'custom_fields' => ($cust),
            );

            if (isset($_FILES['book_image'])) {

                if ($_FILES['book_image']['size'] > 0) {
                    $config['upload_path'] = $this->upload_path;
                    $config['allowed_types'] = $this->image_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['max_filename'] = 25;
                    $config['encrypt_name'] = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('book_image')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("panel/books/edit/".$id);
                    }else{
                        $photo = $this->upload->file_name;
                        $data['image'] = $photo;
                        $config = NULL;
                    }
                    
                }
            }

            if (isset($_FILES['digital_file'])) {
                if ($_FILES['digital_file']['size'] > 0) {

                    $config['upload_path'] = $this->digital_upload_path;
                    $config['allowed_types'] = $this->digital_file_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['max_filename'] = 25;
                    $config['encrypt_name'] = TRUE;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('digital_file')) {
                        redirect("panel/books/edit/".$id);
                    }

                    $digital_file = $this->upload->file_name;
                    $data['digital_file'] = $digital_file;
                    $config = NULL;
                }
            }
            if ($_POST['category_id']) {
                $a = sizeof($_POST['category_id']);
                if($this->books_model->delete_categories($id)){
                    for ($r = 0; $r <= $a; $r++) {
                        if (isset($_POST['category_id'][$r])) {
                            if ($book_cat_func = $this->books_model->getBookCatByPIDandName($id, trim($_POST['category_id'][$r]))) {
                                unset($_POST['category_id'][$r]);
                            } else {
                                $book_categories[] = array(
                                    'category_id' => $_POST['category_id'][$r],
                                );
                            }
                        }
                    }
                }

            } else {
                $book_categories = NULL;
            }
            if ($_POST['author_id']) {
                $a = sizeof($_POST['author_id']);
                if($this->books_model->delete_authors($id)){

                    for ($r = 0; $r <= $a; $r++) {
                        if (isset($_POST['author_id'][$r])) {

                            if ($book_author_func = $this->books_model->getBookAuthorsByPIDandName($id, trim($_POST['author_id'][$r]))) {
                                    print_r($_POST['author_id'][$r]);
                                    echo "\n";
                                    
                            } else {
                                $book_authors[] = array(
                                    'author_id' => $_POST['author_id'][$r],
                                );
                            }
                        }
                    }
                }
            } else {
                $book_authors = NULL;
            }
        }


            
       
        
        if (($this->form_validation->run() == TRUE)) {
            if ($this->books_model->update_book($id, $data, $book_categories, $book_authors)) {
                $this->session->set_flashdata('message',lang('book_edit_true'));
                redirect('panel/books');
            }else{
                $this->session->set_flashdata('error', lang('book_edit_false_er'));
                redirect('panel/books');
            }
           
        } else {

            $this->data['categories'] = $this->books_model->getAllCategories();
            $this->data['authors'] = $this->books_model->getAllAuthors();
            $this->data['book_details'] = $book;
            $this->mPageTitle = "Edit: ".$book->book_title;

            $this->render('books/edit');
        }
    }


    public function getBookDetails($isbnnumber = NULL){

      

        //the api key can be obtained from google developers console

        define("API_KEY","AIzaSyBWoCaww-UoB3VbN4QeCV2ESqqD5sD8PTA");
        define("URL", "https://www.googleapis.com/books/v1/volumes?q=isbn:");
        $details=array();
        $imageAvailable = false;
        $image="img/125x125.jpg";
        $error="";
        $description=base64_encode("No description available");
        $publisher="No publisher available";
        $isbn=trim($isbnnumber);
        if(!isset($isbn)||$isbn =="")
          {
            $error="Please enter the 10 or 13 digit ISBN number located at the back of the book";
            $valid = false;
          }
          else
          {
            $isbn= str_replace('-', '', $isbn); 
            if(!is_numeric($isbn))
            {
              $error="ISBN number should be numeric. You entered ".$isbn." is not numeric";
              $valid = false;
            }  
            elseif(strlen($isbn)==13 && $isbn[0]!='9')
            {
              $error="ISBN should start with 978..Please review the ISBN entered and try again..";
              $valid = false;
            }  
            elseif (!(strlen($isbn)==10 || strlen($isbn)==13))
            {
               $error="ISBN should be atleast 10 or 13 digits...You entered only ".strlen($isbn)." digits";
               $valid= false;
            }  
              
          }
         
          if(strlen($error)=="")
          {
            $url=URL.$isbn;
            
            $bookDetails = @file_get_contents($url);
            $bookDetailsArray=json_decode($bookDetails, true);
            $totalItem=$bookDetailsArray['totalItems'];
           // print_r($bookDetailsArray);
            
            
            
            if($totalItem==1)
            {
              if(array_key_exists('imageLinks',$bookDetailsArray['items'][0]['volumeInfo'] ))$imageAvailable=true;
              $title=  $bookDetailsArray['items'][0]['volumeInfo']['title'];
              $authors=  @implode(",", $bookDetailsArray['items'][0]['volumeInfo']['authors']);    

              if($imageAvailable)
              {
                $image=$bookDetailsArray['items'][0]['volumeInfo']['imageLinks']['smallThumbnail'];
                
                $description=$bookDetailsArray['items'][0]['volumeInfo']['description'];
                if(isset($bookDetailsArray['items'][0]['volumeInfo']['publisher'])){
                    $publisher=$bookDetailsArray['items'][0]['volumeInfo']['publisher'];
                }
              }
              $publishedDate=$bookDetailsArray['items'][0]['volumeInfo']['publishedDate'];  
              $identifier=$bookDetailsArray['items'][0]['volumeInfo']['industryIdentifiers'][1]['identifier'];
              $identifierTen=$bookDetailsArray['items'][0]['volumeInfo']['industryIdentifiers'][0]['identifier'];
                // $categories=@implode(",",$bookDetailsArray['items'][0]['volumeInfo']['categories']);
                // Categories Add in DB and Return IDs
                $cat_arr = array();
                if(isset($bookDetailsArray['items'][0]['volumeInfo']['categories'])){
                foreach ($bookDetailsArray['items'][0]['volumeInfo']['categories'] as $value) {
                    $result = ($this->books_model->batchAddCat($value));
                    $cat_array = json_decode(json_encode($result), True);
                    $cat_arr[] = $cat_array['id'];
                }
                
                }
                $cat_arr = implode(',', $cat_arr);

                // Authors Add in DB and Return IDs
                $aut_arr = array();
                foreach ($bookDetailsArray['items'][0]['volumeInfo']['authors'] as $value) {
                    $result = ($this->books_model->batchAddAuthors($value));
                    $aut_array = json_decode(json_encode($result), True);
                    $aut_arr[] = $aut_array['id'];
                }
                $aut_arr = implode(',', $aut_arr);


                $details['category_name'] = $cat_arr;
                $details['author_name'] = $aut_arr;
                $details['book_title'] = $title;
                $details['image'] = $image;
                $details['description'] = $description;
                $details['book_pub'] = $publisher;
                $details['isbn_13'] = $identifier;
                $details['isbn'] = $identifierTen;
                $details['copyright_year'] = $publishedDate;
                  
                $valid = true;
            }
            else
            {
              $error="No book found for entered ISBN";
              $valid = false;
            }
          }
            $this->data['categories'] = $this->books_model->getAllCategories();
            $this->data['authors'] = $this->books_model->getAllAuthors();
            $this->data['book_details'] = $details;

            $this->mPageTitle = "Add Book";

            
            $this->render('books/edit');
    }



    /* ----------------------------------------------------------------------------- */
    /* --------------------------------- Categories ----------------------------------- */
    /* ----------------------------------------------------------------------------- */

    public function categories(){
        
        $this->data['categories'] = $this->books_model->getAllCategories();
        $this->render('books/categories');
    }
    public function getCategories($value='')
    {
        $this->load->library('datatables');
        $edit_link = '<a href="'.base_url().'panel/books/editCatModal/$1" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a> ';
        $delete_link = '<a class="btn btn-sm btn-danger" href="'.base_url().'panel/books/delCategory/$1"><i class="fa fa-trash-o"></i></a> ';
        $print_link = '<a class="btn btn-sm btn-default" href="'.base_url().'panel/books/print_barcodes/?category=$1"><i class="fa fa-print"></i></a> ';

        $this->datatables
            ->select('id, category_name')
            ->from('categories');

        $this->datatables->add_column('actions', $edit_link.$print_link.$delete_link, 'id');
        echo $this->datatables->generate();
    }
    public function delCategory($id){
        if ($id == NULL) {
            redirect('panel/books/categories');
        }
        if ($this->books_model->deleteCategory($id) == TRUE) {
            $this->session->set_flashdata('message',lang('delete_cat_success'));
            redirect('panel/books/categories');
        }else{
            $this->session->set_flashdata('error',lang('delete_cat_error'));
            redirect('panel/books/categories');
        }
    }

    public function editCatModal($id = NULL){
        if (!empty($id)) {
                $data['return_data'] = $this->books_model->getCategoryByID($id);
                $this->load->view('books/category_modal', $data);
        }else{
            redirect('panel/books/');
        }
    }
    public function edit_category(){
        
        $this->form_validation->set_rules('category', lang('categories_name_label'), 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error',lang('error_sarcast'));
            redirect('panel/books/categories');
        }
        else
        {
            $data = array();
            $data['category_name'] = $_POST['category'];
            if ($this->books_model->updateCategory($_POST['id'], $data)) {
                $this->session->set_flashdata('message',lang('edit_cat_success'));
                redirect('panel/books/categories');
            }else{
                $this->session->set_flashdata('error',lang('edit_cat_error'));
                redirect('panel/books/categories');
            }
        }
        
    }
    public function add_category(){
        $this->form_validation->set_rules('category', lang('categories_name_label'), 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error',lang('error_sarcast'));
            redirect('panel/books/categories');
        }
        else
        {
            if ($this->books_model->addCat($this->input->post('category'))) {
                $this->session->set_flashdata('message',lang('add_cat_success'));
                redirect('panel/books/categories');
            }else{
                $this->session->set_flashdata('error',lang('add_cat_error'));
                redirect('panel/books/categories');
            }
        }
    }    
    /* ----------------------------------------------------------------------------- */
    /* --------------------------------- Authors ----------------------------------- */
    /* ----------------------------------------------------------------------------- */

    public function authors(){
        $this->data['authors'] = $this->books_model->getAllAuthors();
        $this->render('books/authors');
    }
    public function getAuthors($value='')
    {
        $this->load->library('datatables');
        $edit_link = '<a href="'.base_url().'panel/books/editAuthorModal/$1" data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a> ';
        $delete_link = '<a class="btn btn-sm btn-danger" href="'.base_url().'panel/books/delAuthor/$1"><i class="fa fa-trash-o"></i></a> ';
        $print_link = '<a class="btn btn-sm btn-default" href="'.base_url().'panel/books/print_barcodes/?authors=$1"><i class="fa fa-print"></i></a> ';

        $this->datatables
        ->select('id, author_name')
        ->from('authors');

        $this->datatables->add_column('actions', $edit_link.$print_link.$delete_link, 'id');
        echo $this->datatables->generate();
    }
    public function delAuthor($id){
        if ($id == NULL) {
            redirect('panel/books/categories');
        }
        if ($this->books_model->deleteAuthor($id) == TRUE) {
            $this->session->set_flashdata('message',lang('delete_author_success'));
            redirect('panel/books/authors');
        }else{
            $this->session->set_flashdata('error',lang('delete_author_error'));
            redirect('panel/books/authors');
        }
    }

    public function editAuthorModal($id = NULL){
        if (!empty($id)) {
                $data['return_data'] = $this->books_model->getAuthorByID($id);
                $this->load->view('books/author_modal', $data);
        }else{
            redirect('panel/books/');
        }
    }
    public function edit_author(){

        $this->form_validation->set_rules('author', lang('authors_name_label'), 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error',lang('error_sarcast'));
            redirect('panel/books/authors');
        }
        else
        {
            $data = array();
            $data['author_name'] = $this->input->post('author');
            if ($this->books_model->updateAuthor($this->input->post('author_id'), $data)) {
                $this->session->set_flashdata('message',lang('edit_author_success'));
                redirect('panel/books/authors');
            }else{
                $this->session->set_flashdata('error',lang('edit_author_error'));
                redirect('panel/books/authors');
            }
        }


        
    }
    public function add_author(){
        $this->form_validation->set_rules('author', lang('authors_name_label'), 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error',lang('error_sarcast'));
            redirect('panel/books/authors');
        }
        else
        {
            if ($this->books_model->addAuthor($this->input->post('author'))) {
                $this->session->set_flashdata('message',lang('add_author_success'));
                redirect('panel/books/authors');
            }else{
                $this->session->set_flashdata('error',lang('add_author_error'));
                redirect('panel/books/authors');
            }
        }
    }


 /* ---------------------------------------------------------------- */

    function import_csv()
    {
        $books_add = FALSE;

        $this->load->helper('security');
        $this->form_validation->set_rules('userfile', lang("upload_file"), 'xss_clean');

        if ($this->form_validation->run() == true) {

            if (isset($_FILES["userfile"])) {

                $this->load->library('upload');

                $config['upload_path'] = $this->digital_upload_path;
                $config['allowed_types'] = 'csv';
                $config['max_size'] = $this->allowed_file_size;
                $config['overwrite'] = TRUE;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload()) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("panel/books/import_csv");
                }

                $csv = $this->upload->file_name;

                $arrResult = array();
                $handle = fopen($this->digital_upload_path . $csv, "r");
                if ($handle) {
                    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
                        $arrResult[] = $row;
                    }
                    fclose($handle);
                }
                $titles = array_shift($arrResult);

                $keys = array('isbn', 'book_title', 'book_copies', 'book_pub', 'digital_file', 'isbn_13', 'price', 'copyright_year', 'date_receive', 'description', 'categories', 'authors');

                $final = array();
               
                if (count($arrResult) > 0 && count($keys) == count($arrResult[0])) {
                        foreach ($arrResult as $key => $value) {
                            $final[] = array_combine($keys, $value);
                        }
                } else {
                    $this->session->set_flashdata('error', lang('csv_format_error'));
                    redirect('panel/books/import_csv');
                }
                
                
                $rw = 2;
                foreach ($final as $csv_pr) {
                    if (!$this->books_model->getBookDetByISBN(trim($csv_pr['isbn']))) {
                        $bk_isbn[] = trim($csv_pr['isbn']);
                        $bk_book_title[] = trim($csv_pr['book_title']);
                        $bk_book_copies[] = trim($csv_pr['book_copies']);
                        $bk_book_pub[] = trim($csv_pr['book_pub']);
                        $bk_digital_file[] = trim($csv_pr['digital_file']);
                        $bk_isbn_13[] = trim($csv_pr['isbn_13']);
                        $bk_price[] = trim($csv_pr['price']);
                        $bk_copyright_year[] = trim($csv_pr['copyright_year']);
                        $bk_date_receive[] = trim($csv_pr['date_receive']);
                        $bk_description[] = trim($csv_pr['description']);
                        $bk_categories[] = trim($csv_pr['categories']);
                        $bk_authors[] = trim($csv_pr['authors']);
                        $books_add = TRUE;
                    }
                    $rw++;
                }

                if ($books_add) {
                    if ($bk_categories) {
                        $a = sizeof($bk_categories);
                        for ($r = 0; $r < $a; $r++) {
                            $bk_categories_id[] = explode('|', $bk_categories[$r]);

                            foreach ($bk_categories_id[$r] as $key => $value) {
                                $bk_categories_id[$r][$key] = ($this->books_model->batchAddCat($value)->id);
                            }
                        }
                    } 
                    if ($bk_categories_id) {
                        $a = sizeof($bk_categories_id);
                        for ($r = 0; $r < $a; $r++) {
                            $bk_categories_id[$r] = implode('|', $bk_categories_id[$r]);

                        }
                    } 
                   
                   if ($bk_authors) {
                        $a = sizeof($bk_authors);
                        for ($r = 0; $r < $a; $r++) {
                            $bk_authors_id[] = explode('|', $bk_authors[$r]);

                            foreach ($bk_authors_id[$r] as $key => $value) {
                                $bk_authors_id[$r][$key] = ($this->books_model->batchAddAuthors($value)->id);
                            }
                        }
                    } 
                    if ($bk_authors_id) {
                        $a = sizeof($bk_authors_id);
                        for ($r = 0; $r < $a; $r++) {
                            $bk_authors_id[$r] = implode('|', $bk_authors_id[$r]);

                        }
                    } 
                      
                    $ikeys = array('isbn', 'book_title', 'book_copies', 'book_pub', 'digital_file', 'isbn_13', 'price', 'copyright_year', 'date_receive', 'description', 'categories', 'authors');
               

                    $items = array();
                    foreach (array_map(null, $bk_isbn, $bk_book_title, $bk_book_copies, $bk_book_pub, $bk_digital_file, $bk_isbn_13, $bk_price, $bk_copyright_year, $bk_date_receive, $bk_description, $bk_categories_id, $bk_authors_id) as $ikey => $value) {
                        $items[] = array_combine($ikeys, $value);
                    }
                }
      

            }
            
          
        }

        if ($this->form_validation->run() == true) {
            if ($books_add && $this->books_model->add_books($items)) {
                $this->session->set_flashdata('message', "Books Added Successfully");
                redirect('panel/books');
            }else{
                $this->session->set_flashdata('error', "Error Adding Books");
                redirect('panel/books');
            }
            

        } else {

            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['userfile'] = array('name' => 'userfile',
                'id' => 'userfile',
                'type' => 'text',
                'value' => $this->form_validation->set_value('userfile')
            );

            
            $this->render('books/import_csv');

        }
    }

    /* ------------------------------------------------------------------ */


    function import_categories()
    {

        $this->load->helper('security');
        $this->form_validation->set_rules('userfile', lang("upload_file"), 'xss_clean');

        if ($this->form_validation->run() == true) {

            if (isset($_FILES["userfile"])) {

                $this->load->library('upload');
                $config['upload_path'] = 'files/';
                $config['allowed_types'] = 'csv';
                $config['max_size'] = '1024';
                $config['overwrite'] = TRUE;
                $this->upload->initialize($config);

                if (!$this->upload->do_upload()) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("panel/books/categories");
                }

                $csv = $this->upload->file_name;

                $arrResult = array();
                $handle = fopen('files/' . $csv, "r");
                if ($handle) {
                    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
                        $arrResult[] = $row;
                    }
                    fclose($handle);
                }
                $titles = array_shift($arrResult);
                $keys = array('category_name');
                $final = array();
                if (count($arrResult) > 0 && count($keys) == count($arrResult[0])) {
                        foreach ($arrResult as $key => $value) {
                            $final[] = array_combine($keys, $value);
                        }
                } else {
                    $this->session->set_flashdata('error', lang('csv_format_error'));
                    redirect('panel/books/categories');
                }
                

                foreach ($final as $csv_ct) {
                    if ( ! $this->books_model->getCategoryByName(trim($csv_ct['category_name']))) {
                        $data[] = array(
                            'category_name' => trim($csv_ct['category_name']),
                        );
                    }
                }
            }
        }

        if ($this->form_validation->run() == true && $this->books_model->addCategories($data)) {
            $this->session->set_flashdata('message', lang("categories_added"));
            redirect('panel/books/categories');
        } else {
            redirect('panel/books/categories');
        }
    }

    function import_authors()
    {

        $this->load->helper('security');
        $this->form_validation->set_rules('userfile', lang("upload_file"), 'xss_clean');

        if ($this->form_validation->run() == true) {

            if (isset($_FILES["userfile"])) {

                $this->load->library('upload');
                $config['upload_path'] = 'files/';
                $config['allowed_types'] = 'csv';
                $config['max_size'] = '1024';
                $config['overwrite'] = TRUE;
                $this->upload->initialize($config);

                if (!$this->upload->do_upload()) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("panel/books/authors");
                }

                $csv = $this->upload->file_name;

                $arrResult = array();
                $handle = fopen('files/' . $csv, "r");
                if ($handle) {
                    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
                        $arrResult[] = $row;
                    }
                    fclose($handle);
                }
                $titles = array_shift($arrResult);
                $keys = array('author_name');
                $final = array();
                
                if (count($arrResult) > 0 && count($keys) == count($arrResult[0])) {
                        foreach ($arrResult as $key => $value) {
                            $final[] = array_combine($keys, $value);
                        }
                } else {
                    $this->session->set_flashdata('error', lang('csv_format_error'));
                    redirect('panel/books/authors');
                }


                foreach ($final as $csv_ct) {
                    if (!$this->books_model->getAuthorByName(trim($csv_ct['author_name']))) {
                        $data[] = array(
                            'author_name' => trim($csv_ct['author_name']),
                        );
                    }
                }
            }
        }

        if ($this->form_validation->run() == true && $this->books_model->addAuthors($data)) {
            $this->session->set_flashdata('message', lang("authors_added"));
            redirect('panel/books/authors');
        } else {
            redirect('panel/books/authors');
        }
    }
    
    function export_category($format = NULL) {

        if ($format) {
            $this->db->select('id, category_name')
                    ->from('categories');

            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                }
            } else {
                redirect('panel/books/categories');
            }

            if (!empty($data)) {

                // $this->load->library('excel');
                // $sheet->setActiveSheetIndex(0);
                require_once(FCPATH.'vendor/autoload.php');
              
                $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

                // $this->load->library('excel');
                // $sheet->setActiveSheetIndex(0);
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setTitle("Books Report");
                $sheet->SetCellValue('A1', "ID");
                $sheet->SetCellValue('B1', "Category Name");
                


                $row = 2;
                $count = 1;
                foreach ($data as $data_row) {
                    $sheet->SetCellValue('A' . $row, $count);
                    $sheet->SetCellValue('B' . $row, $data_row->category_name);
                    $row++;
                    $count++;
                }

                $sheet->getColumnDimension('A')->setWidth(15);
                $sheet->getColumnDimension('B')->setWidth(25);
                

                $filename = 'categories';
                $sheet->getParent()->getDefaultStyle()->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                if ($format == 'pdf') {
                    $styleArray = [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FFFF0000'],
                            ],
                        ],
                    ];
                    $sheet->getStyle('A0:B'.$row)->applyFromArray($styleArray);
                    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
                    header('Cache-Control: max-age=0');
                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Mpdf');
                    $writer->save('php://output');
                    exit();
                }elseif ($format == 'xls') {
                    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                    header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
                    header('Cache-Control: max-age=0');

                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
                    $writer->save('php://output');

                    exit();
                }else{
                    redirect('panel/books/');
                }



            }
                    
        }

    }
    function export_authors($format = NULL) {
        if ($format) {
            $this->db->select('id, author_name')
                    ->from('authors');

            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                }
            } else {
                redirect('panel/books/authors');
            }

            if (!empty($data)) {

                // $this->load->library('excel');
                // $sheet->setActiveSheetIndex(0);
                require_once(FCPATH.'vendor/autoload.php');
              
                $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

                // $this->load->library('excel');
                // $sheet->setActiveSheetIndex(0);
                $sheet = $spreadsheet->getActiveSheet();

                $sheet->setTitle("Books Report");
                $sheet->SetCellValue('A1', "ID");
                $sheet->SetCellValue('B1', "Author Name");
                


                $row = 2;
                $count = 1;
                foreach ($data as $data_row) {
                    $sheet->SetCellValue('A' . $row, $count);
                    $sheet->SetCellValue('B' . $row, $data_row->author_name);
                    $row++;
                    $count++;
                }

                $sheet->getColumnDimension('A')->setWidth(15);
                $sheet->getColumnDimension('B')->setWidth(25);
                

                $filename = 'authors';
                $sheet->getParent()->getDefaultStyle()->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
                if ($format == 'pdf') {
                    $styleArray = [
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FFFF0000'],
                            ],
                        ],
                    ];
                    $sheet->getStyle('A0:B'.$row)->applyFromArray($styleArray);
                    $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                    header('Content-Type: application/pdf');
                    header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
                    header('Cache-Control: max-age=0');
                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Mpdf');
                    $writer->save('php://output');
                    exit();
                }elseif ($format == 'xls') {
                    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                    header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
                    header('Cache-Control: max-age=0');

                    $writer = PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
                    $writer->save('php://output');

                    exit();
                }else{
                    redirect('panel/books/');
                }

            }
                    
        }

    }

}

