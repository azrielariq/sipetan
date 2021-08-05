<form role="form" action="<?php echo base_url() ?>Admin/Jimpitan/edit" method="POST">
	<div class="box-body">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<div class="form-group">
			<label for="exampleInputEmail1">Tanggal</label>
			<div class="input-group date">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-th"></span>
				</div>
				<input type="text" name="tgl_setor" value="<?php echo $data['tgl_setor'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Jumlah Setor</label>
			<input type="text" name="jml_setor" value="<?php echo $data['jml_setor'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Setor" required>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Total Jimpitan</label>
			<input type="text" name="total_jimpitan" value="<?php echo $data['total_jimpitan'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Total Jimpitan" required>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Petugas</label>
			<input type="text" name="nik_petugas" value="<?php echo $data['nik_petugas'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Petugas" required>
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