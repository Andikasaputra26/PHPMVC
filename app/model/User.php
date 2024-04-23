<?php
require '../config/koneksi.php';
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addUser($name, $email, $password) {
        $existingEmail = $this->getUserByEmail($email);
        if ($existingEmail) {
            return false;  
        }

        $existingName = $this->getUserByName($name);
        if ($existingName) {
            return false;  
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $add = $this->db->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
        return $add->execute([$name, $email, $hashedPassword]);
    }

    public function getUserByEmail($email) {
        $a = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $a->execute([$email]);
        return $a->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyPassword($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }

    public function getUserByName($name) {
        $user = $this->db->prepare("SELECT * FROM user WHERE name = ?");
        $user->execute([$name]);
        return $user->fetch(PDO::FETCH_ASSOC);
    }
}
?>
