<?php
error_reporting(0);
include_once(" ../controls/regCK.php");
?>


<center>
    <form method="POST" action=" ../controls/regCK.php" enctype="">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend>
                            <h3>REGISTRATION</h3>
                        </legend>

                        Name<br><input type="text" name="name" required><br>

                        Mobile Number<br><input type="text" name="number" required /><br>

                        Email<br><input type="email" name="email" required /><br /> <br>

                        <!-- Blood Type<br /><input type="text" name="blood" /><br /> -->
                        Blood Group: <select name="blood" id="blood" required value="<?php echo $blood; ?>">
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

                        City <br /><input type="text" name="city" required /><br />

                        Availability <br /><input type="text" name="availability" required /><br />

                        Password<br /><input type="password" name="password" required /><br />


                        <br><input type="submit" value="Registration" name="submit" /> &nbsp;&nbsp;
                        <!-- <p>Don't have an account? <a href="registration.php">Register Now</a></p> -->

                        <p>Do you have an account? <a href="login.php">Sign In</a></p>
                        <a href="home.php">Home</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</center>