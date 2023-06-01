<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	include_once "config.php";

	$item_price = $_GET['item_price'];
	$item_id = $_GET['item_id'];
	$sql = "UPDATE `items` SET item_status = 'buy', item_price = '$item_price' WHERE item_id = $item_id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$message = "Item was Bought!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: ../customers-item.php");
	}else{
		echo "Failed: " . mysqli_error($conn);
	}

}
?>