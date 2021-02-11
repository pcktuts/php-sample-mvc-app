<?php
class DbConnect {
    public $servername = "localhost";
    public $username = "flask";
    public $password = "flask";
    public $dbname = "php-sample";
    public $conn;

    public function getDbHandler()
    {
        try {            
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
        return $this->conn;  

    }
    public function closeDbConnection() {
        $this->conn = null;
    }
}

?> 