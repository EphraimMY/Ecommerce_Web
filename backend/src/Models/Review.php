<?php

namespace App\Models;
use App\Database;

class Review{
    private $id;
    private $user_id;
    private $product_id;
    private $rating;
    private $comment;
    private $created_at;

    public function __construct($user_id, $product_id, $rating, $comment, $created_at){
        $this->user_id = $user_id;
        $this->product_id = $product_id;
        $this->rating = $rating;
        $this->comment = $comment;
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

    public function getRating(){
        return $this->rating;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function getComment(){
        return $this->comment;
    }

    public function setComment($comment){
        $this->comment = $comment;
    }

    public function getCreated_At(){
        return $this->created_at;
    }

    public function setCreated_At($created_at){
        $this->created_at = $created_at;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM reviews";
        $result = $db->query($sql);
        return $result;
        }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO reviews (user_id, product_id, rating, comment, created_at) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->query($sql);
        $stmt->execute([$this->user_id, $this->product_id, $this->rating, $this->comment, $this->created_at]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE reviews SET user_id = ?, product_id = ?, rating = ?, comment = ?, created_at = ? WHERE id = ?";
        $stmt = $db->query($sql);
        $stmt->execute([$this->user_id, $this->product_id, $this->rating, $this->comment, $this->created_at, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM reviews WHERE id = ?";
        $stmt = $db->query($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM reviews WHERE id = ?";
        $stmt = $db->query($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByUserId($user_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM reviews WHERE user_id = ?";
        $stmt = $db->query($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        return $result;
    }
}