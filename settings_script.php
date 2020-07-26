<?php
    include 'common.php';
    if (!isset($_SESSION['email']))
        header('location:index.php');
    $old_password=$_POST['oldpassword'];
    $new_password=$_POST['newpassword'];
    $retype_new_password=$_POST['retypenewpassword'];
    if($new_password==$old_password)
    {
        $user_old_password="Select password from users where password=$old_password";
        $select_query_result= mysqli_query($con,$user_old_password);
        $select_rows= mysqli_num_rows($select_query_result);
        if(select_rows!=0)
            $user_new_password="udate password set password='$new_password' where password='$old_password'";
        else
            echo'Invalid Password';
    }
    else
        echo"The passwords don't match";
    ?>

