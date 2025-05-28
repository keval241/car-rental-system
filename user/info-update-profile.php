
    <?php 
    include("header.php");
?>
<?php
    include("connect.php");
    // session_start();
    $uid=$_SESSION['uid'];	//By Default $_GET 
	$s="select * from customer_register where c_id='$uid'";
	$q1=mysqli_query($con,$s);
	$row=mysqli_fetch_array($q1);
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Update profile<i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Update Profile</h1>
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

<div class="col-md-8 block-9 mb-md-5">
    <form action="logic-update-profile.php" class="bg-light p-5 contact-form" method="post">
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Your Name" name="nm" required value=<?php echo $row[1]; ?>>
        </div>
        
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" class="form-control" id="username" placeholder="Your UserName" name="unm" required value=<?php echo $row[2]; ?>>
        </div>
        
        <div class="form-group">
            <label for="phone">Phone No.</label>
            <input type="text" class="form-control" id="phone" placeholder="Your Phone No." name="mob" required value=<?php echo $row[3]; ?>>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required value=<?php echo $row[4]; ?>>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Your Password" name="pass" required value=<?php echo $row[5]; ?>>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Update Profile" class="btn btn-secondary py-3 px-5" name="submit">
        </div>
    </form>
</div>

        </div>
    </div>
</section>

<?php include("footer.php"); ?>
