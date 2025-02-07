<?php

namespace App\Models;
use App\Database;

class OrderTracking{
   private $id;
   private $order_id;
   private $status;
   private $updated_at;


   public function __construct($order_id, $status, $updated_at){
       $this->order_id = $order_id;
       $this->status = $status;
       $this->updated_at = $updated_at;
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
    
     public function getStatus(){
            return $this->status;
     }
    
     public function setStatus($status){
            $this->status = $status;
     }
    
     public function getUpdated_At(){
            return $this->updated_at;
     }
    
     public function setUpdated_At($updated_at){
            $this->updated_at = $updated_at;
     }
    
     public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM order_tracking";
        $result = $db->query($sql);
        return $result;
        }

    public function save(){
            $db = Database::getConnection();
            $sql = "INSERT INTO order_tracking (order_id, status, updated_at) VALUES (?, ?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->execute([$this->order_id, $this->status, $this->updated_at]);
        }


    public function update(){
            $db = Database::getConnection();
            $sql = "UPDATE order_tracking SET order_id = ?, status = ?, updated_at = ? WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$this->order_id, $this->status, $this->updated_at, $this->id]);
        }

    public function delete(){
            $db = Database::getConnection();
            $sql = "DELETE FROM order_tracking WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$this->id]);
        }

    public function find($id){
            $db = Database::getConnection();
            $sql = "SELECT * FROM order_tracking WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }

    public function findByOrderId($order_id){
            $db = Database::getConnection();
            $sql = "SELECT * FROM order_tracking WHERE order_id = ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$order_id]);
            $result = $stmt->fetch();
            return $result;
        }
}