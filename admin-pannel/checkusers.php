<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $pwd =  $_POST['password'];

        $sql = "SELECT * FROM admin WHERE `email`='$email' AND `password`=MD5('$pwd')";
    
        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        if($count > 0)
        {
            $_SESSION['email'] = $row['email'];
            $_SESSION['loggedin'] = true;
           
            header('Location: '.SITE_URL.'index.php');
            exit;
        }else{
            $_SESSION['error'] = "Invalid details";
            header('Location: '.SITE_URL.'signup.php');
            exit;   
        }
    }else{
        $_SESSION['error'] = "Please fill username and password";
        header('Location: '.SITE_URL.'login.php');
        exit;   
    }
}else{
    $_SESSION['error'] = "Invalid details";
    header('Location: '.SITE_URL.'login.php');
    exit;
}


?>