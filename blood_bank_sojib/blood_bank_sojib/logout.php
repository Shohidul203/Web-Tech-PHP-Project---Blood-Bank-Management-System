<?php 
    session_start();
    setcookie('flag', 'true', time() - 100, '/');
    setcookie('user', $username, time() - 100, '/');
    header('location: login.php');
?>