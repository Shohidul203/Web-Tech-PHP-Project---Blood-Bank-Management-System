<?php
//include_once(" ../controls/loginCK.php");
include_once '../models/functional.php';
session_start();
//include_once("../models/.php");
$users = getUser($_COOKIE['user']);
include_once '../models/db.php';
$con = getConnection();

// $dbhost = 'localhost';
// $dbname = 'project';
// $dbuser = 'root';
// $dbpassword = '';

// $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, );

// $name = $_POST["name"];
// $number = $_POST["number"];
// $email = $_POST["email"];
// $blood = $_POST["blood"];
// $password = $_POST["password"];
// $city = $_POST["city"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal Information</title>
</head>

<body>
    <section>
        <table border="0" width="100%">
            <td width="25%"></td>
            <td>
                <table border="0" width="100%">
                    <tr>
                        <td width="100%" style="text-align: center">
                            <form>
                                <h1>Your Personal Information</h1>

                                <table border="1" cellpadding="8" cellspacing="0">

                                    <tr align="CENTER">
                                        <td><b>Name</td>
                                        <td><b>Number</td>
                                        <td><b>Email</td>
                                        <td><b>Blood Group</td>
                                        <td><b>Password</td>
                                        <td><b>City</td>
                                        <td><b>Availability</b></td>

                                    </tr>
                                    <?php for ($i = 0; $i < count($users); $i++) { ?>
                                        <tr align="left">

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
                                                <?= $users[$i]['BloodType'] ?>
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
                                        <td colspan=" 7" align="right">
                                            <a href="editProfile.php">Edit Profile </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="changePassword.php">Change Password
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;

                                            <a href="donarHome.php">Back</a>
                                        </td>
                                    </tr>
                                </table>

                            </form>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="25%"></td>
            </tr>
        </table>
    </section>



</body>

</html>