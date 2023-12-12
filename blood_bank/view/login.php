<?php
include_once("../controls/loginCK.php");

$email = $password = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
	<script src="../assets/script.js"></script>

</head>

<body>

	<center>
		<table border=" 0" cellspacing="0" cellpadding="0" width="23%">
			<tr>
				<td>
					<fieldset>
						<legend style="text-align: center">
							<h3>LOGIN</h3>
						</legend>
						<form action="" method="post" enctype="">
							Email<br />
							<input id="email_login" type="email" name="email_login" placeholder="enter your email"
								value="<?php echo $email; ?>" /><br />
							Password<br />
							<input id="password_login" type="password" name="password_login"
								placeholder="enter your password" value="<?php echo $password; ?>" />
							<br />

							<input type="submit" value="Login" name="submit" onclick="login()">
						</form>
						<p>Don't have an account? <a href="registration.php">Register Now</a></p>
						<!-- <a href="registration.php">Register</a> -->
						<a href="home.php">Home</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</center>

</body>

</html>