<section class="content-header">
  <h1>
    Dashboard
    <small>Optional description</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url() ?>home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
  </ol>
</section><br>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box">
        <div class="box-body">
            <h4><i class="fa fa-bullhorn"></i> Informasi Terkini</h4>
            <h4 class="text-right">Selamat Datang - <?php echo $this->session->userdata('username'); ?></h4><br>
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Informasi</th>
                <th>File Lampiran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2019-08-03</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</td>
                <td>
                  <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
