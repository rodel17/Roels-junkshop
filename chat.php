<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Roel's Web Based Junk Shop - Chat</title>
	<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
</head>
<?php 
	session_start();
	if (!isset($_SESSION['unique_id'])) {
		header("location: index.php");
	}

?>
<body>
	<div class="wrapper">
		<section class="chat-area">
			<header>
				<?php
					include_once "php/config.php";
					$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
					$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
					if (mysqli_num_rows($sql) > 0) {
						$row = mysqli_fetch_assoc($sql);
					}
				?>
			<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
			<img src="php/images/<?php echo $row['img'] ?>" alt="">
			<div class="details">
				<span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
				<p><?php echo $row['status'] ?></p>
			</div>
			</header>
			<div class="chat-box">
				
			</div>
			<form action="#" class="typing-area" autocomplete="off">
				<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
				<input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
				<input type="text" name="message" class="input-field" placeholder="Type a message...">
				<button><i class="fab fa-telegram-plane"></i></button>
			</form>
		</section>
	</div>

	<script src="JavaScript/chat.js"></script>


</body>
</html>