<div class="modal fade" id="books_solded">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">ALL Books Solded</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table table-light table-bordered min-w-100">
			<thead>
				<tr>
				<th >Name</th>
				<th >Qantity</th>
				<th >Price</th>
				<th >Total Price</th>
                <th>sold date </th>
				</tr>
			</thead>
			<tbody>
			<?php
			    $sql = "SELECT * FROM books inner join sales on books.id = sales.book_id ";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0){
					$total=0;
				while($row = mysqli_fetch_assoc($result)){
					$total+=$row["price"]*$row["quantity_solded"];
			?>
				<tr>
				<th ><?php echo $row["name"]; ?></th>
				<td><?php echo $row["quantity_solded"]; ?></td>
				<td>$ <?php echo $row["price"]; ?></td>
				<td>$ <?php echo $row["price"]*$row["quantity_solded"]; ?></td>
                <td><?php echo $row["date_sold"]; ?></td>

				<?php }} ?>
				
				
                <tr>
                   <td colspan="5"> <h3>Total :  $ <?php echo $total;?> </h3> </td>
                </tr>
			
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
