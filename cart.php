<?php
    include 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
    ?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <?php
            require 'header.php';
            ?>
        <table class="center table table-striped">
        <?php
            $user_id=$_SESSION['user_id'];
            $select_query="SELECT items.price AS Price, items.id, items.name AS Name from user_items inner join items on user_items.item_id=items.id where user_items.user_id='$user_id' and status='Added to cart'";
            $select_query_result= mysqli_query($con, $select_query);
            $total_rows_fetched= mysqli_num_rows($select_query_result);
            if($total_rows_fetched==0)
                echo 'Add items to cart first!';
            else{
                $sum=0;
                ?>
            
            <thead>
                    <tr>    
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_array($select_query_result)) {
                    $sum+= $row["Price"];
                    $id .= $row["id"] . ", ";
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                }
                $id = rtrim($id, ", ");
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                ?>
                </tbody>
            </table>  
            <?php } ?>           
        <?php 
            include 'footer.php';
            ?>
    </body>
</html>