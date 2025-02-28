<?php
$host = "localhost";  // Change if needed
$user = "root";       // Change based on your MySQL username
$password = "";       // Change if your MySQL has a password
$dbname = "prograweb";  // Ensure this is correct

$mysqli = new mysqli($host, $user, $password, $dbname);

// Check if connection failed
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}

return $mysqli; // Ensure it returns a valid object
?>