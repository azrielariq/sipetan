<form role="form" action="<?php echo base_url() ?>Admin/Pengguna/edit" method="POST">
	<div class="box-body">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<div class="form-group">
			<label for="exampleInputEmail1">NIK</label>
			<input name="nik" value="<?php echo $data['id_nik'] ?>" class="form-control" id="exampleInputEmail1" placeholder="NIK">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input name="username" value="<?php echo $data['username'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">New Password</label>
			<small>*cannot edit previous password</small>
			<input name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter new password" required>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Level</label>
			<select name="level" class="form-control" name="" id="">
				<option value="<?php echo $data['level'] ?>"><?php echo $data['level'] ?></option>
				<option value="Admin">Admin</option>
				<option value="Petugas">Petugas</option>
				<option value="Warga">Warga</option>
			</select>
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update Data</button>
	</div>
</form>
