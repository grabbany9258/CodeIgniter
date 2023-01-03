<?php

include('db_connection.php');
$sql = "SELECT * FROM menu_list";
$result = mysqli_query($db_conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $menu_list['id'] = $row['id'];
    $menu_list['image'] = $row['image'];
    $menu_list['name'] = $row['name'];
    $menu_list['description'] = $row['description'];

    $mymenu_list['pr'][] = $menu_list;
}
echo json_encode(["success" => "yes",  "datas" => $mymenu_list]);
