<!-- <?php
//include_once("../controls/loginCheck.php")

$email=$password="";
?> -->


<center>
		<table border=" 0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>LOGIN</h3>
						</legend>
						<form action="loginCK.php" method="post" enctype="">
						Email<br />
						<input type="email" name="email_login" placeholder="enter email" required value="<?php echo $email;?>" /><br />
						Password<br />
						<input type="password" name="password_login" placeholder="enter password" required value= "<?php echo $password; ?>" />
						<br />
						
						<input type="submit" value="Login" name="submit">
						</form>
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
		</table>
</center>