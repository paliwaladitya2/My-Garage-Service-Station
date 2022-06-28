<?php

include("connection.php");

session_start();
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$q="SELECT * FROM `admin_login_tbl` WHERE email='$name' and password='$pass'";
	echo mysqli_error($conn);
	$_SESSION['name']=$name;
	$r=mysqli_query($conn,$q);
	if($row=mysqli_num_rows($r)==1)
	{
		
		header("location:/My Garage Service Station/web-admin/admin/index.php");
		$_SESSION['name']=$name;
	}
	else
	{
		$_SESSION["no"]=1;
		$_SESSION["error"]="Wrong E-mail Or Password...!!!";
	}
	 
}
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin login screen</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<b><i><h1>Welcome to Admin</h1></b></i>
		
		<form class="form" method="post" action="">
			<input type="E-mail"  name="name" placeholder="User Id">
			<input type="password" name="pass" placeholder="Password">
			<button type="submit" name="submit" id="login-button">Login</button>
		</form>
		<?php						
															if(isset($_POST['submit']))
															{
																
																	if($_SESSION["no"]==1)
																	{		
																		echo "<h3>".$_SESSION["error"]."</h3></br>";
																	}
																	
															}
															?>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   <!-- <script  src="js/index.js"></script>-->



</body>

</html>
