<?php

/**
* CCRS - Main Module - Ikhsan, Telkomsel Sofrware Developer
*/
class Main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function login(){
		$this->load->view('vivian/layout/header');
		$this->load->view('vivian/layout/sidebar-empty');
		$this->load->view('vivian/login');
		$this->load->view('vivian/layout/footer');
	}

	function login_engine(){
		$username =	$this->input->post('username');
		$password = $this->input->post('password');

		$db = $this->load->database("db_ccrs");
		// $result = $db->query("SELECT * FROM ");
		
	}

	function register(){
		$this->load->view('vivian/layout/header');
		$this->load->view('vivian/layout/sidebar-empty');
		$this->load->view('vivian/register');
		$this->load->view('vivian/layout/footer');
	}

	function register_engine(){

	}

	function index(){
		$metadata = array();

		$this->load->view('vivian/layout/header', 	$metadata);
		$this->load->view('vivian/layout/sidebar', 	$metadata);
		$this->load->view('vivian/home', 			$metadata);
		$this->load->view('vivian/layout/footer', 	$metadata);
	}

	function bonuses(){
		$metadata = array();

		$this->load->view('vivian/layout/header', 	$metadata);
		$this->load->view('vivian/layout/sidebar', 	$metadata);
		$this->load->view('vivian/bonuses', 		$metadata);
		$this->load->view('vivian/layout/footer', 	$metadata);
	}

	function reporting(){
		$metadata = array();

		$this->load->view('vivian/layout/header', 	$metadata);
		$this->load->view('vivian/layout/sidebar', 	$metadata);
		$this->load->view('vivian/reporting', 		$metadata);
		$this->load->view('vivian/layout/footer', 	$metadata);
	}

	function editor(){
		$metadata = array();

		$this->load->view('vivian/layout/header', 	$metadata);
		$this->load->view('vivian/layout/sidebar', 	$metadata);
		$this->load->view('vivian/editor', 			$metadata);
		$this->load->view('vivian/layout/footer', 	$metadata);
	}

	function editor_engine(){
		$mytext = $this->input->post('myeditor');

		$testtext = array('1'=>'test1');
		$testtext2 = explode(",", $mytext);

		print_r($testtext2);
	}
}