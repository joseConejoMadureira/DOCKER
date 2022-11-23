<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 86400");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Access-Control-Allow-Credentials: true');

foreach (getallheaders() as $name => $value) {
  LogsW::write("$name: $value");
}
LogsW::write(json_encode($_SERVER['REQUEST_METHOD']));
LogsW::write($_SERVER['REQUEST_URI']);
