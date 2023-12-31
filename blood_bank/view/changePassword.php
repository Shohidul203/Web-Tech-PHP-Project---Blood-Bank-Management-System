<?php
require_once '../controls/sessionCK.php';
//include_once 'header.php';

$errMsg = "";
$oldPassword = $password = $password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flag = false;

    if (empty($_REQUEST['oldPassword'])) {
        // $errMsg = "{$errMsg} <br />Old is required!";
        $flag = true;
    } else {
        $oldPassword = $_REQUEST['oldPassword'];
    }

    if (empty($_REQUEST['password'])) {
        // $errMsg = "{$errMsg} <br />New Password is required!";
        $flag = true;
    } else {
        $password = $_REQUEST['password'];
    }

    if (empty($_REQUEST['password2'])) {
        // $errMsg = "{$errMsg} <br />Please confirm New Password!";
        $flag = true;
    } else if (!($_REQUEST['password'] == $_REQUEST['password2'])) {
        // $errMsg = "{$errMsg}<br />New Password didn't match!";
        $flag = true;
    } else {
        $password = $_REQUEST['password'];
    }

    if (!$flag) {
        include_once '../models/donorModel.php';
        $result = changePassword($oldPassword, $password);

        if ($result) {
            $errMsg = " &nbsp;&nbsp; Password Changed Successfully!";
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
    <title>Change Password</title>
    <script src="../assets/script.js"></script>
</head>

<body>
    <section>
        <table border="0" width="100%">
            <tr>
                <td width="30%"></td>
                <td>
                    <p style="color: red">
                        <?php echo $errMsg; ?>
                    </p>
                    <br />

                    <table border="0" width="100%">
                        <tr>
                            <td width="70%" style="text-align: center">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                    enctype="">
                                    <fieldset>
                                        <legend><b>Change Password</b></legend>

                                        Old Password:
                                        <input id="oldPassword" type="password" name="oldPassword" value="" />
                                        <br /><br />
                                        New Password:
                                        <input id="password" type="password" name="password" value="" />
                                        <br /><br />
                                        Confirm New Password:
                                        <input id="password2" type="password" name="password2" value="" />
                                        <br /><br />
                                        <input type="submit" name="submit" value="Change Password"
                                            onclick="changePassword()" />&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="personal_information.php">Back</a>
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
    <section>
        <center>
            <!-- <h2 id="newpass"> Your New Password is :</h2> -->
        </center>
    </section>
</body>

</html>