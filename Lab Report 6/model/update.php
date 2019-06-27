<?php
include("../database/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$sql="UPDATE patient SET p_id='$id',name='$name',email='$email' WHERE p_id=$id";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../model/alluserindex.php");
}
else
{
	echo "data not added";
}
//header("location:../model/alluserindex.php");

?>