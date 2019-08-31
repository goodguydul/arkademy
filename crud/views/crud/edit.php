		<form method="POST" class="form-edit-data<?= $obj->id ?>" enctype="multipart/form-data" >
			<input type="text" value="<?= $obj->id ?>" name="id" hidden>
			
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="name" required="true" value="<?= $obj->name?>">
			</div>
			
			<div class="form-group">
				<label>Work</label>
				<select class="form-control" name="id_work" required="true">
					<option value="<?= $obj->id_work ?>" selected><?= $obj->workname?></option>
					<option value="1">Frontend Dev</option>
					<option value="2">Backend Dev</option>
				</select>
			</div>
			
			<div class="form-group">
				<label>Salary</label>
				<select class="form-control" name="id_salary" required="true">
					<option value="<?= $obj->id_salary?>" selected><?= $obj->salary?></option>			
					<option value="1">10.000.000</option>
					<option value="2">12.000.000</option>
				</select>
			</div>
			
			