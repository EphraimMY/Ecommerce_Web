<?php

namespace App\Models;
use App\Database;

class OrderReturn{
    private $id;
    private $order_id;
    private $reason;
    private $status;
    private $created_at;

    public function __construct($order_id, $reason, $status, $created_at){
        $this->order_id = $order_id;
        $this->reason = $reason;
        $this->status = $status;
        $this->created_at = $created_at;
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

    public function getReason(){
        return $this->reason;
    }

    public function setReason($reason){
        $this->reason = $reason;
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
        $sql = "SELECT * FROM order_returns";
        $result = $db->query($sql);
        return $result;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO order_returns (order_id, reason, status, created_at) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->order_id, $this->reason, $this->status, $this->created_at]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE order_returns SET order_id = ?, reason = ?, status = ?, created_at = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->order_id, $this->reason, $this->status, $this->created_at, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM order_returns WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM order_returns WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByOrderId($order_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM order_returns WHERE order_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$order_id]);
        $result = $stmt->fetch();
        return $result;
    }
}