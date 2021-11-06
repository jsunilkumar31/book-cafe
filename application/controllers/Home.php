<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");
    }

    public function index()
    {
        $this->mPageTitle = lang('book_total_label');

        $author_id = ($this->input->get('authors')) ? $this->input->get('authors') : null;
        $book_title = ($this->input->get('book_title')) ? $this->input->get('book_title') : null;
        $category_id = ($this->input->get('categories')) ? $this->input->get('categories') : null;

        $config = array();

        //pagination settings
        $config['base_url'] = base_url('home/index/page');

        $config['total_rows'] = $this->home_model->record_count($category_id, $author_id, $book_title);
        $config['per_page'] = $this->mSettings->front_per_page;
        $config["uri_segment"] = 4;
        $config["num_links"] = 2;
        
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['use_page_numbers'] = TRUE;
        $config['last_link'] = '&raquo&raquo';
        $config['first_link'] = '&laquo&laquo';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["books"] = $this->home_model->getBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        $this->data["links"] = $this->pagination->create_links();
        $this->data["categories"] = $this->home_model->getAllCategories();
        
        $this->data["authors"] = $this->home_model->getAllAuthors();

        $this->data['user'] = $this->mUser;
        $this->data['body_class'] = $this->mBodyClass;
        $this->data['menu'] = $this->mMenu;
        $this->data['current_uri'] = empty($this->mModule) ? uri_string() : str_replace($this->mModule . '/', '', uri_string());
        
        if(isset($category_id) && $category_id != 0){
            $this->data['category_name'] = $this->home_model->getCategoryByID($category_id);
        
        $this->data['category_name'] = $this->data['category_name']->category_name;
        }
        
        
        /*echo '<pre>';
        var_export($category_id);
        die;*/
        // automatically generate page title
        if (empty($this->mPageTitle)) {
            if ($this->mAction == 'index') {
                $this->mPageTitle = humanize($this->mCtrler);
            } else {
                $this->mPageTitle = humanize($this->mAction);
            }

        }
        
        $this->data['page_title'] = $this->mPageTitle;
        $this->data['ctrler'] = $this->mCtrler;
        $this->data['action'] = $this->mAction;
        $this->data['page_title'] = $this->mPageTitle;

        $this->data['page_auth'] = $this->mPageAuth;

        $this->data['read_book'] = '';
        /*if ($login) {
            $this->data['body_class'] = 'hold-transition login-page';
        }*/

        $this->load->view('template_morden/header', $this->data);
        // $this->load->view('template_morden/navigation', $this->data);
        $this->load->view('home_morden', $this->data);
        $this->load->view('template_morden/footer', $this->data);

    }
    // sunil added code
    public function searchList(){
        $postData = $this->input->post();
        $data = $this->home_model->getSearchResults($postData);
    
        echo json_encode($data);
      }
     // sunil added code
    public function old()
    {
        $this->mPageTitle = lang('book_total_label');

        $author_id = ($this->input->get('authors')) ? $this->input->get('authors') : null;
        $book_title = ($this->input->get('book_title')) ? $this->input->get('book_title') : null;
        $category_id = ($this->input->get('categories')) ? $this->input->get('categories') : null;

        $config = array();

        //pagination settings
        $config['base_url'] = base_url('home/old/page');

        $config['total_rows'] = $this->home_model->record_count($category_id, $author_id, $book_title);
        $config['per_page'] = $this->mSettings->front_per_page;
        $config["uri_segment"] = 4;
        $config["num_links"] = 2;
        

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        // $config['use_page_numbers'] = TRUE;
        $config['last_link'] = '&raquo&raquo';
        $config['first_link'] = '&laquo&laquo';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["books"] = $this->home_model->getBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        $this->data["links"] = $this->pagination->create_links();
        $this->data["categories"] = $this->home_model->getAllCategories();
        
        $this->data["authors"] = $this->home_model->getAllAuthors();

        $this->data['user'] = $this->mUser;
        $this->data['body_class'] = $this->mBodyClass;
        $this->data['menu'] = $this->mMenu;
        $this->data['current_uri'] = empty($this->mModule) ? uri_string() : str_replace($this->mModule . '/', '', uri_string());
        
        if(isset($category_id) && $category_id != 0){
            $this->data['category_name'] = $this->home_model->getCategoryByID($category_id);
        
        $this->data['category_name'] = $this->data['category_name']->category_name;
        }
        
        
        /*echo '<pre>';
        var_export($category_id);
        die;*/
        // automatically generate page title
        if (empty($this->mPageTitle)) {
            if ($this->mAction == 'index') {
                $this->mPageTitle = humanize($this->mCtrler);
            } else {
                $this->mPageTitle = humanize($this->mAction);
            }

        }
        
        $this->data['page_title'] = $this->mPageTitle;
        $this->data['ctrler'] = $this->mCtrler;
        $this->data['action'] = $this->mAction;
        $this->data['page_title'] = $this->mPageTitle;

        $this->data['page_auth'] = $this->mPageAuth;

        /*if ($login) {
            $this->data['body_class'] = 'hold-transition login-page';
        }*/

        $this->load->view('template/header', $this->data);
        $this->load->view('template/navigation', $this->data);
        $this->load->view('home', $this->data);
        $this->load->view('template/footer', $this->data);

    }
    
    public function category() {
        $this->mPageTitle = lang('book_total_label');

        $author_id = ($this->input->get('authors')) ? $this->input->get('authors') : null;
        $book_title = ($this->input->get('book_title')) ? $this->input->get('book_title') : null;
        $category_id = $this->uri->segment(2);//($this->input->get('categories')) ? $this->input->get('categories') : null;

        //var_export($category_id);die;
        
        //var_export($this->uri->segment(4));die;
        
        $config = array();

        //pagination settings
        $config['base_url'] = base_url('/category/'.$category_id.'/page');

        $config['total_rows'] = $this->home_model->record_count($category_id, $author_id, $book_title);
        $config['per_page'] = $this->mSettings->front_per_page;
        $config["uri_segment"] = 4;
        $config["num_links"] = 2;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination justify-content-end">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = true;
        $config['last_link'] = true;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['use_page_numbers'] = TRUE;
        $config['last_link'] = '&raquo&raquo';
        $config['first_link'] = '&laquo&laquo';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        
        $this->data["books"] = $this->home_model->getBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        $this->data["links"] = $this->pagination->create_links();
        $this->data["categories"] = $this->home_model->getAllCategories();
        
        $this->data["authors"] = $this->home_model->getAllAuthors();

        $this->data['user'] = $this->mUser;
        $this->data['body_class'] = $this->mBodyClass;
        $this->data['menu'] = $this->mMenu;
        $this->data['current_uri'] = empty($this->mModule) ? uri_string() : str_replace($this->mModule . '/', '', uri_string());
        
        if(isset($category_id) && $category_id != 0){
            $this->data['category_name'] = $this->home_model->getCategoryByID($category_id);
        
        $this->data['category_name'] = $this->data['category_name']->category_name;
        }
        
        
        /*echo '<pre>';
        var_export();
        die;*/
        // automatically generate page title
        if (empty($this->mPageTitle)) {
            if ($this->mAction == 'index') {
                $this->mPageTitle = humanize($this->mCtrler);
            } else {
                $this->mPageTitle = humanize($this->mAction);
            }

        }
        
        $this->data['page_title'] = $this->mPageTitle;
        $this->data['ctrler'] = $this->mCtrler;
        $this->data['action'] = $this->mAction;
        $this->data['page_title'] = $this->mPageTitle;

        $this->data['page_auth'] = $this->mPageAuth;

        /*if ($login) {
            $this->data['body_class'] = 'hold-transition login-page';
        }*/

        $this->load->view('template_morden/header', $this->data);
        //$this->load->view('template_morden/navigation', $this->data);
        $this->load->view('home_morden', $this->data);
        $this->load->view('template_morden/footer', $this->data);
    }

    public function searchAuthors()
    {
        $data = array();
        $term = $this->input->get('search');
        $q = $this->db->like('author_name', $term)->get('authors');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $author) {
                array_push($data, array(
                    'id' => $author->id,
                    'text' => utf8_encode($author->author_name),
                ));
            }
        } else {
            show_404();
            array_push($data, array(
                'id' => 0,
                'text' => utf8_encode('Not found....'),
            ));
        }
        $this->lms->send_json(array('results' => $data));
    }

    public function searchCategories()
    {
        $data = array();
        $term = $this->input->get('search');
        $q = $this->db->like('category_name', $term)->get('categories');
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $category) {
                array_push($data, array(
                    'id' => $category->id,
                    'text' => utf8_encode($category->category_name),
                ));
            }
        } else {
            show_404();
            array_push($data, array(
                'id' => 0,
                'text' => utf8_encode('Not found....'),
            ));
        }
        $this->lms->send_json(array('results' => $data));
    }

}
