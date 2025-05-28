<?php 
    include("connect.php");
    session_start();
    // $pass=$_SESSION['uid'];
    $u= $_SESSION['uid'];
    //echo "password page";
    $p=$_POST['pass'];
    $u="update admin_login set a_password='$p' where a_id='$u'";
    $u1=mysqli_query($con,$u);
    if($u1)
    {
        echo "<script>alert('Update password successfully!'); window.location.href='main.php';</script>";
    }
    else{
        echo "<script>alert('Not Update Password'); window.location.href='index.php';</script>";
    }
?>