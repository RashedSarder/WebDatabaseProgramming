<?php
include("../database/config.php");
$id=$_GET['id'];
$sql="DELETE FROM patient WHERE p_id=$id";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../model/alluserindex.php");
}
else
{
	echo "data not added";
}
?>