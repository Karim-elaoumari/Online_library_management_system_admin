<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Add New Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group row">
                  

                  <div class="col-4">
                    <label  class="col-sm-1 control-label">Name</label>
                    <input type="text" class="form-control"  name="name_b">
                  </div>

                  <div class="col-4">
                  <label for="edit_category" class="col-sm-1 control-label">Quantity</label>
                  <input type="text" class="form-control" id="edit_quantity" name="quantity_b">
                  </div>

                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>
                    <input type="text" class="form-control"  name="price_b">
                  </div>
                  
                </div>
                <div class="form-group row mt-3">
                  

                  <div class="col-4">
                    <label for="edit_name" class="col-sm-1 control-label">Photo</label>
                    <input type="file" class="form-control form-control-x-sm w-100" id="edit_photo" name="photo_b">
                  </div>

                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Link</label>
                    <input type="text" class="form-control"  name="link_b">
                  </div>
                </div>
                
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description_b" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add_book"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>


<?php 
  if(isset($_POST["add_book"])){
     $name               = $_POST["name_b"];
     $quantity           = $_POST["quantity_b"];
     $price              = $_POST["price_b"];
     $link               = $_POST["link_b"];
     $description        = $_POST["description_b"];
     $photo              = $_FILES["photo_b"]["name"];
     $target             = "assets/img/product/".$photo;
		 $sourcePath         = $_FILES['photo_b']['tmp_name'];
		 move_uploaded_file($sourcePath,$target);

     $sql = "INSERT INTO `books`(`name`, `price`, `quantity`, `link`, `description`, `photo`) VALUES ('$name','$price','$quantity','$link','$description','$photo')";
		 if (mysqli_query($conn, $sql)){
      $_SESSION['message'] = 'New Book added seccessefuly';
     }
     else{
      $_SESSION['danger'] = 'Action Failed Try again !';
     }
  }



?>
