<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $name = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $phonenumber = $POST_['phone_number'];
    $email = $POST_['email'];
    $username = $POST_['username'];
    $password = $POST_['password'];
    if(!empty($firstname)) || !empty($middlename) || !empty($lastname) || !empty($phonenumber) || !empty($email) || !empty($username) || !empty($password){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "pblproject";
        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
        }
        else{
            //$SELECT = "SELECT email From signup Where email = $email";
            $INSERT = "INSERT Into signup(firstname,middlename,lastname,phone_number,email,username,password,cpassword) values('$firstname','$middlename','$lastname','$phone_number','$email','$username','$password','$cpassword')";
             
           // $result = mysqli_query($conn,$INSERT);
           // $stmt->bind_param("s",$email);
            
        }

   
    } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="1.css">
</head>

<body style="margin :0em;">

        <div class="topnav">
                <a href="">AIRLINES</a>
                <a class="active" href="#home">Home</a>
                <a href="#news">PRN check</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
        </div>
       <!-- <img src="112.jpg" alt="" class="bg" style="    width: 100%;-->
      position: absolute;
      z-index: -1;">
        <div class="snp">
                <h1 style="    margin-inline-start: 20em;
        margin-block-start: 3cm;">SIGNUP HERE</h1>
                <form action="signup.php" method="post">
                        <input type="text" name="firstname" id="firsstname" placeholder="enter your firstname" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;
            padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="text" name="middlename" id="middlename" placeholder="enter your middle name" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="text" name="lastname" id="lastname" placeholder="enter your last name" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="phone" name="phonenumber" id="phone number" placeholder="enter your phone number"
                                style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px"></label>
                        <input type="email" name="email" id="email" placeholder="enter your email" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="text" name="username" id="username" placeholder="enter your username" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="text" name="password" id="password" placeholder="enter your password" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 1.5em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
                        <input type="text" name="cpassword" id="cpassword" placeholder="retype your password" style="    margin-top: 0em;
            margin-right: 0em;
            margin-bottom: 0em;
            margin-left: 48em;padding-top: 8px;
    padding-right: 23px;
    padding-bottom: 8px;
    padding-left: 23px;
    text-align: center;
    border-radius: 10px">
    <?php ECHO $INSERT;?>
                        <button class="bt" style="    margin-top: 2em;
            margin-right: 0em;
            margin-bottom: 14em;
            margin-left: 54em;
            padding-top: 6px;
            padding-right: 9px;
            padding-bottom: 6px;
            padding-left: 9px;
            border-width: 3px;
            border-radius: 10px;">signup</button>
                </form>
        </div>


</body>

</html>