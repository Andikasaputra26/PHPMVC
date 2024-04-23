<?php
require '../model/User.php';

require '../config/koneksi.php';

$userModel = new User($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $existingUser = $userModel->getUserByEmail($email);
    if ($existingUser) {
        echo "Email sudah digunakan!";
    } else {
        $result = $userModel->addUser($name, $email, $password);

        if ($result) {
            header("Location: ../views/login-view.php");
            // echo"Register Berhasil";
            exit();
        } else {
            echo "Registrasi gagal!";
        }
    }
} else {
    require '../views/register-view.php';
}
?>
