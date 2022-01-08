<?php

class Product{
    public $sku;
    public $name;
    public $price;
    public $size;
    function __construct($sku, $name, $price, $size)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }
}

class DVD extends Product{
    function dimension($size)
    {
        echo "Size: " . $size;
    }
}

class Book extends Product{
    function dimension($size)
    {
        echo "Weight: " . $size;
    }
}

class Furniture extends Product{
    function dimension($size)
    {
        echo "Dimension: " . $size;
    }
}

?>