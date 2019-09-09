<form role="form" action="<?php echo base_url() ?>jimpitan/update" method="POST">
	<input type="hidden" name="id" value="<?php echo $jimpitan['id'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Tanggal</label>
			<input name="tgl_setor" value="<?php echo $jimpitan['tgl_setor'] ?>" class="form-control " id="exampleInputEmail1" placeholder="Tanggal Setor" disabled>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">NIK</label>
			<input name="id_nik" value="<?php echo $jimpitan['id_nik'] ?>" class="form-control" id="exampleInputEmail1" placeholder="NIK" disabled>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Nama</label>
			<input name="nama" value="<?php echo $jimpitan['nama'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" disabled>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Jumlah</label>
			<input name="jml_setor" value="<?php echo $jimpitan['jml_setor'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Setor" required autofocus>
		</div>
	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update User</button>
	</div>
</form>
