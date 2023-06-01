<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$item = mysqli_real_escape_string($conn, $_POST['item']);
		$item_details = mysqli_real_escape_string($conn, $_POST['item_details']);
		$item_date = mysqli_real_escape_string($conn, $_POST['item_date']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);

		if(!empty($name) && !empty($item) && !empty($item_details) && !empty($item_date) && !empty($address)){

					 		//insert users data inside the table
					 		$sql2 = mysqli_query($conn, "INSERT INTO sched (name, item, sched_date, details, address)
					 			                 VALUES ('{$name}', '{$item}', '{$item_date}', '{$item_details}', '{$address}')");
					 		if ($sql2) {
					 			echo "success";
					 		}
	}else{
		echo "All input field are required!";
	}
}
?>