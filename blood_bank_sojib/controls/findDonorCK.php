<?php
include_once '../models/donorModel.php';

$blood = $_REQUEST['blood'];
$city = $_REQUEST['city'];

$result = findDonor($blood, $city);
echo $result;

?>