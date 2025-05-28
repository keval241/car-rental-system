<?php include 'headder.php'; ?>
<div class="container-xxl flex-grow-1 container-p-y ">
  <?php
  include 'connect.php';
  if (isset($_SESSION["alert"])) {
    echo $_SESSION["alert"];
    unset($_SESSION["alert"]);
  }
  ?>
  <div class="card">
    <div class="d-flex justify-content-between align-items-center py-3 px-4">
      <h5 class="">Booking Details</h5>
    </div>
    <?php
    $sql1 = "SELECT 
    vbn.v_image,
    vb.b_id,
    vb.v_id,
    vb.c_id,
    vb.b_name,
    vb.b_carName,
    vb.b_brandName,
    vb.b_fromDate,
    vb.b_ToDate,
    vb.b_totalDays,
    vb.b_c_image,
    vb.status  -- Make sure to select the status column
FROM 
    vechicels_booking vb 
LEFT JOIN 
    vechicels_brand vbn ON vb.v_id = vbn.v_id;";

    $result1 = mysqli_query($con, $sql1) or die("Query failed");
    if (mysqli_num_rows($result1) > 0) {
      ?>
      <div class="table-responsive text-nowrap">
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sr no.</th>
              <th>Name</th>
              <th>Car Name</th>
              <th>Car Brand</th>
              <th>From Date</th>
              <th>To Date</th>
              <th>Total Days</th>
              <th>Car Image</th>
              <th>Profile Image</th>
              <th>Car Status</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result1)) {
              ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['b_name']; ?></td>
                <td><?php echo $row['b_carName']; ?></td>
                <td><?php echo $row['b_brandName']; ?></td>
                <td><?php echo $row['b_fromDate']; ?></td>
                <td><?php echo $row['b_ToDate']; ?></td>
                <td><?php echo $row['b_totalDays']; ?></td>
                <td><img src="<?php echo './uploads/' . $row['v_image']; ?>" width="100"></td>
                <td><img src="<?php echo './uploads/' . $row['b_c_image']; ?>" width="100"></td>
                <td>
                  <?php
                  // Check status and set color and text accordingly
                  if ($row['status'] == 1) {
                      echo '<span style="color: red;">Not Returned</span>';
                  } else {
                      echo '<span style="color: green;">Returned</span>';
                  }
                  ?>
                </td>
              </tr>
              <?php
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?php
    } else {
      ?>
  <h4 class="text-center text-danger my-5">No Booking found</h4>
  <?php
    }
    ?>
<?php include 'footer.php'; ?>
