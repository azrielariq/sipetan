<form role="form" action="<?php echo base_url() ?>Admin/Warga/edit" method="POST">
  <div class="box-body">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
    <div class="form-group">
      <label for="exampleInputEmail1">NIK</label>
      <input type="text" name="nik" value="<?php echo $data['nik'] ?>" class="form-control" id="exampleInputEmail1" placeholder="NIK" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Lengkap</label>
      <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tempat Lahir</label>
      <input type="text" name="tmpt_lahir" value="<?php echo $data['tmpt_lahir'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tanggal Lahir</label>
      <div class="input-group date">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
        <input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jenis Kelamin</label>
      <select name="jenis_kel" class="form-control" id="exampleInputEmail1" required>
        <option value="<?php echo $data['jenis_kel'] ?>"><?php echo $data['jenis_kel'] ?></option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Kontak</label>
      <input type="text" name="kontak" value="<?php echo $data['kontak'] ?>" class="form-control" id="exampleInputEmail1" placeholder="No Telpon" required>
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