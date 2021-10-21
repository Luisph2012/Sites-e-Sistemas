<?php
    define("HOST","localhost");
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'amd lista');
    
    $conn = new MySQLi(HOST, USER, PASS, BASE) or die(mysqli_error($conn));
?>

