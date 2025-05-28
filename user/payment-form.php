<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>RentRide</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" /> -->
.

 <!-- #region -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin/assets/css/demo.css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="admin/assets/vendor/js/helpers.js"></script>


    <script src="admin/assets/js/config.js"></script>
</head>

<body>

    <?php

    $booking_id = $_GET['booking_id'];

    $sql1 = "SELECT * FROM vechicels_booking WHERE b_id = $booking_id";
    $result1 = mysqli_query($con, $sql1);

    $sql2 = "SELECT 
                b.b_id AS booking_id, 
                b.v_id AS vehicle_id,
                b.c_id AS customer_id,
                b.b_name AS user_name, 
                b.b_totalDays AS total_days, 
                br.v_price AS car_price, 
                br.v_carname AS car_name
            FROM 
                vechicels_booking b
            JOIN 
                vechicels_brand br ON b.v_id = br.v_id
            WHERE 
                b.b_id = $booking_id";
    $result2 = mysqli_query($con, $sql2);
    ?>

    <div class="col-12 col-md-6 container flex-grow-1 container-p-y">
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="d-flex justify-content-between align-items-center py-3 px-4">
                        <h5 class="">Payment Details</h5>
                    </div>
                    <div class="card-body">
                        <form action="logic-payment.php" method="post">
                            <?php
                            if ($result2) {
                                if ($row = mysqli_fetch_assoc($result2)) {
                                    $totalAmt = $row['total_days'] * $row['car_price'];
                                    ?>
                                    <input type="hidden" name="booking-id" value="<?= $row['booking_id'] ?>">
                                    <input type="hidden" name="vehicle-id" value="<?= $row['vehicle_id'] ?>">
                                    <input type="hidden" name="customer-id" value="<?= $row['customer_id'] ?>">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Car Name</label>
                                        <input type="text" class="form-control" name="car-name" value="<?= $row['car_name'] ?>"
                                            readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">User Name</label>
                                        <input type="text" class="form-control" name="user-name"
                                            value="<?= $row['user_name'] ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Total Amount (₹)</label>
                                        <input type="text" class="form-control" name="total-amt" value="<?= $totalAmt ?>"
                                            readonly>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-price">Choose payment method</label>
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input name="payRadio" class="form-check-input UpiRadioBtn" type="radio"
                                            value="UPI" id="RadioBtn1" onchange="handleChange()" />
                                        <label class="form-check-label" for="RadioBtn1"> UPI </label>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input name="payRadio" class="form-check-input CashRadioBtn" type="radio"
                                            value="CASH" id="RadioBtn2" onchange="handleChange()" />
                                        <label class="form-check-label" for="RadioBtn2"> Cash </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 ChooseUpiBlock">
                                <label class="form-label" for="basic-default-price">Choose UPI App</label>
                                <div class="col">
                                    <div class="form-check d-flex align-items-center mt-3">
                                        <div class="d-flex align-items-center me-5">
                                            <input name="imgRadio" class="form-check-input me-2 GooglePayUpi"
                                                type="radio" value="GooglePayUpi" id="imgBtn1"
                                                onchange="handleUpiChange()" />
                                            <label class="upi-img" for="imgBtn1">
                                                <img src="images/gpay.jpg" alt="G-pay">
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center me-5">
                                            <input name="imgRadio" class="form-check-input me-2 PaytmUpi" type="radio"
                                                value="PaytmUpi" id="imgBtn2" onchange="handleUpiChange()" />
                                            <label class="upi-img" for="imgBtn2">
                                                <img src="images/pytm.jpg" alt="Paytm">
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <input name="imgRadio" class="form-check-input me-2 PhonePeUpi" type="radio"
                                                value="PhonePeUpi" id="imgBtn3" onchange="handleUpiChange()" />
                                            <label class="upi-img" for="imgBtn3">
                                                <img src="images/phone-pe.jpg" alt="phonePe">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 toggleUpiTextInput">
                                <label class="form-label changeText"></label>
                                <input type="text" name="upi-id" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Process to pay" name="submit"
                                id="submitBtn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        let ChooseUpiBlock = document.querySelector(".ChooseUpiBlock");
        let UpiRadioBtn = document.querySelector(".UpiRadioBtn");
        let CashRadioBtn = document.querySelector(".CashRadioBtn");

        let toggleUpiTextInput = document.querySelector(".toggleUpiTextInput");
        let changeText = document.querySelector(".changeText");

        let GooglePayUpi = document.querySelector(".GooglePayUpi");
        let PaytmUpi = document.querySelector(".PaytmUpi");
        let PhonePeUpi = document.querySelector(".PhonePeUpi");

        const handleChange = () => {
            if (UpiRadioBtn.checked) {
                ChooseUpiBlock.classList.add("showUpiApp");
                GooglePayUpi.checked = false;
                PaytmUpi.checked = false;
                PhonePeUpi.checked = false;
            }
            if (CashRadioBtn.checked) {
                ChooseUpiBlock.classList.remove("showUpiApp");
                toggleUpiTextInput.classList.add("toggleUpiTextInput");
            }
        }

        const handleUpiChange = () => {
            if (GooglePayUpi.checked) {
                toggleUpiTextInput.classList.remove("toggleUpiTextInput");
                changeText.textContent = "enter google pay upi id"
            }
            if (PaytmUpi.checked) {
                toggleUpiTextInput.classList.remove("toggleUpiTextInput");
                changeText.textContent = "enter paytm upi id"
            }
            if (PhonePeUpi.checked) {
                toggleUpiTextInput.classList.remove("toggleUpiTextInput");
                changeText.textContent = "enter phone pe upi id"
            }
        }
    </script>
</body>

</html>