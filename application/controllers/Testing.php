<?php

/**
* 
*/
class Testing extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function XSSEscape(){
		$string = " <script>alert('XSS Success');</script>";
		$string = htmlentities($string);
		echo $string; // String sudah di Escape
	}

	function SQLEscape(){
		$username = "admin');--";
		$password = "";
		$string = "SELECT username, password FROM Login where (username = '$username') and (password = '$password'); ";
		htmlentities($string);
		echo $string;
	}


}

