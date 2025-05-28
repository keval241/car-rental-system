<?php
include("header.php");
?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i
							class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Car Details</h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-car-details">
	<div class="container">
		<div class="row justify-content-center">
			<?php
			include("connect.php");
			$id = $_GET['id'];
			$sql = "SELECT * FROM vechicels_brand WHERE v_id = $id";
			$result = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="col-md-12">
					<div class="car-details">
					<a href="car.php"><button type="button" class="btn btn-sm btn-danger">Back</button></a>
						<div class="img rounded"
							style="background:cover; background-image: url(admin/uploads/<?= $row['v_image'] ?>);"></div>
						<div class="text text-center">
							<span class="subheading"><?= $row['v_brand'] ?></span>
							<h2><?= $row['v_carname'] ?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><i class="fa-solid fa-car fa-2x" style="color: #1089ff;"></i></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Car Number
										<span><?= $row['v_carno'] ?></span>
									</h3>
									<i class=""></i>
									<i class=""></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="flaticon-car-seat"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Seats
										<span><?= $row['v_seat'] ?></span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><i class="fa-solid fa-fan fa-2x" style="color: #1089ff;"></i></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Air Condition
										<span><?= $row['v_aircondition'] ?></span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="icon d-flex align-items-center justify-content-center"><span
										class="flaticon-diesel"></span></div>
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Fuel
										<span><?= $row['v_fuel'] ?></span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Luggage</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Music</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
						    				<li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Water</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
						    				<li class="remove"><span class="ion-ios-close"></span>Onboard computer</li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Car Kit</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Remote central locking</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Climate control</li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo $row['v_description']; ?></p>
						    </div>
							<div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
						      <div class="row">
							   		<div class="col-md-7">
        <div class="review d-flex">
            <?php
            include("connect.php");
            $sql = "SELECT 
					vr.r_id,
					vr.c_id,
					vr.v_id,
					vr.r_message,
					vr.r_rate, 
					cr.c_id, 
					cr.c_name,
					cr.c_username,
					cr.c_mobile,
					cr.c_email,
					cr.c_password	
				FROM 
					vechicels_review vr 
				JOIN 
					customer_register cr ON vr.c_id = cr.c_id 
				WHERE 
					vr.v_id = $id";
            $result1 = mysqli_query($con, $sql);                            
            if ($result1) {
                while ($reviewRow = mysqli_fetch_assoc($result1)) {
                    $userName=$reviewRow['c_name'];
					$rating = $reviewRow['r_rate']; 
                    $reviewText = $reviewRow['r_message']; 
            ?>
                <div class="desc fs-1">
                    <h4>
                        <span class="text-left fs-2"><?php echo $userName; ?></span>
                    </h4>
                    <p class="star">
                        <span class="d-flex">
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
                    <p><?php echo htmlspecialchars($reviewText); ?></p>
                </div>
            <?php 
                } 
            } else {
                echo "Error fetching reviews: " . mysqli_error($con);
            }
            ?>
        </div>
    </div>
    <div class="col-md-5">
        <div class="rating-wrap">
            <h3 class="head">Give a Review</h3>
            <form class="contact-form" method="post" id="reviewForm">
                <input type="hidden" name="vId" id="vId" value="<?php echo $row['v_id']; ?>">
                <div class="form-group">
                    <textarea id="message" cols="30" rows="3" class="form-control" placeholder="Message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <select id="rate" class="form-control" name="rate">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send Review" id="submitBtn" class="btn btn-primary py-3 px-5" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
	</div>
</section>

<!-- <section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
		  <div class="col-md-12 heading-section text-center ftco-animate mb-5">
			  <span class="subheading">Choose Car</span>
			<h2 class="mb-2">Related Cars</h2>
		  </div>
		</div>
		<div class="row">
			<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-1.jpg);">
						</div>
						<div class="text">
							<?php
							include("connect.php");
							$sql = "SELECT * FROM vechicels_brand";
							$result = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_array($result)) {
								?>
							<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
							<div class="d-flex mb-3">
								<span class="cat">Cheverolet</span>
								<p class="price ml-auto">$500 <span>/day</span></p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
						<?php
							}
							?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-2.jpg);">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.html">Range Rover</a></h2>
							<div class="d-flex mb-3">
								<span class="cat">Subaru</span>
								<p class="price ml-auto">$500 <span>/day</span></p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(images/car-3.jpg);">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.html">Mercedes Grand Sedan</a></h2>
							<div class="d-flex mb-3">
								<span class="cat">Cheverolet</span>
								<p class="price ml-auto">$500 <span>/day</span></p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
					</div>
				</div>
		</div>
		</div>
	</section> -->

<script src="js/jquryCdn.js"></script>
<script>
	$('#submitBtn').on("click", function (e) {
		e.preventDefault(); // Prevent form submission
		let vid = $('#vId').val();
		let msg = $('#message').val();
		let rate = $('#rate').val();

		$.ajax({
			url: "logic-review.php",
			type: "post",
			data: { vId: vid, message: msg, rate: rate },
			success: function (result) {
				alert(result);
				$('#message').val('');
				$('#rate').val('1');
			}
		});
	});
</script>


<?php include("footer.php"); ?>