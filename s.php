<?php

    $name = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $phonenumber = $POST_['phonenumber'];
    $email = $POST_['email'];
    $username = $POST_['username'];
    $password = $POST_['password'];
    if(!empty($firstname)) || !empty($middlename) || !empty($lastname) || !empty($phonenumber) || !empty($email) || !empty($username) || !empty($password{
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "signupdata";
        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register(firstname, middlename, lastname, phonenumber, email, username, password) values(?,?,?,?,?,?,?)";
            $stmt = $conn->prepare(SELECT);
            $stmt->bind_param("s",$email)
            
        }
    }else{
        echo"all field are required";
        die();
    } 

?>