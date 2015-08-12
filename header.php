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
							<li><a href="#"><i class="icon-mail-1 contact"></i>technovation@stab-iitb.org</a></li>
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
							<div class="pull-right">
							<ul class="nav navbar-nav">
								
								<li class="dropdown ">
									<a href="#" class="dropdown-toggle js-activated">About</a>
									
									<ul class="dropdown-menu">
										
										<li><a href="index.php">Technovation</a></li>
										<li><a href="http://www.stab-iitb.org" target="_blank">Stab</a></li>
										
									</ul><!-- /.dropdown-menu -->
								</li><!-- /.dropdown -->
								
								
								<li class="dropdown ">
									<a href="#" data-toggle="modal" data-target="#myModal">Summer Technovation Registration</a>
									
								<!--	<ul class="dropdown-menu">
										<li><a href="#" data-toggle="modal" data-target="#myModal">Submit your Idea </a></li>

										
									</ul><!-- /.dropdown-menu -->
								<!--  </li><!-- /.dropdown -->
								
									<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
								  <div class="modal-dialog" style="position:relative;top:100px">
								    <div class="modal-content">
								      <div class="modal-header" >
								        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								        <h4 class="modal-title" id="myModalLabel">Abstract Submission ( DeadLine : 19 april,2015 )</h4>
								      </div>
								      
								     <div class="modal-body">
								      Register your team by filling this form <br>
								      <a style="font-size:15px" href="https://stab.typeform.com/to/Tm5uIz" target="_blank">https://stab.typeform.com/to/Tm5uIz</a>
								        <br>Mail Your Abstract here : <span style="font-size:15px">technovation@stab-iitb.org<span>
								      </div>
								      <div class="modal-footer">
								        <p style="font-size:15px">For any Queries , Please contact  <i><a href="https://www.facebook.com/umang147?fref=ts">Umang Chhaparia</a></i> : 9967346106 </p>
								        
								      </div>
								    </div>
								  </div>
								</div>

						
								<!-- ============================================================= MEGA MENU ============================================================= -->
								
								<li class="dropdown yamm-fullwidth ">
									<a href="#" class="dropdown-toggle js-activated">Projects</a>
									
									<ul class="dropdown-menu yamm-dropdown-menu">
										<li>
											<div class="yamm-content row">
											
												<div class="col-sm-3 inner">
													<h4>Social <br> Projects</h4>
													
															<p>TechGSR</p>
													<ul class="circled">
														<li>Technical projects</li>
														<li>Management projects</li>	
													</ul><!-- /.circled -->														
													<p><a href="TechGSR.php" target="_blank"> more info</a></p> <br/>
													<p><a href="http://tinyurl.com/TechGSR" target="_blank"> Register</a></p>
													
												</div><!-- /.col -->
												
												<div class="col-sm-3 inner">
													<h4>Health Care<br> Projects</h4>
													<a href="healthCare.php" target="_blank" class="circled"><i><b>Healthcare Research</b></i></a><br><br>
                                                    <p style="margin:0px">Come up with your own Ideas</p>
                                                    <p >Last date for abstract submission : 24 August, 2014</p>
                                                    <p style="margin:0px">For any queries call :</p>
                                                    Amaldev V.|| 9820481964<br>
													</div>
													
												
												
												
												<div class="col-sm-3 inner">
													<h4>Student Driven Projects</h4>
													<ul class="circled">
														<li><a href="cnc.pdf" target="_blank">CNC Laser cutting Machine</a></li>
														<li><a href="dut1.pdf" target="_blank">Device under test</a></li>
														
														<li><a href="braille display.pdf" target="_blank">Refreshable braille display</a></li>
														<li><a href="tilt-rotor.php" target="_blank">Tilt-Rotor</a></li>
														<li><a href="blind.pdf" target="_blank">Perception system for blinds</a></li>
														
													</ul><!-- /.circled -->
												</div><!-- /.col -->

												<div class="col-sm-3 inner">
													<h4>Previous Year's project</h4>
													
													<ul class="circled">
													<li><a href="campusTransport.php">Campus Transport Tracking System</a></li>
													<li><a href="parinat.php">Parinat</a></li>
														<li><a href="artificial.php">Artificial Instrumentalist</a></li>
														<li><a href="skate-board.php">Balancing Skate Board</a></li>
														<li><a href="peapod.php">Pea Pod Mac For MAsses</a></li>
														<li><a href="roboticChess.php">Robotic Chess</a></li>
														
														<li><a href="nonContact.php">Non Contact Thermometer</a></li>
														<li><a href="bookBot.php">Book Keeping Bot</a></li>
														<li><a href="ornithopter.php">Ornithoper</a></li>
														
														
														
													</ul><!-- /.circled -->
												</div><!-- /.col -->
												
											</div><!-- /.yamm-content -->
										</li>
									</ul><!-- /.yamm-dropdown-menu -->
								</li><!-- /.yamm-fullwidth -->
								
								<!-- ============================================================= MEGA MENU : END ============================================================= -->
								
								<li class="dropdown ">
									<a href="mentors1.php" >Mentors</a>
									
								<!--	<ul class="dropdown-menu">
										<li><a href="mentors1.php">Meet our Mentors</a></li>
										
									</ul><!-- /.dropdown-menu -->
								<!--</li><!-- /.dropdown -->
								
								

								<li class="dropdown ">
									<a href="contacts.php" >Contacts</a>
									
									
								</li><!-- /.dropdown -->
								
								
								
								
							</ul><!-- /.nav --></div>
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->
		
		
