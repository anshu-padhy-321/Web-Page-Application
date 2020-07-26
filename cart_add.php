<?php
    include'common.php';
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $select_query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $select_query_result= mysqli_query($con, $select_query_result);
    header('location:products.php');
    }
    ?>

