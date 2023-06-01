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
		<section class="users">
			<header>

				<?php
					include_once "php/config.php"; 
					$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
					if (mysqli_num_rows($sql) > 0) {
						$row = mysqli_fetch_assoc($sql);
					}
				?>

				<div class="content">
					<a href="home.php" style="color: #333;"><span class="fas fa-arrow-left"></span></a>&nbsp;&nbsp;
					<img src="php/images/<?php echo $row['img'] ?>" alt="">
					<div class="details">
						<span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
						<p><?php echo $row['status'] ?></p>
					</div>
				</div>
				<a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
			</header>
			<div class="search">
				<span class="text">Select a user to start chat</span>
				<input type="text" placeholder="Enter name to search...">
				<button><i class="fas fa-search"></i></button>
			</div>
			<div class="users-list">

			</div>
		</section>
	</div>

	<script src="JavaScript/users.js"></script>

</body>
</html>