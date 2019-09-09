<section class="content-header">
	<h1>
		Jimpitan
		<small>Optional description</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>jimpitan"><i class="fa fa-dashboard"></i> Jimpitan</a></li>
		<li class="active">View</li>
	</ol>
</section><br>
<section class="content">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<a href="<?php echo base_url() ?>jimpitan" class="btn btn-primary"><i class="fa fa-refresh"></i></a>
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
								<th>Tanggal</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0 ?>
							<?php foreach ($jimpitan as $value) : ?>
								<?php $i++ ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $value['tgl_setor'] ?></td>
									<td><?php echo $value['id_nik'] ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['jml_setor'] ?></td>
									<td>
										<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
										<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-warning" href="<?php echo base_url() ?>jimpitan/delete/<?php echo $value['id']?>">Delete</a>
										<button class="btn btn-danger">Tanda Terima</button>
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
									<form role="form" action="<?php echo base_url() ?>jimpitan/add" method="POST">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">NIK</label>
												<select name="nik" multiple>
													<?php foreach ($nik as $row) : ?>
														<option value="<?php echo $row['nik'] ?>"><?php echo $row['nik'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Tanggal</label>
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input name="tgl_setor" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd" placeholder="Tanggal Setor">
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Jumlah</label>
												<input name="jml_setor" value="" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Setor">
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

				</div>
			</div>
		</div>
	</div>
</section>