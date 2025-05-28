<?php

include("connect.php");
session_start();
    $uid = $_GET['bid'];
    $sql = "DELETE FROM vechicels_booking WHERE b_id = $uid";
    if(mysqli_query($con, $sql))
    {
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible" role="alert">
                        Booking delete successfull !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
        header("Location: view-booking.php");
    }
    else
    {
        $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible" role="alert">
                        Error ocured to delete car
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
        header("Location: view-booking.php");
    }

?>