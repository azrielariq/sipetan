 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Komplain
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $this->session->userdata('session_data')['level'] ?></a></li>
        <li class="active">View</li>
      </ol>
    </section><br>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box">
        <div class="box-body">
          <a href="<?php echo base_url() ?>Warga/Komplain" class="btn btn-info"><i class="fa fa-refresh"></i></a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> <span>Tambah Data</span></button>
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Judul</th>
                <th>Keluhan</th>
                <th>Tanggapan</th>
                <th>Komplainer</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($data as $key => $row) {
              ?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $row['tgl']; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['keluhan']; ?></td>
                <td>
                  <?php
                    if ($row['tanggapan'] == null) {
                      echo "---Menunggu tanggapan---";
                    } else{
                      echo $row['tanggapan'];
                    }
                  ?>
                </td>
                <td><?php echo $row['nama']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          
          <!-- modal add -->
          <div class="modal fade" id="modal-add">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Tambah Komplain</h4>
                </div>
                <div class="modal-body">

                  <!-- ################# -->
                  <form role="form" action="<?php echo base_url() ?>Warga/Komplain/tambah" method="POST">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input type="text" name="tgl" value="" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input name="judul" value="" class="form-control" id="exampleInputEmail1" placeholder="Keluhan ttg apa?" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keluhan</label>
                        <textarea name="keluhan" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tulis keluhan"></textarea>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Tambah Data</button>
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
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->