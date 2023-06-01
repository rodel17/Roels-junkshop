<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Roel's Junk Shop - Schedule</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>

<?php
	session_start();
    if (!isset($_SESSION['unique_id']) || !in_array($_SESSION['unique_id'], array('1363920580'))) {
        	header("location: ../index.php");
    }
?>

<body>

    <?php
        include_once "../php/config.php"; 
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
    		}
    ?>
	
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span>Roel's JunkShop</span></h2>
		</div>
	<div class="sidebar-menu">
		<ul>
			<li>
				<a href="admin.php" class=""><span class="fas fa-igloo"></span>
				<span>Dashboard</span></a>
			</li>

			<li>
				<a href="customers.php"><span class="fas fa-user"></span>
				<span>Customers</span></a>
			</li>

			<li>
				<a href="schedules.php" class="active"><span class="fas fa-calendar"></span>
				<span>Schedule</span></a>
			</li>

			<li>
				<a href="item-summary.php"><span class="fas fa-archive"></span>
				<span>Item Summary</span></a>
			</li>

			<li>
				<a href="customers-item.php"><span class="fas fa-box"></span>
				<span>Pending items</span></a>
			</li>

			<li>
				<a href="buy-items.php"><span class="fas fa-shopping-bag"></span>
				<span>Buy Items</span></a>
			</li>
		</ul>
	</div>
</div>

	<div class="main-content">
		<header>
				<h2>
					<label for="nav-toggle">
						<span class="fas fa-bars"></span>
					</label>

					Schedules
				</h2>

				<div class="search-wrapper">
					<span class="fas fa-search"></span>
					<input type="searh" name="" placeholder="Search..." />
				</div>

				<div class="user-wrapper">
					<img src="../php/images/<?php echo $row['img'] ?>" width="40px" height="40px" alt="">
					<div>
						<h4><?php echo ($row['fname']) . " " . ($row['lname']) ?></h4>
						<small>Super admin</small>
					</div>
				</div>
		</header>

		<main>
			<div class="add-schedule">
				<a href="add-sched.php" id="add-sched">ADD SCHED</a>
				<span class="fas fa-calendar"></span>	
			</div>
			
			<div class="cards-sched">
				<?php
					include_once "php/config.php";
					if (isset($_SESSION['unique_id'])) {
						$sql2 = "SELECT * FROM sched";
						$query = mysqli_query($conn, $sql2);
							if (mysqli_num_rows($query) > 0) {
								while ($row = mysqli_fetch_assoc($query)) {
								?>
								<div class="card-single-sched">
									<div>
										<h2>Name: <?php echo $row['name'] ?></h2>
										<h3>Item: <?php echo $row['item'] ?></h3>
										<h4>Date: <?php echo $row['sched_date'] ?></h4>
										<h4>Address: <?php echo $row['address'] ?></h4>
										<div class="details">
											<?php echo $row['details'] ?>	
										</div>

										<div class="button field">
											<a href="remove-sched.php?sched_id=<?php echo $row['sched_id'] ?>" class="btn btn-danger btn-sm">Remove</a>
											<a href="edit-sched.php?sched_id=<?php echo $row['sched_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
										</div>
									</div>
								</div>
								<?php
							}
						}
					}
				?>
				
			</div>
		</main>
	</div>

</body>
</html>