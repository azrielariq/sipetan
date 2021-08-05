 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jimpitan
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
          <a href="<?php echo base_url() ?>Petugas/Jimpitan" class="btn btn-info"><i class="fa fa-refresh"></i></a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i> <span>Tambah Data</span></button>
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah Setor</th>
                <th>Total Jimpitan</th>
                <th>Petugas</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($data as $key => $row) {
              ?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $row['tgl_setor']; ?></td>
                <td><?php echo $row['jml_setor']; ?></td>
                <td><?php echo $row['total_jimpitan']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td>
                  <button type="button" onclick="viewedit(<?php echo $row['id'] ?>)" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-viewedit"><i class="fa fa-edit"></i> <span>Edit</span></button>
                  <a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm" href="<?php echo base_url() ?>Petugas/Jimpitan/hapus/<?php echo $row['id']?>"><i class="fa fa-trash"></i></a>
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
                  <h4 class="modal-title">Edit Jimpitan</h4>
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
                  <h4 class="modal-title">Tambah Jimpitan</h4>
                </div>
                <div class="modal-body">

                  <!-- ################# -->
                  <form role="form" action="<?php echo base_url() ?>Petugas/Jimpitan/tambah" method="POST">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input type="text" name="tgl_setor" value="" class="form-control datepicker" id="exampleInputEmail1" placeholder="yyyy-mm-dd" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Setor</label>
                        <input type="text" name="jml_setor" value="" class="form-control" id="exampleInputEmail1" placeholder="Jumlah Setor" required>
                      </div>
                      <div class="form-group">
                        <?php foreach ($data1 as $value) { ?>
                          <input type="hidden" name="sisa_jimpitan" value="<?php echo $value['total_jimpitan'] ?>">
                        <?php } ?>
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