<!-- Description -->
<div class="modal fade" id="descriptiona" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabe">Description</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
        <textarea id="desc_showed" rows="10" cols="38"></textarea>
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
</div>
			<!-- end modal -->


<!-- modal delete -->
<div class="modal fade" id="delete">
    <div class=" modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content text-danger">
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="">
                <input type="hidden" name="b_id_delete" id="b_id_delete">
                <div class="text-center">
                    <h2>Do you whant really delete this  Book</h2>
                    
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="b_delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <input type="hidden" name="b_id" id="b_id">
                <div class="form-group row">
                  <div class="col-4">
                    <label for="edit_name" class="col-sm-1 control-label">Name</label>
                    <input type="text" class="form-control" id="edit_name" name="b_name">
                  </div>

                  <div class="col-2">
                  <label for="edit_category" class="col-sm-1 control-label">Quantity</label>
                  <input type="text" class="form-control" id="edit_quantity" name="b_quantity">
                  </div>

                  <div class="col-2">
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>
                    <input type="text" class="form-control" id="edit_price" name="b_price">
                  </div>
                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Link</label>
                    <input type="text" class="form-control" id="edit_link" name="b_link">
                  </div>
                  
                 
                    <div class="form-group row mt-3 justify-content-between">
                        <div class="col-6">
                        
                          <p class="mt-3"><b>Description</b></p>
                          <textarea id="edit_desc" name="b_description" rows="10" cols="53"></textarea>
                        </div>
                        <div class="col-4">
                        <div class="card me-2" style="width: 200px">
                          <img src="assets/img/product/Capture.png" id="b_photo"  alt="...">
                          <div class="card-body">
                        
                          <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control w-90px" id="edit_b_photo" name="edit_b_photo" onchange="loadFile_b(event);">
                          <input type="hidden" name="auto_b_photo" id="auto_url_photo">
                          <input type="hidden" name="b_id_pho" id="b_id_pho">
                          
                          </div>
                        </div>
                          
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit_b_all"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST["edit_b_all"])){
  $id= $_POST["b_id"];
  $name= filter_var($_POST["b_name"],FILTER_SANITIZE_STRING);
  $price= filter_var($_POST["b_price"],FILTER_SANITIZE_STRING);
  $link= filter_var($_POST["b_link"],FILTER_SANITIZE_STRING);
  $quantity= filter_var($_POST["b_quantity"],FILTER_SANITIZE_STRING);
  $description= filter_var($_POST["b_description"],FILTER_SANITIZE_STRING);
  $picc                = $_FILES["edit_b_photo"]["name"];
  
  if($picc==""){
    $picc              = $_POST["auto_b_photo"];
  }
  $extension  = pathinfo( $picc, PATHINFO_EXTENSION); // jpg
	$basename   = substr($_POST["auto_b_photo"], 0, -4). "." . $extension; // 5dab1961e93a7_1571494241.jpg
  $target              = "assets/img/product/".$basename;
  $sourcePath          = $_FILES["edit_b_photo"]["tmp_name"];
  if($quantity<=0){
    $_SESSION['danger'] = 'Quantity Most be valide !';
   }
   else{
    if (!filter_var($link, FILTER_VALIDATE_URL)) {
      $_SESSION['danger'] = 'URL Most be valide !';
    } 
    else{
  move_uploaded_file($sourcePath ,$target);


  $sql = "UPDATE books SET `name`='$name',`price`='$price',`quantity`='$quantity',`link`='$link',`description`='$description', `photo`='$basename' WHERE id='$id'";
  if (mysqli_query($conn,$sql)){
    $_SESSION['message'] = 'Changes made seccessefuly';

  }
  else{
    $_SESSION['danger']  = 'Action Failed Try again !';
  }
  }
}


}
if(isset($_POST["b_delete"])){
  $id  = $_POST['b_id_delete'];
  $sql = "DELETE FROM `books` WHERE id='$id'";
  if (mysqli_query($conn,$sql)){
    $_SESSION['message'] = 'Changes made seccessefuly';

  }
  else{
    $_SESSION['danger']  = 'Action Failed Try again !';
  }
}

