<?php
namespace App\Models;

use App\Database;

class ProductVariantStock{
    private $id;
    private $product_id;
    private $color_id;
    private $size_id;
    private $stock_quantity;

    public function __construct($product_id, $color_id, $size_id, $stock_quantity, $id = null){
        $this->id = $id;
        $this->product_id = $product_id;
        $this->color_id = $color_id;
        $this->size_id = $size_id;
        $this->stock_quantity = $stock_quantity;
    }

    public function getId(){
        return $this->id;
    }

    public function getProductId(){
        return $this->product_id;
    }

    public function getColorId(){
        return $this->color_id;
    }

    public function getSizeId(){
        return $this->size_id;
    }

    public function getStockQuantity(){
        return $this->stock_quantity;
    }

    public function save(){
        $db = Database::getConnection();
        if($this->id === null){
            $stmt = $db->prepare('INSERT INTO product_variant_stock (product_id, color_id, size_id, stock_quantity) VALUES (?, ?, ?, ?)');
            $stmt->execute([$this->product_id, $this->color_id, $this->size_id, $this->stock_quantity]);
            $this->id = $db->lastInsertId();
        }else{
            $stmt = $db->prepare('UPDATE product_variant_stock SET product_id = ?, color_id = ?, size_id = ?, stock_quantity = ? WHERE id = ?');
            $stmt->execute([$this->product_id, $this->color_id, $this->size_id, $this->stock_quantity, $this->id]);
        }
    }

}