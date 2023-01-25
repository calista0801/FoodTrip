<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER ['REQUEST_METHOD'] =="POST")
{
    //something was posted
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password = md5($password);
    
    if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))

    {

        //read from database 
 
        $query = "select * from iastable where user_name = '$user_name' limit 1" ;
        $result =  mysqli_query($con, $query);
        if($result){
            if($result && mysqli_num_rows($result) > 0 )
            {
             $user_data = mysqli_fetch_assoc($result);
             if($user_data['password']=== $password)
             {
                $_SESSION['user_id'] = $user_data['user_id']; 
                header("Location: homepage.php");
                die;
        
             }
            
            }

        }

        echo"Wrong username or password!";
    }else{
    echo"Please enter some valid information!";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>FoodTrip</title>
</head>
<body>

<div id="box" class=col-form>
<img src="FoodTrip Logo.png" height="150px" width="150px" class="img"><br>
<div style="font-size: 33px; padding-bottom:2px; margin-bottom: 14px; color: #FFF444; margin-left:-13px; background-color:#8FB3F8; border-radius: 6px; width:102.5%; height:36px; text-align:center;"> LOG IN </div>

<form method ="post">
<input id="text" type="text" name="user_name" placeholder="Username"><br><br> 
<input id="text" type="password" name="password" placeholder="Password"><br><br>
<input id="button" div style=";"  type="submit" value="Log In"><br><br>

<div style="font-size:16.5px; color: black; margin-left: 55px">Create an account?<a href="signup.php" style="font-size: 16.5px;  color: #074B8A;"> Sign up</a><br>
<a href="frontpage.php" style="font-size: 20px; color: black; margin-left: 55px;">BACK</a>

</form>
</div>
</body>
</html>

<style>
#text{
    height:25px;
    border-radius: 5px;
    padding: 6px;
    width:97%;
    margin-left:-10px;
    text-align:left;
    font-size: 18px;
}

#button{
    padding: 5px;
    padding-bottom: 25px;
    margin-left:90px;
    width:95px;
    height:0.1px;
    border-color: #FFF444;
    border-radius: 10px;
    font-size:20px;
    margin-bottom: 6px;
    background: #FFF444;
    color: #074B8A
}

#box{
    background-color: #8FB3F8;
    display: block;
    margin: auto;
    margin-top: 15px;
    width: 300px;
    padding: 80px;
}

.img 
{
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.col-form a:hover {
    text-decoration: none;
}

.col-form a:active {
    text-decoration: none;
}

.col-form a:visited {
    text-decoration: none;
}

.col-form a:link {
    text-decoration: none;
}
</style>