<?php
session_start();
require '../model/User.php';
require '../config/koneksi.php';

$userModel = new User($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userModel->getUserByEmail($email);

    if ($user && $userModel->verifyPassword($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../views/dashboard-view.php");
        exit();
    } else {
        echo "Email atau password salah!";
    }
} else {
    require '../views/login-view.php';
}

?>
