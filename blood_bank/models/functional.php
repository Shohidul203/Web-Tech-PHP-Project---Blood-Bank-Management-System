<?php
require_once('db.php');


// $name = $_POST["name"];
// $number = $_POST["number"];
// $email = $_POST["email"];
// $blood = $_POST["blood"];
// $password = $_POST["password"];
// $city = $_POST["city"];


// return $username;

function login($username, $password)
{
    $con = getConnection();
    $sql = "select * from donarregistration where Email='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}


function getUser($email)
{

    $con = getConnection();
    $sql = "select * from donarregistration where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $username = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($username, $row);

    }
    return $username;
}




function profile()
{
    $username = $_COOKIE['user'];
    // $users = getUser($_COOKIE['user']);
    $con = getConnection();
    $sql = "select * from donarregistration where Email='{$username}'";
    $result = mysqli_query($con, $sql);
    $donarregistration = [];

    while ($user = mysqli_fetch_assoc($result)) {
        array_push($donarregistration, $user);
    }

    return $donarregistration;
}


function profileUpdate($name, $city, $email, $number)
{
    //$username = $_COOKIE['user'];
    // $users = getUser($_COOKIE['user']);

    $con = getConnection();
    $sql = "UPDATE donarregistration SET Name = '{$name}', City = '{$city}', Email = '{$email}', Number = '{$number}' WHERE Email = '{$email}';";
    $result = mysqli_query($con, $sql);
    // $user = mysqli_fetch_assoc($result);

    if ($result) {
        header('location: ../views/donarHome.php');
    } else {
        echo 'Error!';
    }
}



function findDonor($bloodGroup)
{
    $con = getConnection();
    $sql = "select * from donors where bloodGroup = '{$bloodGroup}'";
    $result = mysqli_query($con, $sql);
    $donors = [];

    while ($donor = mysqli_fetch_assoc($result)) {
        array_push($donors, $donor);
    }

    return $donors;
}


function findAllDonor()
{
    $con = getConnection();
    $sql = "select * from donors";
    $result = mysqli_query($con, $sql);
    $donors = [];

    while ($donor = mysqli_fetch_assoc($result)) {
        array_push($donors, $donor);
    }

    return $donors;
}


?>