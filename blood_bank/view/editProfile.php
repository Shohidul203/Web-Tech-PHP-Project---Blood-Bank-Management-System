<?php
require_once '../controls/sessionCK.php';
//include_once 'header.php';
include_once '../models/functional.php';

$errMsg = "";
$name = $email = $city = $number = "";

$user = profile();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = false;

    if (empty($_REQUEST['name'])) {
        // $errMsg = "{$errMsg} <br />Name is required!";
        $flag = true;
    } else {
        $name = $_REQUEST['name'];
    }

    if (empty($_REQUEST['email'])) {
        //$errMsg = "{$errMsg} <br />Email Address is required!";
        $flag = true;
    } else {
        $email = $_REQUEST['email'];
    }

    $city = $_REQUEST['city'];

    $number = $_REQUEST['number'];

    $availability = $_REQUEST['availability'];

    if (!$flag) {
        include '../controls/editProfileCK.php';
        donarProfileUpdate($name, $city, $email, $number, $availability);
        if ($result) {
            $errMsg = "Profile Changed Successfully!";
        } else {
            $errMsg = "Failed!";
        }
    }



}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <script src="../assets/script.js"></script>

</head>

<body>


    <section>
        <table border="0" width="100%">
            <tr>
                <td width="25%"></td>
                <td>

                    <p style="color: red">
                        <?php echo $errMsg; ?>
                    </p>
                    <br />

                    <table border="0" width="100%">

                        <tr>



                            <td width="70%" style="text-align: center;">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    enctype="multipart/form-data">
                                    <fieldset>
                                        <legend><b>Edit Profile</b></legend>
                                        Name:
                                        <input id="name" type="text" name="name" value=""
                                            placeholder="<?= $user[0]['Name'] ?>" />
                                        <br /><br />
                                        Mobile Number:
                                        <input id="number" type="text" name="number" value=""
                                            placeholder="<?= $user[0]['Number'] ?>" />
                                        <br /><br />
                                        Email Address: <input id="email" type="email" name="email" value=""
                                            placeholder="<?= $user[0]['Email'] ?>" />
                                        <br /><br />
                                        City:
                                        <input id="city" type="text" name="city" value=""
                                            placeholder="<?= $user[0]['City'] ?>" />
                                        <br /><br />
                                        Availability:
                                        <input id="availability" type="text" name="availability" value=""
                                            placeholder="<?= $user[0]['availability'] ?>" />


                                        <br /><br />
                                        <input type="submit" name="submit" value="Submit"
                                            onclick="editProfile()" />&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="personal_information.php">Back</a>
                                        <br /><br />
                                    </fieldset>
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