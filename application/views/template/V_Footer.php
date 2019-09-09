
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <?php 
        if ($this->session->userdata('level') == 1) {
          echo 'Admin';
        }
        elseif ($this->session->userdata('level') == 2) {
          echo 'Petugas';
        }
        elseif ($this->session->userdata('level') == 3){
          echo 'Warga';
        }
        ?> Panel
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="<?php echo base_url() ?>">SIPETAN | SISTEM INFORMASI PENGELOLAAN JIMPITAN</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Datepicker -->
<script src="<?php echo base_url() ?>_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>_assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>_assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>_assets/dist/js/adminlte.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
    $('#datepicker').datepicker();
  })
</script>
<?php echo $script ?>

</body>
</html>