<?php

namespace App\Models;
use App\Database;

class Wishlist{
    private $id;
    private $user_id;
    private $product_id;
    private $created_at;

    public function __construct($user_id, $product_id, $created_at){
        $this->user_id = $user_id;
        $this->product_id = $product_id;
        $this->created_at = $created_at;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUser_Id(){
        return $this->user_id;
    }

    public function setUser_Id($user_id){
        $this->user_id = $user_id;
    }

    public function getProduct_Id(){
        return $this->product_id;
    }

    public function setProduct_Id($product_id){
        $this->product_id = $product_id;
    }

    public function getCreated_At(){
        return $this->created_at;
    }

    public function setCreated_At($created_at){
        $this->created_at = $created_at;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM wishlists";
        $result = $db->query($sql);
        return $result;
        }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO wishlists (user_id, product_id, created_at) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->product_id, $this->created_at]);
        }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE wishlists SET user_id = ?, product_id = ?, created_at = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->product_id, $this->created_at, $this->id]);
        }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM wishlists WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
        }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM wishlists WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
        }

    public function findByUserId($user_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM wishlists WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        return $result;
        }
    }
