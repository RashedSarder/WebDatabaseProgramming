<?php

include("../database/config.php");


$sql="SELECT * FROM cv";

$result=mysqli_query($myconn,$sql);

//echo '<table>';

while($row=mysqli_fetch_array($result)){
    $imgID=$row['imgID'];
    $imgName=$row['img_name'];
	$imgPath=$row['img_path'];

    echo '<a href="imgdetails.php?imgID=' . $imgID . '"><img src="'.$imgPath.'"></a>';
	
}

//echo '</table>';



?>