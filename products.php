<?php
    include'common.php'
    ?>
<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <?php 
            include 'header.php';
            include 'check_if_added.php';
            ?>
        <div class="container">
            <div class="jumbotron">
            <h1 align="center">Welcome To Our Lifestyle Store!</h1>
            <p align="center">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                    <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="5.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Cannon EOS</h4>
                            <h6 class="card-text" align="center">Price:Rs.36000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="2.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Sony DSLR</h4>
                            <h6 class="card-text" align="center">Price:Rs.40000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="3.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Sony DSLR</h4>
                            <h6 class="card-text" align="center">Price:Rs.50000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="4.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Olympus DSLR</h4>
                            <h6 class="card-text" align="center">Price:Rs.80000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    </div>
                  
            </div>
            <div class="row">
                    <div class="card-deck">
                        <div class="card">
                        <img class="card-img-top" src="9.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Titan Model #301</h4>
                            <h6 class="card-text" align="center">Price:Rs.13000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
            <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="10.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Titan Model #201</h4>
                            <h6 class="card-text" align="center">Price:Rs.3000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="11.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">HMT Milan</h4>
                            <h6 class="card-text" align="center">Price:Rs.8000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="12.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Faber Luba #111</h4>
                            <h6 class="card-text" align="center">Price:Rs.18000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    </div>
                  
            </div>
            <div class="row">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="8.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">H&W</h4>
                            <h6 class="card-text" align="center">Price:Rs.800.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="6.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Luis Phil</h4>
                            <h6 class="card-text" align="center">Price:Rs.1000.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="13.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">John Zok</h4>
                            <h6 class="card-text" align="center">Price:Rs.1500.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="14.jpg" alt="Image">
                        <div class="card-body">
                            <h4 class="card-title" align="center">Jhalsani</h4>
                            <h6 class="card-text" align="center">Price:Rs.1300.00</h6>
                            <?php 
            if (!isset($_SESSION['email'])){
            ?> 
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
        <?php } else {
            if (check_if_added_to_cart(1)) {?>
                <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>;
            <?php
            }else{
            ?> 
                <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
        <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>