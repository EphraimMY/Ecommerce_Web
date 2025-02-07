<?php

namespace App\Models;
use App\Database;

class ProductImage{
    private $id;
    private $product_id;
    private $image_url;

    public function __construct($product_id, $image_url){
        $this->product_id = $product_id;
        $this->image = $image_url;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getProduct_Id(){
        return $this->product_id;
    }

    public function setProduct_Id($product_id){
        $this->product_id = $product_id;
    }

    public function getImage_URL(){
        return $this->image_url;
    }

    public function setImage_URL($image_url){
        $this->image = $image_url;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_images";
        $result = $db->query($sql);
        return $result;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO product_images (product_id, image_url) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->image_url]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE product_images SET product_id = ?, image_url = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->product_id, $this->image_url, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM product_images WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_images WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByProductId($product_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM product_images WHERE product_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetch();
        return $result;
    }
}