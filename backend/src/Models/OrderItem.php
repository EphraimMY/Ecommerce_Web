<?php

namespace App\Models;
use App\Database;

class OrderItem{
   private $id;
   private $order_id;
   private $product_id;
   private $variant_id;
   private $quantity;
   private $price;


   public function __construct($order_id, $product_id, $variant_id, $quantity, $price){
       $this->order_id = $order_id;
       $this->product_id = $product_id;
       $this->variant_id = $variant_id;
       $this->quantity = $quantity;
       $this->price = $price;
   }

    public function getId(){
         return $this->id;
    }
    
     public function setId($id){
            $this->id = $id;
     }
    
     public function getOrder_Id(){
            return $this->order_id;
     }
    
     public function setOrder_Id($order_id){
            $this->order_id = $order_id;
     }
    
     public function getProduct_Id(){
            return $this->product_id;
     }
    
     public function setProduct_Id($product_id){
            $this->product_id = $product_id;
     }
    
     public function getVariant_Id(){
            return $this->variant_id;
     }
    
     public function setVariant_Id($variant_id){
            $this->variant_id = $variant_id;
     }
    
     public function getQuantity(){
            return $this->quantity;
     }
    
     public function setQuantity($quantity){
            $this->quantity = $quantity;
     }
    
     public function getPrice(){
            return $this->price;
     }
    
     public function setPrice($price){
            $this->price = $price;
     }
    
     public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM order_items";
        $result = $db->query($sql);
        return $result;
     }

        public function save(){
            $db = Database::getConnection();
            $sql = "INSERT INTO order_items (order_id, product_id, variant_id, quantity, price) VALUES (?, ?, ?, ?, ?)";
            $result = $db->query($sql);
            $stmt->execute([$this->order_id, $this->product_id, $this->variant_id, $this->quantity, $this->price]);
        }

        public function update(){
            $db = Database::getConnection();
            $sql = "UPDATE order_items SET order_id = ?, product_id = ?, variant_id = ?, quantity = ?, price = ? WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$this->order_id, $this->product_id, $this->variant_id, $this->quantity, $this->price, $this->id]);
        }

        public function delete(){
            $db = Database::getConnection();
            $sql = "DELETE FROM order_items WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$this->id]);
        }

        public function find($id){
            $db = Database::getConnection();
            $sql = "SELECT * FROM order_items WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function findByOrderId($order_id){
            $db = Database::getConnection();
            $sql = "SELECT * FROM order_items WHERE order_id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$order_id]);
            $result = $stmt->fetch();
            return $result;
        }
    }