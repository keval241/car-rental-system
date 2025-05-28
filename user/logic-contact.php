<?php
include("connect.php");
if (isset($_POST["submit"])) {
    $user_id = $_POST['userId'];
    $n = $_POST['nm'];
    $e = $_POST['email'];
    $s = $_POST['sub'];
    $message = mysqli_real_escape_string($con, $_POST['ad_msg']);
    $ins1="INSERT INTO ad_contact(c_id,ad_name,ad_email,ad_subject,ad_message) 
            values($user_id,'$n','$e','$s','$message')";
    $que1=mysqli_query($con,$ins1);
    if($que1)
    {
        ?>
        echo "<script>alert('Sucessfully');
        window.location.href = "contact.php";
         </script>
        <?php
    }
    else
    {
        
        ?>
            echo "<script>alert('Not Inserted');
            window.location.href = "contact.php";
             </script>
            <?php
    }
} 
?>