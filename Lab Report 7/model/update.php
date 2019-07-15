<?php
include("../database/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$sql="UPDATE customer SET c_id='$id',name='$name',email='$email' WHERE c_id=$id";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	header("location:../model/allcustomerindex.php");
}
else
{
	echo "data not added";
}
//header("location:../model/allcustomerindex.php");

?>