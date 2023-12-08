<!-- <?php
require_once '../controls/sessionCK.php';
include_once '../models/functional.php';

$errMsg = $blood = $city = "";
$donors = findAllDonor();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $flag = false;

  if (empty($_REQUEST['blood'])) {
    //$errMsg = "{$errMsg} <br />Blood Group is required!";
    $flag = true;
  } else {
    $blood = $_REQUEST['blood'];
  }

  // if (empty($_REQUEST['city'])) {
  //   $errMsg = "{$errMsg} <br /><br>Location is required!";
  //   $flag = true;
  // } else {
  //   $location = $_REQUEST['city'];
  // }
  $city = $_REQUEST['city'];

  if (!$flag) {
    $donors = findDonor($blood, $city);
  }
}

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Donor</title>
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
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="">
            <fieldset>
              <legend style="text-align: center"><b>Find Donor</b></legend>
              <br />
              Blood Group: <select id="blood" name="blood" value="<?php echo $blood; ?>">
                <option value="" <?php if (isset($bloodGroup) && $bloodGroup == "")
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
                  echo "selected"; ?>>AB+</option>
                <option value="AB-" <?php if (isset($blood) && $blood == "AB-")
                  echo "selected"; ?>>AB-</option>
              </select>
              <br /><br />
              Location:
              <input id="city" type="text" name="city" value="<?php echo $city; ?>" />
              <br /><br />
              <input type="submit" name="submit" value="Search" onclick="findDonor()" />
              <br /><br />
            </fieldset>
          </form>
        </td>
        <td width="25%"></td>
      </tr>
    </table>
  </section>

  <section>
    <br><br>
    <table border="0" width="100%">
      <tr>
        <td width="25%"></td>
        <td>
          <table border="1" width="100%">
            <tr>
              <td>Name</td>
              <td>bloodGroup</td>
              <td>City</td>
              <td>Availability</td>
              <td>Contact</td>
            </tr>

            <?php for ($i = 0; $i < count($donors); $i++) { ?>
              <tr>
                <td>
                  <?= $donors[$i]['Name'] ?>
                </td>

                <td>
                  <?= $donors[$i]['BloodType'] ?>
                </td>

                <td>
                  <?= $donors[$i]['City'] ?>
                </td>

                <td>
                  <?= $donors[$i]['availability'] ?>
                </td>

                <td><a href="tel:<?= $donors[$i]['Number'] ?>">
                    <?= $donors[$i]['Number'] ?>
                  </a></td>
              </tr>
            <?php } ?>

          </table>
        </td>
        <td width="25%"></td>
      </tr>
    </table>
  </section>
  <center> <a href="donarHome.php">Back</a> </center>
</body>

</html>