<?php
require '../config/koneksi.php';
class User {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
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

        $add = $this->koneksi->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
        return $add->execute([$name, $email, $hashedPassword]);
    }

    public function getUserByEmail($email) {
        $a = $this->koneksi->prepare("SELECT * FROM user WHERE email = ?");
        $a->execute([$email]);
        return $a->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyPassword($password, $hashedPassword) {
        return password_verify($password, $hashedPassword);
    }

    public function getUserByName($name) {
        $user = $this->koneksi->prepare("SELECT * FROM user WHERE name = ?");
        $user->execute([$name]);
        return $user->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers() {
        // $users = $this->koneksi->query("SELECT * FROM user");
        // $data = $users->fetchAll(PDO::FETCH_ASSOC);
        
        // if ($users->rowCount() > 0) {
        //     return $data;
        // } else {
        //     return "Data not found";
        // }
        $query = "SELECT * FROM user";
        $statement = $this->koneksi->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>
