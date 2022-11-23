<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-md">
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
                    <input type="text" class="form-control"  name="name_b" required>
                  </div>

                  <div class="col-4">
                  <label for="edit_category" class="col-sm-1 control-label">Quantity</label>
                  <input type="number" class="form-control" id="edit_quantity" name="quantity_b" required>
                  </div>

                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Price</label>
                    <input type="number" class="form-control"  name="price_b" required>
                  </div>
                  
                  
                </div>
                <div class="form-group row mt-3">

                  <div class="col-6">
                    <label for="edit_name" class="col-sm-1 control-label">Photo</label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control form-control-x-sm w-100" id="edit_photo" name="photo_b">
                  </div>
                  <div class="col-6">
                  <label for="edit_price" class="col-sm-1 control-label">Link</label>
                    <input type="url" class="form-control"  id="link_add"name="link_b" required>
                    <span class="text-danger mt-2" id="match_link"style="display:none"> Link Most be valide URL </span>
                  </div>
                </div>
                
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description_b" rows="6" cols="40"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="add_book"  class="btn btn-primary btn-flat" ><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>



<?php 
  if(isset($_POST["add_book"])){
     $name               = filter_var($_POST["name_b"],FILTER_SANITIZE_STRING);
     $quantity           = filter_var($_POST["quantity_b"],FILTER_SANITIZE_STRING);
     $price              = filter_var($_POST["price_b"],FILTER_SANITIZE_STRING);
     $link               = filter_var($_POST["link_b"],FILTER_SANITIZE_STRING);
     $description        = filter_var($_POST["description_b"],FILTER_SANITIZE_STRING);
     $photo              = $_FILES["photo_b"]["name"];
     $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
     $extension  = pathinfo( $photo, PATHINFO_EXTENSION); // jpg
     $basename   = "book-".$filename . "." . $extension;
     $target             = "assets/img/product/".$basename;
     $allowed='png,jpg,PNG,JPG,jpeg,JPEG';  
     $extension_allowed=  explode(',', $allowed);
     if($quantity<=0){
      $_SESSION['danger'] = 'Quantity Most be valide !';
     }
     else if(!filter_var($link, FILTER_VALIDATE_URL)){
        $_SESSION['danger'] = 'URL Most be valide !';
     }
     else if(!array_search($extension, $extension_allowed)){
          $_SESSION['danger'] = 'File type is not allowed (png, jpg) !';
     }
     else{
          $sourcePath         = $_FILES['photo_b']['tmp_name'];  /*  is used to copy the original name of the file which is uploaded */
          move_uploaded_file($sourcePath,$target);

          $sql = "INSERT INTO `books`(`name`, `price`, `quantity`, `link`, `description`, `photo`) VALUES ('$name','$price','$quantity','$link','$description','$basename')";
          if (mysqli_query($conn, $sql)){
            $_SESSION['message'] = 'New Book added seccessefuly';
          }
          else{
            $_SESSION['danger'] = 'Action Failed Try again !';
          }
      }
   }
   
 

// ecma non 
// dom form validation 
//css basique les sellecteur grid flex 
//php array 
// les requetes http  crud les joitures 
// merise  md mld 
// 



?>
