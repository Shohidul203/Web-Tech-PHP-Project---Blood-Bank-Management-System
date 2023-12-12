<?php
    include_once 'db.php';

    function addBlood($name, $bloodGroup, $quantity, $mobileNumber) {
        $conn = getConnection();
        $sql = "insert into inventory (name, bloodGroup, quantity, mobileNumber) values ('{$name}', '{$bloodGroup}', '{$quantity}', '{$mobileNumber}')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'Blood added successfully!';
        }
        else {
            echo 'Failed to add blood!';
        }
    }
?>