<?php 
	session_start();
	include_once "config.php";
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	if(!empty($fname) && !empty($lname) && !empty($pass) && !empty($address) && !empty($phone) && !empty($email)){
			//check if the user email is valid or not
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if emmail is valid
			//check if the email is already exist in database or not
			$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
			if(mysqli_num_rows($sql) > 0){ //if email already exist
				echo "$email - is already exist!";
			}else{
				//check if user upload file or not
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

					 	if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ //if user upload img move to
					 															   //successfully
					 		$status = "Active now"; //once user signed up then his status will be active now
					 		$random_id = rand(time(), 100000000); //creating random id for user

					 		//insert users data inside the table
					 		$sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, pass, address, phone, email, img, status)
					 			                 VALUES ({$random_id}, '{$fname}', '{$lname}', '{$pass}', '{$address}', '{$phone}', '{$email}', '{$new_img_name}', '{$status}')");
					 		if ($sql2) { //if the data is inserted
					 			$sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
					 			if (mysqli_num_rows($sql3) > 0) {
					 				$row = mysqli_fetch_assoc($sql3);
					 				$_SESSION['unique_id'] = $row['unique_id']; // using this session we used user unique_id in other php file
					 				echo "success";
					 			}
					 		}else{
					 			echo "Something went wrong!";
					 		}
					 	} 
					 }else{
					 	echo "Please select image file - jpg, jpeg, png";
					 }

				}else{
					echo "Please select an Image file!";
				}
			}
		}else{
			echo "$email - This is not a valid email!";
		}
	}else{
		echo "All input field are required!";
	}
?>