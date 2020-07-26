
<html>
    <head>
        <title>Hello</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    </head>
    <body>
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand"><h2>Lifestyle Store</h2></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="nav navbar-nav ml-auto">
                        <?php
                            if(isset($_SESSION['email'])){
                                ?>
                                <li class="navbar-brand"><a href="cart.php"><h4 style="color:grey"> Cart </h4></a></li>
                        <li class="navbar-brand"><a href="settings.php"><h4 style="color:grey"> Settings </h4></a></li>
                        <li class="navbar-brand"><a href="logout.php"><h4 style="color:grey"> Logout </h4></a></li>
                            }
                            
                            <?php
                            }else{      
                            ?>
                            <li class="navbar-brand"><a class="navbar-link" href="signup.php"><h4 style="color:grey"> Sign Up </h4></a></li>
                            <li class="navbar-brand"><a class="navbar-link" href="Login.php"><h4 style="color:grey"> Log In </h4></a></li>
                          
                          <?php
                            }
                          ?>
                    </ul>
                </div>
    </div>
</div>
    </body>
</html>