<?php
//require_once('../models/db.php');
$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname,);

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$blood = $_POST["blood"];
$password = $_POST["password"];
$city = $_POST["city"];


$sql = "INSERT INTO donarregistration VALUES ('','$name', '$number', '$email', '$blood', '$password', '$city')";
$result = mysqli_query($con, $sql);



?>


<legend>
    <h3>REGISTRATION SUCCESSFULLY</h3>
    <a href="login.php">Sign In</a>
</legend>


