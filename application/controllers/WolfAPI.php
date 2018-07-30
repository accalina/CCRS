<?php


/**
* 
*/
require APPPATH . 'libraries/REST_Controller.php';

class WolfAPI extends REST_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index_get(){
		$db = $this->load->database('testdb',true);
		$result = $db->get('data')->result_array();
		$this->set_response($result, REST_Controller::HTTP_OK);
	}

	function index_post(){

	}

	function index_put(){

	}

	function index_delete(){

	}
}