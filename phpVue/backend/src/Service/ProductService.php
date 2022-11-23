<?php

namespace src\Service;

use LogsW;
use Service\Iservice;
use src\Model\Product;
use src\Dao\DaoProduct;

class ProductService  implements Iservice
{
  public $uri;
  public $method;
  public $data;
  public $daoProduct;
  function __construct($uri, $method, $data)
  {
    $this->uri = $uri;
    $this->method = $method;
    $this->data = $data;
    $this->data = json_decode($this->data);
    $this->daoProduct = new DaoProduct();
  }
  function action()
  {
    LogsW::write('productService action: ' . $this->uri[4]);
    return  $this->uri[4];
  }
  function read()
  {
    
    return  $this->daoProduct->read();
  }
  function readById()
  {
    
    return  $this->daoProduct->readById($this->uri[5]);
  }
  function create()
  {
    
    $product = new Product();
    $product->name = $this->data->name;
    $product->price = $this->data->price;

    return $this->daoProduct->create($product);
  }
  function update()
  {
    $product = new Product();
    $product->id = $this->data->id;
    $product->name = $this->data->name;
    $product->price = $this->data->price;
    return  $this->daoProduct
      ->update(
        $product
      );
  }
  function delete()
  {
    
    return  $this->daoProduct->delete($this->uri[5]);
  }

  function  route()
  {
    switch ($this->action()) {
      case 'read':
        LogsW::write('CASE SERVICE: product read');
        return  $this->read();
      case 'readById':
        LogsW::write('CASE SERVICE: product readById');
        return $this->readById();
      case 'create':
        LogsW::write('CASE SERVICE: product create');
        return $this->create();
      case 'update':
        LogsW::write('CASE SERVICE: product update');
        return  $this->update();
      case 'delete':
        LogsW::write('CASE SERVICE: product delete');
        return  $this->delete();
      default:
        header("HTTP/1.1 404 Not Found");
        return  "404 Not Found";
    }
  }
}
