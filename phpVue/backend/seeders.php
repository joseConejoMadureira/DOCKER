<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'teste';
$database = 'FLASKDOCKER';
// check the MySQL connection status
$conn = new mysqli($host, $user, $pass,$database);

$sql = "INSERT INTO USERS (name) values ('cmd')";

$conn->query($sql);


?>