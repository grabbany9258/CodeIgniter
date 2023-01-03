<?php

include('db_connection.php');
error_reporting(0);
$cartItems = $_REQUEST['cartItems'];
//$menu_items = explode(",",$cartItems);

$allUsers = mysqli_query($db_conn, "SELECT * FROM menu_list WHERE id IN ($cartItems)");
$html = '';
if (mysqli_num_rows($allUsers) > 0) {
    while ($row = mysqli_fetch_array($allUsers)) {
        $html .= $row['name'];
    }
}


echo json_encode(["success" => "yes",  "datas" => "show cart items " . $html]);
