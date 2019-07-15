<?php
include("../database/config.php");
$filetmp=$_FILES["file_img"]["tmp_name"];
$filename=$_FILES["file_img"]["name"];
$filetype=$_FILES["file_img"]["type"];
$filepath="../photo/".$filename;
move_uploaded_file($filetmp,$filepath);
$name=$_POST['name'];
$price=$_POST['price'];
$authorName=$_POST['authorName'];
$sql="INSERT INTO cv(picname,img_name,img_path,img_type,authorName,price) VALUES ('$name','$filename','$filepath','$filetype','$authorName','$price')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{ 
echo "image added";
}
else
{
	echo "not added";
}
?>

