<?php
$host = 'localhost';
$firstName = 'root';
$password = '';
$database = 'data';

$conn = new mysqli($host, $firstName, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
