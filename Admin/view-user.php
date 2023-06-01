<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roel's Junk Shop - User</title>

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
        include_once "php/config.php"; 
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        }
    ?>
<style>
    body{
        background: #ccc;
    }
    .item-info-container{
        margin: 20px auto;
        width: 500px;
        height: 650px;
        background: #fff;
        display: flex;
        align-items: center;
        border-radius: 10px;
    }
    form {
        position: relative;
        margin: 0 auto;
        justify-content: center;
        text-align: center;

    }
    .inputbox input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 10px;
        padding-right: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .inputbox input:focus {
        outline: none;
    }
    .button input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
    }
    .button a{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .img-view img{
        width: 100px;
        height: 100px;
        margin-top: 10px;
        border-radius: 100px;
        
    }
</style>

    <!-- End of Style -->

                    <div class="item-info-container">
                        <?php
                            if (isset($_SESSION['unique_id'])) {
                                $unique_id = $_GET['unique_id'];
                                $sql = "SELECT * FROM users WHERE unique_id = $unique_id LIMIT 1";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                            }
                        ?>
                        <form action="#" class="schedupdate" enctype="multipart/form-data">
                                    <h3><?php echo $row['fname'] . " " . $row['lname'] ?></h3>
                                    <div class="img-view">
                                        <img src="../php/images/<?php echo $row['img'] ?>">
                                    <div class="inputbox">
                                        <input type="text" id="unique_id" name="unique_id" value="<?php echo $row['unique_id'] ?>" readonly>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" id="status" name="status" value="<?php echo $row['status'] ?>" readonly>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" id="fname-lname" name="fname-lname" value="<?php echo $row['fname'] . " " . $row['lname'] ?>" readonly>
                                    </div>
                                    <div class="inputbox">
                                        <input tyle="text" id="email" name="email" value="<?php echo $row['email'] ?>" readonly>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>" readonly>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" id="address" name="address" value="<?php echo $row['address'] ?>" readonly>
                                    </div>
                                    <div class="button field">
                                        <input type="submit" class="btn btn-danger btn-sm" value="DELETE USER">
                                        <a class="btn btn-dark" href="delete-user.php?unique_id=<?php echo $row['unique_id'] ?>">Chat User</a>
                                        <a class="btn btn-warning" href="customers.php">Back</a>
                                    </div>
                                </div>
                        </form>
                    </div> <!-- end of item-info-container -->

    <script src="JavaScript/update-sched.js"></script>

</body>
</html>