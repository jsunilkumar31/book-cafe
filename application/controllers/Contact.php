<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Contact extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");
    }

	public function index()
	{
		$this->mPageTitle = lang('contacts');

		$config = array();

        //pagination settings
        $config['base_url'] = base_url('home/index/page');

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

		$this->data['user'] = $this->mUser;
        $this->data['body_class'] = $this->mBodyClass;
        $this->data['menu'] = $this->mMenu;
        $this->data['current_uri'] = empty($this->mModule) ? uri_string() : str_replace($this->mModule . '/', '', uri_string());

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
        $this->load->view('contact', $this->data);
        $this->load->view('template_morden/footer', $this->data);
	}

	
}
