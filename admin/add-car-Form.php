<?php include 'headder.php'; ?>

<div class="col-12 col-md-6 container flex-grow-1 container-p-y">

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
          <div class="d-flex justify-content-between align-items-center py-3 px-4">
            <h5 class="">Add Car Details</h5>
            <a href="view-car.php"><button type="button" class="btn btn-sm btn-danger">Back</button></a>
        </div>
        <div class="card-body">
          <form action="logic-add-car.php" enctype="multipart/form-data" method="post">
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Car Name</label>
              <input type="text" class="form-control" placeholder="Car Name" name="car_name" required/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-no">Car No.</label>
              <input type="text" name="no" class="form-control phone-mask" placeholder="Car Number" required/>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-brand">Brand Name</label>
              <input type="text" class="form-control" name="brand" placeholder="Brand Name" required />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-price">Car Rent Price</label>
              <div class="input-group input-group-merge">
                <input type="number" name="price" class="form-control" placeholder="Rent Price"
                  aria-describedby="basic-default-email2" required/>
              </div>
            </div>
            <div class="col-md">
              <small class="text-light fw-semibold d-block">Fuel</small>
              <div class="form-check form-check-inline mt-3">
                <input class="form-check-input" type="radio" name="fuel"
                  value="Petrol" required />
                <label class="form-check-label" for="inlineRadio1">Petrol</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fuel" 
                  value="Diseal" required/>
                <label class="form-check-label" for="inlineRadio2">Diseal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="fuel" 
                  value="CNG" required/>
                <label class="form-check-label" for="inlineRadio2">CNG</label>
              </div>
              <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Car Seat</label>
                        <select id="defaultSelect" class="form-select" name="seat">
                          <option>Car Seat</option>
                          <option value="four">4</option>
                          <option value="six">6</option>
                          <option value="eight">8</option>
                        </select>
                      </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Car Image</label>
                <input class="form-control" type="file" id="image" name="image" required/>
              </div>
              <div class="col-md">
                <small class="text-light fw-semibold d-block">Air Condition</small>
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="air" 
                    value="AC" required/>
                  <label class="form-check-label" for="inlineRadio1">Ac</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="air" 
                    value="Non Ac" required/>
                  <label class="form-check-label" for="inlineRadio2">Non Ac</label>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Description</label>
                  <textarea id="basic-default-message" class="form-control" placeholder="Car Description" name="description"required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Add Car" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>