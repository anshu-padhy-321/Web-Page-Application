<?php
    include 'common.php';
    $user_email=$_POST['email'];
    $user_password=$_POST['password'];
    $user_name=$_POST['name'];
    $user_contact=$_POST['contact'];
    $user_city=$_POST['city'];
    $user_address=$_POST['address'];
    $user_email= mysqli_real_escape_string($con, $user_email);
    $user_password= mysqli_real_escape_string($con, $user_password);
    $user_name= mysqli_real_escape_string($con, $user_name);
    $user_contact= mysqli_real_escape_string($con, $user_contact);
    $user_city= mysqli_real_escape_string($con, $user_city);
    $user_address= mysqli_real_escape_string($con, $user_address);
    $select_query = "SELECT email FROM users WHERE email='$user_email'";
    $select_query_result= mysqli_query($con, $select_query);
    $total_rows_fetched= mysqli_num_rows($select_query_result);
    if($total_rows_fetched>0)
        echo 'Email id already used';
    else
    {
        $select_query = "insert into users(name,email,password,contact,city,address) values ('$user_name','$user_email','$user_password','$user_contact','$user_city','$user_address')";
        $user_registration_submit= mysqli_query($con, $select_query);
        $_SESSION['email']=$user_email;
        $_SESSION['id']= mysqli_insert_id($con);
        if(isset($_SESSION['email']))
            header('location:products.php');
    }
    
?>