<?php
include_once '../models/usersModel.php';

$oldPassword = $_GET['oldPassword'];
$password = $_GET['password'];

$result = changePassword($oldPassword, $password);
echo $result;
?>