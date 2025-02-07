<?php

namespace App\Models;
use App\Database;

class Notification{
    private $id;
    private $user_id;
    private $message;
    private $is_read;
    private $created_at;

    public function __construct($title, $message, $is_read, $created_at){
        $this->title = $user_id;
        $this->message = $message;
        $this->is_read = $is_read;
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

    public function getMessage(){
        return $this->message;
    }

    public function setMessage($message){
        $this->message = $message;
    }

    public function getIs_Read(){
        return $this->is_read;
    }

    public function setIs_Read($is_read){
        $this->is_read = $is_read;
    }

    public function getCreated_At(){
        return $this->created_at;
    }

    public function setCreated_At($created_at){
        $this->created_at = $created_at;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM notifications";
        $result = $db->query($sql);
        return $result;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO notifications (user_id, message, is_read, created_at) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->message, $this->is_read, $this->created_at]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE notifications SET user_id = ?, message = ?, is_read = ?, created_at = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->message, $this->is_read, $this->created_at, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM notifications WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM notifications WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByUserId($user_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM notifications WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        return $result;
    }
}