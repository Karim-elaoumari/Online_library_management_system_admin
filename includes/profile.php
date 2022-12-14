<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- need documentation  -->
				<form enctype="multipart/form-data" action="" method="post">
					<!-- need documentation  -->
					
				    <div class="row">
						<div class="rounded-circle w-90px col-6"><img class="rounded-circle w-100px pe-4" id="profile_image"  src="assets/img/user/<?php echo $_SESSION['user_photo'];?>" alt=""></div>
						<div class="pt-4 col-6">
						
						<input class="form-control form-control-x-sm w-90px ms-5" name="edit_photo" onchange="loadFile(event);" accept="image/png, image/jpeg, image/jpg" type="file">
						</div>
                    </div>
					<div class="row mt-3" id="full-name">
							<div class="col-md-6 mb-4">
							<div class="form-outline" >
								<input type="text" name="edit_first" id="edit_first"class="form-control" onkeyup="validate_first()" value="<?php echo $_SESSION['user_first_name'];?>" placeholder="First Name"  />
								<span class="text-danger mt-2" id="match_first_none"style="display:none"> Most be valid string</span>
								
							</div>
							</div>
							<div class="col-md-6 mb-4" >
							<div class="form-outline">
								<input type="text"  name="edit_last" id="edit_last" class="form-control" onkeyup="validate_last()" value="<?php echo $_SESSION['user_last_name'];?>" placeholder="Last Name" />
								<span class="text-danger mt-2" id="match_last_none"style="display:none">  Most be valid string</span>
								
							</div>
							</div>
					</div>
					<input type="text" class="form-control mt-3" name="edit_email" id="email_edit" onkeyup="validate_email()"  placeholder="E-mail" value="<?php echo $_SESSION['user_email'];?>">
					<span class="text-danger mt-2" id="match_email_none"style="display:none">Most be valid email</span>
					<input type="password" class="form-control mt-3" id="current_pass3" name="confirm_pass" onkeyup="validate_pass3()" placeholder="Current password" >
					<span class="text-danger mt-2" id="match_c3_none"style="display:none"> Password don't match The current password !</span>
					<input type="hidden" id="hdn_session_pass3" value="<?php echo $_SESSION["user_password"];?>">
					
                
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" name="profile_edit" id="profile_edit_btn" class="btn btn-primary" disabled>Edit</button>
				</div>
				</div>
				</form> 
			</div>
			</div>
			<!-- end modal -->
			<!-- start modal -->
			<div class="modal fade" id="staticBackdro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="d">Edit password</h1>
					<button type="button"   class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
					<input type="password" class="form-control mt-3" id="current_pass1" onkeyup="validate_curent()" placeholder="Current password" >
					<span class="text-danger mt-2" id="match_c_none"style="display:none"> Password don't match The current password !</span>
					<input type="hidden" id="hdn_session_pass" value="<?php echo $_SESSION["user_password"];?>">
					<input type="password" class="form-control mt-3" name="new_pass" id="new_pass" onkeyup="validate_pass()" placeholder="New password" >
					<input type="password" class="form-control mt-3" id="conf_new_pass" onkeyup="validate_pass()" placeholder="Confirm password" >
					<!-- alert spans -->
					<span class="text-danger mt-2" id="match_none"style="display:none"> Password don't match, Password most be between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter!</span>
					<span class="text-success mt-2" id="match_yes"style="display:none">Password match the requirement</span>
					<!-- alert spans -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			
					<button type="submit" id="edit_pass" name="edit_pass" class="btn btn-primary" disabled>Edit</button>
				</div>
				</div>
                </form>
			</div>
			</div>

			<!-- delete account modal  -->
			<div class="modal fade" id="delete_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="d">Delete Account </h1>
					<button type="button"   class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="includes/logout.php" method="post">
						<h4 class="text-danger">Confirm your Password to delete Account</h4>
					<input type="password" class="form-control mt-3" id="current_pass2" onkeyup="deletea()" placeholder="Current password" >
					<input type="hidden" id="hdn_session_pass2" value="<?php echo $_SESSION["user_password"];?>">
					<span class="text-danger mt-2" id="match_cc_none"style="display:none"> Password don't match The current password !</span>
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="delete_acc" name="delete_acc" disabled>Delete</button>
				</div>
				</div>
                </form>
			</div>
			</div>
			<!-- delete account modal  -->
			
			<?php
			if(isset($_POST["profile_edit"])){
				$first_name          = $_POST["edit_first"];
				$last_name           = $_POST["edit_last"];
				$email               = $_POST["edit_email"];
				$confirm_pass        = $_POST["confirm_pass"];
				$pass                = $_SESSION["user_password"];
				$id                  = $_SESSION["user_id"];
				$pic                 = $_FILES["edit_photo"]["name"];
				if($pic==""){
					$pic=$_SESSION["user_photo"];
				}
				$extension  = pathinfo( $pic, PATHINFO_EXTENSION); // jpg
				$basename   = substr($_SESSION['user_photo'], 0, -4). "." . $extension; // 5dab1961e93a7_1571494241.jpg
				$target              = "assets/img/user/{$basename}";
				$sourcePath          = $_FILES['edit_photo']['tmp_name'];  /*  is used to copy the original name of the file which is uploaded */
				
				if($confirm_pass==$pass){
					move_uploaded_file($sourcePath,$target);

					$sql = "UPDATE `admins` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`photo`='$basename' WHERE  `id`='$id'";

					if (mysqli_query($conn, $sql)){
						
						$_SESSION["user_first_name"]         = $first_name;
						$_SESSION["user_last_name"]          = $last_name;
						$_SESSION["user_email"]              = $email;
						$_SESSION["user_password"]           = $pass;
						$_SESSION["user_photo"]              = $basename;
						echo "<script>document.getElementById('full_name').innerText='".$first_name.' '.$last_name."'</script>";
						echo "<script>document.getElementById('photo_admin').setAttribute('src','assets/img/user/".$basename."')</script>";
						echo "<script>document.getElementById('profile_image').setAttribute('src','assets/img/user/".$basename."')</script>";
						echo "<script>document.getElementById('email_edit').setAttribute('value','".$email."')</script>";
						echo "<script>document.getElementById('edit_first').setAttribute('value','".$first_name."')</script>";
						echo "<script>document.getElementById('edit_last').setAttribute('value','".$last_name."')</script>";
						$_SESSION['message'] = 'Changes made seccessefuly';
					}
			    }
				else{
					$_SESSION['danger'] = 'Wrong Password Confirmation Try again !';
				}

			}

			if(isset($_POST['edit_pass'])){
				$pass = $_POST['new_pass'];
				$id   = $_SESSION["user_id"];
				$sql = "UPDATE `admins` SET `password`='$pass' WHERE  `id`='$id'";

					if (mysqli_query($conn, $sql)){
						$_SESSION["user_password"]          = $pass;
						echo "<script>document.getElementById('hdn_session_pass').value='".$pass."'</script>";
						echo "<script>document.getElementById('hdn_session_pass2').value='".$pass."'</script>";
						echo "<script>document.getElementById('hdn_session_pass3').value='".$pass."'</script>";
						$_SESSION['message'] = 'Password changed seccessefuly ';
					}
					else{
						$_SESSION['danger'] = 'Wrong Password Confirmation Try again !';
					}

			}
			



			?>