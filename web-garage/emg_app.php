<?php
    include("connection.php");
    session_start();
	global $garagename;
    if(isset($_SESSION['name'])){

        }
        else{

             header("location:/My Garage Service Station/signin.php");
        }
		@$garagename=$_SESSION['garagename'];
	if(isset($_GET['aid']))
	{
		 extract($_GET);
		
		//$garagename=$_SESSION['garagename'];
	
        $q="update `emergency_service` set status='1',approve_by_garage='$garagename' WHERE id=".$aid;

        mysqli_query($conn,$q);
    
	}
	if(isset($_GET['cid']))
	{
		 extract($_GET);
		
        $q="update `emergency_service` set status='2' WHERE id=".$cid;

        mysqli_query($conn,$q);
    
	}
	
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Garage Service Station</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<style>
.btn1 {
    display: inline-block;
    border-radius: 4px;
    background-color: 000;   border: green;
    color: green;
	border: 2px solid green;
    text-align: center;
    
  padding:5px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    text-decoration: none;
}
	</style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h2 style="color: pink;">Garage Panel</h2>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                             
                            <li class="active">
                                <a href="index.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="emg_app.php" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Emergency service Detail</span></a>
                               
                            </li>
							 <li>
                                <a href="appoinment.php" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Appointment Detail</span></a>
                               
                            </li>
							<li>
                                <a href="oldvehicle.php" aria-expanded="true"><i class="ti-layers-alt"></i> <span>old vehicle Detail</span></a>
                               
                            </li>

                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-conten">
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Emergency Service</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
			<?php
				global $img;
				
						$uname=$_SESSION['name'];
						$q="SELECT  * FROM `register_tbl` WHERE  username='$uname'";
                        $r=mysqli_query($conn,$q);
                        while ($row=mysqli_fetch_array($r))   
                        {
								$img=$row['owner_photo'];
								$_SESSION['garagename']=$row['garage_name'];
								$_SESSION['area']=$row['area'];
								// echo $garagename;
						}
				?>
                            <img class="avatar user-thumb" src="<?php echo $img;?>" alt="avatar">
						<?php}?>	
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php if(isset($_SESSION['name'])){ echo strtoupper($_SESSION['name']); } ?><i class="fa fa-angle-down"></i></h4>
							 <div class="dropdown-menu">
                                <a class="dropdown-item" href="../change_pass.php">chenge password</a>
                            
                          
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
             <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30" style="height: auto; width: 1000px;">
								<h3 align="center">new emergency services</h3>
                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Vehicle Number</th>
                                                <th>Area</th>
                                                <th>Vehicle type</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												$area=$_SESSION['area'];
												
                                                $detail=mysqli_query($conn,"select * from  emergency_service where status='0' and area='$area'");
                                                while($row=mysqli_fetch_array($detail)){
                                            ?>
                                            <tr>
                                                <td ><?php echo $row['id']; ?></td>
                                                <td ><?php echo $row['veh_num']; ?></td>
                                                <td ><?php echo $row['area']; ?></td>
                                                <td ><?php echo $row['type']; ?></td>
                                                <td ><?php echo $row['name']; ?></td>
                                                <td ><?php echo $row['email']; ?></td>
                                                <td ><?php echo $row['phone']; ?></td>
                                                <td ><?php echo $row['add']; ?></td>
                                                <td ><?php echo $row['msg']; ?></td>
												<td><?php echo "<a class='btn1'href=emg_app.php?aid=".$row['id'].">Approve</a>"; ?>
												
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
									</div>
									<br><br>
									 <div class="table-responsive table--no-card m-b-30" style="height: auto; width: 1000px;">
									<h3 align="center">Your Approve services</h3>
									                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Vehicle Number</th>
                                                <th>Area</th>
                                                <th>Vehicle type</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												
                                                $detail=mysqli_query($conn,"select * from  emergency_service where status='1' and approve_by_garage='$garagename'");
                                                while($row=mysqli_fetch_array($detail)){
                                            ?>
                                            <tr>
                                                <td ><?php echo $row['id']; ?></td>
                                                <td ><?php echo $row['veh_num']; ?></td>
                                                <td ><?php echo $row['area']; ?></td>
                                                <td ><?php echo $row['type']; ?></td>
                                                <td ><?php echo $row['name']; ?></td>
                                                <td ><?php echo $row['email']; ?></td>
                                                <td ><?php echo $row['phone']; ?></td>
                                                <td ><?php echo $row['add']; ?></td>
                                                <td ><?php echo $row['msg']; ?></td>
												<td><?php echo "<a class='btn1'href=emg_app.php?cid=".$row['id'].">complete</a>"; ?>
												
												
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
										</div>
																		<br><br>
																		 <div class="table-responsive table--no-card m-b-30" style="height: auto; width: 1000px;">
																		<h3 align="center">complete services</h3>
									                                    <table class="table table-borderless table-striped table-earning" >
                                        <thead>
										
                                            <tr>
											
                                                <th>id</th>
                                                <th>Vehicle Number</th>
                                                <th>Area</th>
                                                <th>Vehicle type</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Message</th>
                                                
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                $detail=mysqli_query($conn,"select * from  emergency_service where status='2' and approve_by_garage='$garagename'");
                                                while($row=mysqli_fetch_array($detail)){
                                            ?>
                                            <tr>
                                                <td ><?php echo $row['id']; ?></td>
                                                <td ><?php echo $row['veh_num']; ?></td>
                                                <td ><?php echo $row['area']; ?></td>
                                                <td ><?php echo $row['type']; ?></td>
                                                <td ><?php echo $row['name']; ?></td>
                                                <td ><?php echo $row['email']; ?></td>
                                                <td ><?php echo $row['phone']; ?></td>
                                                <td ><?php echo $row['add']; ?></td>
                                                <td ><?php echo $row['msg']; ?></td>
												
												
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
               <p>?? copyright and design: Tushar B. Joshi  & Taraga U. Maheta.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>-->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
