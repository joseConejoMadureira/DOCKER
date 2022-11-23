<?php

namespace src\Dao;

use src\Model\Product;

interface Idao
{
    public function __construct();
    public function read();
    public function readById($id);
    public function update(Product $product);
    public function create(Product $product);
    public function delete($id);
}
