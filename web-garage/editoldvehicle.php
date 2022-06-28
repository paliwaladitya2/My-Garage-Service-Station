<?php
    include("connection.php");
    session_start();
	global $garage_name,$add,$phone;
	@$garage_name=$_SESSION['garage_name'];
	@$add=$_SESSION['add'];
	@$phone=$_SESSION['phone'];
    if(isset($_SESSION['name'])){

        }
        else{

             header("location:/My Garage Service Station/signin.php");
        }
		if(isset($_POST['submit']))
		{	
			extract($_POST);
			
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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.tushubtn {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.tushudemo{

   width:100%;
   height:40px;
    top: 100%;
    right: 0;
    left: 0;
    z-index: 999;
    margin: 0;
    padding: 0;
    list-style: none;
    background-color: #fbfcff;
    border: 1px solid #eee;

}
.btn1 {
    display: inline-block;
    border-radius: 4px;
    background-color: 000;   border: orange;
    color: orange;
	border: 2px solid orange;
    text-align: center;
    
  padding:5px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    text-decoration: none;
}
.btn2 {
    display: inline-block;
    border-radius: 4px;
    background-color: 000;   border: red;
    color: red;
	border: 2px solid red;
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
                            <h4 class="page-title pull-left">Old Vehicle Detail</h4>
                            
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
								$_SESSION['garage_name']=$row['garage_name'];
								$_SESSION['add']=$row['add'];
								$_SESSION['phone']=$row['garage_phone'];
							//	echo $img;
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
            <div class="main-content" style="padding-top:10px;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
								<div class="container">
								<hr>
								<h3 align="center"> Insert old Vehicle Detail </h3>
								<hr>
								<?php
								if(isset($_GET['eid']))
	{
			extract($_GET);
			
			$q="SELECT * FROM `vehicle_detail` WHERE id='$eid'";
		
			$r=mysqli_query($conn,$q);
			while($row = mysqli_fetch_array($r))
			{
				//	echo $row['1'];
					if(isset($_POST['update']))
					{
						extract($_POST);
						
																													$a="select max(id) from vehicle_detail";
														$rrr=mysqli_query($conn,$a);
														while ($row = mysqli_fetch_array($rrr))	 
														{	
																$row[0]++;
																$fname="../vehicle_img/". $row[0] . ".jpg";	
														}
														//echo $fname; die();
						$temp=$_FILES['file']['tmp_name'];
						$size=$_FILES['file']['size'];
						$type=$_FILES['file']['type'];
						//$extantion=end(explode(".",$fname));
						$ext=array('jpg','png','jpeg','gif');
						$valid=array('image/jpg','image/jpeg','image/png','image/gif');
						
													
									
									move_uploaded_file($temp,$fname);

									
					$q="UPDATE `vehicle_detail` SET `vehicle_name`='$veh_name',`price`='$price',`year`='$year',`detail`='$detail',`vehicle_type`='$veh_type',`vehicle_image`='$fname' WHERE id=".$eid;
					mysqli_query($conn,$q);	
					$no=1;
					$msg= "update data successfully";
					
					}


?>
							
				<form  method="post" action="" enctype="multipart/form-data">
					<div class="row">
						<div class="col-25">
						
					<label for="fname">vehicle Name</label>
						  </div>
						  <div class="col-75">
							<input type="text" value="<?php echo $row['vehicle_name']?>" id="fname" name="veh_name" placeholder="Your vehicle.." >
						  </div>
						</div>
					<div class="row">
						<div class="col-25">
						
					<label for="fname">price</label>
						  </div>
						  <div class="col-75">
							<input type="text" value="<?php echo $row['price']?>" id="fname" name="price" placeholder="Your vehicle price.." >
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="lname">Year</label>
						  </div>
						  <div class="col-75">
							<select name="year" id="Year" class="demo" >
                                        <option value="NULL" <?php if($row['year']=="NULL") echo "Selected";?>>-- Year, Model --</option>
                                        <option value="2010" <?php if($row['year']=="2010") echo "Selected";?>>2010</option>
                                        <option value="2011" <?php if($row['year']=="2011") echo "Selected";?>>2011</option>
                                        <option value="2012"<?php if($row['year']=="2012") echo "Selected";?>>2012</option>
                                        <option value="2013" <?php if($row['year']=="2013") echo "Selected";?>>2013</option>
                                        <option value="2014" <?php if($row['year']=="2014") echo "Selected";?>>2014</option>
                                        <option value="2015" <?php if($row['year']=="2015") echo "Selected";?>>2015</option>
                                        <option value="2016" <?php if($row['year']=="2016") echo "Selected";?>>2016</option>
                                        <option value="2017" <?php if($row['year']=="2017") echo "Selected";?>>2017</option>
                                    </select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="country">Detail</label>
						  </div>
						  <div class="col-75">
							 <textarea name="detail" id="yourMessage" placeholder="Vehicle Detail..." required style="resize:none;" ><?php echo $row['detail'];?></textarea>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="subject">Vehicle Type:</label>
						  </div>
						  <div class="col-75">
							            <select name="veh_type"  class="demo">
                                        <option value="NULL">-- Choose vehicle type --</option>
                                        <option value="2 Wheels" <?php if($row['vehicle_type']=="2 Wheels") echo "Selected";?>>2 Wheels</option>
                                        <option value="4 Wheels" <?php if($row['vehicle_type']=="4 wheels") echo "Selected";?>>4 wheels</option>
                                        <option value="Bus" <?php if($row['vehicle_type']=="Bus") echo "Selected";?>>Bus</option>
                                        <option value="Truck" <?php if($row['vehicle_type']=="
									Truck") echo "Selected";?>>Truck</option>
                                        
                                    </select>
						  </div>
						</div>
						<div class="row">
						  <div class="col-25">
							<label for="subject">Vehicle Image</label>
						  </div>
						  <div class="col-75">
								<input type="file" name="file" />
								<img src="<?php echo $row['vehicle_image']; ?>" height="100" width="100">
						  </div>
						</div>
						<hr>
						<div class="row">
						  <input type="submit" value="Edit" name="update">
						</div><h2>
						<?php
					if(isset($_POST['update']))
					{
							if($no==1)
							{
									echo $msg;
							}
					}	
						?></h2>
						<hr>
					  </form>
					  <?php }}?>
					  
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
               <p>© copyright and design: Tushar B. Joshi  & Taraga U. Maheta.</p>
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

