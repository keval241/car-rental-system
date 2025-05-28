<?php 
    include 'connect.php';
    if(isset($_POST['sub']))
    {
        $f=$_POST['nm'];
        $u=$_POST['unm'];
        $m=$_POST['mob'];
        $e=$_POST['email'];
        $p=$_POST['pass'];
        $ins="insert into customer_register values('?','$f','$u','$m','$e','$p')";
        $q=mysqli_query($con,$ins);
        if($q)
        {
            // header("location:index.php");
            echo "<script>alert('Registraction successfully!'); window.location.href='index.php';</script>";
        }
        else{
            echo "<script>alert('Failed'); window.location.href='registerForm.php';</script>";
        }
    }

?>