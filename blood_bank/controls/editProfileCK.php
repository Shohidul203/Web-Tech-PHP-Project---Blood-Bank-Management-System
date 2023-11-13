<?php

function donarProfileUpdate($name, $city, $email, $number)
{
    session_start();

    // $username = $_REQUEST['username'];
    // $password = $_REQUEST['password'];
    // $name = $_REQUEST['name'];
    // $address = $_REQUEST['address'];
    // $email = $_REQUEST['email'];
    // $mobileNumber = $_REQUEST['mobile_number'];

    // $user = ['username' => $username, 'password' => $password, 'name' => $name, 'address' => $address, 'email' => $email, 'mobileNumber' => $mobileNumber, 'profilePicture' => $profilePicture];
    // $_SESSION['user'] = $user;

    require_once('../models/functional.php');
    profileUpdate($name, $city, $email, $number);
    header('location: ../view/donarHome.php');
}
