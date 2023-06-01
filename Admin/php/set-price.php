<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$item_id = mysqli_real_escape_string($conn, $_POST['item_id']);
		$item_price = mysqli_real_escape_string($conn, $_POST['item_price']);

		if(!empty($item_price)){

			$date = date('Y-m-d');

					 		//update users data inside the table
					 		$sql2 = mysqli_query($conn, "UPDATE `items` SET price = '$item_price', item_date = '$date', item_status = 'buy' WHERE item_id = $item_id");
					 		if ($sql2) {
					 			echo "success";
					 		}else{
					 			echo "There's some Error!";
					 		}
	}else{
		echo "All input field are required!";
	}
}
?>