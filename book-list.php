

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
		<?php  require "includes/header-admin.php";?>
		<!-- nav bar -->

		<!-- Button trigger modal -->
			

			<!-- Modal -->
			<?php include("includes/modals/products_modal.php"); ?>
			<?php include("includes/modals/products_add_modal.php"); ?>
			<?php  require "includes/profile.php";?>
			<!-- end modal -->
		
       










		<!-- BEGIN #content -->
		    <div class="background-radial-gradient overflow-hidden row vh-100">
			<div class="col-1" style="position:fixed">
			<?php  require "includes/aside.php";?>
            </div>
			<div class="col-11 ps-5 ms-5 pt-5">
			    <?php if (isset($_SESSION['message'])):?>
					<div class="alert alert-green alert-dismissible fade show">
					<strong>Success!</strong>
						<?php 
							echo $_SESSION['message']; 
							unset($_SESSION['message']);
						?>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
					</div>
				<?php endif ?>

				<?php if (isset($_SESSION['alert'])):?>
					<div class="alert alert-green alert-dismissible fade show">
					<strong>Success!</strong>
						<?php 
							echo $_SESSION['alert']; 
							unset($_SESSION['alert']);
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
		<div class="table-responsive">
			<table class="table table-light table-bordered" style="min-width:700px;">
			<thead>
				<tr>
				<th >Name</th>
				<th >Photo</th>
				<th >Description</th>
				<th >Link</th>
				<th >Qantity</th>
				<th >Price</th>
				<th >Tools</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				$sql = "SELECT * FROM `books` ";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
					if(strlen($row["description"])<30){
						$desc=$row["description"];
					}else{
						$desc=substr($row["description"],30)."...";
					}
				?>
				<tr>
				<th ><?php  echo $row["name"]?></th>
				<td><img src="assets/img/product/<?php echo $row["photo"]?>" width="50"  alt=""></td>
				<td><?php  echo $desc;?><br><button type="button" class="btn btn-info btn-sm mt-2" onclick="show_desc(`<?php echo $row['description']?>`)" data-bs-toggle="modal" data-bs-target="#descriptiona">more</button></td>
				<td><?php  echo $row["link"]?></td>
				<td><?php  echo $row["quantity"]?></td>
				<td>$ <?php  echo $row["price"]?></td>
				<td><button type="button" class="btn btn-primary" onclick="edit_b(<?php echo $row['id'];?>,`<?php echo $row['name']?>`,`<?php echo $row['description']?>`,`<?php echo $row['link']?>`,`<?php echo $row['quantity']?>`,`<?php echo $row['price']?>`,`<?php echo $row['photo']?>`)" data-bs-toggle="modal" data-bs-target="#edit">View & Edit</button><button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#delete" onclick="delete_b(<?php echo $row['id'];?>)">Delete</button></td>
				</tr>
				<?php }} ?>
			</tbody>
			</table>
		</div>
			</div>
			</div>
		<!-- END #content -->
		<!-- products-modals -->
		
		<?php include("includes/modals/products_add_modal.php"); ?>
		<?php include("includes/modals/products_solded_modal.php"); ?>
		<?php include("includes/modals/admins_modal.php"); ?>
		<!-- products-modals -->

			
		

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- begin footer  -->
	<?php include("includes/footer.php");?>
	<!-- end footer -->
	

	<!-- END #app -->
	<!-- ================== BEGIN core-js ================== -->
    
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js">   </script>
	<script src="assets/js/scripts.js">   </script>
    
	<!-- ================== END core-js ================== -->
</body>
</html>