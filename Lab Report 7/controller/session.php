<?php
session_start();
$user=$_SESSION['uname'];
if(!isset($user))
{
	header("location:../view/login.php");
}
?>