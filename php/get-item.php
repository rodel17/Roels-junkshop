<?php
    if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $item_id = mysqli_real_escape_string($conn, $_POST['item_id']);
    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $item_date = mysqli_real_escape_string($conn, $_POST['item_date']);
    $item_details = mysqli_real_escape_string($conn, $_POST['item_details']);
    $item_img = mysqli_real_escape_string($conn, $_POST['item_img']);
    $output = "";

    $sql = "SELECT * FROM items
            LEFT JOIN users ON users.unique_id = items.item_id
            WHERE (item_id = {$item_id} AND item_name = {$item_name} AND item_date = {$item_date} AND item_details = {$item_details}) ORDER BY item_id";
                $query = mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)){
                        $output .='<tr>
                                    <td>' . $row['item_id'] . '</td>
                                    <td>' . $row['item_name'] . '</td>
                                    <td>' . $row['item_details'] . '</td>
                                    <td>' . $row['item_date'] . '</td>
                                    <td>' . $row['item_img'] . '</td>
                                    <td>
                                    <a href=''>VIEW</a>
                                    <a href=''>UPDATE</a>
                                    <a href=''>DELETE</a>
                                    </td>
                                </tr>'; 
                            }
                        echo $output;
                        } 
                    }else{
                        header("../index.php");
                    }

?>