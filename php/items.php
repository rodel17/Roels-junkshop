<?php 
	session_start();
	if (isset($_SESSION['unique_id'])) {
		include_once "config.php";
		$unique_item_id = mysqli_real_escape_string($conn, $_POST['unique_item_id']);
		$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
		$item_date = mysqli_real_escape_string($conn, $_POST['item_date']);
		$item_details = mysqli_real_escape_string($conn, $_POST['item_details']);

		if(!empty($unique_item_id) && !empty($item_name) && !empty($item_date) && !empty($item_details)){

				if(isset($_FILES['image'])){ //if file is uploaded
					$img_name = $_FILES['image']['name']; //getting user upload image name
					$img_type = $_FILES['image']['type'];
					$tmp_name = $_FILES['image']['tmp_name']; //temporary name used to save file in our folder

					//expload image and get the last extension like jpg png
					$img_expload = explode('.', $img_name);
					$img_ext = end($img_expload); //we get the extension of an user uploaded image file

					$extensions = ['png', 'jpeg', 'jpg']; //all valid image extension and store them in array
					if (in_array($img_ext, $extensions) === true){ //if the upload image extension is matched
					 	$time = time(); //return us current time
					 					//we need this time because when you uploading user img to our folder we rename user file with current time
					 					//also all the image file will have a unique name
					 	//move the user uploaded image to our particular foler
					 	$new_img_name = $time.$img_name;
					 	$item_status = 'pending';

					 	if(move_uploaded_file($tmp_name, "item-images/".$new_img_name)){ //if user upload img move to
					 															   //successfully

					 		//insert users data inside the table
					 		$sql2 = mysqli_query($conn, "INSERT INTO items (item_unique_id, item_name, item_date, item_details, item_img, item_status)
					 			                 VALUES ({$unique_item_id},'{$item_name}', '{$item_date}', '{$item_details}', '{$new_img_name}', '{$item_status}')");
					 		if ($sql2) {
					 			echo "success";
					 		}

					 	} 
					 }else{
					 	echo "Please select image file - jpg, jpeg, png";
					 }

				}else{
					echo "Please select an Image file!";
				}
	}else{
		echo "All input field are required!";
	}
}
?>