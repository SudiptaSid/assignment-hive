<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- StyleSheet -->
	<link rel="stylesheet" href="css/style-min.css">
	<link rel="stylesheet" href="css/custom.css">

	<title>Assignment Hive</title>
</head>

<body>
	<!-- Loader -->
	<div class="preloader">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="lds-spinner">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header -->
	<header class="mainHeader">
		<!-- Topbar -->
		<section class="topBar">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="content">
							<a href="mailto:info@assignmenthive.com">
								<em class="lni lni-envelope"></em> info@assignmenthive.com
							</a>
							<a href="">
								<em class="lni lni-map-marker"></em> 505/1, M.B.Road, Majherhati More, Nimta, Kol-700049
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Menubar -->
		<nav class="navbar navbar-expand-md">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
					<em class="lni lni-menu"></em>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="service.php">Services</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="price-calculator.php">Price Calculator</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Mobile Menu -->
	<div class="mobileSidebar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
		<div class="offcanvas-header">
			<a href="index.php" class="logo">
				<img src="images/logo.png" alt="">
			</a>
			<button type="button" class="closeBtn" data-bs-dismiss="offcanvas" aria-label="Close">
				<em class="lni lni-close"></em>
			</button>
		</div>
		<div class="offcanvas-body">
			<div class="accordion" id="navbarAccordion">
				<div class="accordion-item">
					<a class="accordion-button noIcon active" href="index.php">Home</a>
				</div>
				<div class="accordion-item">
					<a class="accordion-button noIcon" href="about.php">About Us</a>
				</div>
				<div class="accordion-item">
					<a class="accordion-button noIcon" href="service.php">Services</a>
				</div>
				<!-- <div class="accordion-item">
					<a class="accordion-button noIcon" href="price-calculator.php">Price Calculator</a>
				</div> -->
				<div class="accordion-item">
					<a class="accordion-button noIcon" href="contact.php">Contact Us</a>
				</div>
			</div>
		</div>
	</div>