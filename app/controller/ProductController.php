<?php

require_once '../config/koneksi.php';
require_once '../model/Product.php';

class ProductController {
    private $product;

    public function __construct() {
        global $db;
        $this->product = new Product($db);
    }

    public function index() {
        $product = $this->product->getAll();
        return '../views/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $deskripsi = $_POST['deskripsi'];
            $stok = $_POST['stok'];
            $this->product->addProduct($name, $deskripsi, $stok);
            header('Location: ../views/index.php');
        } else {
            include '../views/add.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $deskripsi = $_POST['deskripsi'];
            $stok = $_POST['stok'];
            $this->product->updateBook($id, $name, $deskripsi, $stok);
            header('Location: ../views/index.php');
        } else {
            $book = $this->product->getProductById($id);
            include '../views/edit.php';
        }
    }

    public function delete($id) {
        $this->product->deleteProduct($id);
        header('Location: ../views/index.php');
    }
}

?>