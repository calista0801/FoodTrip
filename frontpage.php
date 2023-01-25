<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodTrip</title>
</head>
<body>

<div class="container">
    <div class="content">
    <img src="FoodTrip Logo.png" height="280px" width="280px" class="img">
        <h2> Welcome!</h2><br>

    <a href ="login.php" class="btn">Log In</a>
    <a href ="signup.php" class="btn">Sign Up</a>
</body>
</html>

<style>
    *{ 
    font-family: 'Playfair Display', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    border-radius: 5px;
    text-decoration: none;
    background-color: #8FB3F8;
}

.container
{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background-position: center;
    background-size:auto;
    background-size:auto;
    padding-top: 100px ;
    min-height: 70vh;;
    min-width: 70vh;
    align-items: center;
    padding-right: 10px;
    background-position: center;
}

.img 
{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.container .content h2
{
    text-align: center;
    font-size: 60px;
    color: #074B8A;
    align-items: center;
}   
    
.container .content .btn
{
    display: inline-block;
    padding: 10px 30px;
    font-size: 25px;
    padding-left: 50px;
    background: rgb(194, 0, 0);
    color: #fff;
    margin:0 5px;
    text-transform: capitalize;
    margin-top: 5px;
    margin-left: 10px;
    padding-right: 50px;
    position: center;   
}
</style>