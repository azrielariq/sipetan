<form role="form" action="<?php echo base_url() ?>Admin/Komplain/edit" method="POST">
	<div class="box-body">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<div class="form-group">
			<label for="exampleInputEmail1">Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-th"></span>
				</div>
				<input type="text" name="tgl" value="<?php echo $data['tgl'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Judul</label>
			<input name="judul" value="<?php echo $data['judul'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Keluhan ttg apa?" required>
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Keluhan</label>
			<textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis keluhan"><?php echo $data['keluhan'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="exampleFormControlTextarea1">Tanggapan</label>
			<textarea name="tanggapan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis tanggapan"><?php echo $data['tanggapan'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Komplainer</label>
			<input name="komplainer" value="<?php echo $data['nik_komplainer'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Komplainer" required>
		</div>
	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Update Data</button>
	</div>
</form>
<script type="text/javascript">
  $(function () {
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  })
</script>