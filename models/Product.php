<?php 
require 'config/db.php';
class Product {
    private $dbConn;

    public function __construct()
    {
        $db = new DbConnect();
        $this->dbConn = $db->getDbHandler();
    }
    public function GetProducts()
    {
        
        $stmt = $this->dbConn->prepare("SELECT `title`, `image`, `price`
        , `description`, `created_at`, `updated_at` FROM products");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $products = [];        
        foreach($stmt->fetchAll() as $k=>$v) {
            array_push($products, $v);
        }

        return $products;
    }

}