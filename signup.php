<?php

session_start();
include("connection.php");
include("functions.php");

$firstnameErr = $lastnameErr  = $emailErr  = $user_nameErr = NULL;
$firstname = $lastname  = $email  = $user_name = NULL;
$passwordErr;
$password;

$flag = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
        $flag = false;
    } else {
        $firstname = test_input($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
        $flag = false;
    } else {
        $lastname = test_input($_POST["lastname"]);
    }

    $email  = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false ||
        $email != $email
    ) {
        echo "This email adress isn't valid!";
        exit(0);
    }

    if (empty($_POST["user_name"])) {
        $user_nameErr = "Username is required";
        $flag = false;
    } else {
        $user_name = test_input($_POST["user_name"]);
    }

    if (empty($_POST["password"])){
        $passwordErr = "Input password";
        $flag = false;
    } else {
        $password = test_input($_POST["password"]);
    }

    if (strlen($_POST["password"]) < 8) {
        die("Password must be at least 8 characters");
    }
    
    if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
        die("Password must contain at least one letter");
    }
    
    if ( ! preg_match("/[0-9]/", $_POST["password"])) {
        die("Password must contain at least one number");
    }
    
    if ($_POST["password"] !== $_POST["c_password"]) {
        die("Passwords must match");
    }
    $password = md5($password);
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    // submit form if validated successfully
    if ($flag) {

        $con = new mysqli('localhost', "root", "", "iasdb");

        if ($con->connect_error) {
            die("connection failed error: " . $con->connect_error);
        }
        
        $user_id = random_num(11);
        $query = "INSERT into iastable (firstname, lastname, email, user_id, user_name, password) values ('$firstname', '$lastname', '$email', '$user_id', '$user_name', '$password')";

        if($result)
    {
        $otp = rand(100000,999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['mail'] = $email;
        require "vendor/autoload.php";
        $mail = new PHPMailer\PHPMailer\PHPMailer();
    
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
    
        $mail->Username='janicecuagdan.bsit.ucu@gmail.com';
        $mail->Password='hyaveijclezhmceb';
    
        $mail->setFrom('janicecuagdan.bsit.ucu@gmail.com', 'OTP Verification');
        $mail->addAddress($_POST["email"]);
    
        $mail->isHTML(true);
        $mail->Subject="Your verify code";
        $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
        <br><br>
        <p>With regards,</p>
        <b>FoodTrip</b>";
    
                if(!$mail->send()){
                    ?>
                        <script>
                            alert("<?php echo "Register Failed, Invalid Email "?>");
                        </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                        window.location.replace('verification.php');
                    </script>
                    <?php
                }
    }
        mysqli_query($con, $query);

        header("Location: verification.php");
        die;

        // execute sql insert
        if ($con->query($sql) === TRUE) {
            echo "<script> alert('data saved successfully');</script>";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
<div id="box" class=col-form>
<img src="FoodTrip Logo.png" height="150px" width="150px" class="img"><br>
<div style="font-size: 33px; padding-bottom:2px; margin-bottom: 14px; color: #FFF444; margin-left:-13px; background-color:#8FB3F8; border-radius: 6px; width:102.5%; height:36px; text-align:center;"> SIGN UP </div>

<form method ="post">
    <input id="text" required type="text" name="firstname" placeholder="First Name"><br>
    <input id="text" required type="text" name="lastname" placeholder="Last Name"><br>
    <input id="text" required type="text" name="email" placeholder="Email"><br>
    <input id="text" required type="text" name="user_name" placeholder="Username"><br>
    <input id="text" required type="password" name="password" placeholder="Password"><br>
    <input id="text" type="password" name="c_password" placeholder="Confirm Password"><br><br>
    <input id="button" type="submit" value="SIGN UP"><br><br>

    <div style="font-size:16.5px; color: black; margin-left: 10px">Already have an account?<a href="login.php" style="font-size: 16.5px;  color: #074B8A;"> Click to  Login</a><br>
    <a href="frontpage.php" style="font-size: 20px; color: black; margin-left: 100px;">BACK</a>
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
    color: #074B8A;
}

#box{
    background-color: #8FB3F8;
    display: block;
    margin: auto;
    margin-top:10px;
    width: 300px;
    padding: 87px;
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

