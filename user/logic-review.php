<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $c_id = $_SESSION['uid'];
    $vId = $_POST['vId'];
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $rate = (int) $_POST['rate'];

    // Insert the review into the database
    $sql = "INSERT INTO vechicels_review (c_id,v_id ,r_message, r_rate) VALUES ($c_id,$vId,'$message', '$rate')";

    if (mysqli_query($con, $sql)) {
        echo "Review added successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>