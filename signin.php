<?php

include("connection.php");

session_start();
global $error;
//$_SESSION['no'];
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$q="SELECT * FROM `register_tbl` WHERE username='$name' and password='$pass' and status='1'";
	$r=mysqli_query($conn,$q);
	if($row=mysqli_num_rows($r)==1)
	{
		
		header("location:/My Garage Service Station/web-garage/index.php");
		$_SESSION['name']=$name;
	}
	else
	{
		$_SESSION['no']=1;
		$error="Wrong E-mail Or Password...!!!";
	}
	 
}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:45:23 GMT -->
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
        
        <!-- Sign In Form Area -->
        <div class="content-block-area gray-bg">
            <div class="signup-form signin-form">	    
                <div class="logo-two">
                    <a href="index.html">
                        <h5 style="color:white; ">My Garage Service Station Garage login</h5>
                    </a>
                </div>
            
                <form action="" method="post">
                    <h2>Sign In Account</h2>
                    <p class="lead">It's free and hardly takes more than 30 seconds.</p>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="User name" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit"class="btn btn-primary btn-block btn-lg">Sign In</button>
                    </div>
					<p class="text-center">Forgot password? <a href="forgot.php">Forgot here</a>.</p>
				<h3 style="color:red;">	<?php						
										if(isset($_POST['submit']))
										{
																
																if($_SESSION["no"]==1)
																	{		
																		echo "<h3>".$error."</h3></br>";
																	}
																	
															}
															?></h3>
                    <p class="small text-center">By clicking the Sign In button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                </form>
				  
                <p class="text-center">You have not an account? <a href="signup.php">SignUp here</a>.</p>
				
            </div>
        </div>
        <!-- End Sign In Form Area -->
        
        
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

<!-- Mirrored from envytheme.com/tf-demo/auto-servicing/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jan 2019 14:45:23 GMT -->
</html>