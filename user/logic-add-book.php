<?php
include("connect.php");

if (isset($_POST["submit"])) {
    $car_id = $_POST['carId'];
    $user_id = $_POST['userId'];
    $target_dir = "admin/uploads/";
    $filename = basename($_FILES['image']['name']);
    $tmp_filename = $_FILES['image']['tmp_name'];
    $n = mysqli_real_escape_string($con, $_POST['unm']);
    $c = mysqli_real_escape_string($con, $_POST['car_name']);
    $b = mysqli_real_escape_string($con, $_POST['brand']);
    $f = mysqli_real_escape_string($con, $_POST['from']);
    $t = mysqli_real_escape_string($con, $_POST['to']);
    $totalDays = (int) $_POST['totalDays'];

    $ins = "INSERT INTO vechicels_booking (v_id, c_id, b_name, b_carName, b_brandName, b_fromDate, b_ToDate, b_totalDays, b_c_image) VALUES ('$car_id', '$user_id', '$n', '$c', '$b', '$f', '$t', '$totalDays', '$filename')";

    if (mysqli_query($con, $ins)) {
        $last_id = mysqli_insert_id($con);
        if (move_uploaded_file($tmp_filename, $target_dir . $filename)) {
            echo "<script>alert('Booking successfully');
                    window.location.href = 'payment-form.php?booking_id={$last_id}';
                  </script>";
        } else {
            echo "<script>alert('Image Not Uploaded');
                    window.location.href = 'book-Form.php';
                  </script>";
        }
    } else {
        $error_message = mysqli_error($con);
        echo "<script>alert('Not Inserted: {$error_message}');
                window.location.href = 'book-Form.php';
              </script>";
    }
} else {
    echo "<script>alert('Try Again');
            window.location.href = 'book-Form.php';
          </script>";
}
?>