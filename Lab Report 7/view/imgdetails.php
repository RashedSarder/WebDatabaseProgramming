<?php
$imgID=$_GET['imgID'];
include("../database/config.php");


$sql="SELECT * FROM cv WHERE imgID='$imgID'";

$result=mysqli_query($myconn,$sql);


while($row=mysqli_fetch_array($result)){
    $picName=$row['picname'];
    $imgName=$row['img_name'];
    $imgPath=$row['img_path'];
    $authorName=$row['authorName'];
    $price=$row['price'];

}

echo '<img src="'.$imgPath.'"><br><br>'.$picName.'<br>Author: '.$authorName.'<br>Price: Tk-'.$price.'';




?>