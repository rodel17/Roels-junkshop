<?php
	$conn = mysqli_connect("localhost", "root", "", "dbweb");
	if (!$conn) {
		echo "Database connected" . mysqli_connect_error();
	}
?>