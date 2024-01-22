<?php
$host = "localhost";
$username = "onenetly_freenetly";
$password = "AmiMotiur27@";
$database = "onenetly_freenetly";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>