<?php
include("connection.php");

    session_start();
    if(isset($_SESSION['name'])){

        }
        else{

            header("location:/My Garage Service Station/web-admin/index.php");
        }

if(isset($_GET['did']))
{
	extract($_GET);
	$q="delete from contact_tbl	 where id='$did'";
	mysqli_query($conn,$q);
	
}
?>

<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 09:23:26 GMT -->
<head>
<style>
.scrollit {
    overflow:scroll;
    height:auto;
}
</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin Dashboard</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/app.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/app.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/intro.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
           <div class="header-search-wrapper hide-on-med-and-down">
             <h5 Style="color:white;">Contacts Detail</h5>
            </div>
            <ul class="navbar-list right">
	
             
			  <li class="hide-on-med-and-down"><a href="logout.php">Logout</a></li>
             
				
             
             
            </ul>
           
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->



    <!-- BEGIN: SideNav-->
 <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1"  style="padding-top:30px;"><span class="logo-text hide-on-med-and-down" >Admin Panel</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" >
        <li class="active bold"><a  href="index.php"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span></a>
          <div class="collapsible-body">
            
          </div>
        </li>
         <li class="navigation-header"><a class="navigation-header-text">Information</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
          </div>
        </li>
        <li class="bold"><a  href="emg_detail.php"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Emergoncy Service Detail</span></a>
          <div class="collapsible-body">
           
          </div>
        </li>
		<li class="bold"><a  href="appoinment.php"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="">Appoinment Detail</span></a>
          <div class="collapsible-body">
           
          </div>
        </li>
        <li class="bold"><a  href="garage_reg.php"><i class="material-icons">face</i><span class="menu-title" data-i18n="">Garage User Detail</span></a>
          <div class="collapsible-body">
            
          </div>
        </li>
        
		 
        <li class="bold"><a  href="vehicle_detail.php"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="">Vehicle Detail</span></a>
         
		 <li class="bold"><a class="waves-effect waves-cyan " href="contact.php"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="">Contacts</span></a>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
     
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
		  
		   <div class="container-fluid">
		  <div class="row">
            <div class="table-responsive table--no-card m-b-30" style="height: auto; width:auto;">
      <div class="card subscriber-list-card animate fadeRight">
         <div class="card-content pb-1">
            <h4 class="card-title mb-0">Contacts List </h4>
         </div>
		 <div class="scrollit">
		
         <table class="table table-borderless table-striped table-earning" >
            <thead>
               <tr>
												                                                
                                                <th>Name</th>
                                                <th>phone </th>
                                                <th>Email</th>
                                                <th>subject</th>
                                                <th>message</th>
                                                
                                                <th>Action</th>
               </tr>
            </thead>
            <tbody>
			 <?php
			$q="select * from contact_tbl";
			$r=mysqli_query($conn,$q);
			while($row=mysqli_fetch_array($r))
			{
		 
		 ?>
               <tr>
                                              
											  
                                                <td ><?php echo $row['name']; ?></td>
                                                <td ><?php echo $row['phone']; ?></td>
                                                <td ><?php echo $row['email']; ?></td>
                                                <td ><?php echo $row['subject']; ?></td>
                                                <td ><?php echo $row['msg']; ?></td>
                                                <td><?php echo "<a style='color:red;border: 2px solid red;padding: 5px;border-radius: 5px; 'href=contact.php?did=".$row['id'].">Delete</a>"; ?>
												
                                            </tr>
                                            <?php } ?>
            </tbody>
         </table>
			</div>
      </div>
   </div>
</div><!-- START RIGHT SIDEBAR NAV -->
   </div>
   </div>
   </div>
   </div>

    
    <!-- BEGIN: Footer-->

    
   <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <span>&copy; 2019<a>My Garage Service Station</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a >Tushar B. Joshi & Tarang U. Maheta</a></span>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <!--script src="app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/chartjs/chart.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist-plugin-tooltip.js" type="text/javascript"></script>
    <script src="app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/dashboard-modern.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/intro.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2019 09:24:01 GMT -->
</html>