<?php
include_once '../models/usersModel.php';

$bloodGroup = $_GET['bloodGroup'];
$location = $_GET['location'];

$result = findDonor($bloodGroup, $location);
echo $result;
?>