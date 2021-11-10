<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Search_by_author extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");
    }

	public function index()
	{
        
		$this->mPageTitle = lang('about');
        
        
        $author_id = ($this->input->post('author_name')) ? $this->input->post('author_name') : null;
        $book_title = ($this->input->get('book_title')) ? $this->input->get('book_title') : null;
        $category_id = ($this->input->get('categories')) ? $this->input->get('categories') : null;
		$config = array();
        
        //pagination settings
        $config['base_url'] = base_url('Search_by_author/page');
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
        $this->data['read_book'] = '';
		$this->data['user'] = $this->mUser;
        $this->data['body_class'] = $this->mBodyClass;
        $this->data['menu'] = $this->mMenu;
        $this->data['current_uri'] = empty($this->mModule) ? uri_string() : str_replace($this->mModule . '/', '', uri_string());
        $this->data["links"] = $this->pagination->create_links();
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["books"] = $this->home_model->getAuthorBookList($config["per_page"], $page, $author_id, $category_id, $book_title);
        
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
        
        $this->data["all_authors"] = $this->home_model->getAllAuthors_id();
        
        $this->load->view('template_morden/header', $this->data);
        //$this->load->view('template_morden/navigation', $this->data);
        $this->load->view('search-by-author', $this->data);
        $this->load->view('template_morden/footer', $this->data);
	}
        
	
}
