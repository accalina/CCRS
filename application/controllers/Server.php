<?php

/**
* 
*/
class Server extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		echo "Please inject into function depedency";
	}

	function readtest(){	
		$path = base_url() . "serverfile/test.xml";
		$mystring = implode("",file($path));
		$fileopen = fopen($path, "w");

		$mystring = str_replace("userval", "admin123", $mystring);
		$mystring = str_replace("passval", "pass123", $mystring);

		fwrite($fileopen, $mystring,strlen($mystring));
	}
}