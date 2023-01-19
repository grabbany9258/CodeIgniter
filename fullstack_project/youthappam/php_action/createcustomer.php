<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if ($_POST) {
	extract($_POST);
	$name = $_POST['name'];
	$department = $_POST['department'];
	$reffering = $_POST['reffering'];
	$floor_nb = $_POST['floor_nb'];
	





	$sql = "INSERT INTO `tbl_client`(`name`, `department`, `reffering`, `mob_no`,`floor_nb`)VALUES ('$name', '$department', '$reffering', '$mob_no','$floor_nb')";

	if ($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:../customer.php');
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while adding the members";
		header('location:../customer.php');
	}

	// /else	
	// if
	// if in_array 		

	$connect->close();

	echo json_encode($valid);
} // /if $_POST