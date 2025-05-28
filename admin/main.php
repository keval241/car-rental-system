<?php 
  include("connect.php");
  include("headder.php");
?>
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05); /* Scale effect on hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow on hover */
        }

        .dashboard-header {
            padding: 20px;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            background-color: #343a40; /* Dark sidebar */
            color: white;
        }

        .sidebar a {
            color: white;
        }

        .sidebar a:hover {
            background-color: #495057; /* Sidebar link hover */
        }

        .main-content {
            padding: 20px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                height: auto;
                padding: 15px;
            }

            .main-content {
                padding: 10px;
            }
        }
    </style>

    <!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        

        <!-- Main Content -->
        <div class="main-content flex-grow-1">
            <div class="dashboard-header">
                <div class="d-flex justify-content-between">
                    <h2>Dashboard Overview</h2> 
                </div>
            </div>

            <div class="container mt-4">
                <div class="row">
                    <!-- Cards -->
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-car fa-2x"></i>
                                <h5 class="card-title">Total Cars</h5>
                                <?php
                                  $s="select * from vechicels_brand";
                                  $q=mysqli_query($con,$s);
                                  $car=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="carCount"><?php echo $car;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-users fa-2x"></i>
                                <h5 class="card-title">Total Users</h5>
                                <?php
                                  $s="select * from customer_register";
                                  $q=mysqli_query($con,$s);
                                  $user=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="userCount"><?php echo $user; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-dollar-sign fa-2x"></i>
                                <h5 class="card-title">Payments</h5>
                                <?php
                                  $s="select * from vechicels_payment";
                                  $q=mysqli_query($con,$s);
                                  $pay=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="paymentCount"><?php echo $pay;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-star fa-2x"></i>
                                <h5 class="card-title">Total Reviews</h5>
                                <?php
                                  $s="select * from vechicels_review";
                                  $q=mysqli_query($con,$s);
                                  $review=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="reviewCount"><?php echo $review; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-2x"></i>
                                <h5 class="card-title">Contact Query</h5>
                                <?php
                                  $s="select * from ad_contact";
                                  $q=mysqli_query($con,$s);
                                  $query=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="contactCount"><?php echo $query; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <i class="fas fa-calendar-check fa-2x"></i>
                                <h5 class="card-title">Total Bookings</h5>
                                <?php
                                  $s="select * from vechicels_booking";
                                  $q=mysqli_query($con,$s);
                                  $book=mysqli_num_rows($q);
                                ?>
                                <p class="card-text display-4" id="bookingCount"><?php echo $book; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Simple animation for counting numbers
        document.addEventListener("DOMContentLoaded", function () {
            const carCount = document.getElementById("carCount");
            const userCount = document.getElementById("userCount");
            const paymentCount = document.getElementById("paymentCount");
            const reviewCount = document.getElementById("reviewCount");
            const contactCount = document.getElementById("contactCount");
            const bookingCount = document.getElementById("bookingCount");
        });
            const animateCount = (element, start, end, duration) => {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    element.textContent = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    }
                };
                requestAnimationFrame(step);
        }
      
           </script>
          <?php 
            include("footer.php");
          ?>
