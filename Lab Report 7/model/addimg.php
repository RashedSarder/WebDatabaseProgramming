<?php ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Second</title>
<style>

#logo{
   height: 150px;
   width:20%;
   background-color:#2DB567;
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;	
	
}

#banner{
   height: 150px;
   width:80%;
   background-color:#391493;
   right:0px;

   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#menu{
   height:50px;
   width:100%;
   background-color:#00FF7F;
   left:0px;
   top:150px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#leftbar{ height:600px; width:20%; left:0px; top:200px; position:absolute; border:0px solid #099; background-color:#117669; text-align:center; color:Black;}
#rightbar{ height:600px; width:20%; right:0px; top:200px; position:absolute; border:0px solid #099; background-color:#117669;text-align:center;}


#cont{ height:600px; width:60%;left:20%; right:20%; top:200px; position:absolute; border:2px solid # 0FF; background-color:Green;}

#footer{
   height:50px;
   width:100%;
   background-color:#731314;
   left:0px;
   top:600px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#footercont{
   height: 50px;
   width:70%;
   background-color:#1D85B7;
   left:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}


#icon{
    height: 50px;
   width:30%;
   background-color:#1D85B7;
   right:0px;
   top:0px;
   position:absolute;
   border:FFFFFF solid 2px;
}

#icon img{ height:50px; width:32%;	border-radius:70%;
}



ul{ list-style:none; text-align:center;

}
ul li { display:inline; text-align:center; margin-left:50px;}

/* unvisited link */
a:link {
  color: red;
  text-decoration:none;
  transition: linear 0.3s;
  
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
  background-color:#0C3;
  border-radius:50%;
}

/* selected link */
a:active {
  color: blue;
}
/* CSS Document */
</style>


</head>


<body>
<div id="logo">
<img src="img/logo.jpg" height="150px" width="100%" />
</div>

<div id="banner"><img src="img/im3.png" height="150px" width="100%" />
</div>

<div id="menu"> 
<ul>
<li><a href="mobile.html">Home|</a></li>
<li><a href="contact.html">Contact|</a></li>
<li><a href="model/cusform.php">Signup</a></li>
<li><a href="model/allcustomerindex.php"> All Customer|</a></li>
<li><a href="login.html">Log in</a></li>
<li><a href="aboutme.html">About Me</a></li>
<li><a href="registraionfromvalidation.html">Registration From Validation</a></li>
</ul>
</div>

<div id = "leftbar"> 
<p><a href="home.html">Home</a></P>
<p><a href="contact.html">Contact</a></p>
<p> About </p>
<p> Call </p> 
</div>

<div id = "rightbar"> 
<p><u><big> Mobile List </big></u></p>
<P><a href="iphone.html">IPHONE</a></P>
<P><a href="samsung.html">SAMSUNG</a></P>
<P><a href="mi.html">MI</a></P>
<P><a href="lava.html">LAVA</a></P>
<P> <a href="htc.html">HTC</a></P>
</div>



<div id = "cont">
  <center>
<form id="imgform" action="../controller/imginsert.php" method="POST" enctype="multipart/form-data"; >
Name: <input type="text" name="name" /><br />
Price:<input type="text" name="price"/><br/>
Author Name:<input type="text" name="authorName"/><br>
Upload Picture :<input type="file" name="file_img" /><br />
<input type="submit" value="Add image" /><br />
</center>
</form>

<div id ="footer">
<div id ="footercont"><p> Design By @SifatIt </p> </div>

<div id ="icon">
<img src="img/f1.png" height="50px" width="33%"/>
<img src="img/sky1.jpg" height="50px" width="30%" />
<img src="img/in1.png" height="50px" width="30%" />
</div>




</body>
</html>
