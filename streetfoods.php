<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodTrip</title>
<body>

<div class=h1></div>
<div class="sidebar">
  <a href="homepage.php"><img class="img1" src="FoodTrip Logo.png" alt="Avatar"></a>
  <a href="profile.php"><i class="fa fa-fw fa-pf"></i>Profile</a>
  <a href="bazaar.php"><i class="fa fa-fw fa-ome"></i>Bazaar</a>
  <a href="streetfoods.php"><i class="fa fa-fw fa-"></i>Street Food</a>
  <a href="map.php"><i class="fa fa-fw fa-ser"></i>Map</a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:400px; font-size:30px;" ></h1>Binalonan Food Terminal<br></b>
<a style="font-size:20px; padding-left:350px;" >2HWR+RQC, Arellano St, Binalonan, Pangasinan<br><a>
<a href="https://goo.gl/maps/3PwY8FRv7DChbJhTA"> <img  class="img2" src="bft.jpg" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:400px; font-size:30px;" ></h1>Caviganan Street Food<br></b>
<a style="font-size:20px; padding-left:360px;" >24 Aruego Street, Urdaneta, 2428 Pangasinan<br><a>
<a href="https://goo.gl/maps/RuwRnVk9LKjXw68o7"> <img  class="img3" src="cavig.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:430px; font-size:30px;" ></h1>Foodstreet Bonuan<br></b>
<a style="font-size:20px; padding-left:360px;" >Gate 2, Catacdang, Maramba Bankers Village,<br><a>
<a style="font-size:20px; padding-left:400px;" >Bonuan, Dagupan, 2400 Pangasinan<br><a>
<a href="https://goo.gl/maps/5CDoQXRBtdjozBC37"> <img  class="img4" src="FS Bonuan.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:430px; font-size:30px;" ></h1>Minang Food Hub<br></b>
<a style="font-size:20px; padding-left:320px;" >RF7H+JRF, Nandacan, Bayan ng Bautista, Pangasinan<br><a>
<a href="https://goo.gl/maps/dMnHnnSZTZf3vA8j6"> <img  class="img5" src="minang.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:420px; font-size:30px;" ></h1>Pilar&#39;s Street Foods<br></b>
<a style="font-size:20px;  padding-left:340px;" >RGWC+7X5, P. Sison St, Alcala, 2425 Pangasinan<br><a>
<a href="https://goo.gl/maps/cUQNdzhdriQCJBus6"> <img  class="img6" src="pil.png" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:400px; font-size:30px;" ></h1>Purple&#39;s Food House<br></b>
<a style="font-size:20px;  padding-left:350px;" >October 16 St, Binalonan, 2436 Pangasinan<br><a>
<a href="https://goo.gl/maps/Q93KkGv1AEV1uBao8"> <img  class="img7" src="PFH.jpeg" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:440px; font-size:30px;" ></h1>Yuri&#39;s Foodstreet<br></b>
<a style="font-size:20px; padding-left:400px;" >Pandan Ave, Mapandan, Pangasinan<br><a>
<a href="https://goo.gl/maps/UP2ArkUdUBQUY5uGA"> <img  class="img8" src="Yuri.jpg" alt="Avatar"></a>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {box-sizing: border-box;}
h1{
 font-size:30px;
 margin-left:200px;
 padding-top: ;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #F5F5F5;
}

.h5 a{
  color: rgb(194, 0, 0);
  font-size: 18px;
}

.h5 a:hover {
    text-decoration: none;
}

.h5 a:active {
    text-decoration: none;
}

.h5 a:visited {
    text-decoration: none;
}

.h5 a:link {
    text-decoration: none;
}
</style>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 170px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #074B8A;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  text-decoration: none;
  font-size: 22px;
  color: #FFF444;
  display: block;
}

.sidebar a .fa {
  margin-top: 60px;
}

.sidebar a:hover {
  color: #8FB3F8;
}

.sidebar a:active {
    color: white;
}

.img1 {
  margin-top: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 60%;
  height:120px;
  max-width: 120px;
}

.img2 {
  display: block;
  margin-left: 250px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img3 {
  display: block;
  margin-left: 270px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img4
{
  display: block;
  margin-left: 380px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img5
{
  display: block;
  margin-left: 290px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img6
{
  display: block;
  margin-left: 310px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img7
{
  display: block;
  margin-left: 400px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img8
{
  display: block;
  margin-left: 300px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  height:65px;
  width:200px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>

<body>
<div class="sidebar">
  <a href="homepage.php"><img class="img1" src="FoodTrip Logo.png" alt="Avatar"></a>
  <a href="bazaar.php"><i class="fa fa-fw fa-ome"></i>Bazaar</a>
  <a href="streetfoods.php"><i class="fa fa-fw fa-"></i>Street Food</a>
  <a href="map.php"><i class="fa fa-fw fa-ser"></i>Map</a>
  <a href="logout.php"><i class="fa fa-fw fa-pf"></i>Log Out</a>
</div>
</body>
</head>
