<?php
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";

		$item_type = mysqli_real_escape_string($conn, $_POST['item_type']);
		$item_price = mysqli_real_escape_string($conn, $_POST['item_price']);

		if (!empty($item_type) && !empty($item_price)) {

			$sql = mysqli_query($conn, "INSERT INTO types (item_type, item_price)
										VALUES ('{$item_type}', '{$item_price}')");

			if ($sql) {
				echo "success";
			}else {
				echo "There's some error!";
			}
			
		}else {
			echo "All input fields are Required!";
		}
	}


?>