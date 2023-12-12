<?php

function donarProfileUpdate($name, $city, $email, $number, $availability)
{
    session_start();

    // $name = $_POST["name"];
    // $number = $_POST["number"];
    // $email = $_POST["email"];
    // $blood = $_POST["blood"];
    // $password = $_POST["password"];
    // $city = $_POST["city"];

    // $user = ['username' => $username, 'password' => $password, 'name' => $name, 'address' => $address, 'email' => $email, 'mobileNumber' => $mobileNumber;
    // $_SESSION['user'] = $user;

    require_once('../models/donorModel.php');
    profileUpdated($name, $city, $email, $number, $availability);
    header('location: ../view/personal_information.php');
}
