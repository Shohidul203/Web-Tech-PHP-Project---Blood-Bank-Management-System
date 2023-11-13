<!-- <center>
<H2>Welcome to Home</H2>
<fieldset>
<legend>
    <h3>LOG IN SUCCESSFULLY</h3>
</legend>
    <a href=" personal_information.php">PERSONAL INFORMATION</a><br>
    <br><a href=" show_blood_request.php">SHOW BLOOD REQUEST</a><br>
    <br><a href=" contract_recipient.php">CONTRACT RECIPIENT</a><br>
    <br><a href=" logout.php">LOG OUT</a><br>
</fieldset>
</center> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Blood Bank Management System</title>
  </head>
  <body>
    <?php include_once 'header.php';?>
    <section>
      <br /><br /><br /><br />
      <table border="0" width="100%">
        <tr>
          <td width="25%"></td>
          <td width="50%">
            <table border="0" width="100%">
              <tr>
                <td width="40%">
                  <h1 style="font-size: 48px">
                    Donate<br /> your Blood<br /> for saving life
                  </h1>
                  <a href="registration.php"><button>REGISTER NOW</button></a>
                </td>
                <td width="60%" style="text-align: center">
                  <img
                    src="florid-vampire.png"
                    alt="hero-img"
                  />
                  <!-- <img src="world-blood-donor-day-poster.png" alt="hero-"> -->
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