<?php
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
	extract($_POST);
		$cap=$_SESSION['cap_code'];
		if($chk !=$cap)
		{
			$error="Enter valid captcha code...";
		}
		
		elseif($area=='NULL')
		{		
			$error="Please select Area...";
		}elseif($type=='NULL')
		{		
			$error="Please select Vehicle Type...";
		}
		elseif(!preg_match("/^\d{10}+$/", $phone)){
				$error="please enter 10 digits number";
		}
		elseif(!preg_match("/[a-zA-Z]+[a-zA-Z]+[a-zA-Z]+$/",$name))
		{
			$error="Please Enter Full Name";
		}	
		else
		{
		
		
		mysqli_query($conn,"INSERT INTO emergency_service(`veh_num`,`area`,`type`,`name`,`email`,`phone`,`add`,`msg`) VALUES ('$veh_num','$area','$type','$name','$email','$phone','$add','$msg')") ;
		//echo mysqli_error($conn);
		
		$data="We Will Contact Soon...";
			$to = $email;
			$txt = "Your Emergancy Appointment Will Be Send To All Garage Station Nearby Your Area,Garage Owner Will Be Contact To You Soon,Thank You For Working With Us...";
			$subject = $name." Thank you to using My Garage Service Station...";
			mail($to,$subject,$txt);
			
		}
	
}


?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/appointment-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:45:51 GMT -->
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
		<!-- MeanMenu CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- jQuery min js -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
<style>
		.demo{
	background-color: #fbfcff;
 border: 1px solid #eee;
 color: #333;
 font-size: 14px;
 height: 40px;
 margin-bottom: 15px;
 padding: 5px 15px;
 width: 100%;



 margin: 0;
		padding: 8px 0;
		text-indent: 15px;
		border-top: 1px solid #eee;
		-moz-transition: all 0.15s ease-in;
		-o-transition: all 0.15s ease-in;
		-webkit-transition: all 0.15s ease-in;
		transition: all 0.15s ease-in;
}
.tushu{
	margin: 0;
    padding: 8px 0;
    text-indent: 15px;
    border-top: 1px solid #eee;
    -moz-transition: all 0.15s ease-in;
    -o-transition: all 0.15s ease-in;
    -webkit-transition: all 0.15s ease-in;
    transition: all 0.15s ease-in;
}
</style>
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
                                <h2>Emergancy Services</h2>
                                <span><a href="index.html">home</a> / Emergancy Services</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcumbs Area -->
        
        
        <!-- Start Appointment Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="apointment-preview-boxed man-image-bg"></div>
                    </div>
                    <div class="col-md-6">
                       <div class="section-title text-center">
                           <h2><span>request an</span> Emergancy Services</h2>
                           <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. .</p>
                       </div>
                        <form  method="post"  action="" class="appointment-form" >
<br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Vehicle Number</label>
                                    <input type="text"  name="veh_num" placeholder="Vehicle Number" required>
                                </div>
                                
                            </div><br>
							<div class="row">
                                <div class="col-md-6">
                                    <label>Select Area</label>
                                    <select name="area" id="selectServices" class="demo">
                                        <option value="NULL">-- Select Area --</option>
                                        <option value="Waghavadi">Waghavadi</option>
                                        <option value="Subhashnagar">Subhashnagar</option>
                                        <option value="Anandnagar">Anandnagar</option>
                                        <option value="Kaliyabid">Kaliyabid</option>
                                        <option value="Sadarnagar">Sadarnagar</option>
                                        <option value="Kanbivad">Kanbivad</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Select Vehicle Type</label>
                                    <select name="type"  class="demo">
                                        <option value="NULL">-- Choose vehicle type --</option>
                                        <option value="2 Wheels">2 Wheels</option>
                                        <option value="4 Wheels">4 wheels</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Truck">Truck</option>
                                        
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                               <div class="col-md-12">
                                   <p>Contact Details</p>
                               </div>
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
									
                                    <input type="text" name="phone" placeholder="Your Phone" required>
                                </div>
                            </div>
							
							  <div class="row">
                                <div class="col-md-12">
                                    <textarea name="add" id="yourMessage" placeholder="Your Address" required style="resize:none;" ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="msg" id="yourMessage" placeholder="Your Message" required style="resize:none;" ></textarea>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <label>Verify Captcha code</label>
                                    <img src="captcha.php" width="250px">
                                </div>
                                <div class="col-md-6">
                                    <br><br>
									<input type="text" name="chk" placeholder="Enter captcha" required> 
                                   
                                </div>
                            </div>
                            <div class="row">
															<div class="col-md-12 text-center">
																	<button class="btn theme-btn" type="submit" name="submit">Submit Now</button>
															</div>
                            </div><h2 color="red">
								<?php
								
								if(isset($_POST['submit']))
															{
																extract($_POST);
																	if($chk !=$cap)
																	{
																		echo $error;
																	}
																	elseif($area=='NULL')
																	{		
																		echo $error;
																	}
																	elseif($type=='NULL')
																	{		
																		echo $error;
																	}
																	elseif(!preg_match("/^\d{10}+$/", $phone)){
																		echo $error;
																		
																	}
																	elseif(!preg_match("/[a-zA-Z]+[a-zA-Z]+[a-zA-Z]+$/",$name))
																	{
																		echo $error;
																	}
																	else
																	{
																		echo $data;
																	}
															}
							?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
        
        
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
        <!-- jQuery Google Map JS file -->
        <script src="assets/js/jquery.googlemap.js"></script>
        <!-- Google Map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0jIY1DdGJ7yWZrPDmhCiupu_K2En_4HY"></script>
        <!-- Custom JS file -->
        <script src="assets/js/active.js"></script>
	</body>

<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/appointment-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:45:52 GMT -->
</html>