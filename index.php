<?php
session_start();

 if (!isset($_SESSION['user'])) {
   header("Location: login.php");

 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<!-- <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/> -->

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->



</head>
<style>
	#cardImg{
		height: 100px;
	}
</style>
<body>
	<!-- HEADER -->
	<header >
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
			
				<ul class="header-links pull-right">
					
					<li><a href="logout.php" class="btn ">Logout</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header" >
			<!-- container -->
			<div class="container d-flex">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo ">
							<a href="#" class="logo">
								<img src="./img/srs3-removebg-preview.png" alt="" class="img-fluid" width="50px"
									height="50px">
								<h3 style="color:white; font-size: 10px; margin-top: 5px;">Manufacture</h3>
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn ">
							
							
							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#Products_Tyep">Products Tyep</a></li>
						<li><a href="#Testing_Policy">Testing Policy</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#our_team">Our Team</a></li>
						<li><a href="#contact">Contact</a></li>
						  <?php if( $_SESSION['user'] && $_SESSION['user']['roll'] == 'admin'  ){?>
						<li><a href="admin_panel/index.php">Admin Panel</a></li>
						<?php  }?> 

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container ">
				<!-- row -->
				<div class="container my-5">
    <div id="product-container" class="row g-4">
        <!-- Bootstrap cards will be injected here -->
    </div>
</div>
			</div>
			<!-- /container -->
		</div>

		<!-- ABOUT US SECTION -->
		<div class="section about-us" id="about">
			<div class="container">
				<div class="row align-items-center">
					<!-- IMAGE -->
					<div class="col-md-6 col-12 mb-4 mb-md-0">
						<img src="./img/visitorss.PNG" alt="SRS Manufacture" class="img-fluid rounded shadow"
							style="width:100%; height:auto; display:block;">
					</div>

					<!-- TEXT -->
					<div class="col-md-6 col-12 d-flex align-items-center">
						<div class="about-content" style="padding-top:30px; padding-bottom:30px;">
							<h2>About <span>SRS Manufacture</span></h2>
							<p>SRS Manufacture is a leading producer of high-quality electrical products, including
								switchgear, fuses, resistors, and capacitors. Every product undergoes rigorous testing
								to ensure safety, reliability, and compliance with industry standards.</p>

							<ul class="about-features list-unstyled">
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Quality-tested and certified products</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Industry-compliant manufacturing standards</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i> Advanced
									technology and innovation</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i> Complete
									product testing records</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i> Reliable
									customer support</li>
							</ul>

							<a href="#products" class="btn"
								style="background-color:#d32f2f; color:white; border:none; margin-top:15px;">
								View Our Products <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /ABOUT US SECTION -->



		<!-- /ABOUT US SECTION -->


		<!-- SECTION -->
		<div class="section" id="Products_Tyep">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Products Type</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Switchgears</a></li>
									<li><a data-toggle="tab" href="#tab1">fuses</a></li>
									<li><a data-toggle="tab" href="#tab1">capacitors</a></li>
									<li><a data-toggle="tab" href="#tab1">Resistors</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Switchgear</p>
												<h3 class="product-name"><a href="#">11kV Indoor Switchgear Panel</a>
												</h3>
												<h4 class="product-price">$980.00 <del
														class="product-old-price">$990.00</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>

											</div>

										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!-- TESTING SECTION -->
		<!-- TESTING SECTION -->
		<div class="section testing-section" id="Testing_Policy">
			<div class="container">
				<div class="row align-items-center">
					<!-- IMAGE -->
					<div class="col-md-6 col-12 mb-4 mb-md-0">
						<img src="./img/srsfactory.jpg" alt="Product Testing" class="img-fluid rounded shadow"
							style="width:100%; height:auto; display:block;">

					</div>

					<!-- TEXT -->
					<div class="col-md-6 col-12 d-flex align-items-center">
						<div class="testing-content" style="padding-top:30px; padding-bottom:30px;">
							<h2>Our <span>Testing Process</span></h2>
							<p>At SRS Manufacture, every product undergoes rigorous testing to ensure it meets safety,
								performance, and industry standards. We maintain detailed testing records for complete
								transparency.</p>

							<ul class="testing-features list-unstyled">
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i> Voltage
									& Current Testing</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Insulation Resistance Testing</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Continuity & Safety Checks</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Insulation Resistance</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i> Detailed
									Test Reports for Every Product</li>
								<li><i class="fa fa-check-circle" style="color:#d32f2f; margin-right:8px;"></i>
									Certified & Reliable Testing Procedures</li>
							</ul>

							<a href="#products" class="btn"
								style="background-color:#d32f2f; color:white; border:none; margin-top:15px;">
								View Tested Products <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /TESTING SECTION -->



		<!-- SECTION -->
		<div class="section" id="our_team">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Our Team</h3>
							<p class="section-desc">
								At SRS Manufacture, our experienced team of engineers, technicians, and quality
								professionals ensures reliable manufacturing and thorough testing of every electrical
								product.
								We are committed to delivering safe, certified, and industry-compliant solutions to our
								customers.
							</p>
						</div>

					</div>
					<!-- /section title -->
					<!-- TEAM SECTION -->

					<!-- Team Slick -->
					<div class="col-md-12">
						<div class="products-tabs">
							<div class="tab-pane fade in active">
								<div class="products-slick" data-nav="#slick-nav-team">

									<!-- TEAM MEMBER -->
									<div class="product">
										<div class="product-img">
											<img src="./img/Capture.PNG" alt="">
											<div class="product-label">
												<span class="new">MD</span>
											</div>
										</div>
										<div class="product-body text-center">
											<h3 class="product-name">Nazia Nasir</h3>
											<h3 class="product-name">Decision Making</h3>
											<h4 class="product-price ">Managing Director</h4>
											<p style="font-size:13px; color:#555;">
												Leads company strategy and oversees manufacturing, quality,
												and business operations.
											</p>
										</div>
									</div>

									<!-- TEAM MEMBER -->
									<div class="product">
										<div class="product-img">
											<img src="./img/dawood.PNG" alt="">
											<div class="product-label">
												<span class="new">PM</span>
											</div>
										</div>
										<div class="product-body text-center">
											<h3 class="product-name">Ramz</h3>
											<h3 class="product-name">Production Manager</h3>
											<h4 class="product-price">Manufacturing</h4>
											<p style="font-size:13px; color:#555;">
												Manages production planning, workflow, and timely delivery
												of electrical products.
											</p>
										</div>
									</div>

									<!-- TEAM MEMBER -->
									<div class="product">
										<div class="product-img">
											<img src="./img/afsh.PNG" alt="">
											<div class="product-label">
												<span class="new">TE</span>
											</div>
										</div>
										<div class="product-body text-center">
											<h3 class="product-name">Bint-e-Nasir </h3>
											<h3 class="product-name">Testing Engineer</h3>
											<h4 class="product-price">Quality & Testing</h4>
											<p style="font-size:13px; color:#555;">
												Performs voltage, current, IR, and continuity tests to
												ensure product safety.
											</p>
										</div>
									</div>

									<!-- TEAM MEMBER -->
									<div class="product">
										<div class="product-img">
											<img src="./img/dwd.PNG" alt="">
											<div class="product-label">
												<span class="new">QM</span>
											</div>
										</div>
										<div class="product-body text-center">
											<h3 class="product-name">Dawood Khatak</h3>
											<h3 class="product-name">QC Manager</h3>
											<h4 class="product-price">Quality Control</h4>
											<p style="font-size:13px; color:#555;">
												Ensures compliance with standards and approves products
												before delivery.
											</p>
										</div>
									</div>

									<!-- TEAM MEMBER -->
									<div class="product">
										<div class="product-img">
											<img src="./img/abdul.PNG" alt="">
											<div class="product-label">
												<span class="new">SE</span>
											</div>

										</div>
										<div class="product-body text-center">
											<h3 class="product-name">Abdul Raheem</h3>
											<h3 class="product-name">Sales Engineer</h3>
											<h4 class="product-price">Customer Support</h4>
											<p style="font-size:13px; color:#555;">
												Provides technical guidance and supports customers with
												product solutions.
											</p>
										</div>
									</div>

								</div>
								<div id="slick-nav-team" class="products-slick-nav"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /TEAM SECTION -->

		<!-- SECTION -->
		<!-- TESTIMONIAL SECTION -->
<div class="section" id="testimonials">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- Section Title -->
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">What Our Clients Say</h3>
                    <p style="max-width:700px; margin:10px auto 0; font-size:14px; color:#777;">
                        Trusted by industrial and commercial clients for quality manufacturing, 
                        reliable testing, and complete electrical product documentation.
                    </p>
                </div>
            </div>

            <!-- Testimonials Slider -->
            <div class="col-md-12">
                <div class="products-widget-slick" data-nav="#slick-nav-testimonial">

                    <!-- Slide 1 -->
                    <div>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/factory manager.PNG" alt="Client">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Industrial Client</p>
                                <h3 class="product-name">
                                    <a href="#">ABC Power Solutions</a>
                                </h3>
                                <h4 class="product-price">Lahore, Pakistan</h4>
                                <p style="font-size:13px; line-height:1.6;">
                                    “SRS Manufacture delivered fully tested switchgear panels with complete documentation. 
                                    Their quality standards and testing procedures are highly reliable.”
                                </p>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/power plant engineer.jpg" alt="Client">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Manufacturing Partner</p>
                                <h3 class="product-name">
                                    <a href="#">Delta Engineering</a>
                                </h3>
                                <h4 class="product-price">Islamabad, Pakistan</h4>
                                <p style="font-size:13px; line-height:1.6;">
                                    “Excellent testing records and certified electrical products. 
                                    Their technical team ensures every unit meets industry standards.”
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/electrical engineer portrait.PNG" alt="Client">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Commercial Client</p>
                                <h3 class="product-name">
                                    <a href="#">National Power Systems</a>
                                </h3>
                                <h4 class="product-price">Karachi, Pakistan</h4>
                                <p style="font-size:13px; line-height:1.6;">
                                    “We trust SRS Manufacture for fuses and capacitors due to their 
                                    strict quality control and transparent testing process.”
                                </p>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/prductmng.PNG" alt="Client">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Government Contractor</p>
                                <h3 class="product-name">
                                    <a href="#">Pak Energy Projects</a>
                                </h3>
                                <h4 class="product-price">Rawalpindi, Pakistan</h4>
                                <p style="font-size:13px; line-height:1.6;">
                                    “Timely delivery, complete test reports, and certified products. 
                                    SRS Manufacture is a dependable electrical solutions provider.”
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Slider Navigation -->
                <div id="slick-nav-testimonial" class="products-slick-nav"></div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /TESTIMONIAL SECTION -->

		<!-- /SECTION -->


		<!-- CONTACT US SECTION -->
	
        

		<div class="section contact-section" id="contact">
			<div class="container">
				<div class="row">

					<!-- CONTACT INFO -->
					<div class="col-md-5 col-12 mb-4 mb-md-0 d-flex align-items-center">
						<div class="contact-info" style="padding:30px;">
							<h2>Contact <span>Us</span></h2>
							<p>Get in touch with SRS Manufacture for product inquiries, testing details, or
								support.</p>

							<ul class="list-unstyled">
								<li style="margin-bottom:15px;">
									<i class="fa fa-map-marker" style="color:#d32f2f; margin-right:10px;"></i>
									Industrial Area, Pakistan
								</li>
								<li style="margin-bottom:15px;">
									<i class="fa fa-phone" style="color:#d32f2f; margin-right:10px;"></i>
									+92 300 1234567
								</li>
								<li style="margin-bottom:15px;">
									<i class="fa fa-envelope" style="color:#d32f2f; margin-right:10px;"></i>
									info@srsmanufacture.com
								</li>
								<li>
									<i class="fa fa-check-circle" style="color:#d32f2f; margin-right:10px;"></i>
									Tested & Certified Electrical Products
								</li>
							</ul>

						</div>
					</div>

					<!-- CONTACT FORM -->
<div class="col-md-7 col-12 d-flex align-items-center" id="contact-form-wrapper">
    <div class="contact-form w-100" style="padding:30px; background:#f9f9f9; border-radius:8px;">
        <form id="contactForm">
            <div class="row">
                <div class="col-md-6">
                    <input class="input" type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                    <input class="input" type="email" name="email" placeholder="Your Email" required>
                </div>
            </div>

            <input class="input mt-3" type="text" name="subject" placeholder="Subject">
            <textarea class="input mt-3" name="message" placeholder="Your Message" rows="5" required></textarea>

            <button type="submit" class="btn mt-3" style="background-color:#d32f2f; color:white; border:none;">
                Send Message <i class="fa fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>
				</div>
			</div>
		</div>
		<!-- /CONTACT US SECTION -->
		<div class="container-fluid section" id="bottom-footer">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="newsletter">

						<ul class="newsletter-follow">
							<li>
								<a href="index.php"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		</div>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	const productContainer = document.getElementById('product-container');

fetch('http://localhost/lab-automation/api/getactivepro.php')
  .then(response => {
    if (!response.ok) {
      throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    let productHTML = '';

    // Corrected: use forEach (capital E) and unique variable name 'product'
    data.forEach(product => {
      productHTML += `
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card h-100 shadow-lg rounded">
            <!-- Use product.image from your API keys -->
            <img src="admin_panel/assets/images/${product.image}" class="card-img-top" id='cardImg' alt="${product.product_name}" >
            <div class="card-body">
              <h5 class="card-title text-primary">${product.product_name}</h5>
              <p class="card-text">
              
                <strong>Type:</strong> ${product.product_type}<br>
             
              </p>
            </div>
            
          </div>
        </div>
      `;
    });

    // Inject the generated HTML into the container
    productContainer.innerHTML = productHTML;
  })
  .catch(err => {
    console.error('Fetch error:', err);
    productContainer.innerHTML = `<div class="alert alert-danger">Error loading products.</div>`;
  });


  


$(document).ready(function(){
    $('#contactForm').submit(function(e){
        e.preventDefault(); // prevent default form submit (no reload)

        $.ajax({
            url: 'admin_panel/backend/contact.php', // aapka backend path
            type: 'POST',
            data: $(this).serialize(),
            success: function(response){
                Swal.fire({
                    icon: 'success',
                    title: 'Sent!',
                    text: 'Your message has been sent successfully! Our team will contact you soon.',
                    timer: 2500,
                    showConfirmButton: false
                });
                $('#contactForm')[0].reset(); // clear form
            },
            error: function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Something went wrong. Please try again.'
                });
            }
        });
    });
});
</script>

</body>

</html>