<?php
//include_once("regCK.php")
?>

<center>
    <form method="POST" action="regCK.php"  enctype="">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <fieldset>
                        <legend>
                            <h3>REGISTRATION</h3>
                        </legend>
                       
                        Name<br><input type="text" name="name"  ><br>
                        
                        Mobile Number<br ><input type="text" name="number"  /><br >

                        Email<br ><input type="email" name="email"/><br />

                        Blood Type<br /><input type="text" name="blood" /><br />

                        City <br /><input type="text" name="city"   /><br />

                        Password<br /><input type="password" name="password"  /><br />
                                            

                        <br><input type="submit" value="Registration" name="submit" />

                        <a href=" login.php">Sign In</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</center>


