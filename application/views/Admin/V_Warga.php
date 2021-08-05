 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Warga
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
          <a href="<?php echo base_url() ?>Admin/Warga" class="btn btn-info"><i class="fa fa-refresh"></i></a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> <span>Tambah Data</span></button>
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kontak</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($data as $key => $row) {
              ?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $row['nik']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['tmpt_lahir']; ?></td>
                <td><?php echo $row['tgl_lahir']; ?></td>
                <td><?php echo $row['jenis_kel']; ?></td>
                <td><?php echo $row['kontak']; ?></td>
                <td>
                  <button type="button" onclick="viewedit(<?php echo $row['id'] ?>)" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-viewedit"><i class="fa fa-edit"></i> <span>Edit</span></button>
                  <a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm" href="<?php echo base_url() ?>Admin/Warga/hapus/<?php echo $row['id']?>"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

          <!-- modal-edit -->
          <div class="modal fade" id="modal-viewedit">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Edit Warga</h4>
                </div>
                <div class="modal-body">

                  <!-- ################# -->
                  <div id="viewedit"></div>
                  <!-- ################# -->

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

          <!-- modal add -->
          <div class="modal fade" id="modal-add">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Tambah Warga</h4>
                </div>
                <div class="modal-body">

                  <!-- ################# -->
                  <form role="form" action="<?php echo base_url() ?>Admin/Warga/tambah" method="POST">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik" value="" class="form-control" id="exampleInputEmail1" placeholder="NIK" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" value="" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" value="" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input type="text" name="tgl_lahir" value="" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select name="jenis_kel" class="form-control" id="exampleInputEmail1" required>
                          <option value="">Pilih</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kontak</label>
                        <input type="text" name="kontak" value="" class="form-control" id="exampleInputEmail1" placeholder="No Telpon" required>
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