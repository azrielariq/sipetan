<form role="form" action="<?php echo base_url() ?>Admin/Informasi/edit" method="POST">
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
      <label for="exampleFormControlTextarea1">Informasi</label>
      <textarea name="informasi" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis informasi"><?php echo $data['informasi'] ?></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Informan</label>
      <input name="nik_informan" value="<?php echo $data['nik_informan'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Informan">
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