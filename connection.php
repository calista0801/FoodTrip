<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iasdb";


if (!$con = mysqli_connect($servername, $username, $password, $dbname))
{

    die ("failed to connect!");


}
?>