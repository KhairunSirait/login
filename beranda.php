<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Menu Utama</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css') ?>">
  <!-- pace-progress -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/pace-progress/themes/black/pace-theme-flash.css') ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700') ?>" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse pace-teal pace-theme-flash-teal">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <?php $this->load->view('templates/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Menu Utama</li>
                <li class="breadcrumb-item"></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-teal card-outline">
                <div class="card-header">
                  <h5 class="m-0">Selamat Datang Di Penentuan Jenis Obat Pada Klinik Haji Medan-Krakatau </h5>
                </div>
                <div class="card-body">
                  <h5>Metode Composite Performance Index (CPI):</h5><br>
                  Metode Composite Performance Index (CPI) merupakan indeks gabungan (Composite Index) yang dapat digunakan untuk menentukan penilaian atau peringkat dari digunakan untuk menentukan penilaian atau peringkat dari berbagai alternatif berdasarkan beberapa kriteria.
                  <br>
                   Rumus Composite Performance Index (CPI) seperti pada bawah gambar berikut:
                  <br>
                  <ol>
                    Aij = (Xij / Xij (min)) * 100 ………………….....................................................(1)
                  </ol>
                  <ol>
                    Ii = Ʃ i=l Iij …………………...............................................................................(2)
                  </ol>
                  Keterangan :
                  <br>
                  <li>
                    Aij = Nilai alternatif ke-i pada kriteria ke –j
                  </li>
                  <li>Xij(min) = Nilai alternatif ke-i pada kriteria awal minimum ke –j</li>
                  <li>Iij = Index alternatif ke-i</li>
                  <li>Ii = Indeks gabungan kriteria alternatif ke-i</li>
                  <li>I = 1,2,3,……n J = 1,2,3,……m</li>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 </strong>, Klinik Haji Medan-Krakatau. All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/js/adminlte.min.js') ?>"></script>
  <!-- pace-progress -->
  <script src="<?php echo base_url('assets/plugins/pace-progress/pace.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>

</body>

</html>