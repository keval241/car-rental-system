<?php
include("connect.php");
// session_start();
$uid = $_GET['id'];
$s = "select * from vechicels_brand where v_id='$uid'";
$q1 = mysqli_query($con, $s);
$row = mysqli_fetch_array($q1);
?>
<?php include 'headder.php'; ?>

<div class="col-12 col-md-6 container flex-grow-1 container-p-y">

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="d-flex justify-content-between align-items-center py-3 px-4">
          <h5 class="">Update Car Details</h5>
          <a href="view-car.php"><button type="button" class="btn btn-sm btn-danger">Back</button></a>
        </div>
        <div class="card-body">
          <form action="logic-edit-car.php" enctype="multipart/form-data" method="post">
            <input type="hidden" value="<?php echo $row[0]; ?>" name="c_id">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Car Name</label>
              <input type="text" class="form-control" placeholder="Car Name" name="car_name" value=<?php echo $row[1]; ?>>
            </div>
            <div class="mb-3">
              <label class="form-label">Car No.</label>
              <input type="text" name="no" class="form-control" placeholder="Car Number"
                value="<?php echo htmlspecialchars($row[2], ENT_QUOTES, 'UTF-8'); ?>" />
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-brand">Brand Name</label>
              <input type="text" class="form-control" name="brand" placeholder="Brand Name" value=<?php echo $row[3]; ?>>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-price">Car Rent Price</label>
              <div class="input-group input-group-merge">
                <input type="number" name="price" class="form-control" placeholder="Rent Price" value=<?php echo $row[4]; ?>>
              </div>
            </div>
            <div class="col-md">
              <small class="text-light fw-semibold d-block">Fuel</small>
              <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="radio" name="fuel" value="Petrol" <?php
                if ($row[5] == 'Petrol') {
                  echo "checked";
                }
                ?>>
                <label class="form-check-label" for="inlineRadio1">Petrol</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fuel" value="Diseal" <?php
                if ($row[5] == 'Diseal') {
                  echo "checked";
                }
                ?>>
                <label class="form-check-label" for="inlineRadio2">Diseal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fuel" value="CNG" <?php
                if ($row[5] == 'CNG') {
                  echo "checked";
                }
                ?> />
                <label class="form-check-label" for="inlineRadio2">CNG</label>
              </div>
              <div class="mb-3">
                <label for="defaultSelect" class="form-label">Car Seat</label>
                <select id="defaultSelect" class="form-select" name="seat">
                  <option>Car Seat</option>
                  <option <?php if ($row['v_seat'] == "four")
                    echo "selected"; ?> value="four">4</option>
                  <option <?php if ($row['v_seat'] == "six")
                    echo "selected"; ?> value="six">6</option>
                  <option <?php if ($row['v_seat'] == "eight")
                    echo "selected"; ?> value="eight">8</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label" for="formFile">Car Image</label>
                <input class="form-control" type="file" name="image" />
                <div class="mt-3">
                  <p class="mb-0">Selected Image</p>
                  <input type="hidden" name="old_img"
                    value="<?php echo htmlspecialchars($row[7], ENT_QUOTES, 'UTF-8'); ?>">
                  <img class="rounded" src="uploads/<?php echo htmlspecialchars($row[7], ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Car image" width="100">
                </div>
              </div>
              <div class="col-md">
                <small class="text-light fw-semibold d-block">Air Condition</small>
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="air" value="AC" <?php
                  if ($row[8] == 'AC') {
                    echo "checked";
                  }
                  ?> />
                  <label class="form-check-label" for="inlineRadio1">Ac</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="air" value="Non Ac" <?php
                  if ($row[8] == 'Non Ac') {
                    echo "checked";
                  }
                  ?> />
                  <label class="form-check-label" for="inlineRadio2">Non Ac</label>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Description</label>
                  <textarea id="basic-default-message" class="form-control" placeholder="Car Description"
                    name="description"><?php echo $row[9]; ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Update Car" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>