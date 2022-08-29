<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Ubah Kriteria</title>

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

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="beranda">Menu Utama</a></li>
                                <li class="breadcrumb-item"><a href="Kriteria">Data Kriteria</a></li>
                                <li class="breadcrumb-item active">Tambah Kriteria</li>
                            </ol>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-warning card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Ubah Kriteria</h5>
                                </div>
                                <div class="card-body">
                                    <?php echo form_open("kriteria/ubah/" . $kriteria->kd_kriteria); ?>
                                    <input type="text" class="form-control" name="kd_kriteria" id="kd_kriteria" value="<?php echo $kriteria->kd_kriteria; ?>" hidden>
                                    <div class="form-group">
                                        <label for="keterangan">Nama Kriteria</label>
                                        <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $kriteria->keterangan; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Nilai Bobot (%)</label>
                                        <input type="number" step=".1" class="form-control" name="nilai" id="nilai" value="<?php echo $kriteria->nilai; ?>">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('kriteria'); ?>"><button type="button" value="Batal" class="btn btn-danger">Batal</button></a>
                                    <button type="submit" class="btn btn-primary" name="submit">
                                        Simpan
                                    </button>
                                </div>
                                <?php echo form_close(); ?>
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

        <?php $this->load->view('templates/footer'); ?>
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