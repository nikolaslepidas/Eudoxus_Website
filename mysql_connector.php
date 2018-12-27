
<?php

$servername = "localhost";
$db_username = "root";
$db_password = "toor";
$db_name = "testdb";

// Establishing Connection with Server
$connection = mysqli_connect($servername, $db_username, $db_password, $db_name);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
echo "Connected successfully";

?>