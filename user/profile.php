<?php 
    include("header.php");

//session_start();
$id=$_SESSION['uid'];
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile Page <i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Profile Page</h1>
            </div>
        </div>
    </div>
</section>
<?php 
//session_start();
    include 'connect.php';
    $s="select * from customer_register where c_id='$id' ";
    $q=mysqli_query($con,$s);
    $w=mysqli_fetch_array($q);
  // echo $w[0];
    $_SESSION['book']=$w[0];
    // echo "book=".$_SESSION['book'];

?>

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
                    include("connect.php");
                    $sql="SELECT * FROM customer_register where c_id='$id'";
                    $result=mysqli_query($con,$sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <div class="account-details text-center"> <!-- Center the text -->
                    <h2>Account Details</h2>
                    <p><strong>Name : </strong><?php echo $row['c_name']; ?></p>
                    <p><strong>Username : </strong><?php echo $row['c_username']; ?></p>
                    <p><strong>Phone No : </strong><?php echo $row['c_mobile']; ?></p>
                    <p><strong>Email : </strong><?php echo $row['c_email']; ?></p>
                    <p><strong>Password : </strong><?php echo $row['c_password']; ?></p>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
echo $id;
?>


<?php include("footer.php"); ?>
