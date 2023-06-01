<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	include_once "php/config.php";

	$unique_id = $_GET['unique_id'];
	$sql = "DELETE FROM `users` WHERE unique_id = $unique_id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$message = "User was Successfuly Deleted!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: customers.php");
	}else{
		echo "Failed: " . mysqli_error($conn);
	}

}
?>