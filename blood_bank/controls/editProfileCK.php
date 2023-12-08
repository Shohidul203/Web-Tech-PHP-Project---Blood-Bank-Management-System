<?php

function donarProfileUpdate($name, $city, $email, $number, $availability)
{
    session_start();

    // $username = $_REQUEST['username'];
    // $password = $_REQUEST['password'];
    // $name = $_REQUEST['name'];
    // $address = $_REQUEST['address'];
    // $email = $_REQUEST['email'];
    // $mobileNumber = $_REQUEST['mobile_number'];
    // $name = $_POST["name"];
    // $number = $_POST["number"];
    // $email = $_POST["email"];
    // $blood = $_POST["blood"];
    // $password = $_POST["password"];
    // $city = $_POST["city"];

    // $user = ['username' => $username, 'password' => $password, 'name' => $name, 'address' => $address, 'email' => $email, 'mobileNumber' => $mobileNumber, 'profilePicture' => $profilePicture];
    // $_SESSION['user'] = $user;

    require_once('../models/donorModel.php');
    profileUpdate($name, $city, $email, $number, $availability);
    header('location: ../view/personal_information.php');
}
