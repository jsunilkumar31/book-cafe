<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class New_member extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");
    }

	public function index()
	{
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

        /*if ($login) {
            $this->data['body_class'] = 'hold-transition login-page';
        }*/

        $this->load->view('template_morden/header', $this->data);
        //$this->load->view('template_morden/navigation', $this->data);
        $this->load->view('new-member', $this->data);
        $this->load->view('template_morden/footer', $this->data);
	}

    public function register(){
        $this->form_validation->set_rules('first_name', 'First Name', 'required');

        $mailData = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'mobile_number' => $this->input->post('mobile_number'),
            'email' => $this->input->post('email'),
            'company_name' => $this->input->post('company'),
            'address' => $this->input->post('address'),
            'postal_code' => $this->input->post('postal_code')
        );

        $send = $this->sendEmail($mailData);

        if ($send) {
            echo 'success';
            // redirect('new_member');
        }else{
            echo 'failed';
            redirect('new_member');
        }
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
        $mailSubject = 'New Member Request Submitted by '.$mailData['first_name'];
        
        // Mail content
        $mailContent = '
            <h2>New Member Request Submitted</h2>
            <p><b>First Name: </b>'.$mailData['first_name'].'</p>
            <p><b>Last Name: </b>'.$mailData['last_name'].'</p>
            <p><b>Mobile: </b>'.$mailData['mobile_number'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Company Name: </b>'.$mailData['company_name'].'</p>
            <p><b>Address: </b>'.$mailData['address'].'</p>
            <p><b>Postal Code: </b>'.$mailData['postal_code'].'</p>
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
