<?php
namespace App\Models;

use App\Database;

class Product{
    private $id;
    private $title;
    private $price;
    private $category_id;
    private $slug;
    private $SKU;
    private $description;
    private $stock_status;
    private $available_quantity;
    private $created_at;

    public function __construct($title, $price, $category_id, $slug, $SKU, $description, $stock_status){
        $this->title = $title;
        $this->price = $price;
        $this->category_id = $category_id;
        $this->slug = $slug;
        $this->SKU = $SKU;
        $this->description = $description;
        $this->stock_status = $stock_status;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategoryId(){
        return $this->category_id;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getSKU(){
        return $this->SKU;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getStockStatus(){
        return $this->stock_status;
    }

    public function getAvailableQuantity(){
        return $this->available_quantity;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setCategoryId($category_id){
        $this->category_id = $category_id;
    }

    public function setSlug($slug){
        $this->slug = $slug;
    }

    public function setSKU($SKU){
        $this->SKU = $SKU;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function setStockStatus($stock_status){
        $this->stock_status = $stock_status;
    }

    public function setAvailableQuantity($available_quantity){
        $this->available_quantity = $available_quantity;
    }

    public function setCreatedAt($created_at){
        $this->created_at = $created_at;
    }

    public function create()
    {
        $sql = "INSERT INTO products (title, price, category_id, slug, SKU, description, stock_status) VALUES (:title, :price, :category_id, :slug, :SKU, :description, :stock_status)";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':slug', $this->slug);
        $stmt->bindParam(':SKU', $this->SKU);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':stock_status', $this->stock_status);
        return $stmt->execute();
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public static function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function update()
    {
        $sql = "UPDATE products SET title = :title, price = :price, category_id = :category_id, slug = :slug, SKU = :SKU, description = :description, stock_status = :stock_status WHERE id = :id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':slug', $this->slug);
        $stmt->bindParam(':SKU', $this->SKU);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':stock_status', $this->stock_status);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public static function getByCategoryId($category_id)
    {
        $sql = "SELECT * FROM products WHERE category_id = :category_id";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public static function getBySlug($slug)
    {
        $sql = "SELECT * FROM products WHERE slug = :slug";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public static function getBySKU($SKU)
    {
        $sql = "SELECT * FROM products WHERE SKU = :SKU";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindParam(':SKU', $SKU);
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public static function search($keyword)
    {
        $sql = "SELECT * FROM products WHERE title LIKE :keyword OR description LIKE :keyword";
        $stmt = Database::getConnection()->prepare($sql);
        $stmt->bindValue(':keyword', "%$keyword%");
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }


}