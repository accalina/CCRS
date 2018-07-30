<?php

$path = "test.xml";

$mystring = implode("",file($path));
$fileopen = fopen($path, "w");

$mystring = str_replace("userval", "admin123", $mystring);
$mystring = str_replace("passval", "pass123", $mystring);

fwrite($fileopen, $mystring,strlen($mystring));

?>