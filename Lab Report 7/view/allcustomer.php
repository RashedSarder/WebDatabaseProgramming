<p> <a href="../controller/logout.php"> Logout</a>
<?php
include("../controller/session.php");
include("../database/config.php");
$sql="SELECT * from customer ";
$result=mysqli_query($myconn,$sql);
echo '<table border="2px" width="100%">
		<tr><th> Customer Id</th>
		<th> Name</th>
		<th> Email</th>
                <th> Edit</th> 
		<th> Delete</th> </tr>';
while($row=mysqli_fetch_array($result))
{
	$c_id=$row['c_id'];
	$name=$row['name'];
	$email=$row['email'];
	echo'<tr><td width="10%">'.$c_id.'</td>
			  <td width="10%">'.$name.'</td>
			  <td width="10%">'.$email.'</td>
			  <td width="20%"> <a  href="../model/edit.php ?id='.$c_id.'"><p style="color:black; "> EDIT </p> </a> </td>
                          <td width="20%"> <a  href="../model/delete.php ?id='.$c_id.'"><p style="color:black; "onclick="window.confirm();"> DELETE </p></a></td>
			  			  
			  </tr>';
}

?>