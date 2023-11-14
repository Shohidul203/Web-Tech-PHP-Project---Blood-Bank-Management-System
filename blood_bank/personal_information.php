<?php
include_once("models/functional.php");
session_start();
//include_once("../models/.php");
$users = getUser($_COOKIE['user']);

$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname,);

// $name = $_POST["name"];
// $number = $_POST["number"];
// $email = $_POST["email"];
// $blood = $_POST["blood"];
// $password = $_POST["password"];
// $city = $_POST["city"];

?>

<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td colspan="6" align="CENTER">Personal Information</td>
        </tr>

        <tr>
            <td>Name</td>
            <td>Number</td>
            <td>Email</td>
            <td>Blood Type</td>
            <td>Password</td>
            <td>City</td>
            
        </tr>
        <?php for ($i = 0; $i < count($users); $i++) { ?>
            <tr>
                
                <td><?= $users[$i]['Name'] ?></td>
                <td><?= $users[$i]['Number'] ?></td>
                <td><?= $users[$i]['Email'] ?></td>
                <td><?= $users[$i]['Blood Type'] ?></td>
                <td><?= $users[$i]['password'] ?></td>
                <td><?= $users[$i]['City'] ?></td>
            </tr>

        <?php } ?>

        <tr>
            <td colspan="6" align="right">
                <a href="home.php">Go Home</a>
            </td>
        </tr>
    </table>
</center>

