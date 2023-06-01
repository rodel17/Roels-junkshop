<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Roel's Junk Shop - Products</title>

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
				<a href="customers.php" class=""><span class="fas fa-user"></span>
				<span>Customers</span></a>
			</li>

			<li>
				<a href="schedules.php" class=""><span class="fas fa-calendar"></span>
				<span>Schedule</span></a>
			</li>

			<li>
				<a href="item-summary.php"><span class="fas fa-archive"></span>
				<span>Item Summary</span></a>
			</li>

			<li>
				<a href="customers-item.php" class="active"><span class="fas fa-box"></span>
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

					Pending Items
				</h2>

				<div class="user-wrapper">
					<img src="../php/images/<?php echo $row['img'] ?>" width="40px" height="40px" alt="">
					<div>
						<h4><?php echo $row['fname'] ." " . $row['lname'] ?></h4>
						<small>Super admin</small>
					</div>
				</div>
		</header>

		<main>
			<div class="customers-grid">
				<div class="customers-items">
					<div class="customers-card">
						<div class="customers-card-header">
							<h2>Customer's Items</h2>
						</div>
						
						<div class="card-body">
								<table width="100%">
								<thead>
									<tr>
										<td>Item ID</td>
										<td>Item Owner</td>
										<td>Item Name</td>
										<td>Details</td>
										<td>Item Date</td>
										<td>Item Status</td>
									</tr>
								</thead>
								</table>
							<div class="customers-table-responsive">
								<?php
									if (isset($_SESSION['unique_id'])) {
										include_once "php/config.php";

										$sql = "SELECT * FROM items
												INNER JOIN users
												ON items.item_unique_id = users.unique_id";
										$query = mysqli_query($conn, $sql);

										if (mysqli_num_rows($query) > 0) {
											while ($row = mysqli_fetch_assoc($query)) {
												if ($row['item_status'] === 'pending') {
												?>
												<a href="pending-item.php?item_id=<?php echo $row['item_id'] ?>" class="table-td">
													<table width="100%">
														<tbody>
															<tr>
																<td><?php echo $row['item_id'] ?></td>
																<td><?php echo $row['fname'] . " " . $row['lname'] ?></td>
																<td><?php echo $row['item_name'] ?></td>
																<td><?php echo $row['item_details'] ?></td>
																<td><?php echo $row['item_date'] ?></td>
																<td><?php echo $row['item_status'] ?></td>
															</tr>
														</tbody>
													</table>
												</a>
												<?php
											}
										}
									}
								}
							?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

<style type="text/css">
	.table-td:hover {
		text-decoration: none;
	}
	tbody tr:hover {
		background: #ccc;
	}
</style>

</body>
</html>