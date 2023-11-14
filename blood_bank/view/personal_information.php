<?php
//include_once(" ../controls/loginCK.php");
include_once '../models/functional.php';
session_start();
//include_once("../models/.php");
$users = getUser($_COOKIE['user']);

$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, );

// $name = $_POST["name"];
// $number = $_POST["number"];
// $email = $_POST["email"];
// $blood = $_POST["blood"];
// $password = $_POST["password"];
// $city = $_POST["city"];

?>

<center>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td colspan="7" align="CENTER"><b>Personal Information</b></td>
        </tr>

        <tr align="CENTER">
            <td><b>Name</td>
            <td><b>Number</td>
            <td><b>Email</td>
            <td><b>Blood Type</td>
            <td><b>Password</td>
            <td><b>City</td>
            <td><b>availability</b></td>

        </tr>
        <?php for ($i = 0; $i < count($users); $i++) { ?>
            <tr>

                <td>
                    <?= $users[$i]['Name'] ?>
                </td>
                <td>
                    <?= $users[$i]['Number'] ?>
                </td>
                <td>
                    <?= $users[$i]['Email'] ?>
                </td>
                <td>
                    <?= $users[$i]['Blood Type'] ?>
                </td>
                <td>
                    <?= $users[$i]['password'] ?>
                </td>
                <td>
                    <?= $users[$i]['City'] ?>
                </td>
                <td>
                    <?= $users[$i]['availability'] ?>
                </td>
            </tr>

        <?php } ?>

        <tr>
            <td colspan="7" align="right">
                <a href="editProfile.php">Edit </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="donarHome.php">Go Home</a>
            </td>
        </tr>
    </table>
</center>