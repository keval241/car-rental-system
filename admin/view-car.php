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
        <h5 class="">Car Details</h5>
        <a href="add-car-Form.php"><button type="button" class="btn btn-primary">Add car</button></a>
      </div>
    <?php
    $sql1 = "SELECT * FROM vechicels_brand";
  $result1 = mysqli_query($con, $sql1) or die("Query failed");
  if (mysqli_num_rows($result1) > 0) {
    ?>
      <div class="table-responsive text-nowrap">
        <table class="table text-center">
          <thead>
            <tr>
              <th>Sr no.</th>
              <th>Car Name</th>
              <th>Car Number</th>
              <th>Car Brand</th>
              <th>Rent Price</th>
              <th>Fuel</th>
              <th>seat</th>
              <th>Car Image</th>
              <th>Ac OR NonAc</th>
              <th>Car Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php
            $i = 1;
             while ($row = mysqli_fetch_assoc($result1)) {
              ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['v_carname']; ?></td>
                <td><?php echo $row['v_carno']; ?></td>
                <td><?php echo $row['v_brand']; ?></td>
                <td><?php echo $row['v_price']; ?></td>
                <td><?php echo $row['v_fuel']; ?></td>
                <td><?php echo $row['v_seat']; ?></td>
                <td><img src="<?php echo 'uploads/'.$row['v_image']; ?>" width="100"></td>
                <td><?php echo $row['v_aircondition']; ?></td>
                <td><?php echo strlen($row['v_description']) > 50 ? substr($row['v_description'], 0, 50).'...' : $row['v_description'] ?></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="edit-car-Form.php?id=<?php echo $row['v_id'] ?>">
                        <i class="bx bx-edit-alt me-2"></i> Edit</a>
                      <a class="dropdown-item" href="logic-delete-car.php?cid=<?php echo $row['v_id']; ?>">
                         <i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
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
      <h4 class="text-center text-danger my-5">No cars found</h4>
    <?php
  }
  ?>
<?php include 'footer.php'; ?>