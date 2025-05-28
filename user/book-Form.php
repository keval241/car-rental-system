<?php
include ("connect.php");
// session_start();
$uid=$_GET['carId'];

//By Default $_GET 
$s="select * from vechicels_brand where v_id='$uid'";
$q1=mysqli_query($con,$s);
$row=mysqli_fetch_array($q1);


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

  <div class="col-12 col-md-6 container flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="d-flex justify-content-between align-items-center py-3 px-4">
            <h5 class="">Booking Details</h5>
            <a href="car.php"><button type="button" class="btn btn-sm btn-danger">Back</button></a>
          </div>
          <div class="card-body">
            <form action="logic-add-book.php" enctype="multipart/form-data" method="post">
              <div class="mb-3">
                <label class="form-label" for="basic-default-price">Name</label>
                <div class="input-group input-group-merge">
                  <input type="text" name="unm" class="form-control" placeholder="User Name.."
                    aria-describedby="basic-default-email2" required/>
                </div>
              </div>
              <input type="text" name="carId" value="<?php echo $_GET['carId']; ?>">
              <?php session_start(); ?>
              <input type="hidden" name="userId" value="<?php echo $_SESSION['uid']; ?>">
              <div class="mb-3">
                <label class="form-label" for="basic-default-fullname">Car Name</label>
                <input type="text" class="form-control"  name="car_name"  value=<?php echo $row[1];?> readonly >
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-default-brand">Brand Name</label>
                <input type="text" class="form-control" name="brand" placeholder="Brand Name" value=<?php echo $row[3];?> readonly >
              </div>
              <div class="mb-3">
                <label for="form-label" class="basic-default-brand">From Date</label>
                <input class="form-control" type="date" name="from" value="" id="fromDateInput" required/>
              </div>
              <div class="mb-3">
                <label for="form-label" class="basic-default-brand">To Date</label>
                <input class="form-control" type="date" name="to" value="" id="toDateInput" required/>
              </div>
              <div class="mb-3">
                <label for="form-label" class="basic-default-brand">Total Days</label>
                <input class="form-control" type="input" name="totalDays" id="calculatedDays" readonly />
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Aadhar Card</label>
                <input class="form-control" type="file" id="image" name="image" required/>
              </div>
              <input type="submit" class="btn btn-primary" value="Book Car" name="submit" id="submitBtn">
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
    // const today = new Date().toISOString().split('T')[0];
    // document.getElementById('fromDateInput').setAttribute('min', today);
    // document.getElementById('toDateInput').setAttribute('min', today);

    function updateToDateMin() {
      const fromDateValue = document.getElementById('fromDateInput').value;
      document.getElementById('toDateInput').setAttribute('min', fromDateValue);
    }

    // Set initial min date for both inputs
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('fromDateInput').setAttribute('min', today);
    document.getElementById('toDateInput').setAttribute('min', today);

    // Add event listener to update 'toDateInput' min date when 'fromDateInput' changes
    document.getElementById('fromDateInput').addEventListener('change', updateToDateMin);

    document.querySelector("#toDateInput").addEventListener("change", (e) => {
      e.preventDefault();
      let fromDateInput = document.querySelector("#fromDateInput").value;
      let toDateInput = document.querySelector("#toDateInput").value;

      let fromDate = new Date(fromDateInput);
      let toDate = new Date(toDateInput);
      let differenceInTime = toDate.getTime() - fromDate.getTime();
      let differenceInDays = Math.round(differenceInTime / (1000 * 3600 * 24));

      if (differenceInDays < 0) {
        document.querySelector("#calculatedDays").value = "Invalid date range";
      } else if (fromDate.getTime() === toDate.getTime()) {
        document.querySelector("#calculatedDays").value = "1";
      } else {
        document.querySelector("#calculatedDays").value = differenceInDays + 1;
      }
    });
  </script>
</body>

</html>
