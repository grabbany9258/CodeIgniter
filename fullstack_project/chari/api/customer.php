<?php

include('db_connection.php');
$sql = "SELECT * FROM tbl_client";
$result = mysqli_query($db_conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $tbl_client['id'] = $row['id'];
    $tbl_client['name'] = $row['name'];
    $tbl_client['department'] = $row['department'];
    $tbl_client['mob_no'] = $row['mob_no'];
    $tbl_client['floor_nb'] = $row['floor_nb'];

    $mytbl_client['pr'][] = $tbl_client;
}
echo json_encode(["success" => "yes",  "datas" => $mytbl_client]);
