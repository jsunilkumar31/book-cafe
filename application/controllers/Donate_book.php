<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Donate_book extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");

        $this->load->library('form_validation');
    }

    public function index() {
        
        
        $this->mPageTitle = lang('donate_book');

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
        
        $formData = array();

        
        // If contact request is submitted
        if ($this->input->post('bookSubmit')) {
            
            //var_export($this->input->post('bookSubmit'));die;

            // Get the form data
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('bookname', 'Book Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'bookname' => $formData['bookname'],
                    'address' => $formData['address']
                );

                // Send an email to the site admin
                $send = $this->sendEmail($mailData);

                // Check email sending status
                if ($send) {
                    // Unset form data
                    $formData = array();

                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                } else {
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
            }
        }

        // Pass POST data to view
        $this->data['postData'] = $formData;
        
        

        /* if ($login) {
          $this->data['body_class'] = 'hold-transition login-page';
          } */

        $this->load->view('template_morden/header', $this->data);
        //$this->load->view('template_morden/navigation', $this->data);
        $this->load->view('donate-book', $this->data);
        $this->load->view('template_morden/footer', $this->data);
    }

    public function donate_action() {

        
        
        $this->mPageTitle = lang('donate_book');

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

        /* if ($login) {
          $this->data['body_class'] = 'hold-transition login-page';
          } */

        $this->load->view('template_morden/header', $this->data);
        $this->load->view('template_morden/navigation', $this->data);
        $this->load->view('donate-book', $this->data);
        $this->load->view('template_morden/footer', $this->data);

    }
    
    private function sendEmail($mailData){
        // Load the email library
        
        $email_config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'kdwebstudio@gmail.com',
            'smtp_pass' => 'suru@magnus7',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );

        $this->load->library('email', $email_config);
        
        
        // Mail config
        $to = 'surendra.sonit@gmail.com';
        $from = 'kdwebstudio@gmail.com';
        $fromName = 'Surendra Soni';
        $mailSubject = 'Donate A Book Submitted by '.$mailData['name'];
        
        // Mail content
        $mailContent = '
            <h2>Donate A Book Request Submitted</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Book Name: </b>'.$mailData['bookname'].'</p>
            <p><b>Address: </b>'.$mailData['address'].'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        
        // Send email & return status
        return $this->email->send()?true:false;
    }
    

}
