<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	include_once "php/config.php";

	$item_id = $_GET['item_id'];
	$sql = "DELETE FROM `items` WHERE item_id = $item_id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$message = "Item was Successfuly Deleted!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: view.php");
	}else{
		echo "Failed: " . mysqli_error($conn);
	}

}
?>