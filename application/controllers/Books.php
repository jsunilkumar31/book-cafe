<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Books extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->library("lms");
    }

    public function index() {

        $this->mPageTitle = lang('book_plan');

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

        $bookid = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $this->data["book"] = $this->home_model->getBookByID($bookid);
        $this->data["links"] = $this->pagination->create_links();


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

        /* echo '<pre>';
          var_export($this->data["book"]);
          echo '</pre>'; */
        $this->load->model('home_model');
        $this->data["cater"] = $this->home_model->getbooksbysimilarcatid($this->data["book"]->category_id);
        // echo "<pre>";  print_r($this->data["book"]);echo"</pre>";
        // print_r($this->data["book"]->category_id);exit;
        $this->load->view('template_morden/header', $this->data);
        $this->load->view('book-single', $this->data);
        $this->load->view('template_morden/footer', $this->data);
    }
    public function load_reviews()
    {
        // echo "<pre>";  echo ($this->input->post('book_id'));echo"</pre>";
        // echo $this->input->post('book_id');exit;
        // if(!$this->input->post('book_id')){
        //     echo "n";
        // }
        $average_rating = 0;
        $total_review = 0;
        $five_star_review = 0;
        $four_star_review = 0;
        $three_star_review = 0;
        $two_star_review = 0;
        $one_star_review = 0;
        $total_user_rating = 0;
        $review_content = array();

        $query=$this->db->select('*')
        ->order_by('review_id','DESC')
        ->where('book_id',$this->input->post('book_id'))
        ->get('review_table');
        $result =$query->result();
        // print_r($query->result());
        foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row->user_name,
			'user_review'	=>	$row->user_review,
			'rating'		=>	$row->user_rating,
            // 'datetime'		=>	$row->datetime
			'datetime'		=>	date('l jS, F Y h:i:s A', $row->datetime)
		);

		if($row->user_rating == '5')
		{
			$five_star_review++;
		}

		if($row->user_rating == '4')
		{
			$four_star_review++;
		}

		if($row->user_rating == '3')
		{
			$three_star_review++;
		}

		if($row->user_rating == '2')
		{
			$two_star_review++;
		}

		if($row->user_rating == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row->user_rating;

	}
    $average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);
       
    }
    public function submit_reviews()
    {
        $review_data = array();
        $rating_data = $this->input->post('rating_data');
        $user_name = $this->input->post('user_name');
        $user_review = $this->input->post('user_review');
        $book_id = $this->input->post('book_id');

        $review_data = array(
            'user_name'		=> $user_name,
            'book_id'		=> $book_id,
            'user_rating'		=>	$rating_data,
            'user_review'		=>	$user_review,
            'datetime'			=>	time()
        );
        $this->db->insert('review_table', $review_data);
        echo "Your Review & Rating Successfully Submitted";
        // print_r($data);
       
    }

}
