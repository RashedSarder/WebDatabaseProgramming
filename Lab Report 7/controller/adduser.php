<?php
include("../database/config.php");
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="INSERT INTO user (uname,password)
VALUES('$uname','$pass')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "data added";
}
else
{
	echo "data not added";
}
header("location:../model/allcustomerindex.php");

?>