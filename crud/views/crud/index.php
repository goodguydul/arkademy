<?php
require_once('config/koneksi.php');

$urlcrud = "index.php?page=crud/";
?>
<div class="row">
	<div class="col-lg-2"></div>

	<div class="col-lg-8">
		<button style="float: right;margin-bottom: 10px" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#createModal"><span class="glyphicon glyphicon-plus"></span> ADD</button>
		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="success">

				<th>Name</th>
				<th>Work</th>
				<th>Salary</th>	
				<th style="text-align: center;">Actions</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$showAllData)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $obj->name ?></td>
						<td><?= $obj->workname ?></td>
						<td><?= $obj->salary?></td>
						<td style="text-align: center;">
						<button data-id="<?= $obj->id?>" class="removeItem btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span>
						</button>
						<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $obj->id?>" data-id="<?= $obj->id?>" onclick="ShowModal(this)" ><span class="glyphicon glyphicon-edit" ></span></button>
						</td>
						
					</tr>
					<div class="modal fade" id="editModal<?= $obj->id?>" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
						  	<div class="modal-dialog" role="document">
						    	<div class="modal-content">
							      	<div class="modal-header">
							        	<h5 class="modal-title" id="ModalLabel"><b>EDIT DATA</b></h5>
							        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          		<span aria-hidden="true">&times;</span>
							        	</button>
							      	</div>
						      		<div class="modal-body">
						    			<?php include('edit.php');?>
						      		</div>
						      		<div class="modal-footer">
							        	<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
							        	<button type="submit" class="btn btn-warning">EDIT</button>
						      		</div>
						      		</form>
						    	</div>
						  	</div>
						</div>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
	<div class="col-lg-2"></div>

	<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel"><b>ADD DATA</b></h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          		<span aria-hidden="true">&times;</span>
		        	</button>
		      	</div>
	      		<div class="modal-body">
	    			<?php include('create.php');?>
	      		</div>
	      		<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
		        	<button type="submit" class="btn btn-warning ">ADD</button>
	      		</div>
	      		</form>
	    	</div>
	  	</div>
	</div>
</div>
<?php
mysqli_close($koneksi);
?>