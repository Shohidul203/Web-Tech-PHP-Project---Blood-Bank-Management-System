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

?>