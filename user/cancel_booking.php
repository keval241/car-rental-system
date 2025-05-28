<?php
session_start();
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking_id = $_POST['booking_id'];

    // Delete from vehicles_payment first
    $delete_payment_sql = "DELETE FROM vechicels_payment WHERE b_id = ?";
    $stmt = $con->prepare($delete_payment_sql);
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();

    // Then delete from vehicles_booking
    $delete_booking_sql = "DELETE FROM vechicels_booking WHERE b_id = ?";
    $stmt = $con->prepare($delete_booking_sql);
    $stmt->bind_param("i", $booking_id);
    $stmt->execute();

    // Redirect after deletion
    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = "Booking cancelled successfully.";
    } else {
        $_SESSION['message'] = "Failed to cancel booking.";
    }
    
    header("Location: info-booking.php"); // Redirect to the booking info page
    exit();
}
?>
