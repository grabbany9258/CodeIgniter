<?php

include('db_connection.php');
$sql = "SELECT * FROM categories";
$result = mysqli_query($db_conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $categories['categories_id'] = $row['categories_id'];
    $categories['categories_name'] = $row['categories_name'];
    $categories['categories_status'] = $row['categories_status'];

    $mycategories['pr'][] = $categories;
}
echo json_encode(["success" => "yes",  "datas" => $mycategories]);
