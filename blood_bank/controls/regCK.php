<?php

require_once('../models/db.php');
$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, );

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$blood = $_POST["blood"];
$password = $_POST["password"];
$city = $_POST["city"];
$availability = $_POST["availability"];


$sql = "INSERT INTO donarregistration VALUES ('','$name', '$number', '$email', '$blood', '$password', '$city','$availability')";
$result = mysqli_query($con, $sql);

?>


<center>
    <h3>REGISTRATION SUCCESSFULLY</h3>
    <fieldset>
        <a href="../view/login.php">Sign In</a>
        <br><a href="../view/home.php">Go Home</a>

    </fieldset>
</center>