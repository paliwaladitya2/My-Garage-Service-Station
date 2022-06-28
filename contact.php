<?php
include("connection.php");
if(isset($_POST['submit']))
{
	extract($_POST);
	
	if(!preg_match("/^\d{10}+$/", $phone)){
				$error="please enter 10 digits number";
		}
		elseif(!preg_match("/[a-zA-Z]+$/",$name))
		{
			$error="Please Enter Full Name";
		}	
	
      else{		
       				
		
		mysqli_query($conn,"INSERT INTO `contact_tbl`(`name`, `phone`, `email`, `subject`, `msg`) VALUES ('$name','$phone','$email','$sub','$msg')");
		$data="Thank you for Contacting US.";
	  }			
}


?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/contact-us-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:46:12 GMT -->
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AutoServicing - Auto Service & Workshop HTML5 Website Template</title>
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" href="assets/img/favicon-icon.png">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Font-awesome CSS -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Flaticon CSS -->
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Ionicons CSS -->
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!-- Swiper CSS -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/datepicker.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- jQuery min js -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	</head>
	
	<body>
        <!-- Preloader -->
        <div class="site-preloader-wrap">
            <div class="cssload-loader"></div>
        </div>
        <!-- End Preloader -->
        
        <!-- Start Main Menu Area -->
        <div class="main-menu-area-two">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php" >
                            <img src="assets/img/logo.png" alt="Logo" style="width:290px; height:55px;">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="main-menu-two">
                            <ul class="nav navbar-nav navbar-right">
                                <li >
                                    <a href="index.php" >Home </i></a>
                                    
                                </li>
                                <li >
                                    <a href="ems.php" >Emergancy Services </a>
                                    
                                </li>
                                <li><a href="appointment.php">Appointment</a></li>
                                <li><a href="oldvehicle.php">Vehicle detail</a></li>
                                
                                <li >
                                    <a href="gallery.php"  >Gallery </a>
                                   
                                </li>
								<li><a href="about.php">about</a></li>
                               
                                <li><a href="contact.php">Contact US</a></li><li><a href="signin.php">Login</a></li>
                                </a></li>
                            </ul>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </div>
        <!-- End Main Menu Area -->
        
        <!-- SearchBox Modal -->
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div>
        <!-- End SearchBox Modal -->
        
        <!-- Start Breadcumbs Area -->
        <div class="breadcumbs-banner-area breadcumbs-banner-bg jarallax">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Contact us</h2>
                                <span><a href="index.html">home</a> / Contact us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcumbs Area -->
        
        
        <!-- Contact Form Area -->
        <div class="content-block-area contact-us">
            <div class="container">
               <h2 class="area-title">Contact Info</h2>
                <div class="row">
                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>Shree swaminarayan college of computer science</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>(+91)8200768038<br>(+91)8200076282</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4"> 
                        <div class="media">
                            <div class="media-left">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="media-body">
                                <h4>tusharjoshi8200@gmail.com <br> tarang.maheta4545@gmail.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-area">
                   <h2 class="area-title">Get In Touch</h2>
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="contact-img-bg"></div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <form  method="POST" action="" >
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control"  name="name" placeholder="Name" required="" />
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"  placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" name="sub" placeholder="Subject" required="" />
                                    </div>
                                </div>

                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number"  required="" />
                                    </div>
                                </div>

                                <div class="col-sm-12"> 
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea class="form-control" name="msg" rows="6" placeholder="Message" required="" ></textarea>
                                    </div>
                                  
                                    <button type="submit" class="btn theme-btn" name="submit">Send Message</button>
									<h2 style="color:red;"> <?php  
															if(isset($_POST['submit']))
															{
																extract($_POST);
																	if(!preg_match("/^\d{10}+$/", $phone)){
																		echo $error;
																		
																	}
																	elseif(!preg_match("/[a-zA-Z]+$/",$name))
																	{
																		echo $error;
																	}
																	else
																	{
																		echo $data;
																	}
															}

												?></h2>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Form Area -->
        
        <!-- Google Map Area -->
        <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.6105164255755!2d72.15095581441967!3d21.75662026790848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a71debc932f%3A0x559b68ba35316a59!2sSsccs+(Shree+Swaminarayan+College+Of+Computer+Science+)!5e0!3m2!1sen!2sin!4v1552026300117" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        <!-- Google Map Area -->    
            
        <!-- Footer Area -->
      <footer class="site-footer">
            <!-- Footer Top Area -->
            <div class="footer-top-area">
                <div class="container">
                   <div class="row">
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="fa fa-map-o"></i></span> <p>Shree swaminarayan college of computer science</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="flaticon-crane"></i></span> <p>Working Days Monday to Friday</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="footer-top-info">
                               <span class="footer-icons"><i class="fa fa-headphones"></i></span> <p>Give us a free call 8200768038</p>
                            </div>
                       </div>
                   </div>
                   <div class="hr-line"></div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer-wid">
                                <a href="index.html" ><img Style="border:solid blue; height:80px;"  src="assets/img/logo.png" alt="logo" ></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="link-color">Read More About Us <i class="fa  fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid footer-menu">
                                        <h3 class="footer-wid-title">Navigation</h3>
                                        <ul>
                                            <li><a href="index.php"><i class="fa  fa-angle-right"></i> home</a></li>
                                            <li><a href="emg_app.php"><i class="fa  fa-angle-right"></i> Emergincy Service</a></li>
                                            <li><a href="appointment.php"><i class="fa  fa-angle-right"></i> Appointment</a></li>
                                            <li><a href="oldvehicle.php"><i class="fa  fa-angle-right"></i> Vehicle detail</a></li>
                                            <li><a href="gallery.php"><i class="fa  fa-angle-right"></i> Gallery</a></li>
                                            <li><a href="about.php"><i class="fa  fa-angle-right"></i> About</a></li>
                                            <li><a href="contact.php"><i class="fa  fa-angle-right"></i> Contact</a></li>
											 <li><a href="signin.php"><i class="fa  fa-angle-right"></i> Login</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid footer-menu">
                                        <h3 class="footer-wid-title">Hours of Operation</h3>
                                        <ul>
                                            <li><i class="fa  fa-angle-right"></i> Monday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Tuesday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Wednesday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Thursday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Friday:7:30am - 5:30pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Saturday:7:30am - 3:00pm</li>
                                            <li><i class="fa  fa-angle-right"></i> Sunday: Closed</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="footer-wid">
                                        <h3 class="footer-wid-title">Get In Touch</h3>
                                        <p>Shree Swaminarayan college of computer science</p>
                                        <div class="address-info">
                                            <span><i class="fa  fa-phone"></i>8200768038</span><br>
                                            <span><i class="fa  fa-envelope"></i> tusharjoshi8200@gmail.com </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  

                </div>
            </div> <!-- End Footer Top -->

            <!-- Footer Bottom Area -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-5">
                            &copy; Copyright <script type="text/javascript">
                            var d=new Date();
                            document.write(d.getFullYear());
                            </script> All Rights Reserved. Tushar B. Joshi & Tarang U. Maheta
                        </div>
                        <div class="col-md-6 col-sm-7 text-right">
                            <a href="#">Terms & Condition</a> <span class="seprator">|</span> <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Footer Bottom Area -->
        </footer> <!-- End Footer Area -->
        <!-- Back Top top -->
        <a href="#content" class="back-to-top">Top</a>
        <!-- End Back Top top -->
    
        <!-- Bootstrap JS file -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Owl-Carousel JS file -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Magnific Popup JS file -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Mixitup JS file -->
		<script src="assets/js/mixitup.min.js"></script>
		<!-- Swiper JS file -->
		<!--script src="assets/js/swiper.jquery.min.js"></script>
		<!-- Datepicker JS file -->
		<script src="assets/js/datepicker.js"></script>
		<!-- WOW JS file -->
		<script src="assets/js/wow.min.js"></script>
		<!-- Isotop JS JS file -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- Waypoints JS file -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- Counter JS file -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- RipplesJS -->
		<script src="assets/js/jquery.ripples-min.js"></script>
		<!-- YTPlayer JS -->
		<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- Jarallax JS -->
		<script src="assets/js/jarallax.min.js"></script>
		<!-- Parsley JS -->
        <script src="assets/js/parsley.min.js"></script>
        <!--Google recaptcha js-->
        <script src="../../../www.google.com/recaptcha/api.js" async defer></script>
        <!-- jQuery Google Map JS file -->
        <script src="assets/js/jquery.googlemap.js"></script>
        <!-- Google Map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
        <!-- Custom JS file -->
        <script src="assets/js/active.js"></script>
	</body>

<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/contact-us-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:46:13 GMT -->
</html>