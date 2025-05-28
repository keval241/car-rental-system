<?php 
include("header.php");
$book=$_SESSION['book'];
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-info">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);
}
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> 
                    <span>Booking Details Page <i class="ion-ios-arrow-forward"></i></span>
                </p>
                <h1 class="mb-3 bread">Booking Details Page</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="min-height: 500px;">
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-3 sidebar">
                <div class="list-group">
                    <a href="profile.php" class="list-group-item list-group-item-action border-0">Profile Settings</a>
                    <a href="info-update-profile.php" class="list-group-item list-group-item-action border-0">Update Profile</a>
                    <a href="info-booking.php" class="list-group-item list-group-item-action border-0">My Booking</a>
                    <a href="info-payment.php" class="list-group-item list-group-item-action border-0">My Payment</a>
                    <a href="info-review.php" class="list-group-item list-group-item-action border-0">My Review</a>
                    <a href="logout.php" class="list-group-item list-group-item-action border-0">Sign Out</a>
                </div>
            </div>

            <div class="col-md-9 content-area">
                <div class="account-details text-center">
                    <h2>Booking Details</h2>

                    <?php
                    include("connect.php");
                    // Updated SQL Query to get only active bookings
                    $sql = "SELECT 
                        vb.v_id, 
                        vb.v_carname, 
                        vb.v_carno, 
                        vb.v_brand, 
                        vb.v_price, 
                        vb.v_fuel, 
                        vb.v_seat, 
                        vb.v_image, 
                        vb.v_aircondition, 
                        vbk.b_id, 
                        vbk.c_id, 
                        vbk.b_name, 
                        vbk.b_carName, 
                        vbk.b_brandName, 
                        vbk.b_fromDate, 
                        vbk.b_ToDate, 
                        vbk.b_totalDays, 
                        vbk.b_c_image 
                    FROM 
                        vechicels_brand vb 
                    JOIN 
                        vechicels_booking vbk 
                    ON 
                        vb.v_id = vbk.v_id 
                    WHERE 
                        vbk.c_id = '$book' AND vbk.status = 1"; // Only get active bookings

                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Booking Information</h5>
                                <div class="mb-3">
                                    <strong>Profile Image:</strong><br>
                                    <img src="<?php echo 'admin/uploads/'.$row['b_c_image']; ?>" class="img-fluid" style="width: 30%; height: auto;" alt="Profile Image">
                                </div>
                                <p><strong>Name:</strong> <?php echo $row['b_name']; ?></p>
                                <p><strong>Car Name:</strong> <?php echo $row['b_carName']; ?></p>
                                <p><strong>Brand Name:</strong> <?php echo $row['b_brandName']; ?></p>
                                <p><strong>Car Number:</strong> <?php echo $row['v_carno']; ?></p>
                                <p><strong>Seats:</strong> <?php echo $row['v_seat']; ?></p>
                                <p><strong>Fuel Type:</strong> <?php echo $row['v_fuel']; ?></p>
                                <p><strong>Air Conditioning:</strong> <?php echo $row['v_aircondition']; ?></p>
                                <p><strong>From Date:</strong> <?php echo $row['b_fromDate']; ?></p>
                                <p><strong>To Date:</strong> <?php echo $row['b_ToDate']; ?></p>
                                <p><strong>Total Days:</strong> <?php echo $row['b_totalDays']; ?></p>
                                <strong>Car Image:</strong><br>
                                <img src="<?php echo 'admin/uploads/'.$row['v_image']; ?>" class="img-fluid" style="max-width: 50%; height: auto;" alt="Car Image">

                                <!-- Button aligned to the right -->
                                <div class="text-right mt-3">
                                    <form action="cancel_booking.php" method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                                        <input type="hidden" name="booking_id" value="<?php echo $row['b_id']; ?>">
                                        <button type="submit" class="btn btn-danger">Cancel Booking</button>
                                    </form>
                                </div>
                                
                                <!-- Button for returning the car, aligned to the right -->
                                <div class="text-right mt-3">
                                    <form action="return_car.php" method="POST" onsubmit="return confirm('Are you sure you want to return this car?');">
                                        <input type="hidden" name="booking_id" value="<?php echo $row['b_id']; ?>">
                                        <button type="submit" class="btn btn-success">Return Car</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>  
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
