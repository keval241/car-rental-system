<?php
  session_start();
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>RentRide</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

   
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <a href="index.html" class="app-brand-link">
              <div class="img-container d-flex align-items-center">
                <img src="logo.jpg">
                <span class="app-brand-text demo menu-text ms-2">RentRide</span>
              </div>
            </a>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
  <!-- Dashboard -->
  <li class="menu-item">
    <a href="main.php" class="menu-link">
      <i class="menu-icon tf-icons fa-solid fa-house"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- User Section -->
  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">User</span>
  </li>
  <li class="menu-item"> <!-- Mark this item as active -->
    <a href="view-user.php" class="menu-link">
      <i class="menu-icon tf-icons fa-solid fa-users"></i>
      <div data-i18n="Layouts">View User</div>
    </a>
  </li>

  <!-- Car Management Section -->
  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Manage Car</span>
  </li>
  <li class="menu-item">
    <a href="view-car.php" class="menu-link">
      <i class="menu-icon tf-icons fa-solid fa-car-side"></i>
      <div data-i18n="Analytics">Car</div>
    </a>
  </li>

  <!-- Other Sections -->
  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Manage Booking</span>
  </li>
  <li class="menu-item">
    <a href="view-booking.php" class="menu-link">
      <i class="menu-icon tf-icons fa-regular fa-calendar-check"></i>
      <div data-i18n="Analytics">Booking</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Payment</span>
  </li>
  <li class="menu-item">
    <a href="view-payment.php" class="menu-link">
      <i class="menu-icon tf-icons fa-solid fa-rupee-sign"></i>
      <div data-i18n="Analytics">Payment</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Review</span>
  </li>
  <li class="menu-item">
    <a href="view-review.php" class="menu-link">
      <i class="menu-icon tf-icons fa-regular fa-star-half-stroke"></i>
      <div data-i18n="Analytics">Review</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Contact Query</span>
  </li>
  <li class="menu-item">
    <a href="view-contact.php" class="menu-link">
      <i class="menu-icon tf-icons fa-solid fa-envelope-circle-check"></i>
      <div data-i18n="Analytics">Contact Query</div>
    </a>
  </li>
</ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>

              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-user-tie fs-2"></i> <!-- Larger user icon -->
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="update-form.php">
                        <i class="fa-solid fa-lock fs-4 me-2"></i> <!-- Larger icon for My Profile -->
                            <span class="align-middle">Change Password</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="logout.php">
                            <i class="bx bx-power-off fs-4 me-2"></i> <!-- Larger icon for Log Out -->
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>


                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->