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
<b style="padding-left:400px; font-size:30px;" ></h1>Abellera Food Bazaar<br></b>
<a style="font-size:20px; padding-left:335px;" >3GWP+QH2, N/A, Pozorrubio, 2435 Pangasinan<br><a>
<a href="https://goo.gl/maps/Lj6jPv8QzMMfYq27A"> <img  class="img2" src="abellera.png" alt="Avatar"></a>
</div>

<div style= "margin-left:300px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:305px; font-size:30px;" ></h1>All Seasons Bazaar<br></b>
<a style="font-size:20px; padding-left:225px;">XHG7+8RG, MacArthur Hwy, Urdaneta, Pangasinan<br><a>
<a href="https://goo.gl/maps/AU9QF7v933sNd3F19"> <img class="img3" src="allss.jpg" alt="Avatar"></a>
</div>

<div style= "margin-left:180px; margin-top:70px; width:1000px; margin-bottom: 20px; background-color: #F5F5F5;">
<b style="padding-left:360px; font-size:30px;" ></h1>Urdaneta City, Food Bazaar<br></b>
<a style="font-size:20px; padding-left:340px;" >XHF9+2WH, Consejo St, Urdaneta, Pangasinan<br><a>
<a href="https://goo.gl/maps/AU9QF7v933sNd3F19"> <img  class="img4" src="urdaneta.jpg" alt="Avatar"></a>
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
  margin-left: 200px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img3 {
  display: block;
  margin-left: 80px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.img4
{
  display: block;
  margin-left: 250px;
  margin-right: auto;
  height:400px;
  max-width: 700px;
}

.fs
{
  border: none;
}

</style>

<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 15px;
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
</head>
<body>

<div class="sidebar">
  <a href="homepage.php"><img class="img1" src="FoodTrip Logo.png" alt="Avatar"></a>
  <a href="bazaar.php"><i class="fa fa-fw fa-ome"></i>Bazaar</a>
  <a href="streetfoods.php"><i class="fa fa-fw fa-"></i>Street Food</a>
  <a href="map.php"><i class="fa fa-fw fa-ser"></i>Map</a>
  <a href="logout.php"><i class="fa fa-fw fa-pf"></i>Log Out</a>
</div>