<?php
session_start();
include("connect.php"); // Ensure you have the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];

    // Update the booking status to 0 (for returning the car)
    $sql = "UPDATE vechicels_booking SET status = 0 WHERE b_id = ?";
    
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $booking_id);
        if ($stmt->execute()) {
            // Redirect back to the booking details page with a success message
            $_SESSION['message'] = "Car returned successfully!";
            header("Location: info-booking.php"); // Change to your booking details page
            exit();
        } else {
            // Handle the error case
            $_SESSION['message'] = "Error returning the car. Please try again.";
            header("Location: info-booking.php");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Database error. Please try again.";
        header("Location: info-booking.php");
        exit();
    }
}
?>
