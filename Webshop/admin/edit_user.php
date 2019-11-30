<?php

include("../db.php");
$user_id=$_REQUEST['user_id'];

$result=mysqli_query($con,"select user_id, email, password from user_info where user_id='$user_id'")or die ("query 1 incorrect.......");

list($user_id,$user_name,$user_password)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{
$user_name=$_POST['email'];
$user_password=$_POST['password'];

mysqli_query($con,"update user_info set email='$user_name', password='$user_password' where user_id='$user_id'")or die("Query 2 is inncorrect..........");

header("location: manage_users.php");
mysqli_close($con);
}
?>