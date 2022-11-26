<?php

require_once __DIR__ . "/vendor/autoload.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 86400");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Access-Control-Allow-Credentials: true');

$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_DATABASE'];

$conn = new mysqli($host, $user, $pass, $database);


$sql = "SELECT * FROM USERS";
$result = $conn->query($sql);
echo json_encode($result->fetch_all());


$conn->close();

?>
