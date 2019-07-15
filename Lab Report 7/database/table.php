<?php
include("config.php");
//customer table 
$tbl_customer="CREATE TABLE IF NOT EXISTS customer(
c_id INT(11) NOT NULL,
PRIMARY KEY(c_id),
name VARCHAR(50) NOT NULL,
email VARCHAR(50)NOT NULL)";
$customer=mysqli_query($myconn,$tbl_customer);
if($customer===TRUE)
{
	echo"<br>customer table reated happy codding (:";
}
else
{
		echo"<br>customer table not reate ):";

}
//image table 
$tbl_cv="CREATE TABLE IF NOT EXISTS cv(
picname VARCHAR (50) NOT NULL,
img_name VARCHAR (50) NOT NULL,
img_path VARCHAR (50) NOT NULL,
img_type VARCHAR (50) NOT NULL)";

$cv=mysqli_query($myconn,$tbl_cv);
if($cv===TRUE)
{
	echo"<br>cv table reated happy codding (:";
}
else
{
		echo"<br>cv table not reate ):";

}
// Signup
$tbl_user="CREATE TABLE IF NOT EXISTS user(
uname VARCHAR(50) NOT NULL,
password VARCHAR(50)NOT NULL)";
$user=mysqli_query($myconn,$tbl_user);
if($user===TRUE)
{
	echo"<br>User table reated happy codding (:";
}
else
{
		echo"<br>User table not reate ):";

}




?>