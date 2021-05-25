<?php

namespace src\model;

class Product
{
    private $sku;
    private $name;
    private $price;
    private $descrition;
    private $category;
    private $quantity;

    public function __construct()
    {
       
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSku()
    {
        return $this->sku;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescrition()
    {
        return $this->descrition;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getCategory()
    {
        return $this->category;
    }
}