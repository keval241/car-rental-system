<?php

include("connect.php");
session_start();


    $uid = $_GET['id'];

    $sql = "DELETE FROM customer_register WHERE c_id = $uid";

    if(mysqli_query($con, $sql))
    {
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible" role="alert">
                        User delete successfull !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
        header("Location: view-user.php");
    }
    else
    {
        $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible" role="alert">
                        Error ocured to delete user
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
        header("Location: view-user.php");
    }

?>