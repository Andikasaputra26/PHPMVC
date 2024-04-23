<?php
class Product{
    private $db;

    public function __construct($db)
    {
        $this->db= $db;
    }

    // CRUD DATA
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM product");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
       
    }

    public function addProduct($name, $deskripsi, $stok) {
        $stmt = $this->db->prepare("INSERT INTO product (name, deskripsi, stok) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $deskripsi, $stok]);
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare("SELECT * FROM product WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateBook($id,$name, $deskripsi, $stok) {
        $stmt = $this->db->prepare("UPDATE product SET name = ?, deskripsi = ?, stok = ? WHERE id = ?");
        return $stmt->execute([$name, $deskripsi, $stok, $id]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare("DELETE FROM product WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>