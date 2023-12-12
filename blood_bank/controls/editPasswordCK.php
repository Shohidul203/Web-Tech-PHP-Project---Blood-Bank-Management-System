<?php
include_once '../models/donorModel.php';

$oldPassword = $_REQUEST['oldPassword'];
$password = $_REQUEST['password'];


//$result = findDonor($oldPassword, $password);
// echo $result;

changePassword($oldPassword, $password);
header('../view/personal_information.php');
?>