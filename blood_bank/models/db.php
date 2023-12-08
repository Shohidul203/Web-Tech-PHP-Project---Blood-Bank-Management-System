<?php



function getConnection(){
   // session_start();
    $dbhost = 'localhost';
    $dbname = 'project';
    $dbuser = 'root';
    $dbpassword = '';
    
    // global $dbhost;
    // global $dbname;
    // global $dbpassword;
    // global $dbuser;

    $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    return $con;
}


?>
