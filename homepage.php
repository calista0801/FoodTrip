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
<div style= "margin-left:180px; margin-top: 40px; width:1120px; margin-bottom: 30px; background-color: #F5F5F5;"><fieldset class="fs">
<b><h1 style="margin-left: 450px;">ABOUT BAZAAR</h1></b>
<img class="img4" src="1234.jpg" alt="fd"><br>
<p style="text-align: justify;">A bazaar (Persian: بازار) or souk (Arabic: سوق, romanized: sūq; also transliterated as souq) is a marketplace consisting 
  of multiple small stalls or shops, especially in the Middle East, the Balkans, North Africa and India. However, temporary 
  open markets elsewhere, such as in the West, might also designate themselves as bazaars. The ones in the Middle East were 
  traditionally located in vaulted or covered streets that had doors on each end and served as a city's central marketplace. 
  Street markets are the European and North American equivalents.
</p>

<p style="text-align: justify;">
  The term bazaar originates from Persian, where it referred to a town's public market district. The term bazaar is sometimes
  also used to refer to the "network of merchants, bankers and craftsmen" who work in that area. The term souk comes from 
  Arabic and refers to marketplaces in the Middle East and North Africa.
</p>

<p style="text-align: justify;">Evidence for the existence of bazaars or souks dates to around 3,000 BCE. Although the lack of archaeological evidence has
  limited detailed studies of the evolution of bazaars, indications suggest that they initially developed outside city walls 
  where they were often associated with servicing the needs of caravanserai. As towns and cities became more populous, these 
  bazaars moved into the city center and developed in a linear pattern along streets stretching from one city gate to another 
  gate on the opposite side of the city. Souks became covered walkways. Over time, these bazaars formed a network of trading 
  centers which allowed for the exchange of produce and information. The rise of large bazaars and stock trading centers in 
  the Muslim world allowed the creation of new capitals and eventually new empires. New and wealthy cities such as Isfahan, 
  Vijaynagara, Surat, Cairo, Agra, and Timbuktu were founded along trade routes and bazaars.
</p>

<p style="text-align: justify;">
  In the 18th and 19th centuries, Western interest in oriental culture led to the publication of many books about daily life 
  in Middle Eastern countries. Souks, bazaars and the trappings of trade feature prominently in paintings and engravings, 
  works of fiction and travel writing.
</p>

<p style="text-align: justify;">
  Shopping at a bazaar or market-place remains a central feature of daily life in many Middle-Eastern and South Asian cities and
  towns and the bazaar remains the "beating heart" of West Asian and South Asian life; in the Middle East, souks tend to be found
  in a city's medina (old quarter). Bazaars and souks are often important tourist attractions. A number of bazaar districts have
  been listed as World Heritage sites due to their historical and/or architectural significance.
</p>
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


.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  background-color:#ccc;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
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
<body>
<div class="topnav">
 
  <div class="search-container">
    <form action="/action_page.php">
    </form>
  </div>
</div>
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
  margin-top: 70px;
}

.sidebar a:hover {
  color: #8FB3F8;
}

.sidebar a:active {
    color: white;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
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
  height:300px;
  max-width: 300px;
  margin-right:20px;
  margin-top: 32px;
}

.img3 {
  height:300px;
  max-width: 280px;
  margin-right:20px;
  margin-top: 32px;
}

.img4
{
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.fs
{
  border: none;
}

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



</body>
</html>



