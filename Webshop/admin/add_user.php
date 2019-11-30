<?php

include("../db.php");

if(isset($_POST['btn_save']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$user_password=$_POST['user_password'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

mysqli_query($con,"insert into user_info(first_name, last_name,email,password,mobile,address1,address2) values ('$first_name','$last_name','$email','$user_password','$mobile','$address1','$address2')") 
			or die ("Query 1 is inncorrect........");
header("location: manage_users.php"); 
mysqli_close($con);
}
?>