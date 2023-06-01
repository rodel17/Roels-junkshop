<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	include_once "config.php";

	$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
	

	if (!empty($item_name)) {
		
		$sql = mysqli_query($conn, "INSERT INTO types (item_type)
									VALUES ('{$item_name}')");
		if ($sql) {
			echo "success";
		}else {
			echo "There's some Error!";
		}
	}else{
		echo "Input field Reqired!";
	}

}
?>