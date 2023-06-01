<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roel's Junk Shop - Add Items</title>

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

<!----------------------------------------------->

<script>
        function changeStatus() {
            var status = document.getElementById("item_name");

            if (status.value === 'Copper A') {
                document.getElementById("price_kilo");
                price_kilo.value = "400";                
            }
            else if (status.value === 'Metal') {
                document.getElementById("price_kilo");
                price_kilo.value = "20";                
            }
            else if (status.value === 'Plastic Bottle') {
                document.getElementById("price_kilo");
                price_kilo.value = "15";                
            }
            else if (status.value === 'Alum') {
                document.getElementById("price_kilo");
                price_kilo.value = "70";                
            }
            else if (status.value === 'Plastic') {
                document.getElementById("price_kilo");
                price_kilo.value = "15";                
            }
            else if (status.value === 'Stainless') {
                document.getElementById("price_kilo");
                price_kilo.value = "80";                
            }
            else if (status.value === 'Fanta') {
                document.getElementById("price_kilo");
                price_kilo.value = "70";                
            }
            else if (status.value === 'Zinc') {
                document.getElementById("price_kilo");
                price_kilo.value = "70";                
            }
            else if (status.value === 'Copper B') {
                document.getElementById("price_kilo");
                price_kilo.value = "380";                
            }
            else if (status.value === 'Copper C') {
                document.getElementById("price_kilo");
                price_kilo.value = "360";                
            }
            else if (status.value === 'Copper Yellow') {
                document.getElementById("price_kilo");
                price_kilo.value = "250";                
            }
            else if (status.value === 'RAD') {
                document.getElementById("price_kilo");
                price_kilo.value = "200";                
            }
            else if (status.value === 'COND') {
                document.getElementById("price_kilo");
                price_kilo.value = "170";                
            }
            else if (status.value === 'Mineral') {
                document.getElementById("price_kilo");
                price_kilo.value = "9";                
            }
            else if (status.value === 'Carton') {
                document.getElementById("price_kilo");
                price_kilo.value = "4";                
            }
            else if (status.value === 'Yero') {
                document.getElementById("price_kilo");
                price_kilo.value = "16";                
            }
            else if (status.value === 'Can') {
                document.getElementById("price_kilo");
                price_kilo.value = "13";                
            }
            else if (status.value === 'Pot (Kaldero)') {
                document.getElementById("price_kilo");
                price_kilo.value = "60";                
            }
            else if (status.value === 'Tas-Tas') {
                document.getElementById("price_kilo");
                price_kilo.value = "60";                
            }
            else if (status.value === 'Puti') {
                document.getElementById("price_kilo");
                price_kilo.value = "3";                
            }
            else if (status.value === 'Itim') {
                document.getElementById("price_kilo");
                price_kilo.value = "8";                
            }
            else if (status.value === '201') {
                document.getElementById("price_kilo");
                price_kilo.value = "25";                
            }
        }

</script>

<!----------------------------------------------->

    <!-- Style -->
<style>
    body{
        background: #ccc;
    }
    .item-info-container{
        margin: 90px auto;
        width: 500px;
        height: 700px;
        background: #fff;
        display: flex;
        align-items: center;
        border-radius: 10px;
    }
    form {
        margin: 0 auto;
    }
    label {
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 0px !important;
        margin-left: 75px;
    }
    .inputbox .item-list {
        display: flex;
        margin: 0px auto;
        justify-content: space-between;
        text-align: center;
        align-items: center;
        width: 350px;
        height: 40px;
        background: transparent;
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
    .inputbox .submit{
        height: 40px;
        width: 70px;
        margin-top: 0px !important;
        color: #fff;
        border: 1px solid #1e88e5;
        background-color: #1e88e5;
    }
    .inputbox .submit:hover {
        color: #1e88e5;
        text-decoration: none;
        border: 2px solid #1e88e5;
        background-color: transparent;
    }
    .inputbox #item_name{
        height: 40px;
        width: 270px;
        margin-top: 0px !important;
        padding-left: 10px;
        padding-right: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .inputbox .button{
        background: #1e88e5;
        color: #fff;
        height: 40px;
        width: 350px;
        margin-top: 10px;
        border-radius: 5px;
        border: 2px solid #1e88e5;
    }
    .inputbox .button:hover {
        background: transparent;
        color: #1e88e5;
        border: 2px solid #1e88e5;
    }
    .inputbox .button:focus {
        outline: none;
    }
    .inputbox textarea{
        height: 100px;
        width: 350px;
        resize: none;
        margin-top: 10px;
        padding-top: 5px;
        padding-left: 10px;
        padding-right: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .button input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
    }
    .inputbox input,
    textarea:focus {
        outline: none;
        overflow: hidden;
    }
    .inputimg input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #1e88e5;
        background-color: #e0e0e0;
    }
    .inputimg #item_img::-webkit-file-upload-button {
        background-color: #1e88e5;
        color: #fff;
        font-weight: bold;
        border: none;
        height: 100%;
        width: 110px;
        justify-content: center;
    }
    .button a{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .lightbox-pop img{
        width: 200px;
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
                        <form action="#" class="itemform" enctype="multipart/form-data">
                                    <center><h3>ADD ITEM</h3></center>
                                    <div class="con-info">
                                        <center><div class="error"></div></center>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_unique_id" name="item_unique_id" value="<?php echo $row['unique_id'] ?>" hidden></center>
                                    </div>
                                    <div class="inputbox">
                                        <label for="item_name">Item type:</label>
                                        
                                        <center><div class="item-list">
                                        <form name="form" action="" method="GET">
                                        <input type="text" id="item_name" name="item_name" onchange="changeStatus()" list="itemlist" required="" autocomplete="off" placeholder="Select Item">
                                        <input type="submit" name="submit" class="submit" value="Add">
                                        <datalist id="itemlist">
                                            <?php 
                                                include_once "php/config.php";
                                                $sql = "SELECT * FROM types";
                                                $query = mysqli_query($conn, $sql);
                                                    if (mysqli_num_rows($query) > 0) {
                                                        while ($row = mysqli_fetch_assoc($query)) {
                                                            $value = $row['item_price'];
                                                            ?>
                                                                <option value="<?php echo $row['item_type'] ?>"><?php echo $row['item_type'] ?></option>
                                                            <?php
                                                        }
                                                    }
                                            ?>
                                        </datalist>
                                        </form>
                                        </div></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" name="kilogram" id="kilogram" placeholder="Kilo">
                                        <input type="text" name="price_kilo" id="price_kilo" placeholder="Price per Kilo" value="">
                                        <br>
                                        <button class="button" onclick="calc();">Calculate</button></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><textarea id="item_details" name="item_details" placeholder="Item details" required=""></textarea></center>
                                    </div>
                                    <?php 
                                        $date = date('Y-m-d');
                                    ?>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_date" name="item_date" value="<?php echo $date ?>" readonly=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="item_price" name="item_price" readonly="" value=""></center>
                                    </div>
                                    <div class="inputimg">
                                        <center><input type="file" name="item_img"  id="item_img" accept="image/*"></center>
                                    </div>
                                    <div class="button field">
                                        <center><input type="submit" class="btn btn-primary" value="Add Item"></center>
                                        <center><a class="btn btn-warning" href="buy-items.php">Back</a></center>
                                    </div>
                                </div>
                        </form>
                    </div> <!-- end of item-info-container -->

<script>
    function calc() {
        var kilogram = document.getElementById('kilogram').value;
        var price_kilo = document.getElementById('price_kilo').value;

        var result = kilogram * price_kilo;

        document.getElementById('item_price').value = result;
    }

</script>

    <script src="JavaScript/insert-item.js"></script>
    <script src="JavaScript/add-type.js"></script>
</body>
</html>