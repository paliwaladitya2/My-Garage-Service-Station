<?php
include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/appointment-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:45:51 GMT -->
<head>
<link rel="stylesheet" href="assets/css/styles1.css">

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
                                <h2>old Vehicle Detail</h2>
                                <span><a href="index.html">home</a> / old Vehicle Detail</span>
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
                    	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Old Vehicle  We Provide
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
				<!-- deals -->
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="tushar">
		<center>	<div class="agileinfo-ads-display">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<!--<div class="product-sec1">-->
						<h3 class="heading-tittle"></h3>
								<?php
								$q="select * from vehicle_detail";
                      				$r=mysqli_query($conn,$q);
                       				while ($row=mysqli_fetch_array($r))   
                        			{
                            ?> 
				
					  <div class="row" data-gutter="15">
                <div class="col-md-3">
                    <div >
                        <ul class="product-labels"></ul>
                        <div class="product-img-wrap">
										<?php
									// $row['plant_image'];
									 $str=3;
							$path=substr($row['vehicle_image'],$str);
								//echo $path;	
								?>
					
					<img  src="
							<?php echo $path; ?>" " alt="" style="height: 250px; width: 250px;"  alt="Image Alternative text" title="Image Title" />
                            
                        </div>
                       
                        <div class="product-caption">
                          

                            <h4><b><?php echo $row['vehicle_name']; ?></b></h4>                           <div class="product-caption-price"><font size="5"><b><span style=" color:red;">Rs. <?php echo $row['price']; ?></span></b></font>
                            </div>
                            
								<?php echo "<a class=btn href=detail.php?id=".$row['id']."><span>View Details</span></a>";
											
											?>					

                        </div>
                    </div>
                </div>
					<?php }?>
				</div>
			</div></center>	
			<!-- //product right -->
		</div>
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