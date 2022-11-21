

<?php
    include('includes/login.php');
    include('includes/sign-up.php');
	include('includes/reset.php');
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
	<link href="assets/css/vendor.min.css" rel="stylesheet"/>
	<link href="assets/css/default/app.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		<?php  include("includes/header-sign.php");?>
		<!-- nav bar -->


		<!-- alert messages -->
		<?php if (isset($_SESSION['message'])): ?>
					<div class="alert alert-green alert-dismissible fade show">
					<strong>Success!</strong>
						<?php 
							echo $_SESSION['message']; 
							unset($_SESSION['message']);
						?>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
		<?php endif ?>


		<?php if (isset($_SESSION['danger'])): ?>
					<div class="alert alert-danger alert-dismissible fade show">
					<strong>Failed!</strong>
						<?php 
							echo $_SESSION['danger']; 
							unset($_SESSION['danger']);
						?>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
		<?php endif ?>
		<!-- alert messages -->


		<!-- BEGIN #content -->
		    <section class="background-radial-gradient overflow-hidden">
			
			<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
			   <div class="row gx-lg-5 align-items-center mb-5">
				<div class="col-lg-6 mb-5 mb-lg-0">
				 <!-- <img class="pe-5" src="assets/img/gallery/books.png" style="width:500px"> -->
					<h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
					Welcome To <br />You
					<span style="color: hsl(218, 81%, 75%)">Code </span>Library
					</h1>
					<p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					Temporibus, expedita iusto veniam atque, magni tempora mollitia
					dolorum consequatur nulla, neque debitis eos reprehenderit quasi
					ab ipsum nisi dolorem modi. Quos?
					</p>
				</div>

				<div class="col-lg-6 mb-5 mb-lg-0 position-relative">
					<div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
					<div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

					<div class="card bg-glass">
					<div class="card-body px-4 py-5 px-md-5">
						<form action="" method="post">
						<!-- 2 column grid layout with text inputs for the first and last names -->
						<div class="row" id="full-name">
							<div class="col-md-6 mb-4">
							<div class="form-outline" >
								<input type="text" id="first_name" pattern="[A-Za-z]{3,10}" name="first-name" class="form-control"  required />
								<label class="form-label" for="form3Example1">First name</label>
							</div>
							</div>
							<div class="col-md-6 mb-4" >
							<div class="form-outline">
								<input type="text" id="last_name" pattern="[A-Za-z]{3,10}" name="last-name" class="form-control" required/>
								<label class="form-label" for="form3Example2">Last name</label>
							</div>
							</div>
						</div>

						<!-- Email input -->
						<div class="form-outline mb-4" id="email">
							<input type="email" name="email" class="form-control" required/>
							<label class="form-label" for="form3Example3">Email address</label>
						</div>

						<!-- Password input -->
						<div class="form-outline mb-4" id="pass" style="display:none">
							<input type="password" id="password" name="password" class="form-control"/>
							<label class="form-label" for="form3Example4">Password</label>
						</div>
						<div class="form-outline mb-4">
						<a class="" id="have_acc" onclick="apear_sign_in()" style="cursor: pointer;">All ready have account ?</a>
						<a class="" id="reset_pass" onclick="reset()" style="display:none; cursor: pointer;">Forget Password ?</a>
						<a class="" id="rem_pass" onclick="apear_sign_in()" style="display:none;cursor: pointer;">I remember password !</a>
				        </div>
						<!-- Submit button -->
						
						<button type="submit" id="submit" name="sign-up" class="btn btn-primary btn-block mb-4">
						Sign up
						</button>
						
						</form>
					</div>
					</div>
				</div>
				</div>
			</div>
			</section>
		<!-- END #content -->
		<!-- begin footer  -->
		 <?php include("includes/footer.php"); ?>
		<!-- end footer -->

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