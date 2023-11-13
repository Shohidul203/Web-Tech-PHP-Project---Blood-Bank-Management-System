<?php
require_once '../controls/sessionCK.php';
include_once 'header.php';
include_once '../models/functional.php';

$errMsg = "";
$name = $email = $city = $number = "";

$user = profile();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = false;

    if (empty($_REQUEST['name'])) {
        $errMsg = "{$errMsg} <br />Name is required!";
        $flag = true;
    } else {
        $name = $_REQUEST['name'];
    }

    if (empty($_REQUEST['email'])) {
        $errMsg = "{$errMsg} <br />Email Address is required!";
        $flag = true;
    } else {
        $email = $_REQUEST['email'];
    }

    $city = $_REQUEST['city'];
    $number = $_REQUEST['number'];

    if (!$flag) {
        include '../controls/editProfileCK.php';
        donarProfileUpdate($name, $city, $email, $number);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
</head>

<body>
    <?php include_once 'header.php'; ?>

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
                        <tr>



                            <td width="70%" style="text-align: center;">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    enctype="multipart/form-data">
                                    <fieldset>
                                        Name:
                                        <input type="text" name="name" value="<?= $user[0]['Name'] ?>" />
                                        <br /><br />
                                        Mobile Number:
                                        <input type="text" name="number" value="<?= $user[0]['Number'] ?>" />
                                        <br /><br />
                                        Email Address: <input type="email" name="email"
                                            value="<?= $user[0]['Email'] ?>" />
                                        <br /><br />
                                        City:
                                        <input type="text" name="city" value="<?= $user[0]['City'] ?>" />


                                        <br /><br />
                                        <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="donarHome.php">Go Home</a>
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