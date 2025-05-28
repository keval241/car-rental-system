<?php 
include("header.php");
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Payment Details Page <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Payment Details Page</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="min-height: 500px;"> <!-- Provide a minimum height -->
    <div class="container custom-container"> <!-- Centered container -->
        <div class="row"> <!-- Use Bootstrap's row class -->
            <div class="col-md-3 sidebar"> <!-- Sidebar for navigation -->
                <div class="list-group">
                    <a href="profile.php" class="list-group-item list-group-item-action border-0">Profile Settings</a>
                    <a href="info-update-profile.php" class="list-group-item list-group-item-action border-0">Update Profile</a>
                    <a href="info-booking.php" class="list-group-item list-group-item-action border-0">My Booking</a>
                    <a href="info-payment.php" class="list-group-item list-group-item-action border-0">My Payment</a>
                    <a href="info-review.php" class="list-group-item list-group-item-action border-0">My Review</a>
                    <a href="logout.php" class="list-group-item list-group-item-action border-0">Sign Out</a>
                </div>
            </div>

            <div class="col-md-9 content-area d-flex align-items-center justify-content-center"> <!-- Centering content area -->
                <?php
                    $id = $_SESSION['uid'];
                    include("connect.php");
                    $sql = "SELECT * FROM vechicels_payment WHERE c_id='$id'";
                    $result = mysqli_query($con, $sql);
                    $paymentDetails = mysqli_fetch_assoc($result); // Fetch only one record
                    if ($paymentDetails) {
                ?>
                <div class="account-details text-center"> <!-- Center the text -->
                    <h2>Payment Details</h2>
                    <p><strong>Name: </strong><?php echo $paymentDetails['p_userName']; ?> </p>
                    <p><strong>Car Name: </strong><?php echo $paymentDetails['p_carName']; ?></p>
                    <p><strong>Amount: </strong><?php echo $paymentDetails['p_amount']; ?></p>
                    <p><strong>Method: </strong><?php echo $paymentDetails['p_payMethod']; ?></p>
                    <p><strong>Payment Date: </strong><?php echo $paymentDetails['p_Date']; ?></p>

                    <!-- Button to print the bill -->
                    <!-- Button to print the bill -->
                    <form action="bill.php" method="GET" class="mt-3">
                        <input type="hidden" name="payment_id" value="<?php echo $paymentDetails['p_id']; ?>"> <!-- Assuming 'p_id' is the primary key -->
                        <input type="hidden" name="c_id" value="<?php echo $id; ?>"> <!-- Pass the customer ID -->
                        <button type="submit" class="btn btn-primary">Print Bill</button>
                    </form>
                </div>
                <?php
                    } else {
                        echo "<h4 class='text-danger'>No payment details found.</h4>";
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
