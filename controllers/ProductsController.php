<?php 
require 'models/Product.php';
class ProductsController {
    private $productModel;
    public function __construct()
    {
        $this->Product = new Product();
    }

    public function GetProducts()
    {
        $products = $this->Product->GetProducts();
        return $products;
    }
    // public function createProducts($product)
    // {
    //     // insert query
    // }
}