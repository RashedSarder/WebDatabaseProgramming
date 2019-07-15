<?php 
$id=$_GET['id'];
include("../database/config.php");
$sql="SELECT * from customer WHERE c_id=$id";
$result=mysqli_query($myconn,$sql);
echo '<form method="post" action="update.php">';
while($row=mysqli_fetch_array($result))
{
	$c_id=$row['c_id'];
	$name=$row['name'];
	$email=$row['email'];
	echo $name;
	echo'
	customer id: <input type="text" name="id" value="'.$c_id.'"> <br>
	customer Name: <input type="text" name="name" value="'.$name.'"><br>
	Email: <input type="email" name="email" value="'.$email.'"><br>
	<input type="submit" value="Save">';
	
	
}
echo '</form>';

?>
