<?php

namespace App\Models;
use App\Database;

class Coupon{
    private $id;
    private $code;
    private $discount_type;
    private $discount_value;
    private $expiry_date;
    private $min_order_amount;
    private $max_uses;

    public_function __construct($code, $discount_type, $discount_value, $expiry_date, $min_order_amount, $max_uses){
        $this->code = $code;
        $this->discount_type = $discount_type;
        $this->discount_value = $discount_value;
        $this->expiry_date = $expiry_date;
        $this->min_order_amount = $min_order_amount;
        $this->max_uses = $max_uses;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($code){
        $this->code = $code;
    }

    public function getDiscount_Type(){
        return $this->discount_type;
    }

    public function setDiscount_Type($discount_type){
        $this->discount_type = $discount_type;
    }

    public function getDiscount_Value(){
        return $this->discount_value;
    }

    public function setDiscount_Value($discount_value){
        $this->discount_value = $discount_value;
    }

    public function getExpiry_Date(){
        return $this->expiry_date;
    }

    public function setExpiry_Date($expiry_date){
        $this->expiry_date = $expiry_date;
    }

    public function getMin_Order_Amount(){
        return $this->min_order_amount;
    }

    public function setMin_Order_Amount($min_order_amount){
        $this->min_order_amount = $min_order_amount;
    }

    public function getMax_Uses(){
        return $this->max_uses;
    }

    public function setMax_Uses($max_uses){
        $this->max_uses = $max_uses;
    }

    public function all(){
        $db = Database:: getConnection();
        $sql = "SELECT * FROM coupons";
        $coupons = $db->query($sql);
        return $coupons;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO coupons (code, discount_type, discount_value, expiry_date, min_order_amount, max_uses) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->code, $this->discount_type, $this->discount_value, $this->expiry_date, $this->min_order_amount, $this->max_uses]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE coupons SET code = ?, discount_type = ?, discount_value = ?, expiry_date = ?, min_order_amount = ?, max_uses = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->code, $this->discount_type, $this->discount_value, $this->expiry_date, $this->min_order_amount, $this->max_uses, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM coupons WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM coupons WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $coupon = $stmt->fetch();
        return $coupon;
    }

    public function findByCode($code){
        $db = Database::getConnection();
        $sql = "SELECT * FROM coupons WHERE code = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$code]);
        $coupon = $stmt->fetch();
        return $coupon;
    }

}