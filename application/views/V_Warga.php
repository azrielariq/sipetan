<section class="content-header">
	<h1>
		Data Warga
		<small>Optional description</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>warga"><i class="fa fa-dashboard"></i> Data Warga</a></li>
		<li class="active">View</li>
	</ol>
</section><br>
<section class="content">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<a href="<?php echo base_url() ?>warga" class="btn btn-primary"><i class="fa fa-refresh"></i></a>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Add Data +</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-viewimport">Import Excel</button>
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
								<th>NIK</th>
								<th>Nama</th>
								<th>Kontak</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0 ?>
							<?php foreach ($warga as $value) : ?>
								<?php $i++ ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $value['nik'] ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['kontak'] ?></td>
									<td>
										<button type="button" onclick="viewedit(<?php echo $value['nik'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>
										<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-warning" href="<?php echo base_url() ?>warga/delete/<?php echo $value['nik']?>">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

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
									<form role="form" action="<?php echo base_url() ?>warga/add" method="POST">
										<div class="box-body">
											<div class="form-group">
												<label for="exampleInputEmail1">NIK</label>
												<input name="nik" value="" class="form-control" id="exampleInputEmail1" placeholder="NIK">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Nama</label>
												<input name="nama" value="" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Tempat Lahir</label>
												<input name="tmpt_lahir" value="" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Tanggal Lahir</label>
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input name="tgl_lahir" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir">
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Jenis Kelamin</label>
												<div class="radio">
													<label>
														<input type="radio" name="jenis_kel" id="optionsRadios1" value="L">
														Laki-laki
													</label>
													<label>
														<input type="radio" name="jenis_kel" id="optionsRadios2" value="P">
														Perempuan
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Golongan Darah</label>
												<select name="gol_darah" class="form-control" name="" id="">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="AB">AB</option>
													<option value="O">O</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Alamat</label>
												<input name="alamat" value="" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Agama</label>
												<select name="agama" class="form-control" name="" id="">
													<option value="Islam">Islam</option>
													<option value="Kristen">Kristen</option>
													<option value="Katolik">Katolik</option>
													<option value="Hindu">Hindu</option>
													<option value="Budha">Budha</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Status</label>
												<div class="radio">
													<label>
														<input type="radio" name="status" id="optionsRadios1" value="Kawin">
														Kawin
													</label>
													<label>
														<input type="radio" name="status" id="optionsRadios2" value="Belum Kawin">
														Belum Kawin
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Pekerjaan</label>
												<select name="pekerjaan" class="form-control" name="" id="">
													<option value="Pelajar">Pelajar</option>
													<option value="PNS">PNS</option>
													<option value="Swasta">Swasta</option>
													<option value="BUMN">BUMN</option>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Kewarganegaraan</label>
												<div class="radio">
													<label>
														<input type="radio" name="kewarganegaraan" id="optionsRadios1" value="WNI">
														WNI
													</label>
													<label>
														<input type="radio" name="kewarganegaraan" id="optionsRadios2" value="WNA">
														WNA
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Kontak</label>
												<input name="kontak" value="" class="form-control" id="exampleInputEmail1" placeholder="No Telepon">
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

					<!-- Modal Import -->
					<div class="modal fade" id="modal-viewimport">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Import Excel</h4>
								</div>
								<div class="modal-body">

									<!-- ################# -->
										<form method="post" action="<?php echo base_url() ?>warga/import_excel" class="form-horizontal" enctype="multipart/form-data">  

											<div class="form-group">
												<label for="inputEmail3" class="col-sm-2 control-label">Lampirkan File</label>
												<div class="col-sm-10">

													<input type="file" name="file" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
												</div>
											</div>
											<div class="form-group">

												<div class="col-sm-10">
													<input type="submit" class="btn btn-block btn-primary" value="Import" name="import">
												</div>
											</div>
										</form>
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
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
