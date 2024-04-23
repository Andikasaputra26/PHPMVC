<?php
session_start();
require '../model/User.php';
require '../config/koneksi.php';

if (!isset($_SESSION['id'])) {
    header("Location: ../views/login.php");
    exit();
}
?>
