<?php
namespace App\Models;

use App\Database;

class ProductSize{
    private $id;
    private $product_id;
    private $size_id;

    public function __construct($id, $product_id, $size_id){
        $this->id = $id;
        $this->product_id = $product_id;
        $this->size_id = $size_id;
    }

    public function getId(){
        return $this->id;
    }

    public function getProductId(){
        return $this->product_id;
    }

    public function getSizeId(){
        return $this->size_id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setProductId($product_id){
        $this->product_id = $product_id;
    }

    public function setSizeId($size_id){
        $this->size_id = $size_id;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert(){
        $db = Database::getConnection();
        $sql = "INSERT INTO product_sizes (product_id, size_id) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->size_id]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE product_sizes SET product_id = ?, size_id = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->size_id, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_sizes WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function getProductSizes($product_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchAll();
        return $result;
    }
    
    public function getProductSize($product_id, $size_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes WHERE product_id = ? AND size_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id, $size_id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findById($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByProductId($product_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function findBySizeId($size_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_sizes WHERE size_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$size_id]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function deleteByProductId($product_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_sizes WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
    }

    public function deleteBySizeId($size_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_sizes WHERE size_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$size_id]);
    }

    public function deleteByProductIdAndSizeId($product_id, $size_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_sizes WHERE product_id = ? AND size_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id, $size_id]);
    }

    public function deleteBySizeIdAndProductId($size_id, $product_id){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_sizes WHERE size_id = ? AND product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$size_id, $product_id]);
    }

    
}