<?php
/*
Author name: Sridhar K Nayak
E-mail ID:   sridharsourceus@gmail.com>
Date:        02-01-2018
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webinar</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<!-- <span class="bgtext">Template</span> -->




<!-- WRITE MAIN CONTENT HERE -->
<div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image:url(../DCentMASS/images/maktum/online2.png); ">
  <div class="container">
    <span class="main-heading"><center>WEBINAR</center></span>
  </div>
</div>

<p>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p> 
     <br>
  
<div class="container-fluid">
<div class="row">
  <div class="col-md-6">

    <center><iframe width="450" height="200" src="https://www.youtube.com/embed/-qsYLHtT-JQ?autoplay=0">
    </iframe> <br><br></center>
  </div>
<div class="col-md-6">
    <span class="para-heading">Lorem Ipsum is simply dummy</span><br>

    <p>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining   </p><br><br>
</div>

 <div class="col-md-6">

    <center><iframe width="450" height="200" src="https://www.youtube.com/embed/Gz2wBT9gZfo?autoplay=0">
    </iframe> <br><br></center>
  </div>
<div class="col-md-6">
    <span class="para-heading">Lorem Ipsum is simply dummy</span><br>

    <p>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining   </p>
</div>
<!-- NOTE: Please keep your code clean + readable and add comments -->

<!-- MAIN CONTENT ENDS -->
</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
