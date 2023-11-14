<!-- <?php
// header('location: registration.php');
?> -->


<section>
  <table border="0" width="100%">
    <tr>
      <br />
      <div style="text-align: center">
        <h1 style="font-size: 48px"> Welcome To Blood Bank </h1>
        <a href="http://localhost:2120/blood_bank/view/#">Home</a>
        &nbsp;&nbsp;
        <a href="requestBlood.php">Show Request</a>
        &nbsp;&nbsp;
        <a href="findDonor.php">Find Donor</a>
        &nbsp;&nbsp;
        <a href="contract.php">Contact Hospital</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="FAQ.php">FAQs</a>
        &nbsp;&nbsp;
        <a href="about.php">About Us</a>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php if (!isset($_COOKIE['flag'])) { ?>
          <a href="login.php">Profile</a>
          &nbsp;&nbsp;
          <a href="login.php">Login</a>
          &nbsp;&nbsp;
          <!-- <a href="registration.php">Registration</a> -->
        <?php } else { ?>
          <a href="logout.php">Logout</a>
        <?php } ?>
      </div>
    </tr>
  </table>
</section>