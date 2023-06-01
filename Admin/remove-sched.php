<?php
session_start();
if (isset($_SESSION['unique_id'])) {
	include_once "php/config.php";

	$sched_id = $_GET['sched_id'];
	$sql = "DELETE FROM `sched` WHERE sched_id = $sched_id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$message = "Item was Successfuly Deleted!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: schedules.php");
	}else{
		echo "Failed: " . mysqli_error($conn);
	}

}
?>