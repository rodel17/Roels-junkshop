<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);

		if(!empty($email) && !empty($phone) && !empty($address) && !empty($pass)){

					 		//update users data inside the table
					 		$sql2 = mysqli_query($conn, "UPDATE `users` SET email = '$email', phone = '$phone', address = '$address', pass = '$pass' WHERE unique_id = '{$_SESSION['unique_id']}'");
					 		if ($sql2) {
					 			echo "success";
					 		}else{
					 			echo "There's some Error!";
					 		}

	}else{
		echo "All input field are required!";
	}





		$img_name = $_FILES['image']['name']; //getting user upload image name
		$img_type = $_FILES['image']['type'];
		$tmp_name = $_FILES['image']['tmp_name']; //temporary name used to save file in our folder

		//expload image and get the last extension like jpg png
		$img_expload = explode('.', $img_name);
		$img_ext = end($img_expload); //we get the extension of an user uploaded image file

		$extensions = ['png', 'jpeg', 'jpg']; //all valid image extension and store them in array
					 	$time = time(); //return us current time
					 					//we need this time because when you uploading user img to our folder we rename user file with current time
					 					//also all the image file will have a unique name
					 	//move the user uploaded image to our particular foler
					 	$new_img_name = $time.$img_name;

					 	if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ //if user upload img move to
					 															   //successfully
					 			$sql = mysqli_query($conn, "UPDATE `users` SET img = '$new_img_name' WHERE unique_id = '{$_SESSION['unique_id']}'");
	 					} 
}
?>