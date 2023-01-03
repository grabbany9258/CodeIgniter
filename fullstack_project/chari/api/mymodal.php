<?php
include("db_connection.php");

$data = file_get_contents("php://input");
//echo ($data);
$data = json_decode($data);
// $data = $data->info; ata lagto jodi mymodal.js a {info} avabe rakhtam API link a

// 11 nb line ar condition na diye 15 nb line ar condition dileo kaj korbe

// if (isset($data->name) && !empty($data->name) && isset($data->city) && !empty($data->city)) {

$name = $data->name;
$city = $data->city;
if ($name && $city) {


    mysqli_query($db_conn, "INSERT INTO donores (name, city) VALUES ('$name', '$city')");
    if (mysqli_affected_rows($db_conn) > 0) {
        echo json_encode(["msg" => "Inserted"]);
    } else {
        echo  json_encode(["msg" => "problem found"]);
    }
}
