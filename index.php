<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the NAME field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the PHONE field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}

	//Check to make sure sure that a valid EMAIL address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!filter_var( trim($_POST['email'], FILTER_VALIDATE_EMAIL ))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure COMMENTS were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	// Subject
	$subject = "From Thames Drainage & Digging Web Site";

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'office@thamesdrainage.co.nz'; // Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nPhone Number: $phone \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Thames Drainage & Digging Web Site <office@thamesdrainage.co.nz>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" ngApp="thamesAng">
<!--<![endif]-->
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>Thames Drainage & Digging</title>
		<meta name="description" content="Thames Drainage & Digging">
		<meta name="author" content="Thames Drainage & Digging">
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- CSS
		================================================== -->
		<!-- Bootstrap  -->
		<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- web font  -->
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300,600,700,900' rel='stylesheet' type='text/css'>
		<!-- plugin css  -->
		<link rel="stylesheet" type="text/css" href="js-plugin/magnific-popup/magnific-popup.css" />
		<!-- icon fonts -->
		<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons.css">
		<link type="text/css" rel="stylesheet" href="font-icons/custom-icons/css/custom-icons-ie7.css">
		<!-- Custom css -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
		<link type="text/css" rel="stylesheet" href="css/custom.min.css">
	</head>


	<!-- BODY BEGINS -->
	<body data-spy="scroll" data-target="#scrollTarget" data-offset="150" ngController="MainCtrl">
		<!-- Primary Page Layout 
		================================================== -->
		<!-- globalWrapper -->
		<div id="globalWrapper" class="localscroll" ngInclude="navigation.html">


			<!-- Nav -->
			<header id="mainHeader" class="navbar-fixed-top" role="banner">
				<div class="container" >
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<img src="images/logo-md.png" class="logo-img" alt="">
						</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="scrollTarget">
								<ul class="nav navbar-nav pull-right">
									<li class="active"><a href="#home"><i class="icon-home-outline"></i>Home</a> </li>
									<li><a href="#about"><i class="icon-quote-right"></i>About</a> </li>
									<li><a href="#services"><i class=" icon-wrench-outline"></i>Services</a> </li>
									<li><a href="#gallery"><i class="icon-videocam"></i>Gallery</a> </li>
									<li><a href="#contactSlicetop"><i class="icon-mail"></i>Contact</a> </li>
								</ul>
							</div>
						</nav>
					</div>
				</header>
			<!-- Nav Ends! -->


				<!-- HERO UNIT -->
				<section id="home" data-stellar-background-ratio="0.5" class="hero">
					<div class="container center-block pagination-centered">
							<div class="row">
								<div class="col-md-6">
									<h2 class="hero-unit visible-xs">THAMES DRAINAGE & DIGGING</h2>
									<h2 class="hero-unit hidden-xs" id="txtlzr"></h2>
									<a href="" class="btn-primary hero-button">CONTACT US</a>
								</div>
								<div class="col-md-6">
									<h4 class="text-angle" id="tagLineOne">DRAINLAYING</h4>
									<h4 class="text-angle" id="tagLineTwo">EARTH MOVING</h4>
									<h4 class="text-angle" id="tagLineThree">DRAIN UBLOCKING</h4>
								</div>
							</div>
					</div>
				</section>


				<!-- ABOUT SECTION -->
				<section class="slice" id="about">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>ABOUT</h1>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<h2>WELCOME TO THAMES DRAINAGE & DIGGING</h2>

									<p>The business consists of a team with a wealth of experience in the excavation and drainage industry. They provide clients with knowledgeable and durable services at a cost effective price. Each member of the team pride themselves on their capabilities to offer clients sound advice to benefit each project - always being proactive in finding solutions to any problems or obstacles that surface</p>

									<p>The professional team of drain layers & earth movers are qualified and registered, honest and dependable. You can rely on them to provide a level of work and a service that goes beyond your expectations!</p>

									<p>Put simply, they make it stress-free, easy and affordable for you. So contact the dedicated team at Thames Drainage & Digging today!</p>
							</div>

							<div class="col-sm-6">
								<div class="about-contact">
								<h2>CONTACT DETAILS</h2>
									<p class="contact-box">LOCATION</p>
									<i class="icon-location"></i>&nbsp;Thames, Coromandel Peninsula, 
									New Zealand
									<p class="contact-box">OFFICE</p>
									<i class="icon-phone"></i>&nbsp;+64 07 868 7004 <br>
									<p class="contact-box">SHANE DEVERILL</p>
									<i class="icon-phone"></i>&nbsp;021 955 860 <br>
									<p class="contact-box">BRETT DEVERILL</p>
									<i class="icon-phone"></i>&nbsp;021 657 004 <br>
									<p class="contact-box">EMAIL</p>
									<i class="icon-mail"></i>&nbsp;<a href="mailto:office@thamesdrainage.co.nz">office@thamesdrainage.co.nz</a>
								 </div>
							</div>

						</div>
					</div>
				</section>

				<!-- Parallax Starts -->

				<div data-stellar-background-ratio="0.5" id="paralaxSlice2" style="background-position: 50% 159.358px;">
					<div class="maskParent">
						<div class="paralaxMask"></div>
						<div class="paralaxText container">
							<h2>"Drain laying, earth moving & Drain Unblocking services"</h2><br>
						</div>
					</div>
				</div>

				<!-- Parallax Ends -->
				
				<!-- SERVICES -->
				<section class="slice services" id="services">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>SERVICES</h1>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<h2>THE DRAINAGE EXPERTS:</h2>
								<p>The drainage experts at Thames Drainage & Digging offer the Coromandel region high quality drain laying and earthmoving services. Their business consists of a team with a wealth of experience in the excavation and drainage industry. They provide clients with knowledgeable and durable services at a cost effective price.</p>

								<p>Each member of the team pride themselves on their capabilities to offer clients sound advice to benefit each project - always being proactive in finding solutions to any problems or obstacles that surface. </p>

								<h2 style="margin-top: 25px;">OUR SERVICES</h2>

							</div>

							<div class="col-md-4">
								<ul>
									<li>Drain Laying</li>
									<li>Earth Moving</li>
									<li>Drain Unblocking</li>
									<li>Septic Tank Services</li>
									<li>Effluent Systems</li>
									<li>Effluent Filters</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul>
									<li>Excavation</li>
									<li>Bobcat Hire</li>
									<li>Waterblasting</li>
									<li>CCTV Camera For Pipe Inspections</li>
									<li>Drainage</li>
									<li>Cartage</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul>
									<li>Sewer Plants Installed</li>
									<li>Sewer Plants Serviced</li>
									<li>Pipe Doctor Repairs</li>
									<li>Excavation Hire & Bobcat Hire</li>
									<li>4 & 6 Wheeler & Tip Truck Hire</li>
									<li>Metal Cartage & Holes Drilled</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- Parallax Starts -->

				<div data-stellar-background-ratio="0.5" id="paralaxSlice2" style="background-position: 50% 159.358px;">
					<div class="maskParent">
						<div class="paralaxMask"></div>
						<div class="paralaxText container">
							<h2>"a team with a wealth of experience in the excavation and drainage industry"</h2><br>
						</div>
					</div>
				</div>

				<!-- Parallax Ends -->

				<!-- GALLERY -->
				<section class="slice gallery" id="gallery">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>GALLERY</h1>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 pop-images-a" id="popImagesA">
								<h2>PHOTOS</h2>
								<a href="images/thames-drainage-image-a.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-a.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-b.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-b.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-d.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-d.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-c.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-c.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-e.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-e.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-f.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-f.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-g.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-g.jpg" alt="..." class="img-thumbnail"></a>
								<a href="images/thames-drainage-image-h.jpg" title="THAMES DRAINAGE AND DIGGING"><img src="images/thames-drainage-image-h.jpg" alt="..." class="img-thumbnail"></a>
							</div>

							<div class="col-sm-12" id="youTube">
								<h2 class="break">VIDEO</h2>
								<p><a class="popup-youtube" href="https://www.youtube.com/watch?v=46qVndIHa1Y">Video Example Of Drain Inspection - Click To View</a></p>
								<p><a class="popup-youtube" href="https://www.youtube.com/watch?v=IQr0Bf12c1A">Video Example Before Blockage - Click To View</a></p>
								<p><a class="popup-youtube" href="https://www.youtube.com/watch?v=4-KvZ_gczck">Video Example After Blockage - Click To View</a></p>
								<p><a class="popup-youtube" href="https://www.youtube.com/watch?v=ZRdzYcu2Pes">Video Example Of Broken Pipe Before Pipe Doctor Patch - Click To View</a></p>
								<p><a class="popup-youtube" href="https://www.youtube.com/watch?v=-VSGe0v0QcU">Video Example Of Broken Pipe After Pipe Doctor Patch - Click To View</a></p>
							</div>

						</div>
					</div>
				</section>


				<!-- CONTACT -->
				<section class="slice"  id="contactSlicetop" style="border-bottom: none;" >
				<div class="container">
								<div class="row">
								<div class="col-sm-12">
									<h1>CONTACT US</h1>
								</div>
				</section>
				<section class="slice"  id="contactSlice" >
							<div class="container inner-contact">
								<div class="row">
									<div class="col-sm-4">
										<div class="">
											<p class="contact-box">LOCATION</p>
											<i class="icon-location"></i>&nbsp;Thames, Coromandel Peninsula, 
											New Zealand
											<p class="contact-box">OFFICE</p>
											<i class="icon-phone"></i>&nbsp;+64 7 868 7004 <br>
											<p class="contact-box">SHANE DEVERILL</p>
											<i class="icon-phone"></i>&nbsp;021 955 860 <br>
											<p class="contact-box">BRETT DEVERILL</p>
											<i class="icon-phone"></i>&nbsp;021 657 004 <br>
											<p class="contact-box">EMAIL</p>
											<i class="icon-mail"></i>&nbsp;<a href="mailto:office@thamesdrainage.co.nz">office@thamesdrainage.co.nz</a>
										 </div>
										<img src="images/logo.png" class="img-responsive">							
									</div> <!-- Col Ends --> 
						<div class="col-sm-8"> 
						<div class="span12" id="contact-page">
							<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
							<fieldset>
								<legend>SEND US A MESSAGE</legend>

				            <?php if(isset($hasError)) { //If errors are found ?>
				              <p class="alert alert-danger">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
				            <?php } ?>

				            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
				              <script>function scrollTo(hash) {
							  location.hash = "#contactSlicetop";
							  }</script>
							  <div class="alert alert-success">
				                <p><strong>Message Successfully Sent!</strong></p>
				                <p>Thank you for using our contact form, <strong><?php echo $name;?></strong>. Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>
				              </div>
				            <?php } ?>

				            <div class="form-group" id="contact-page">
				              <label for="name">Your Name<span class="help-required">*</span></label>
				              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
				            </div>

				            <div class="form-group" id="contact-page">
				              <label for="phone">Your Phone Number<span class="help-required">*</span></label>
				              <input type="text" name="phone" id="phone" value="" class="form-control required" role="input" aria-required="true" />
				            </div>


				            <div class="form-group" id="contact-page">
				              <label for="email">Your Email<span class="help-required">*</span></label>
				              <input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
				            </div>

				            <div class="form-group" id="contact-page">
				              <label for="message">Message<span class="help-required">*</span></label>
				              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true"></textarea>
				            </div>

				            <div class="actions">
				              <input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
				            </div>
				          </fieldset>
				        </form>
						</div>
						  </div>
						</div>
			</section>


					<!-- FOOTER -->
					<footer>
						<section id="mainFooter">
							<div class="container" id="footer">
								<div class="row">
									<div class="col-sm-6">
											<img src="images/logo-sm.png" alt="">
									</div>

									<div class="col-sm-6" class="footer-box">
										<address>
											<p class="footer-box">LOCATION<i class="icon-location"></i>&nbsp; <span>Thames, Coromandel Peninsula, New Zealand</span>
											</p>	
											<p class="footer-box">OFFICE <i class="icon-phone"></i>&nbsp; <span>+64 7 868 7004</span></p>
											<p class="footer-box">SHANE DEVERILL <i class="icon-phone"></i>&nbsp; <span>021 955 860 </span></p>
											<p class="footer-box">BRETT DEVERILL <i class="icon-phone"></i>&nbsp; <span>021 657 004</span> </p>
											<p class="footer-box">EMAIL <i class="icon-mail"></i>&nbsp;<a href="mailto:office@thamesdrainage.co.nz">office@thamesdrainage.co.nz</a></p>
										</address>
									</div>

									</div>
								</div>
							</section>
						</footer>

						<section  id="footerRights">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<p>Copyright © <span id="theYear"></span> Site Built By<span class="linkdark"><a href="http://www.veratech.co.nz" target="blank"> Veratech</a></span></p>
									</div>
								</div>
							</div>
						</section><!-- End footer -->


					</div><!-- global wrapper -->


		<!-- End Document 
		================================================== -->
		<script type="text/javascript" src="js-plugin/respond/respond.min.js"></script>
		<script type="text/javascript" src="js-plugin/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
		<script src="js/modernizr-2.6.1.min.js"></script>
		<script type="text/javascript" src="js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js"></script>
		<script type="text/javascript" src="js-plugin/pageSlide/jquery.pageslide-custom.js"></script>
		<script type="text/javascript" src="js-plugin/parallax/js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="js/textualize.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/new-custom.js"></script>
	</body>
	</html>


