<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$sched_id = mysqli_real_escape_string($conn, $_POST['sched_id']);
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$item = mysqli_real_escape_string($conn, $_POST['item']);
		$item_details = mysqli_real_escape_string($conn, $_POST['item_details']);
		$item_date = mysqli_real_escape_string($conn, $_POST['item_date']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);

		if(!empty($name) && !empty($item) && !empty($item_details) && !empty($item_date) && !empty($address)){

					 		//update users data inside the table
					 		$sql2 = mysqli_query($conn, "UPDATE `sched` SET name = '$name', item = '$item' , details = '$item_details', sched_date = '$item_date', address = '$address' WHERE sched_id = $sched_id");
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