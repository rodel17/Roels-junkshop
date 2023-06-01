<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roel's Junk Shop - Edit-Items</title>

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

    <!-- Style -->
<style>
    body{
        background: #ccc;
    }
    .item-info-container{
        margin: 90px auto;
        width: 500px;
        height: 850px;
        background: #fff;
        display: flex;
        align-items: center;
        border-radius: 10px;
    }
    form {
        margin: 0 auto;
    }
    .inputbox input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .inputbox textarea{
        height: 100px;
        width: 350px;
        resize: none;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .inputbox input,
    textarea:focus {
        outline: none;
        overflow: hidden;
    }
    .button a{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .button input{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .button #back{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .button #back:hover {
        background: transparent;
        color: #e6bc15;
        border: 2px solid #e6bc15;
        border-radius: 5px;
    }
    .img-box {
        background: transparent;
        margin: 10px auto;
        width: auto;
        height: 150px;
        overflow: auto;
    }
    .img-box::-webkit-scrollbar {
        display: none;
    }
    .img-box img{
        width: 150px;
        height: auto;
        margin-top: 10px;
    }
    .error{
        color: #721c24;
        background: #f8d7da;
        padding: 8px 10px;
        width: 350px;
        height: 40px;
        align-items: center;
        border-radius: 5px;
        display: none;
        
    }
</style>

    <!-- End of Style -->

                    <div class="item-info-container">
                        <?php
                            if (isset($_SESSION['unique_id'])) {
                                $item_id = $_GET['item_id'];
                                $sql = "SELECT * FROM items 
                                        INNER JOIN users
                                        ON items.item_unique_id = users.unique_id
                                        WHERE item_id = $item_id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            }
                        ?>
                        <form action="#" class="updateform" enctype="multipart/form-data">
                                    <center><h3>CUSTOMER'S ITEM</h3></center>
                                    <div class="con-info">
                                        <center><div class="error"></div></center>
                                        <input type="text" id="item_id" name="item_id" value="<?php echo $row['item_id'] ?>" hidden>
                                    <div class="inputbox">
                                        <center><input type="text" id="user" name="user" value="<?php echo $row['fname'] . " " . $row['lname'] ?>" readonly></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_name" name="item_name" value="<?php echo $row['item_name'] ?>" readonly></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><textarea id="item_details" name="item_details" readonly><?php echo $row['item_details'] ?></textarea></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_date" name="item_date" value="<?php echo $row['item_date'] ?>" readonly></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_price" name="item_price" value="<?php echo $row['price'] ?>" required=""></center>
                                    </div>
                                    <div class="img-box">
                                        <center><img src="../php/item-images/<?php echo $row['item_img'] ?>"></center>
                                    </div>
                                    <div class="button field">
                                        <center><input type="submit" class="btn btn-success" value="BUY ITEM"></center>
                                        <center><a class="btn btn-primary" href="php/reject-item.php?item_id=<?php echo $row['item_id'] ?>">REJECT ITEM</a></center>
                                        <center><a class="btn btn-danger" href="php/delete-item.php?item_id=<?php echo $row['item_id'] ?>">DELETE ITEM</a></center>
                                        <center><a id="back" class="btn btn-warning" href="customers-item.php">Back</a></center>
                                    </div>
                                </div>
                        </form>
                    </div> <!-- end of item-info-container -->

    <script src="javascript/set-price.js"></script>
    
</body>
</html>