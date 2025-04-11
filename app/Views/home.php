<!DOCTYPE html>
<html lang="id" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Lampungku</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="protfolio-wrap">

		<!-- Start Header Area -->
		<?php include 'navbar.php'; ?>
		<!-- End Header Area -->

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner-content col-lg-10">
						<h5 class="text-uppercase">Be the part of this Wonderful Journey</h5>
						<h1>
							Incredible Lampung!
						</h1>
						<a href="/places" class="primary-btn text-uppercase">Explore Now</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start portfolio-area Area -->
		<section class="portfolio-area section-gap" id="portfolio">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">You'll fall in love with Lampung</h1>
							<p>Explore Lampung from Mesuji to Pesisir Barat</p>
						</div>
					</div>
				</div>

				<div class="filters-content">
					<div class="places">
						<?php foreach (['wisataTanggamus', 'wisataLamsel', 'wisataLambar', 'wisataLamtim', 'wisataPesawaran', 'wisataWayKanan'] as $locationKey): ?>
							<div class="card-stack">
								<?php if (isset($data[$locationKey])): ?>
									<?php foreach ($data[$locationKey] as $place): ?>
										<?php echo view('components/stack-card', ['location' => $place['location'], 'picture' => $place['picture']]) ?>
									<?php endforeach; ?>
								<?php else: ?>
									<p>No data available for <?= $locationKey ?></p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</section>
		<!-- End portfolio-area Area -->


		<!-- Start service Area -->
		<section class="service-area section-gap relative" id="service">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10 text-white">Always in our customer Favour</h1>
							<p>Who are always with tight Budget</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End service Area -->

		<!-- Start services Area -->
		<section class="services-area pb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="single-service">
							<img class="img-fluid" src="<?= base_url('/assets/s1.png') ?>" alt="">
							<h4>Ammenties Selection</h4>
							<p>
								It's totaly on you what you want and what you want to let it go on Hotel Selection
								process.
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-service">
							<img class="img-fluid" src="<?= base_url('/assets/s2.png') ?>" alt="">
							<h4>Visa Ready</h4>
							<p>
								Just 32 Hours - What it takes get your Visa Ready and other documentation necessary for
								travel.
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-service">
							<img class="img-fluid" src="<?= base_url('/assets/s3.png') ?>" alt="">
							<h4>Personalized Travel Plans</h4>
							<p>
								We have wide Varieties of Hotel &amp; Resorts to accomodate you. 3D4N or 15D16N totally
								upto you.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End services Area -->

		<!-- Start review Area -->
		<section class="review-area section-gap" id="testimonial">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-60 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">How Our Customers felt for Us</h1>
							<p>Who are in extreme love with friendly &amp; inviting people</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="single-review">
							<div class="title d-flex flex-row">
								<a href="#">
									<h4>Fannie Rowe</h4>
								</a>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
							<p>
								It was a life Experience to visit such a beautiful cultural country.
							</p>
						</div>
						<div class="single-review">
							<div class="title d-flex flex-row">
								<a href="#">
									<h4>Lillie Summers</h4>
								</a>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
							<p>
								Just one Word - Incredible!
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-review">
							<div class="title d-flex flex-row">
								<a href="#">
									<h4>Bob Marley</h4>
								</a>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-starchecked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
							<p>
								Damm! I'm thinking of staying here in this World.
							</p>
						</div>
						<div class="single-review">
							<div class="title d-flex flex-row">
								<a href="#">
									<h4>Jackie Chan</h4>
								</a>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
							<p>
								Now, I am big fan of Power Yoga. Thanks for such a gift to this world.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End review Area -->


		<!-- start footer Area -->
		<footer class="footer-area section-gap" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								We Provide Tour Plans for your most comfortable travel ever. Let yourself dive into the
								Beauty, Culture &amp; festivals of Lampung. Have You're Good time at Lampung.
							</p>
							<p class="footer-text">
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved | This
								Website is created with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
									href="https://github.com/arsyida" target="_blank">Ajeng</a>
							</p>
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>Stay update with our latest</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" action="" method="get" class="form-inline">
									<input class="form-control" name="EMAIL" placeholder="Enter Email"
										onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Enter Your Email Here '" required="" type="email">
									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
											aria-hidden="true"></i></button>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Follow Us</h6>
							<p>Let us be social</p>
							<div class="footer-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-snapchat"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
	</div>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/search.js"></script>
	<script src="https://kit.fontawesome.com/f0d8b8088c.js" crossorigin="anonymus"></script>
</body>

</html>