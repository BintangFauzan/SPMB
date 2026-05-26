<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard Pendaftaran Khoiru Ummah</title>

  <!-- Favicon -->
  <link href="<?= base_url("assets"); ?>/img/logo.png" rel="icon">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/dist/css/adminlte.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select 2 -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/select2/select2.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/toastr/toastr.min.css">
  <!-- Daterangepicker -->
  <link rel="stylesheet" href="<?= base_url("assets"); ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    body {
      padding-right: 0px !important;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey;
      border-radius: 5px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #e3e3e3;
      border-radius: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #a1a1a1;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
  <input type="hidden" id="base_link" value="<?= base_url(); ?>">
  <!-- jQuery -->
  <script src="<?= base_url("assets"); ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url("assets"); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url("assets"); ?>/dist/js/adminlte.min.js"></script>

  <!-- Modal Konfirmasi Ya Tidak -->
  <div class="modal fade" id="frmKonfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="jdlKonfirm">Konfirmasi Hapus</h4>
        </div>
        <div class="modal-body">
          <div id="isiKonfirm"></div>
          <input type="hidden" name="id" id="id">
          <input type="hidden" name="mode" id="mode">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="yaKonfirm">Ya <b style="font-size:18px;">(نعم)</b></button>
          <button data-dismiss="modal" class="btn btn-danger" id="tidakKonfirm">Tidak <b style="font-size:18px;">(لا)</b></button>
        </div>
      </div>
    </div>
  </div>

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <?php if ($this->session->userdata("id_user")) { ?>
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("Login/logout"); ?>" role="button">
              <i class="fas fa-power-off"></i>
            </a>
          </li>
        </ul>
      <?php } else {
      ?>
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("Login"); ?>" role="button">
              <i class="fas fa-user"></i> Login
            </a>
          </li>
        </ul>
      <?php } ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="" class="brand-link">
        <img src="<?= base_url("assets"); ?>/img/logo-header.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Khoiru Ummah</span>
      </a>
      <!-- Sidebar -->
      <?php if ($this->session->userdata("level") >= 1) { ?>
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image ml-2">
              <i class="nav-icon fas fa-user text-light"></i>
            </div>
            <div class="info">
              <a href="#" class="d-block"><?= $this->session->userdata("username"); ?></a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?= base_url("Dashboard/tampil"); ?>" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url("Pendaftar/tampil"); ?>" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Pendaftar
                  </p>
                </a>
              </li>
              <?php if ($this->session->userdata("level") == 1) { ?>
                <li class="nav-item">
                  <a href="<?= base_url("Pengguna/tampil"); ?>" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                      User
                    </p>
                  </a>
                </li>
              <?php } ?>
              <li class="nav-item">
                <a href="<?= base_url("Login/logout"); ?>" class="nav-link">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        <?php } ?>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-12">
              <marquee style="background:white;border-radius:5px; color:black; " scrolldelay="1" scrollamount="3" direction="left">
                <b>Pendaftaran Khoiru Ummah</b>. &copy; <script>
                  document.write(new Date().getFullYear());
                </script> All Right Reserved.
              </marquee>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content pt-2">