<?php

class Config
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "product_db";
    private $create;

    
    

    function __construct()
    {
        $this->create = mysqli_connect($this->localhost, $this->username, $this->password, $this->database, );
    }

    public function getConnection()
    {
        return $this->create;
    }

    public function insertDatabase($carname, $model, $price)
    {
        $query = "INSERT INTO products (name, price, description) VALUES ('$carname', $price, '$model')";
        mysqli_query($this->create, $query);
    }

    public function selectDatabase()
    {
        $query = "SELECT * FROM products";
        return mysqli_query($this->create, $query);
    }
    public function updateDatabase($id, $carname, $model, $price)
    {
        $query = "UPDATE products SET name='$carname', description='$model', price=$price WHERE id=$id";
        mysqli_query($this->create, $query);
    }
    public function deleteDatabase($id)
    {
        $query = "DELETE FROM products WHERE id = $id";
        mysqli_query($this->create, $query);
    }

}

?>  