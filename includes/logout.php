<?php
	session_start();
	include "database.php";
	if(isset($_POST['delete_acc'])){
		$id   = $_SESSION["user_id"];
		$sql = "DELETE FROM `admins` WHERE `id`='$id'";
			if (mysqli_query($conn, $sql)){
				session_destroy();
				session_start();
				$_SESSION['message'] = 'Account deleted seccessefuly ';
	            header('location:../index.php');
				
			}
	}
	else{
		
	    session_destroy();
	    header('location:../index.php');
		
	}





?>