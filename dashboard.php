

<?php
    include('includes/session_user.php');
	include('includes/database.php');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode Library | Control Panel</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/styles.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- ================== END core-css ================== -->
</head>
<body>



  
	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar bg-gray-200">
		<!-- Section: Design Block -->

		<!-- Section: Design Block -->
		<div id="loader" class="app-loader">
			<span class="spinner"></span>
		</div>
	    <!-- END #loader -->
	    <!-- nav bar -->
		<?php  require "includes/header-admin.php";?>
		<!-- nav bar -->

		<!-- Button trigger modal -->
			

			<!-- Modal -->
			<?php include("includes/products_add_modal.php"); ?>
			<?php  require "includes/profile.php";?>
			<!-- end modal -->
			
		
       










		<!-- BEGIN #content -->
		    <div class="background-radial-gradient overflow-hidden row vh-100" >
			
			<div class="col-1" style="position:fixed">
			<?php  require "includes/aside.php";?>
            </div>
			
			<div class="col-11 px-4 py-5 ">
				<div class="ps-5 ms-5">
			<?php if (isset($_SESSION['message'])): ?>
					<div class="alert alert-green alert-dismissible fade show ms-5 ">
					<strong>Success!</strong>
						<?php 
							echo $_SESSION['message']; 
							unset($_SESSION['message']);
						?>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
					<?php endif ?>


					<?php if (isset($_SESSION['danger'])): ?>
					<div class="alert alert-danger alert-dismissible fade show ms-5">
					<strong>Failed!</strong>
						<?php 
							echo $_SESSION['danger']; 
							unset($_SESSION['danger']);
						?>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
			<?php endif ?>
					</div>
			    
				<div class="row justify-content-around ms-5 ps-2">
					<div class="card col-6 mt-5 bg-danger" style="width: 25rem;color:white;border-radius:0;">
						<div class="card-body row">
							<div class="col-8">
								<h2 class="card-title">$ 2</h2>
								
								<h4 class="card-text">Total Sales</h4>
							</div>
							<div class="col-4">
							<i class="fa fa-shopping-cart  fa-4x text-red-800 pt-2"></i>
							</div>
						
						</div>
						<div class="card-header text-center">
						<a href="sales.php" class="text-decoration-none text-black">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					<div class="card col-6 mt-5 bg-info" style="width: 25rem;color:white;border-radius:0;">
						<div class="card-body row">
							<div class="col-8">
								<h2 class="card-title">40</h2>
								
								<h4 class="card-text">Number Of Books</h4>
							</div>
							<div class="col-4">
							<i class="fa fa-book fa-4x text-blue-800 pt-2"></i>
							</div>
						
					
						</div>
						<div class="card-header text-center">
						<a href="sales.php" class="text-decoration-none text-black">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="row justify-content-around ms-5 ps-2">
					<div class="card col-6 mt-5" style="width: 25rem;background-color:#36f569;color:white;border-radius:0;">
						<div class="card-body row">
							<div class="col-8">
								<h2 class="card-title">5</h2>
								
								<h4 class="card-text">Number Of Admins</h4>
							</div>
							<div class="col-4">
								<i class="fa fa-users fa-4x text-green-800 pt-2"></i>
							</div>
						
						</div>
						<div class="card-header text-center">
						<a href="sales.php" class="text-decoration-none text-black">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					
					</div>
					<div class="card col-6 mt-5 bg-warning"  style="width: 25rem;color:white;border-radius:0;">
						<div class="card-body row">
							<div class="col-8">
								<h2 class="card-title">$ 10</h2>
								
								<h4 class="card-text">Sales Today</h4>
							</div>
							<div class="col-4 ">
								
								<i class="fa-sharp fa-solid fa-money-bill-wave fa-4x text-orange-800 pt-2"></i>
								
								
							</div>

						
						</div>
						<div class="card-header text-center">
						<a href="sales.php" class="text-decoration-none text-black">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					
					</div>
					
				</div>
				<!-- test -->
				
				
				<!-- test -->
			
			</div>
			
			</div>
			<!-- begin footer  -->
			<?php include("includes/footer.php"); ?>
	        <!-- end footer -->
			
		<!-- END #content -->
		
		<?php include("includes/products_solded_modal.php"); ?>
		<?php include("includes/admins_modal.php"); ?>
		

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	
	

	<!-- END #app -->
	<!-- ================== BEGIN core-js ================== -->
    
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/scripts.js"></script>
    
	<!-- ================== END core-js ================== -->
</body>
</html>