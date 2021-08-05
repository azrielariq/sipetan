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
          <a href="<?php echo base_url() ?>Warga/Jimpitan" class="btn btn-info"><i class="fa fa-refresh"></i></a>
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah Setor</th>
                <th>Total Jimpitan</th>
                <th>Petugas</th>
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
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->