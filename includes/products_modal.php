<!-- Description -->
<div class="modal fade" id="descriptiona" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabe">Description</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				   
					
				    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
</div>
			<!-- end modal -->

<!-- Add -->

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file"  name="photo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo 2</label>

                    <div class="col-sm-9">
                      <input type="file"  name="photo2" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo 3</label>

                    <div class="col-sm-9">
                      <input type="file"  name="photo3" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>
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
                    <input type="text" class="form-control" id="edit_pric" name="price">
                  </div>
                  
                </div>
                <div class="form-group row mt-3">
                  

                  <div class="col-4">
                    <label for="edit_name" class="col-sm-1 control-label">Photo</label>
                    <input type="file" class="form-control form-control-x-sm w-100" id="edit_photo" name="name">
                  </div>

                  <div class="col-4">
                  <label for="edit_price" class="col-sm-1 control-label">Link</label>
                    <input type="text" class="form-control" id="edit_link" name="price">
                  </div>
                </div>
                
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor2" name="description" rows="10" cols="80"></textarea>
                  </div>
                  
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


