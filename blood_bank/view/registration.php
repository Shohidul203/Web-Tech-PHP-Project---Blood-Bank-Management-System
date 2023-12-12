<?php
error_reporting(0);
include_once(" ../controls/regCK.php");

if (isset($_COOKIE['flag'])) {
    header('location: header.php');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../controls/regCK.php';

    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $blood = $_POST["blood"];
    $password = $_POST["password"];
    $city = $_POST["city"];
    $availability = $_POST["availability"];

    $msg = register($name, $number, $email, $blood, $password, $city, $availability);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="../assets/script.js"></script>

</head>

<body>


    <center>
        <p style="color: red">
            <?php echo $msg; ?>
        </p>
        <!-- <form name="registration" method="post" action="
        <?php
        // echo htmlspecialchars($_SERVER["PHP_SELF"]); 
        ?>"
            enctype="multipart/form-data" onsubmit="registration()"> -->

        <form method="POST" action=" ../controls/regCK.php" enctype="">

            <table border="0" cellspacing="6" cellpadding="6" width="23%">
                <tr>
                    <td>
                        <fieldset>
                            <legend style="text-align: center">
                                <h3>REGISTRATION</h3>
                            </legend>

                            Name<br><input id="name" type="text" name="name" required><br>

                            Mobile Number<br><input id="number" type="text" name="number" required /><br>

                            Email<br><input id="email" type="email" name="email" required /><br /> <br>

                            <!-- Blood Type<br /><input type="text" name="blood" /><br /> -->
                            Blood Group: <select name="blood" id="blood" required value="<?php echo $blood; ?>">
                                <option value="--" <?php if (isset($blood) && $blood == "A+")
                                    echo "selected"; ?>>--</option>
                                <option value="A+" <?php if (isset($blood) && $blood == "A+")
                                    echo "selected"; ?>>A+</option>
                                <option value="A-" <?php if (isset($blood) && $blood == "A-")
                                    echo "selected"; ?>>A-</option>
                                <option value="B+" <?php if (isset($blood) && $blood == "B+")
                                    echo "selected"; ?>>B+</option>
                                <option value="B-" <?php if (isset($blood) && $blood == "B-")
                                    echo "selected"; ?>>B-</option>
                                <option value="O+" <?php if (isset($blood) && $blood == "O+")
                                    echo "selected"; ?>>O+</option>
                                <option value="O-" <?php if (isset($blood) && $blood == "O-")
                                    echo "selected"; ?>>O-</option>
                                <option value="AB+" <?php if (isset($blood) && $blood == "AB+")
                                    echo "selected"; ?>>AB+
                                </option>
                                <option value="AB-" <?php if (isset($blood) && $blood == "AB-")
                                    echo "selected"; ?>>AB-
                                </option>
                            </select> <br> <br>

                            City <br /><input id="city" type="text" name="city" required /><br />

                            Availability <br /><input id="availability" type="text" name="availability"
                                required /><br />

                            Password<br /><input id="password" type="password" name="password" required /><br />


                            <br><input type="submit" value="Registration" name="submit" onclick="registration()" />
                            &nbsp;&nbsp;

                            <p>Do you have an account? <a href="login.php">Sign In</a></p>
                            <a href="home.php">Home</a>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>