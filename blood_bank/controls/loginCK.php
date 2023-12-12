<?php
error_reporting(0);
$username = $_REQUEST['email_login'];
$password = $_REQUEST['password_login'];

require_once('../models/functional.php');

$status = login($username, $password);

if ($status) {
  setcookie('flag', 'true', time() + 3600, '/');
  setcookie('user', $username, time() + 3600, '/');

  //  echo "ok";

  header('location: ../view/donarHome.php');
} else {
  // echo 'Unknown User!';
}

?>