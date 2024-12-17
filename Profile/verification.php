<?php 
require '../conexions/connect.php';

if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['auth_token'])) {
    header("Location: ../conexions/login.php");
    exit;
} else {  
    header("Location: profile.php");
}
?>