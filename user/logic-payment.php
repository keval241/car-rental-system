<?php
include("connect.php");
if (isset($_POST['submit'])) {
    $vehicle_id = $_POST['vehicle-id'];
    $customer_id = $_POST['customer-id'];
    $booking_id = $_POST['booking-id'];
    $car_name = $_POST['car-name'];
    $user_name = $_POST['user-name'];
    $total_amt = $_POST['total-amt'];
    $payMethod = $_POST['payRadio'];

    if ($payMethod === 'UPI') {
        $upiId = $_POST['imgRadio'];
        $sql1 = "INSERT INTO vechicels_payment (v_id, c_id, b_id, p_carName, p_userName, p_amount, p_payMethod)
                VALUES ($vehicle_id, $customer_id, $booking_id, '$car_name', '$user_name', $total_amt, '$upiId')";
        $result1 = mysqli_query($con, $sql1);
        if ($result1) {
            $c_id = $customer_id;
            header("Location: bill.php?c_id=" . urlencode($c_id));
            exit(); // It's a good practice to call exit after a header redirect
        } else {
            header("Location: paymentErrorAlert.html");
            exit();
        }
    } else {
        $sql2 = "INSERT INTO vechicels_payment (v_id, c_id, b_id, p_carName, p_userName, p_amount, p_payMethod)
                 VALUES ($vehicle_id, $customer_id, $booking_id, '$car_name', '$user_name', $total_amt, '$payMethod')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            $c_id = $customer_id;
            header("Location: bill.php?c_id=" . urlencode($c_id));
            exit(); // It's a good practice to call exit after a header redirect
        } else {
            header("Location: paymentErrorAlert.html");
            exit();
        }
    }
}