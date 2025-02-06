<?php
namespace App\Models;
use App\Database;

class Address{
    private $id;
    private $user_id;
    private $street_address;
    private $city;
    private $state;
    private $zip_code;
    private $country;

    public function __construct($user_id, $street_address, $city, $state, $zip_code, $country){
        $this->user_id = $user_id;
        $this->street_address = $street_address;
        $this->city = $city;
        $this->state = $state;
        $this->zip_code = $zip_code;
        $this->country = $country;
    }


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
    }

    public function getStreetAddress(){
        return $this->street_address;
    }

    public function setStreetAddress($street_address){
        $this->street_address = $street_address;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getState(){
        return $this->state;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function getZipCode(){
        return $this->zip_code;
    }

    public function setZipCode($zip_code){
        $this->zip_code = $zip_code;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function all(){
        $db = Database::getConnection();
        $sql = "SELECT * FROM addresses";
        $result = $db->query($sql);
        return $result;
    }

    public function save(){
        $db = Database::getConnection();
        $sql = "INSERT INTO addresses (user_id, street_address, city, state, zip_code, country) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->street_address, $this->city, $this->state, $this->zip_code, $this->country]);
    }

    public function update(){
        $db = Database::getConnection();
        $sql = "UPDATE addresses SET user_id = ?, street_address = ?, city = ?, state = ?, zip_code = ?, country = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->user_id, $this->street_address, $this->city, $this->state, $this->zip_code, $this->country, $this->id]);
    }

    public function delete(){
        $db = Database::getConnection();
        $sql = "DELETE FROM addresses WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$this->id]);
    }

    public function find($id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM addresses WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function findByUserId($user_id){
        $db = Database::getConnection();
        $sql = "SELECT * FROM addresses WHERE user_id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        return $result;
    }
}

