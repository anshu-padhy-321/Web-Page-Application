<?php
    include 'common.php';
    ?>
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
<?php
    include 'header.php';
    ?>
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
                            <form method="post" action="login_submit.php">
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                                <br>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                <br>
                                <button type="submit" name="login" class="btn btn-primary">Login</button><br>
                            </form>
                        </div>
                        <div class="card-footer">,
                            Don't have an account? <a href="signup.php">Register</a>
                        </div>
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