<?php
	if (isset($_GET['search'])) {
		include_once "php/config.php";

		$date = $_GET['search'];

		$sql2 = "SELECT item_date, item_name, SUM(price) AS total FROM items
				WHERE CONCAT(item_date) LIKE '%$date%'
				GROUP BY item_name
				ORDER BY SUM(price) DESC LIMIT 3";
		$query2 = mysqli_query($conn, $sql2);

	}

?>

<?php
	if (isset($_GET['search'])) {
		include_once "php/config.php";

		$date = $_GET['search'];

		$sql3 = "SELECT item_name, SUM(price) AS total FROM items
				GROUP BY item_name
				ORDER BY SUM(price) DESC LIMIT 3";
		$query3 = mysqli_query($conn, $sql3);

	}

?>

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
<!-----------Top Sale Chart (Day)-------------->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

        <?php
          while ($row = mysqli_fetch_assoc($query2)) {
			echo "['".$row['item_name']."',".$row['total']."],";
		  }
		?>

        ]);

        var options = {
          title: 'Top Sale Chart (Based on Search)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<!---------End of Top Sale Chart (Day)----------->
<!-----------Top Sale Chart (Total)-------------->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

        <?php
          while ($row = mysqli_fetch_assoc($query3)) {
			echo "['".$row['item_name']."',".$row['total']."],";
		  }
		?>

        ]);

        var options = {
          title: 'Top Sale Chart (Total)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>
<!--------End Top Sale Chart (Total)----------->
    <script>
    	function changeStatus() {
    		var status = document.getElementById("categorySelected");

    		if (status.value === 'D') {
				document.getElementById("searchBar");
				searchBar.type = "date";    			
    		}
    		else if (status.value === 'M') {
				document.getElementById("searchBar");
				searchBar.type = "month";    			
    		}
    		else if (status.value === 'Y'){
    			document.getElementById("searchBar");
    			searchBar.type = "text";
    		}
    	}

    </script>
</head>

<style type="text/css">
	.table-td:hover {
		text-decoration: none;
	}
	tbody tr:hover {
		background: #ccc;
	}
	#searchBar {
		height: 40px;
		width: 200px;
		border: 1px solid #ccc;
		border-radius: 0px;
	}
	#btn-btn {
		height: 40px;
		width: 50px;
		border-radius: 0px;
	}
	.custom-select {
		height: 40px;
		width: 100px;
		border-radius: 0px;
	}
	.chart-box {
		width: 100%;
		height: 300px;
		background: #fff;
		margin-bottom: 10px;
		border-radius: 5px;
		border: 1px solid #ccc;
	}
	.chart-body {
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: space-between;
	}

</style>

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
				<a href="item-summary.php" class="active"><span class="fas fa-archive"></span>
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

					Item Summary
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
			<div class="chart-box">
				<div class="chart-body">
					<div id="piechart" style="width: 50%; height: 300px;"></div>
					<div id="piechart2" style="width: 50%; height: 300px;"></div>
				</div>
			</div>
			<form class="search-area" action="" method="GET">
				<select class="custom-select" name="picker" onchange="changeStatus()" id="categorySelected" value="<?php if(isset($_GET['picker'])){echo $_GET['picker'];} ?>">
						<option value="D">Date</option>
						<option value="M">Month</option>
						<option value="Y">Year</option>
					</select>

					<input type="date" name="search" id="searchBar" placeholder="Search Date" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>">
				<div class="input-group-append">
					<button type="submit" id="btn-btn"><span class="fas fa-search"></span></button>
				</div>
			</form>
			<div class="customers-grid">
				<div class="customers-items">
					<div class="customers-card">
						<div class="customers-card-header">
							<h2>SHOP ITEMS</h2>
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
										<td>Price</td>
									</tr>
								</thead>
								</table>
							<div class="customers-table-responsive">
								<?php
									if (isset($_GET['search'])) {
                        			include_once "php/config.php";

                        			$filtervalue = $_GET['search'];

                        			$sql = "SELECT * FROM items
                        					INNER JOIN users
                        					ON items.item_unique_id = users.unique_id  WHERE CONCAT(item_date) LIKE '%$filtervalue%' ";
                        			$query = mysqli_query($conn, $sql);

                        			if (mysqli_num_rows($query) > 0) {
                        				foreach($query as $items){
                        					if($items['price'] == !NULL) {
                        					?>
                        					<a href="item-info.php?item_id=<?= $items['item_id'] ?>" class="table-td">	
                        					<table width="100%" id="myTable">
												<tbody>
													<tr>
														<td><?= $items['item_id']; ?></td>
														<td><?= $items['fname'] . " " . $items['lname']; ?></td>
														<td><?= $items['item_name']; ?></td>
														<td><?= $items['item_details']; ?></td>
														<td><?= $items['item_date']; ?></td>
														<td><?= $items['price']; ?></td>
														</tr>
												</tbody>
											</table>
										</a>
											<?php
											}
                        				}
                        			}else {
                        				?>
                        					<tbody>
                        						<tr>
                        							<br />
                        							<td colspan="6">No Record found!</td>
                        						</tr>
                        					</tbody>
                        				<?php
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