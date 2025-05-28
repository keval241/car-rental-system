<?php 
    include 'connect.php';
    if(isset($_POST['sub']))
    {
        $u=$_POST['email'];

        $p=$_POST['pass'];
        $sel="select * from customer_register where c_email='$u' and c_password='$p'";
        $q=mysqli_query($con,$sel);
     
        if(mysqli_num_rows($q) > 0)
        {
            $f=mysqli_fetch_array($q);
            session_start();
            $_SESSION['uid']=$f[0];
            $_SESSION['name']=$f[1];
            $_SESSION['email']=$f[4];
            if(isset($_SESSION['uid']) && isset($_SESSION['email']))
            {
                echo "<script>alert('Login successfully!'); window.location.href='home.php';</script>";
            }
        }
        else {
            echo "<script>alert('Try Again'); window.location.href='index.php';</script>";
        }
    }
?>