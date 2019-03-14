<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {
	 
	public  function __construct() {
   		parent::__construct();
   		check_lang(); 
   		$this->load->model('mail_model');
  		 
 	}

 	public function index()
	{
	    $data['mails'] = $this->mail_model->get_all_mail(); 
		$data['language']=$this->session->userdata('language');

		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		$this->load->view('home_view2',$data);
	}


}
