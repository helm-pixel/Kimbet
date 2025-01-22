<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'campsite';
define('BASE_URL', 'http://localhost/KP34903/Projectgp/');
define('ADMIN_BASE_URL', 'http://localhost/KP34903/Projectgp/admin');
define('ADMIN_BASE_PATH', '/admin');

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} 
//echo "DB Connection Successful." . "<br>";
?>
