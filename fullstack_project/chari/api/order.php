<?php
include("db_connection.php");

$data = file_get_contents("php://input");
// echo $data;
$data = json_decode($data);

$order_date = $data->order_date;
$client_name = $data->client_name;
$client_contact = $data->client_contact;
//$sub_total = $data->sub_total;
$product_id = $data->product_id;
if ($order_date && $client_name && $client_contact) {

    // $result = mysqli_query($db_conn, "SELECT * FROM register_form WHERE fname = '$fname' AND email = '$email'");
    // if (mysqli_num_rows($result) > 0) {
    //     echo json_encode("Please use Diffrent name & email");
    // } 
    // else{
    $sub_total = 0;
    $result = mysqli_query($db_conn, "SELECT * FROM menu_list WHERE id IN ($product_id)");
    if (mysqli_affected_rows($db_conn) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $sub_total+=$row['price'];
        }
    }
    
    $result = mysqli_query($db_conn, "INSERT  INTO  orders (order_date, client_name, client_contact, sub_total,vat,total_amount,discount,grand_total,order_status,user_id) VALUES ('$order_date', '$client_name', '$client_contact', '$sub_total',0,'$sub_total',0,'$sub_total',1,1 )");
    if (mysqli_affected_rows($db_conn) > 0) {
        echo json_encode(["msg" => "Your Orderd submitted succesfully"]);
    } else {
        echo json_encode("All data must be filled");
    }
    // }
}
