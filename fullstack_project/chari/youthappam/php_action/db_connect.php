<?php

$localhost = "localhost";

$username = "root";
// $username = "u318076185_grbreact";

$password = "";
// $password = "|3MZM>*mYs3";

$dbname = "youthappam";
// $dbname = "u318076185_grbreact";

// $store_url = "http://localhost/php-inventory/";
$store_url = "http://localhost/php-inventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if ($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
