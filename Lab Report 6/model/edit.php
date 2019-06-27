<?php 
$id=$_GET['id'];
include("../database/config.php");
$sql="SELECT * from patient WHERE p_id=$id";
$result=mysqli_query($myconn,$sql);
echo '<form method="post" action="update.php">';
while($row=mysqli_fetch_array($result))
{
	$p_id=$row['p_id'];
	$name=$row['name'];
	$email=$row['email'];
	echo $name;
	echo'
	patient id: <input type="text" name="id" value="'.$p_id.'"> <br>
	patient Name: <input type="text" name="name" value="'.$name.'"><br>
	Email: <input type="email" name="email" value="'.$email.'"><br>
	<input type="submit" value="Save">';
	
	
}
echo '</form>';

?>
