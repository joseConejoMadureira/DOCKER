<?php
require_once __DIR__ . "/vendor/autoload.php";

use src\Service\ProductService;

$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

$uri = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$service = $uri[3];
$data = json_decode(file_get_contents("php://input"));
$data = json_encode($data);
LogsW::write("input: ".$data);
switch ($service) {
        //PRODUCT
    case 'product':
        LogsW::write('CASE: product');
        $product  = new  ProductService($uri, $method, $data);
        echo  json_encode($product->route());
        break;
        // Y
    case 'y':
        break;
        // Z
    case 'z':
        break;
        // 404 
    default:
        LogsW::write('Service Not Found');
        header("HTTP/1.1 404 Not Found");
        echo json_encode("Service Not Found");
        die();
}
