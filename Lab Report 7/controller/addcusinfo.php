<?php
include("../database/config.php");
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];


$sql="INSERT INTO customer (c_id,name,email)
VALUES('$id','$name','$email')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "data added";
}
else
{
	echo "data not added";
}
header("location:../mymobile.php");

?>