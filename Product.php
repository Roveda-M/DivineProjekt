<?php
class Product {
    private $conn;
    private $table = 'products';

    public function __construct($db) {
        $this->conn = $db;
    }

    
    public function getAllProducts() {
        $query = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function addProduct($name, $category, $price, $image_path, $stock = 0) {
        $query = "INSERT INTO {$this->table} (name, category, price, image_path, stock) 
                  VALUES (:name, :category, :price, :image_path, :stock)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image_path', $image_path);
        $stmt->bindParam(':stock', $stock);
        
        return $stmt->execute();
    }

   
    public function deleteProduct($id) {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>