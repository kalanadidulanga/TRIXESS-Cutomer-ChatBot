<?php 
session_start();
require 'connection.php';

    $pid = $_SESSION["u"]["id"];

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($fname)){
        echo ("Please enter your First Name !!!");
    }else if(strlen($fname) > 50){
        echo ("First Name must have less than 50 characters");
    }else if(empty($lname)){
        echo ("Please enter your Last Name !!!");
    }else if(strlen($lname) > 50){
        echo ("Last Name must have less than 50 characters");
    }else if (empty($email)){
        echo ("Please enter your Email !!!");
    }else if(strlen($email) >= 100){
        echo ("Email must have less than 100 characters");
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo ("Invalid Email !!!");
    }else if (empty($password)){
        echo ("Please enter your Password !!!");
    }else if(strlen($password) < 5 || strlen($password) > 20){
        echo ("Password must be between 5 - 20 charcters");
    }else{
        Database::iud("UPDATE `user` SET `email`='".$email."',`fname`='".$fname."',`lname`='".$lname."',
        `password`='".$password."' WHERE `id`='".$pid."'");
    
        echo "success";
    }
    


?>