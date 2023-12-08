<?php
error_reporting(0);
require_once("../models/functional.php");

$dbhost = 'localhost';
$dbname = 'project';
$dbuser = 'root';
$dbpassword = '';

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

$email = $_POST['email_login'];
$password = $_POST['password_login'];
$sql = "select * from donarregistration where Email='{$email}' and password = '{$password}'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

?>


<center>
    <H2>Wekcome to your personal information section</H2>
    <fieldset>
        <legend>
            <h3>INFORMATION</h3>

        </legend>

    </fieldset>

    Your Name :<br />
    <?php echo $name ?><br />
    Your Number :<br />
    <?php echo $number ?><br />
    Your Email:<br />
    <?php echo $email ?><br />
    Your Blood Type :<br />
    <?php echo $blood ?><br />
    Your Password :<br />
    <?php echo $password ?><br />
    Your City :
    <?php echo $city ?><br />

    <a href=" ../view/login.php">Log In</a><br>
    <a href=" ../view/logout.php"> Log Out</a>

</center>