<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public $PAGE;
	public  function __construct() {
   		parent::__construct();
  		//$this->langlib->init_default_language();
  		check_lang(); 
 	}

 
	public function index()
	{
		//$this->lang->load("english","english");
		//$this->lang->load("thai","thai");
		$this->load->view('home_view');
	}


	public function th()
	{
		//$this->lang->load("english","english");
		$this->lang->load("thai","thai");
		$this->load->view('home_view');
	}
	public function en()
	{
		$this->lang->load("english","english");
		//$this->lang->load("thai","thai");
		$this->load->view('home_view');
	}

 


// public function index()
// 	{
// 		$query = $this->db->query('SELECT * FROM tbl_mail'); 
//         $this->PAGE['blog'] = $query->result_array();
// 		$this->load->view('home_view',$this->PAGE); // ส่งตัวแปร suffix ไปในทุก ๆ view
// 	}
// 	public function change($type)
// 	{
// 		$this->langlib->chooseLang($type); // ใช้สำหรับเปลี่ยนภาษาในทุก ๆ controller
// 	}








}
