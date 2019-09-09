<section class="content-header">
	<h1>
		Data User
		<small>Optional description</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>user"><i class="fa fa-dashboard"></i> Data User</a></li>
		<li class="active">View</li>
	</ol>
</section><br>
<section class="content">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<a href="<?php echo base_url() ?>user" class="btn btn-primary"><i class="fa fa-refresh"></i></a>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Add Data +</button>
		</div>
	</div><br>
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="box">
				<div class="box-body">
					<table id="example2" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Password</th>
								<th>Peran</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0 ?>
							<?php foreach ($user as $value) : ?>
								<?php $i++ ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $value['username'] ?></td>
									<td><?php echo $value['password'] ?></td>
									<td>
										<?php
										if ($value['level'] == 1) {
											echo 'Admin';
										}
										elseif ($value['level'] == 2) {
											echo 'Petugas';
										}
										elseif ($value['level'] == 3) {
											echo 'Warga';
										}
										
										?>
									</td>
									<td>
										<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
										<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-warning" href="<?php echo base_url() ?>user/delete/<?php echo $value['id']?>">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

					<!-- Modal add -->
					<div class="modal fade" id="modal-add">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Add Data</h4>
								</div>
								<div class="modal-body">
									<form role="form" action="<?php echo base_url() ?>user/add" method="POST">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">NIK</label>
												<input name="id_nik" value="" class="form-control" id="exampleInputEmail1" placeholder="NIK">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Username</label>
												<input name="username" value="" class="form-control" id="exampleInputEmail1" placeholder="Username">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Password</label>
												<input name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="Password">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Peran</label>
												<select name="level" class="form-control" id="">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Petugas</option>
                                                    <option value="3">Warga</option>
                                                </select>
											</div>
										</div>
										<!-- /.box-body -->
										<div class="box-footer">
											<button type="submit" class="btn btn-primary">Add User</button>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal-add -->

					<!-- Modal Edit -->
					<div class="modal fade" id="modal-viewedit">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">View/Edit Data</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
									<div id="viewedit"></div>
									<!-- ################# -->

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal-edit -->

				</div> <!-- end box-body -->
			</div> <!-- end box -->
		</div>
	</div>
</section>