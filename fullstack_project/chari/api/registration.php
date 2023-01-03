<?php
include("db_connection.php");

$data = file_get_contents("php://input");
// echo $data;
$data = json_decode($data);

$fname = $data->fname;
$lname = $data->lname;
$email = $data->email;
$password = $data->password;
if ($fname && $lname && $email && $password) {

    $result = mysqli_query($db_conn, "SELECT * FROM register_form WHERE fname = '$fname' AND email = '$email'");
    if (mysqli_num_rows($result) > 0) {
        echo json_encode("Please use Diffrent name & email");
    } else {
        $result = mysqli_query($db_conn, "INSERT  INTO  register_form (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password' )");
        if (mysqli_affected_rows($db_conn) > 0) {
            echo json_encode(["msg" => "Your Information Registered succesfully"]);
        } else {
            echo json_encode("All data must be filled");
        }
    }
}
