
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="newcss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <nav class="fixed-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"><h2>Lifestyle Store</h2></a>
                </div>
                <div>
                    <ul class="nav navbar-nav ml-auto navbar-dark">
                        <li class="navbar-brand"><a href="signup.php"><h4 style="color:grey"> Sign Up </h4></a></li>
                        <li class="navbar-brand"><a href="Login.php"><h4 style="color:grey"> Log In </h4></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </nav>
        <div class="banner-image1">
        <div class="container">
            <div class="row row-style">
                <div class="col-lg-12">
                    <div clss="card">
                        <div class="card-header">
                            <h4>LOGIN</h4>
                        </div><br>
                        <div class="card-body">
                            <div class="card-text text-muted"><i>Login to make a purchase</i></div>
                            <br>
                            <form>
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                                <br>
                                <input type="text" class="form-control form-control-lg" name="password" placeholder="Password">
                            </form>
                            <a href="products.php" class="btn btn-primary">Login</a><br>
                        </div>
                        <div class="card-footer">
                            Don't have an account? <a href="signup.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer align="center">
                <div class="footer1">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </div>
        </footer>
    </body>
</html>