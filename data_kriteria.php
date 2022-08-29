<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Bobot Kriteria</title>

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
                                <li class="breadcrumb-item"><a href="Beranda">Menu Utama</a></li>
                                <li class="breadcrumb-item active">Data Kriteria</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-teal card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Data Kriteria</h5>
                                    <br>
                                    <a href='<?= base_url("kriteria/tambah/") ?>'>
                                        <button type='button' class='btn btn-primary btn-sm'>
                                            <i class='fas fa-plus'></i> Tambah Data </button>
                                    </a>
                                    <br>
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata("tambah_kriteria") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("tambah_kriteria"); ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <?php if ($this->session->flashdata("ubah_kriteria") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("ubah_kriteria"); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($this->session->flashdata("hapus_kriteria") == TRUE) : ?>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-check"></i> <?= $this->session->flashdata("hapus_kriteria"); ?>
                                        </div>
                                    <?php endif; ?>

                                    <table id="testTable" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kriteria</th>
                                                <th>Keterangan</th>
                                                <th>Nilai Bobot (%)</th>
                                                <th>Bobot (/100)</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($kriteria)) {
                                                $no = 0;
                                                $tmpNilai =0;
                                                foreach ($kriteria as $datakriteria) {
                                                    $no++;
                                                    $tmpNilai += $datakriteria['nilai'];
                                                    echo "<tr>";
                                                    echo "<td>" . $no . "</td>";
                                                    echo "<td>" . $datakriteria['kd_kriteria'] . "</td>";
                                                    echo "<td>" . $datakriteria['keterangan'] . "</td>";
                                                    echo "<td>" . $datakriteria['nilai'] . "</td>";
                                                    echo "<td>" . $datakriteria['nilai'] / 100 . "</td>";
                                                    echo "<td class='text-center'>";
                                                    echo "<a href='" . base_url("kriteria/ubah/" . $datakriteria['kd_kriteria']) . "'>";
                                                    echo "<button type='button' class='btn btn-warning btn-sm'>";
                                                    echo "<i class='fas fa-edit'></i> Ubah </button></a> | ";
                                                    echo "<a href='" . base_url("kriteria/hapus/" . $datakriteria['kd_kriteria']) . "'>";
                                                    echo "<button type='button' class='btn btn-danger btn-sm'>";
                                                    echo "<i class='fas fa-trash'></i> Hapus </button></a>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }

                                                echo "<tr>
                                                <td colspan='3'> <b>Total</b>  <td colspan='3'><b>  $tmpNilai%</b></td>
                                                </tr>";
                                            } else {
                                                echo "<tr><td align='center'>Data Tidak Ada</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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