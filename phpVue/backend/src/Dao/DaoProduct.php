<?php

namespace src\Dao;

use PDO;
use LogsW;
use PDOException;
use src\Dao\Idao;
use src\Model\Product;

class DaoProduct implements Idao
{
    public $connection;
    function __construct()
    {
        $this->connection = ConnectionPDO::getInstance();
    }
    public function read()
    {
        $sql = "SELECT * FROM products";
        try {
            return $this->connection->query($sql)
                ->fetchAll(PDO::FETCH_CLASS, Product::class);
        } catch (PDOException $e) {

            LogsW::write($e);
            return 'error read products';
        }
    }
    public function create(Product $product)
    {
        $statement = "
        INSERT INTO products 
            ( name, price)
        VALUES
            (:name, :price);";

        try {
            return $this->connection->prepare($statement)
                ->execute(array(
                    'name' => $product->name,
                    'price' => $product->price
                ));
        } catch (PDOException $e) {

            LogsW::write($e);
            return 'error create products';
        }
    }
    public function readById($id)
    {
        $sql = "SELECT * FROM products WHERE id=" . $id;
        try {
            return $result =  $this->connection->query($sql)
                ->fetchObject();
        } catch (PDOException $e) {

            LogsW::write($e);
            return 'error readById products';
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id=" . $id;
        try {
            return $result =  $this->connection->query($sql)
                ->rowCount();
        } catch (PDOException $e) {
            LogsW::write($e);
            return 'error delete products';
        }
    }
    public function update(Product $product)
    {
        $data = [
            'name' => $product->name,
            'price' => $product->price,
            'id' => $product->id,
        ];
        $sql = "UPDATE products SET name=:name, price=:price WHERE id=:id";
        try {
            $stmt = $this->connection->prepare($sql);
            return   $stmt->execute($data);
        } catch (PDOException $e) {
            LogsW::write($e);
            return 'error update products';
        }
    }
}
