<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Roel's Junk Shop - Customers</title>

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
				<a href="customers.php" class="active"><span class="fas fa-user"></span>
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
				<a href="customers-item.php" class=""><span class="fas fa-box"></span>
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

					Customers
				</h2>

				<div class="user-wrapper">
					<img src="../php/images/<?php echo $row['img'] ?>" width="40px" height="40px" alt="">
					<div>
						<h4><?php echo ($row['fname']) . " " . ($row['lname']) ?></h4>
						<small>Super admin</small>
					</div>
				</div>
		</header>

		<main>
			<div class="search-area">
				<input type="text" name="search" placeholder="Search...">
				<button><span class="fas fa-search"></span></button>
			</div>
			<div class="customers-grid">
				<div class="customers-items">
					<div class="customers-card">
						<div class="customers-card-header">
							<h2>Customers (Users)</h2>
						</div>
						
						<div class="card-body">
								<table width="100%">
								<thead>
									<tr>
										<td>Unique ID</td>
										<td>Name</td>
										<td>Email</td>
										<td>Address</td>
										<td>Phone number</td>
										<td>Password</td>
										<td>Status</td>
										<td>Action</td>
									</tr>
								</thead>
								</table>
							<div class="customers-table-responsive">
								<?php
									if (isset($_SESSION['unique_id'])) {
                        			include_once "php/config.php";

                        			$sql = "SELECT * FROM users WHERE unique_id != '1363920580'";
                        			$query = mysqli_query($conn, $sql);

                        			if (mysqli_num_rows($query) > 0) {
                        				while ($row = mysqli_fetch_assoc($query)){

                        					?>

                        					<table width="100%">
												<tbody>
													<tr>
														<td><?php echo $row['unique_id'] ?></td>
														<td><?php echo $row['fname'] . " " . $row['lname'] ?></td>
														<td><?php echo $row['email'] ?></td>
														<td><?php echo $row['address'] ?></td>
														<td><?php echo $row['phone'] ?></td>
														<td><?php echo $row['pass'] ?></td>
														<td><?php echo $row['status'] ?></td>
														<td>
															<a href="view-user.php?unique_id=<?php echo $row['unique_id'] ?>" class="btn btn-primary btn-sm">VIEW USER</a>

														</td>
													</tr>
												</tbody>
											</table>

											<?php
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

</body>
</html>