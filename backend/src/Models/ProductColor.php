<?php
namespace App\Models;

use App\Database;

class ProductColor{
    private $id;
    private $product_id;
    private $color_id;

    public function __construct($id, $product_id, $color_id){
        $this->id = $id;
        $this->product_id = $product_id;
        $this->color_id = $color_id;
    }

    public function getId(){
        return $this->id;
    }

    public function getProductId(){
        return $this->product_id;
    }

    public function getColorId(){
        return $this->color_id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setProductId($product_id){
        $this->product_id = $product_id;
    }

    public function setColorId($color_id){
        $this->color_id = $color_id;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_colors";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert(){
        $db = Database::getConnection();
        $sql = "INSERT INTO product_colors (product_id, color_id) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->color_id]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE product_colors SET product_id = ?, color_id = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->color_id, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_colors WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function findById($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_colors WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByProductId($product_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_colors WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function findByColorId($color_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_colors WHERE color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$color_id]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function findByProductIdAndColorId($product_id, $color_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_colors WHERE product_id = ? AND color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id, $color_id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function deleteByProductId($product_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_colors WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
    }

    public function deleteByColorId($color_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_colors WHERE color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$color_id]);
    }

    public function deleteByProductIdAndColorId($product_id, $color_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_colors WHERE product_id = ? AND color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id, $color_id]);
    }

    public function updateByProductId($product_id){
        $db = Database::getConnection();
        $sql = "UPDATE product_colors SET product_id = ? WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $product_id]);
    }

    public function updateByColorId($color_id){
        $db = Database::getConnection();
        $sql = "UPDATE product_colors SET color_id = ? WHERE color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->color_id, $color_id]);
    }

    public function updateByProductIdAndColorId($product_id, $color_id){
        $db = Database::getConnection();
        $sql = "UPDATE product_colors SET product_id = ?, color_id = ? WHERE product_id = ? AND color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->color_id, $product_id, $color_id]);
    }

    public function count(){
        $db = Database::getConnection();
        $sql = "SELECT COUNT(*) FROM product_colors";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        return $result;
    }

    public function countByProductId($product_id){
        $db = Database::getConnection();
        $sql = "SELECT COUNT(*) FROM product_colors WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchColumn();
        return $result;
    }

    public function countByColorId($color_id){
        $db = Database::getConnection();
        $sql = "SELECT COUNT(*) FROM product_colors WHERE color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$color_id]);
        $result = $stmt->fetchColumn();
        return $result;
    }

    public function countByProductIdAndColorId($product_id, $color_id){
        $db = Database::getConnection();
        $sql = "SELECT COUNT(*) FROM product_colors WHERE product_id = ? AND color_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id, $color_id]);
        $result = $stmt->fetchColumn();
        return $result;
    }
}