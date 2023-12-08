<?php
include_once 'db.php';

function findDonor($blood, $city)
{
    $con = getConnection();
    $sql = "select * from donarregistration where BloodType like '{$blood}%' and City like '%{$city}%';";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $output = '<tr>
            <th>Name</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Availability</th>
            <th>Address</th>
            <th>Contact Number</th>
        </tr>';

        while ($donor = mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                                <td>{$donor['Name']}</td>
                                <td>{$donor['BloodType']}</td>
                                <td>{$donor['City']}</td>
                                <td>{$donor['availability']}</td>
                                <td>{$donor['Number']}</td>
                        </tr>";
        }

        echo $output;
    } else {
        echo "Not Found!";
    }
}

function profileUpdate($name, $city, $email, $number, $availability)
{
    //$username = $_COOKIE['user'];
    // $users = getUser($_COOKIE['user']);

    $con = getConnection();
    $sql = "UPDATE donarregistration SET Name = '{$name}', City = '{$city}', Email = '{$email}', Number = '{$number}', availability = '{$availability}' WHERE Email = '{$email}'";
    $result = mysqli_query($con, $sql);
    // $user = mysqli_fetch_assoc($result);

    if ($result) {
        header('location: ../views/donarHome.php');
    } else {
        echo 'Error!';
    }
}

function changePassword($oldPassword, $password)
{
    $username = $_COOKIE['user'];

    $con = getConnection();
    $sql = "select * from donarregistration where Email='{$username}' and password='{$oldPassword}';";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $sql = "update donarregistration set password = '{$password}' where Email = '{$username}';";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // header('location: ../views/donarHome.php');
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>