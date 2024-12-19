<?php
require '../conexions/connect.php';
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: ../conexions/login.php");
    exit;
} else {

    if ($_SESSION['role'] === 'admin') {
        header("Location: ../admin/adminpro.php");
    } else {
        header("Location: profile.php");
    }
    exit;
}
?>
