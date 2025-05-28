<?php
    include("connect.php");
    if(isset($_POST["submit"]))
    {
        $target_dir="uploads/";
		$filename=$_FILES['image'] ['name'];
		$tmp_filename=$_FILES['image'] ['tmp_name'];
        $n=$_POST['car_name'];
        $o=$_POST['no'];
        $b=$_POST['brand'];
        $p=$_POST['price'];
        $f=$_POST['fuel'];
        $s=$_POST['seat'];
        $a=$_POST['air'];
        $d=$_POST['description'];
        $ins="insert into vechicels_brand values('?','$n','$o','$b',$p,'$f','$s','".$filename."','$a','$d')";
        $que=mysqli_query($con,$ins);
        if($que)
        {
            if(move_uploaded_file($_FILES['image'] ['tmp_name'],$target_dir.$filename))
            {
                header('location:view-car.php');
            }
            else
            {
                echo 'file Not Uploaded';   
            }
        }
        else
        {
            echo'Not Inserted';
        }
    }
    else{  
            echo 'Error';
    }
?>