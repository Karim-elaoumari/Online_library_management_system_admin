<div class="modal fade" id="admins">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">ALL Admins</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-light table-bordered min-w-100">
			<thead>
				<tr>
				<th >Full name</th>
				<th >image</th>
				<th >Email</th>
				</tr>
			</thead>
			<tbody>
			<?php
			    $sql = "SELECT * FROM admins";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_assoc($result)){
			?>
				<tr>
				<th ><?php echo $row["first_name"]." ".$row["last_name"];?></th>
				<td><img src="assets/img/user/<?php echo $row["photo"];?>" width="50"  alt=""></td>
				<td><?php echo $row["email"];?></td>
				</tr>
			<?php }} ?>
			
			</tbody>
			</table>

            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                
            </div>
        </div>
    </div>
</div>
