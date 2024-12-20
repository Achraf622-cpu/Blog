<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'password';
$database = 'blogs';

$conn = new mysqli($host, $user, $pass, $database);


if ($conn->connect_error) { 
    die('Connection failed'. $conn->connect_error);
}
?>