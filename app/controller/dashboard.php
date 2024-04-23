<?php
session_start();
require '../model/User.php';
// require '../config/koneksi.php';

$userModel = new User($koneksi);

if (!isset($_SESSION['id'])) {
    header("Location: ../views/login.php");
    exit();
}

$users = $userModel->getAllUsers();

require '../views/dashboard-view.php';


?>
