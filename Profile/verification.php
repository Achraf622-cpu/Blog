<?php
require '../conexions/connect.php';
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: ../conexions/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];


if ($role == 1) {
    header("Location: ../admin/adminpro.php");
    exit;
} else {
    header("Location: profile.php");
    exit;
}
?>
