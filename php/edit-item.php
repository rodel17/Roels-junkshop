<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$item_id = mysqli_real_escape_string($conn, $_POST['item_id']);
		$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
		$item_details = mysqli_real_escape_string($conn, $_POST['item_details']);
		$item_date = mysqli_real_escape_string($conn, $_POST['item_date']);

		if(!empty($item_name) && !empty($item_details) && !empty($item_date)){

					 		//update users data inside the table
					 		$sql2 = mysqli_query($conn, "UPDATE `items` SET item_name = '$item_name', item_details = '$item_details', item_date = '$item_date' WHERE item_id = $item_id");
					 		if ($sql2) {
					 			echo "success";
					 		}else{
					 			echo "There's some Error!";
					 		}
	}else{
		echo "All input field are required!";
	}

			$img_name = $_FILES['item_img']['name']; //getting user upload image name
			$img_type = $_FILES['item_img']['type'];
			$tmp_name = $_FILES['item_img']['tmp_name']; //temporary name used to save file in our folder

			//expload image and get the last extension like jpg png
			$img_expload = explode('.', $img_name);
			$img_ext = end($img_expload); //we get the extension of an user uploaded image file

			$extensions = ['png', 'jpeg', 'jpg']; //all valid image extension and store them in array

					 	$time = time(); //return us current time
					 					//we need this time because when you uploading user img to our folder we rename user file with current time
					 					//also all the image file will have a unique name
					 	//move the user uploaded image to our particular foler
					 	$new_img_name = $time.$img_name;


				if(move_uploaded_file($tmp_name, "item-images/".$new_img_name)){ //if user upload img move to
					 														//successfully
					$sql1 = mysqli_query($conn, "UPDATE `items` SET item_img = '$new_img_name' WHERE item_id = $item_id");
				}
}
?>