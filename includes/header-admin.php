<nav class="navbar navbar-light bg-light">
	<style>
		@media (max-width: 425px) {
    .hidih{
        display: none;
    }

     
    
    
}
	</style>
			<a class="navbar-brand fs-1" href="dashboard.php">
				<img src="assets/img/logo/logo-q.png" width="50" height="" class="d-inline-block align-top ms-2" alt="">
			You<span  style="color: hsl(218, 81%, 75%)">Code</span> Library
			</a>
			<div class="btn-group dropstart">
			<h5 id="full_name" class="mt-3 me-2 hidih"><?php echo $_SESSION['user_first_name']." ".$_SESSION['user_last_name'];?></h5>
			<div class="rounded-circle" data-bs-toggle="dropdown" aria-expanded="false"><img id="photo_admin"class="rounded-circle w-55px pe-3" src="assets/img/user/<?php echo $_SESSION['user_photo'];?>" alt=""></div>
		   
			<ul class="dropdown-menu">
			<!-- Dropdown menu links -->
			    <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-decoration-none">Show & Edit Account</a></li>
				<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdro" class="text-decoration-none">Change password</a></li>
				<li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#delete_account" class="text-decoration-none">Delete Account</a></li>
				<li class="list-group-item"><a href="includes/logout.php" class="text-decoration-none">Log out</a></li>
			</ul>
			</div>
			
</nav>
