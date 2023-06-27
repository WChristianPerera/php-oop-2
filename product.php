<?php

class Product {
    public function __construct(
        protected int $id,
        protected string $img, 
        protected string $title, 
        protected int $price, 
        protected Category $category
    ) {
    
    }

    public function getImg(): string {
        return $this->img;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPrice(): int {
        return $this->price . '$';
    }
}