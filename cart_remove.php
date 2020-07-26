<?php
    include 'common.php';
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET["id"]; 
        $user_id = $_SESSION['user_id'];
        $select_query="delete from user_items where user_id='$user_id' and item_id='$item_id'";
        $res = mysqli_query($con, $select_query) or die($mysqli_error($con));
        header('location:cart.php');
    }
    ?>
        
