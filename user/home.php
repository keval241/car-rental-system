<?php
include 'connect.php';
//session_start();
//echo $_SESSION['uid'];

//             $_SESSION['uid']=$f[0];
//             $_SESSION['email']=$f[4];
?>
	<?php include 'header.php'; ?>
	<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/car(1).jpg');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
				<div class="col-lg-8 ftco-animate">
					<div class="text w-100 text-center mb-md-5 pb-md-5">
						<h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
						<p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the
							necessary regelialia. It is a paradisematic country, in which roasted parts</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section ftco-no-pt bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">What we offer</span>
					<h2 class="mb-2">Feeatured Vehicles</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-car owl-carousel">
						<?php

						$sql3 = "SELECT * FROM vechicels_brand";
						$result3 = mysqli_query($con, $sql3);
						while ($row3 = mysqli_fetch_assoc($result3)) {
							?>
							<div class="item">
								<div class="car-wrap rounded ftco-animate">
									<div class="img rounded d-flex align-items-end"
										style="background-image: url(admin/uploads/<?= $row3['v_image'] ?>);">
									</div>
									<div class="text">
										<h2 class="mb-0"><a href="#"><?= $row3['v_carname'] ?></a></h2>
										<div class="d-flex mb-3">
											<span class="cat"><?= $row3['v_fuel'] ?></span>
											<p class="price ml-auto">₹<?= $row3['v_price'] ?><span>/day</span></p>
										</div>
										<p class="d-flex mb-0 d-block"><a href="book-Form.php?carId=<?php echo $row3['v_id'];?>" class="btn btn-primary py-2 mr-1">Book
												now</> <a href="car-single.php?id=<?php echo $row3['v_id']; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
									</div>
								</div>
							</div>
							<?php
						}

						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
					style="background-image: url(images/about.jpg);">
				</div>
				<div class="col-md-6 wrap-about ftco-animate">
					<div class="heading-section heading-section-white pl-md-5">
						<span class="subheading">About us</span>
						<h2 class="mb-4">Welcome to RentRide</h2>

						<p>Welcome to RentRide, where we turn your journey into a smooth ride. Founded in 2024, our mission
							is simple: to provide exceptional car rental experiences with a personal touch.</p>
						<p>RentRide began with a vision to make car rentals more accessible, reliable, and enjoyable. What
							started as a small local service has grown into a trusted name in the industry, known for our
							commitment to customer satisfaction and quality.</p>
						<p><a href="car.php" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-3">Our Latest Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center text-white">
                        <i class="fa-solid fa-hand-holding-dollar fa-2x"></i>
                    </div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Low Rent</h3>
                        <p>Road trip or errands, we’ve got you covered with our low-rate rentals!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center text-white">
                        <i class="fa-solid fa-city fa-2x"></i>
                    </div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Whole City Tour</h3>
                        <p>Explore the city like a local—rent a car and see it all at your own pace!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center text-white">
                        <i class="fa-solid fa-car-side fa-2x"></i>
                    </div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Comfort Car</h3>
                        <p>Experience the ultimate in relaxation with our luxury comfort rentals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center text-white">
                        <i class="fa-solid fa-headset fa-2x"></i>
                    </div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Quick Support</h3>
                        <p>24/7 support to keep you on the road—help is always available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 heading-section heading-section-white ftco-animate">
					<h2 class="mb-3">Your journey begins here—drive with confidence in our top-quality rentals.</h2>
					<a href="car.php" class="btn btn-primary btn-lg">Book Car</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter ftco-section img bg-light" id="section-counter">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18">
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="5">0</strong>
							<span>Year <br>Experienced</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18">
					<?php $a=10;?>
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="<?php echo $a;?>">0</strong>
							<span>Total <br>Cars</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18">
						<div class="text text-border d-flex align-items-center">
							<strong class="number" data-number="259">0</strong>
							<span>Happy <br>Customers</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18">
						<div class="text d-flex align-items-center">
							<strong class="number" data-number="5">0</strong>
							<span>Total <br>Branches</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
