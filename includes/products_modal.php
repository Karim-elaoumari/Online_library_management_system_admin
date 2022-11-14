<!-- Description -->
<div class="modal fade" id="descriptiona" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabe">Description</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				   
					<p id="desc_showed"></p>
				    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
</div>
			<!-- end modal -->

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <div class="modal-body row justify-content-around">
            <form  method="post" action="" enctype="multipart/form-data">
            <div class="card" style="width: 90%">
              <img src="assets/img/product/Capture.png" id="b_photo" class="card-img-top" alt="...">
              <div class="card-body">
            
               <input type="file" class="form-control" id="edit_b_photo" name="edit_b_photo" onchange="loadFile_b(event);">
               <input type="hidden" name="auto_b_photo" id="auto_url_photo">
               <input type="hidden" name="b_id_pho" id="b_id_pho">
               
              </div>
            </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit_bo_photo"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
    </div>
</div>
</div>
<!-- modal delete -->
<div class="modal fade" id="delete">
    <div class=" modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content text-danger">
            
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_delete.php">
                <input type="hidden" class="prodid" name="id">
                <div class="text-center">
                    <h2>Do you whant really delete this  Book</h2>
                    
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
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
              <form class="form-horizontal" method="POST" action="products_edit.php">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group row">
                  <div class="col-4">
                    <label for="edit_name" class="col-sm-1 control-label">Name</label>
                    <input type="text" class="form-control" id="edit_name" name="name">
                  </div>

                  <div class="col-4">
                  <label for="edit_category" class="col-sm-1 control-label">Quantity</label>
                  <input type="text" class="form-control" id="edit_quantity" name="price">
                  </div>

                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>
                    <input type="text" class="form-control" id="edit_price" name="price">
                  </div>
                  
                </div>
                <div class="form-group row mt-3">
                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Link</label>
                    <input type="text" class="form-control" id="edit_link" name="price">
                  </div>
                </div>
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="edit_desc" name="description" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit_b"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST["edit_bo_photo"])){
  $id = $_POST["b_id_pho"];
  $picc                = $_FILES["edit_b_photo"]["name"];
  if($picc==""){
    $picc              = $_POST["auto_b_photo"];
  }
  $target              = "assets/img/product/".$picc;
  $sourcePath          = $_FILES['edit_b_photo']['tmp_name'];
  move_uploaded_file($sourcePath,$target);
  $sql = "UPDATE `books` SET `photo`='$picc' WHERE  `id`='$id'";
  if (mysqli_query($conn,$sql)){
    $_SESSION['message'] = 'Changes made seccessefuly';

  }
  else{
    $_SESSION['danger']  = 'Action Failed Try again !';
  
  }
}

