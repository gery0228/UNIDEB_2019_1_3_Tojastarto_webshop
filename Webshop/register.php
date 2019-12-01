<?php

session_start();
include "db.php";
if (isset($_POST["f_name"])) 
{
	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];