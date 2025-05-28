<?php 
// session_start(); // Make sure to start the session
include("header.php");
$id = $_SESSION['uid'];
// echo htmlspecialchars($id); // Escape output to prevent XSS
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Review Details Page <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Review Details Page</h1>
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

            <div class="col-md-9 content-area d-flex align-items-center justify-content-center">
                <div class="account-details text-center">
                    <h2>Review Details</h2>
                    <?php
                    include("connect.php");
                        $sql = "SELECT 
                                vr.*, 
                                u.c_name, 
                                u.c_username, 
                                u.c_mobile, 
                                u.c_email 
                            FROM 
                                vechicels_review vr
                            JOIN 
                                customer_register u ON vr.c_id = u.c_id
                            WHERE 
                                vr.c_id = '$id';
                            ";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $rating = (int)$row['r_rate']; // Ensure rating is treated as an integer
                    ?>
                         <p><strong>Name : </strong><?php echo htmlspecialchars($row['c_name']); ?></p>
                        <p><strong>Message: </strong><?php echo htmlspecialchars($row['r_message']); ?></p>
                        <p><strong>Rate: </strong>
                            <span class="d-flex align-items-center justify-content-center">
                                <?php 
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<span class="star-filled">★</span>'; 
                                    } else {
                                        echo '<span class="star">☆</span>'; 
                                    }
                                }
                                ?>
                            </span>
                        </p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
