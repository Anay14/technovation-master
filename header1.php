<?php
if(isset($_HEADER)){
	if(isset($_HEADER['title']))
		$title=$_HEADER['title'];

}

if(!isset($title)){
	$title='Technovation - IIT Bombay';
}

?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title><?php echo $title; ?></title>
		
		<!-- Bootstrap Core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Customizable CSS -->
		<link href="assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
		<link href="assets/css/green.css" rel="stylesheet" title="Color">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.transitions.css" rel="stylesheet">
		<link href="assets/css/animate.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="assets/fonts/fontello.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		
		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-35598290-4', 'fuviz.com');
			ga('send', 'pageview');
		</script>
	</head>
	
	<body>
		
		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				
				<div class="navbar-header">
					<div class="container">
						
						<ul class="info pull-left">
							<li><a href="#"><i class="icon-mail-1 contact"></i> stab.iitb@gmail.com</a></li>
						</ul><!-- /.info -->
						
						<ul class="social pull-right">
							<li><a href="https://www.facebook.com/pages/Technovation/153398628063238"><i class="icon-s-facebook"></i></a></li>
							<li><a href="https://groups.google.com/forum/#!forum/technovation-council"><i class="icon-s-gplus"></i></a></li>
							<li><a href="#"><i class="icon-s-twitter"></i></a></li>
						</ul><!-- /.social -->
						
						<!-- ============================================================= LOGO MOBILE ============================================================= -->
						
						<a class="navbar-brand" href="index.php"><img src="assets/images/logo.jpg" class="logo" alt=""></a>
						
						<!-- ============================================================= LOGO MOBILE : END ============================================================= -->
						
						<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
						
					</div><!-- /.container -->
				</div><!-- /.navbar-header -->
				
				<div class="yamm">
					<div class="navbar-collapse collapse">
						<div class="container">
							
							<!-- ============================================================= LOGO ============================================================= -->
							
							<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
			<ul class="nav navbar-nav">
								
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle js-activated">About</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="index.php">Technovation</a></li>
										<li><a href="#">Stab</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle js-activated">Abstracts</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="#">View all abstracts</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<!-- ============================================================= MEGA MENU ============================================================= -->
								
								<li class="dropdown yamm-fullwidth ">
									<a href="#" class="dropdown-toggle js-activated">Technovation Projects</a>
									
									<ul class="dropdown-menu yamm-dropdown-menu">
										<li>
											<div class="yamm-content row">
											
												<div class="col-sm-2 inner">
													<h4>Social</h4>
													<figure>
														<div class="icon-overlay icn-link">
															<a href="portfolio-post.php"><img src="assets/images/art/work01.jpg" alt=""></a>
														</div>
														<figcaption>
															<p>Sammillan</p>
															<a href="#" class="btn">View Page</a>
														</figcaption>
													</figure>
												</div><!-- /.col -->
												
												<div class="col-sm-2 inner">
													<h4>Health Care</h4>
													<p> Comming Soon </p></div>
													
												
												<div class="col-sm-2 inner">
													<h4>Industrial</h4>
													
													
												</div><!-- /.col -->
												
												<div class="col-sm-3 inner">
													<h4>Student Driven Projects</h4>
													<ul class="circled">
														<li><a href="cnc.pdf" target="_blank">CNC Laser cutting Machine</a></li>
														<li><a href="dut1.pdf" target="_blank">DUT</a></li>
														<li><a href="rid.pdf" target="_blank">Foetal Heartrate Measurement</a></li>
														<li><a href="Blue-Ray.pdf" target="_blank">Blue-Ray</a></li>
														<li><a href="braille display.pdf" target="_blank">Refreshable braille display</a></li>
														<li><a href="Abstract-Tilt-rotor.pdf" target="_blank">Tilt-Rotor</a></li>
														<li><a href="blind.pdf" target="_blank">Perception system for blinds</a></li>
														
													</ul><!-- /.circled -->
												</div><!-- /.col -->

												<div class="col-sm-3 inner">
													<h4>Previous Year's project</h4>
													
													<ul class="circled">
														<li><a href="artificial.php">Artificial Instrumentalist</a></li>
														<li><a href="skate-board.php">Balancing Skate Board</a></li>
														<li><a href="peapod.php">Pea Pod Mac For MAsses</a></li>
														<li><a href="roboticChess.php">Robotic Chess</a></li>
														<li><a href="campusTransport.php">Campus Transport Tracking System</a></li>
														<li><a href="nonContact.php">Non Contact Thermometer</a></li>
														<li><a href="bookBot.php">Book Keeping Bot</a></li>
														<li><a href="ornithopter.php">Ornithoper</a></li>
														<li><a href="parinat.php">Parinat</a></li>
														
														
													</ul><!-- /.circled -->
												</div><!-- /.col -->
												
											</div><!-- /.yamm-content -->
										</li>
									</ul><!-- /.yamm-dropdown-menu -->
								</li><!-- /.yamm-fullwidth -->
								
								<!-- ============================================================= MEGA MENU : END ============================================================= -->
								
								
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle js-activated">Mentor's Committee</a>
									
									<ul class="dropdown-menu">
										<li><a href="mentors.php">Meet our Mentors</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								<li class="dropdown ">
									<a href="http://techid.stab-iitb.org/" class="dropdown-toggle js-activated">Discussion</a>

									<ul class="dropdown-menu">
										<li><a href="http://technovation.stab-iitb.org/">Visit tech id</a></li>
									</ul>
								</li><!-- /.dropdown -->

								<li class="dropdown ">
									<a href="#" class="dropdown-toggle js-activated">Contacts</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="contacts.php">View Contacts</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								
								
								
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->
		