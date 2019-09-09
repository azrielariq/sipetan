<form role="form" action="<?php echo base_url() ?>warga/update" method="POST">
	<input type="hidden" name="nik" value="<?php echo $warga['nik'] ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="exampleInputEmail1">Nama</label>
			<input name="nama" value="<?php echo $warga['nama'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Tempat Lahir</label>
			<input name="tmpt_lahir" value="<?php echo $warga['tmpt_lahir'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Tanggal Lahir</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input name="tgl_lahir" value="<?php echo $warga['tgl_lahir'] ?>" class="form-control pull-right" id="datepicker" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Jenis Kelamin</label>
			<div class="radio">
				<label>
					<input type="radio" name="jenis_kel" id="optionsRadios1" value="L" <?php if($warga['jenis_kel'] == 'L') echo 'checked' ?>>
					Laki-laki
				</label>
				<label>
					<input type="radio" name="jenis_kel" id="optionsRadios2" value="P" <?php if($warga['jenis_kel'] == 'P') echo 'checked' ?>>
					Perempuan
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Golongan Darah</label>
			<select name="gol_darah" class="form-control" name="" id="">
				<option value="<?php echo $warga['gol_darah'] ?>">
					<?php echo $warga['gol_darah'] ?>
				</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="AB">AB</option>
				<option value="O">O</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Alamat</label>
			<input name="alamat" value="<?php echo $warga['alamat'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Agama</label>
			<select name="agama" class="form-control" name="" id="">
				<option value="<?php echo $warga['agama'] ?>"><?php echo $warga['agama'] ?></option>
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
					<input type="radio" name="status" id="optionsRadios1" value="Kawin" <?php if($warga['status'] == 'Kawin') echo 'checked' ?> >
					Kawin
				</label>
				<label>
					<input type="radio" name="status" id="optionsRadios2" value="Belum Kawin" <?php if($warga['status'] == 'Belum Kawin') echo 'checked' ?> >
					Belum Kawin
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Pekerjaan</label>
			<select name="pekerjaan" class="form-control" name="" id="">
				<option value="<?php echo $warga['pekerjaan'] ?>"><?php echo $warga['pekerjaan'] ?></option>
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
					<input type="radio" name="kewarganegaraan" id="optionsRadios1" value="WNI" <?php if($warga['kewarganegaraan'] == 'WNI') echo 'checked' ?>>
					WNI
				</label>
				<label>
					<input type="radio" name="kewarganegaraan" id="optionsRadios2" value="WNA" <?php if($warga['kewarganegaraan'] == 'WNA') echo 'checked' ?>>
					WNA
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Kontak</label>
			<input name="kontak" value="<?php echo $warga['kontak'] ?>" class="form-control" id="exampleInputEmail1" placeholder="No Telepon">
		</div>
	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update Data</button>
	</div>
</form>
<script>
	$('#datepicker').datepicker();
</script>