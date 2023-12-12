<?php



function getConnection(){
   // session_start();
    $dbhost = 'localhost';
    $dbname = 'project';
    $dbuser = 'root';
    $dbpassword = '';
    
    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    return $con;
}


?>
