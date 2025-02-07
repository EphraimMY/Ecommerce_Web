<?php

namespace App\Models;
use App\Database;

class Order(){
   private $id;
   private $user_id;
   private $total_price;
   private $coupon_id;
   private $shipping_fee;
   private $status;
   private $created_at;

   public function __construct($user_id, $total_price, $coupon_id, $shipping_fee, $status, $created_at){
       $this->user_id = $user_id;
       $this->total_price = $total_price;
       $this->coupon_id = $coupon_id;
       $this->shipping_fee = $shipping_fee;
       $this->status = $status;
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

    public function getTotal_Price(){
         return $this->total_price;
    }

    public function setTotal_Price($total_price){
         $this->total_price = $total_price;
    }

    public function getCoupon_Id(){
         return $this->coupon_id;
    }

    public function setCoupon_Id($coupon_id){
         $this->coupon_id = $coupon_id;
    }

    public function getShipping_Fee(){
         return $this->shipping_fee;
    }

    public function setShipping_Fee($shipping_fee){
         $this->shipping_fee = $shipping_fee;
    }

    public function getStatus(){
         return $this->status;
    }

    public function setStatus($status){
         $this->status = $status;
    }

    public function getCreated_At(){
         return $this->created_at;
    }

    public function setCreated_At($created_at){
         $this->created_at = $created_at;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM orders";
        $result = $db->query($sql);
        return $result;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO orders (user_id, total_price, coupon_id, shipping_fee, status, created_at) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->total_price, $this->coupon_id, $this->shipping_fee, $this->status, $this->created_at]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE orders SET user_id = ?, total_price = ?, coupon_id = ?, shipping_fee = ?, status = ?, created_at = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->total_price, $this->coupon_id, $this->shipping_fee, $this->status, $this->created_at, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM orders WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM orders WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByUserId($user_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM orders WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        return $result;
    }
}