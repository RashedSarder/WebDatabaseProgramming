<?php
include("../database/config.php");
$id=$_GET['id'];
$sql="DELETE FROM customer WHERE c_id=$id";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../model/allcustomerindex.php");
}
else
{
	echo "data not added";
}
?>