<?php
    include 'common.php';
    if (!isset($_SESSION['email']))
        header('location:index.php');
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
            include 'header.php';
            ?>
        <div class="banner-image2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto mr-auto">
                    <div clss="card">
                        <div class="card-header">
                            <h1>Change Password</h1>
                        </div><br>
                        <div class="card-body">
                            <form method="post" action="settings_script.php">
                                <input type="password" class="form-control form-control-lg" name="oldpassword" placeholder="Old Password">
                                <br>
                                <input type="password" class="form-control form-control-lg" name="newpassword" placeholder="New Password">
                                <br>
                                <input type="password" class="form-control form-control-lg" name="retypenewpassword" placeholder="Re-type New Password">
                                <br>
                                <button type="submit" name="change" class="btn btn-primary">Change</button><br>
                            </form>
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