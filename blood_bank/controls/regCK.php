<?php

require_once('../models/db.php');


function register($name, $number, $email, $blood, $password, $city, $availability)
{
    $con = getConnection();
    if ($name == "" || $number == "" || $email == "" || $blood == "" || $password == "" || $city == "" || $availability == "") {
        return "Please fill up all the inputs!";
    } else {

        $sql = "INSERT INTO donarregistration VALUES ('','$name', '$number', '$email', '$blood', '$password', '$city','$availability')";
        $result = mysqli_query($con, $sql);
    }

}


// $con = getConnection();

// $name = $_POST["name"];
// $number = $_POST["number"];
// $email = $_POST["email"];
// $blood = $_POST["blood"];
// $password = $_POST["password"];
// $city = $_POST["city"];
// $availability = $_POST["availability"];


// $sql = "INSERT INTO donarregistration VALUES ('','$name', '$number', '$email', '$blood', '$password', '$city','$availability')";
// $result = mysqli_query($con, $sql);

?>


<center>
    <h3>REGISTRATION SUCCESSFULLY</h3>
    <fieldset>
        <a href="../view/login.php">Sign In</a>
        <br><a href="../view/home.php">Go Home</a>

    </fieldset>
</center>