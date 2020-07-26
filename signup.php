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
        <nav class="fixed-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
        <div class="banner-image2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 center">
                    <div clss="card">
                        <div class="card-header">
                            <h1>SIGN UP</h1>
                        </div><br>
                        <div class="card-body">
                            <form method="post" action="signup_script.php">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Name">
                                <br>
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                                <br>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                <br>
                                <input type="text" class="form-control form-control-lg" name="contact" placeholder="Contact">
                                <br>
                                <input type="text" class="form-control form-control-lg" name="city" placeholder="City">
                                <br>
                                <input type="text" class="form-control form-control-lg" name="address" placeholder="Address">
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button><br>
                            </form>
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
