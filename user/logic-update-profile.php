<?php
    include("connect.php");
    session_start();
    $uid=$_SESSION['uid'];
    if(isset($_POST["submit"])){
        $f=$_POST['nm'];
        $u=$_POST['unm'];
        $m=$_POST['mob'];
        $e=$_POST['email'];
        $p=$_POST['pass'];
        $up="update customer_register set c_name='$f',c_username='$u',c_mobile=$m,c_email='$e',c_password='$p' where c_id=$uid";
        $que=mysqli_query($con,$up);
        if($que)
        {
            header("location:profile.php");

        }
    }
    else{
        header("location:update-profile.php");
    }
?>