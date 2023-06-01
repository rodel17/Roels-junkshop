<?php
	session_start();
	include_once "config.php";
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	if (!empty($email) && !empty($pass)) {
		//check users entered email and password match to database any table row email and password
		$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
		if (mysqli_num_rows($sql) > 0) { //if user's credentials matched
			$row = mysqli_fetch_assoc($sql);
			$status = "Active now";
			//Update user status to Active now if user login successfuly
			$sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
			if ($sql2) {
				if ($_POST['email'] === 'roelsjunkshop@gmail.com') {
					$_SESSION['unique_id'] = $row['unique_id']; // using this session we used user unique_id in other php file
					echo "Success";
				}else{
					$_SESSION['unique_id'] = $row['unique_id']; // using this session we used user unique_id in other php file
					echo "success";
				}
			}
		}else{
			echo "Email or Password is incorrect!";
		}

	}else{
		echo "All input fields are required!";
	}
?>