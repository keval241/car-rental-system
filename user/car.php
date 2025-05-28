<?php include 'header.php'; ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i
								class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
							class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Choose Your Car</h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			

			<?php

			include("connect.php");

			$sql = "SELECT * FROM vechicels_brand";
			$result = mysqli_query($con, $sql);

			while ($row = mysqli_fetch_array($result)) {
				?>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(admin/uploads/<?= $row['v_image'] ?>);">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.php"><?= $row['v_carname'] ?></a></h2>
							<div class="d-flex mb-3">
								<span class="cat"><?= $row['v_fuel'] ?></span>
								<p class="price ml-auto">₹<?= $row['v_price'] ?> <span>/day</span></p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="book-Form.php?carId=<?php echo $row['v_id'];?>" class="btn btn-primary py-2 mr-1">Book now</a> <a
									href="car-single.php?id=<?php echo $row['v_id']; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
					</div>
				</div>
				<?php
			}

			?>
			
		</div>
		</div>
	</div>
</section>

<?php include 'footer.php' ?>