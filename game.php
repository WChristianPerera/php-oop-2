<?php
include_once __DIR__ . '/product.php';
class Game extends Product {
    public function __construct (
        int $id,
        string $img,
        string $title,
        int $price,
        Category $category,
    ) {
        parent::__construct($id, $img, $title, $price, $category);
    }

    
    public function getPrice(): int {
        return $this->price;
    }
}