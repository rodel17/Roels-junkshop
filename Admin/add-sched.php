<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Roel's Junk Shop - Add Sched</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body>
    <!-- Style -->
<style>
    body{
        background: #ccc;
    }
    .item-info-container{
        margin: 20px auto;
        width: 500px;
        height: 600px;
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
        padding-left: 10px;
        padding-right: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
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
                        <form action="#" class="schedform" enctype="multipart/form-data">
                                    <center><h3>ADD SCHED</h3></center>
                                    <div class="con-info">
                                        <center><div class="error"></div></center>
                                    <div class="inputbox">
                                        <center><input type="text" id="name" name="name" placeholder="Client name" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="item" name="item" placeholder="Item" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><textarea id="item_details" name="item_details" placeholder="Item details" required=""></textarea></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="date" id="item_date" name="item_date" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="address" name="address" placeholder="address" required=""></center>
                                    </div>
                                    <div class="button field">
                                        <center><input type="submit" class="btn btn-primary" value="Add Sched"></center>
                                        <center><a class="btn btn-warning" href="schedules.php">Back</a></center>
                                    </div>
                                </div>
                        </form>
                    </div> <!-- end of item-info-container -->

    <script src="JavaScript/insert-sched.js"></script>

</body>
</html>