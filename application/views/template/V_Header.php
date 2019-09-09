<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Desa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Bootstrap Datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>_assets/dist/css/skins/skin-blue.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>D</b>D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Data</b>Desa</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url() ?>_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('username') ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url() ?>_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $this->session->userdata('username') ?> | 
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
                    ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>account/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url() ?>_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('username') ?></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="<?php echo ($nav == 'home' ? 'active' : '') ?>">
            <a href="<?php echo base_url() ?>home">
              <i class="fa fa-dashboard"></i> <span>Beranda</span>
            </a>
          </li>
          <li class="header">DATA</li>
          <li><a href="#"><i class="fa fa-calendar"></i> <span>Tahun Pengelolaan</span></a></li>
          <li class="<?php echo ($nav == 'warga' ? 'active' : '') ?>">
            <a href="<?php echo base_url() ?>warga">
              <i class="fa fa-address-card"></i> <span>Data Warga</span>
            </a>
          </li>
          <li><a href="#"><i class="fa fa-bullhorn"></i> <span>Broadcast Informasi</span></a></li>
          <li class="<?php echo ($nav == 'jimpitan' ? 'active' : '') ?>">
            <a href="<?php echo base_url() ?>jimpitan">
              <i class="fa fa-book"></i> <span>Jimpitan - Kas Pokok</span>
            </a>
          </li>
          <li><a href="#"><i class="fa fa-money"></i> <span>Jimpitan - Tabungan</span></a></li>
          <!-- <li class="treeview">
            <a href="#"><i class="fa fa-file"></i> <span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Kas</a></li>
              <li><a href="#">Tabungan</a></li>
            </ul>
          </li> -->
          <li class="<?php echo ($nav == 'user' ? 'active' : '') ?>">
            <a href="<?php echo base_url() ?>user">
              <i class="fa fa-user-circle"></i> <span>Pengguna</span>
            </a>
          </li>
          <li><a href="#"><i class="fa fa-deaf"></i> <span>Komplain</span></a></li>
          <li class="header">FOOTER</li>
          <li><a href="<?php echo base_url() ?>account/logout"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
