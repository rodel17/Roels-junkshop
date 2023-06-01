<?php
	include_once "../php/config.php";

	$query = "SELECT COUNT(unique_id) AS count_user FROM `users`";
	$sql_result = mysqli_query($conn, $query);

	while ($row = mysqli_fetch_assoc($sql_result)) {
		$output = $row['count_user'];
	}

	$sql = "SELECT * FROM `users`";
	$result = mysqli_query($conn, $sql);
?>

<?php
	include_once "../php/config.php";

	$query3 = "SELECT COUNT(unique_id) AS count_active FROM `users` WHERE status = 'Active now'";
	$sql3_result = mysqli_query($conn, $query3);

	while ($row3 = mysqli_fetch_assoc($sql3_result)) {
		$output3 = $row3['count_active'];
	}

	$sql3 = "SELECT * FROM `items`";
	$result3 = mysqli_query($conn, $sql3);
?>

<?php
	include_once "../php/config.php";

	$query4 = "SELECT COUNT(item_id) AS count_buy FROM `items` WHERE item_status = 'buy'";
	$sql4_result = mysqli_query($conn, $query4);

	while ($row4 = mysqli_fetch_assoc($sql4_result)) {
		$output4 = $row4['count_buy'];
	}

	$sql4 = "SELECT * FROM `items`";
	$result4 = mysqli_query($conn, $sql4);
?>

<?php
	include_once "../php/config.php";

	$query5 = "SELECT SUM(price) AS item_price FROM `items`";
	$sql5_result = mysqli_query($conn, $query5);

	while ($row5 = mysqli_fetch_assoc($sql5_result)) {
			$output5 = $row5['item_price'];
	}

	$sql5 = "SELECT * FROM `items`";
	$result5 = mysqli_query($conn, $sql5);
?>

<?php
	include_once "../php/config.php";
	$date1 = date('Y');
	$query6 = "SELECT SUM(price) AS curr_year FROM `items` WHERE YEAR(item_date) = '$date1'";
	$sql6_result = mysqli_query($conn, $query6);

	while ($row6 = mysqli_fetch_assoc($sql6_result)) {
			$output6 = $row6['curr_year'];
	}

	$sql6 = "SELECT * FROM `items`";
	$result6 = mysqli_query($conn, $sql6);
?>

<?php
	include_once "../php/config.php";
	$date2 = date('m');
	$query7 = "SELECT SUM(price) AS curr_month FROM `items` WHERE MONTH(item_date) = '$date2'";
	$sql7_result = mysqli_query($conn, $query7);

	while ($row7 = mysqli_fetch_assoc($sql7_result)) {
			$output7 = $row7['curr_month'];
	}

	$sql7 = "SELECT * FROM `items`";
	$result7 = mysqli_query($conn, $sql7);
?>

<?php
	include_once "../php/config.php";

	$date3 = date('d');
	$query8 = "SELECT SUM(price) AS curr_day FROM `items` WHERE DAY(item_date) = '$date3'";
	$sql8_result = mysqli_query($conn, $query8);
	while ($row8 = mysqli_fetch_assoc($sql8_result)) {
			$output8 = $row8['curr_day'];
	}

	$sql8 = "SELECT * FROM `items`";
	$result8 = mysqli_query($conn, $sql8);
?>

<?php
	include_once "../php/config.php";

	$query9 = "SELECT COUNT(item_id) AS pending_item FROM `items` WHERE item_status = 'pending'";
	$sql9_result = mysqli_query($conn, $query9);

	while ($row9 = mysqli_fetch_assoc($sql9_result)) {
		$output9 = $row9['pending_item'];
	}

	$sql9 = "SELECT * FROM `items`";
	$result9 = mysqli_query($conn, $sql9);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Roel's Junk Shop - Dashboard</title>

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
				<a href="admin.php" class="active"><span class="fas fa-igloo"></span>
				<span>Dashboard</span></a>
			</li>

			<li>
				<a href="customers.php"><span class="fas fa-user"></span>
				<span>Customers</span></a>
			</li>

			<li>
				<a href="schedules.php"><span class="fas fa-calendar"></span>
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

					Dashboard
				</h2>

				<div class="search-wrapper">
					<span class="fas fa-search"></span>
					<input type="searh" name="" placeholder="Search..." />
				</div>

				<a href="../users.php" id="chat-btn">
				<div class="user-wrapper">
					<img src="../php/images/<?php echo $row['img'] ?>" width="40px" height="40px" alt="">
					<div>
						<h4><?php echo ($row['fname']) . " " . ($row['lname']) ?></h4>
						<small>Super admin</small>
					</div>
				</div>
				</a>
		</header>

		<main>
			
			<div class="cards">
				<div class="card-single">
					<div>
						<h1><?php echo $output ?></h1>
						<span>Users</span>
					</div>
					<div>
						<span class="fas fa-users"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output3 ?></h1>
						<span>Online</span>
					</div>
					<div>
						<span class="fas fa-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1><?php echo $output9 ?></h1>
						<span>Pending Items</span>
					</div>
					<div>
						<span class="fas fa-shopping-cart"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output4 ?></h1>
						<span>Buy Items</span>
					</div>
					<div>
						<span class="fas fa-shopping-bag"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output8 ?></h1>
						<span>Daily Income</span>
					</div>
					<div>
						<span class="fas fa-wallet"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output7 ?></h1>
						<span>Monthly Income</span>
					</div>
					<div>
						<span class="fas fa-wallet"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output6 ?></h1>
						<span>Yearly Income</span>
					</div>
					<div>
						<span class="fas fa-wallet"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1><?php echo $output5 ?></h1>
						<span>Total Income</span>
					</div>
					<div>
						<span class="fas fa-wallet"></span>
					</div>
				</div>
			</div>

			<div class="recent-grid">
				<div class="category-items">
					<div class="card">
						<div class="card-header">
							<h2>Add Item Category</h2>

							<a href=""><span class="fas fa-archive"></span> View Categories</a>
						</div>
							<div class="error">Error</div>
					<form action="#" class="categoryForm" enctype="multipart/form-data">
						<div class="card-body">
							<div class="table-responsive">
								<label>Category:</label>
								<input type="text" name="item_type" id="item_type" required autocomplete="off">
								&nbsp;<label>Price:</label>
								<input type="text" name="item_price" id="item_price" required autocomplete="off">
							</div>
							<div class="button field">
									<input type="submit" name="submit" value="Add">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</main>
	</div>
<style>
	.card-body {
		width: 100%;
		display: flex;
	}
	.card-body input[type=text] {
		height: 40px;
		border: 1px solid #ccc;
		border-radius: 5px;
		padding-left: 5px;
	}
	.card-body input[type=text]:focus {
		outline-color: #24a0ed;
	}
	.card-body input[type=submit] {
		width:90px;
		height: 40px;
		border-radius: 5px;
		background: #24a0ed;
		color: #fff;
		border: none; 
	}
	.button {
		width: 90px;
	}
	.card-body input[type=submit]:hover {
		background: transparent;
		color: #24a0ed;
		border: 2px solid #24a0ed; 
	}
	label {
		font-weight: bold;
	}
	.error {
		width: 90%;
		height: 40px;
		text-align: center;
		padding-top: 8px;
		margin: 0px auto;
		border-radius: 5px;
		background: #ffb0b0;
		color: #f77474;
		display: none;
	}
	.card-header a,
	.card-header span{
		color: #FF5E63;
		font-weight: bold;
	}
	.card-header a:hover {
		text-decoration: none;
	}
</style>


<script src="JavaScript/add-category.js"></script>

</body>
</html>