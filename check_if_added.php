<?php
    function check_if_added_to_cart($item_id){
        include 'common.php';
        $user_id=$_SESSION['user_id'];
        $select_query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
        $select_query_result= mysqli_query($con, $select_query);
        $total_rows_fetched= mysqli_num_rows($select_query_result);
        if($total_rows_fetched>=1)
            return 1;
        else
            return 0;
    }
?>
