<?php
    include 'connect.php';
    session_start();
    if(isset($_POST['sub']))
    {
        $u=$_POST['unm'];
        $p=$_POST['pass'];
        $sel="select * from admin_login where a_username='$u' and a_password='$p'";
        $q=mysqli_query($con,$sel);
        if(mysqli_num_rows($q) > 0)
        {
            $f=mysqli_fetch_array($q);
            $_SESSION['uid']=$f[0];
            $_SESSION['unm']=$f[1];
            if(isset($_SESSION['uid']) && isset($_SESSION['unm']))
            {
                echo "<script>alert('Login successfully!'); window.location.href='main.php';</script>";
            }
        } else {
            echo "<script>alert('Failed'); window.location.href='index.php';</script>";
        }
  
    
    }
    // echo  $_SESSION['uid'];

?>
