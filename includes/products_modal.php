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

<!-- Add -->

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Photo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <div class="modal-body">
            <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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


