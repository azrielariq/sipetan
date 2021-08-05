 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
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
          <h4 style="margin-top: 4px;"><i class="fa fa-bullhorn"></i> Informasi Terkini</h4>
          <h4>Selamat datang - <?php echo $this->session->userdata('session_data')['nama'] ?></h4>
          <table id="example3" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Informasi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($data as $key => $row) {
              ?>
              <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $row['tgl']; ?></td>
                <td><?php echo $row['informasi']; ?></td>
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