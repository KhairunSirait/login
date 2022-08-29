<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Perhitungan Sistem Penunjang Keputusan</title>

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
    <?php

    $MinKriteria = array();
    $nilaiPerhitunganAwal = array();
    foreach ($kriteria as $datakriteria) {
        $sqlNilai = $this->db->query("SELECT min(nilai) as nilai FROM penilaian WHERE kd_kriteria='" . $datakriteria['kd_kriteria'] . "'")->result_array();

        $MinKriteria[$datakriteria['kd_kriteria']] = $sqlNilai[0]['nilai'];
    }


    foreach ($kriteria as $datakriteria) {
        foreach ($alternatif as $dataalternatif) {
            $nilaiAlternatif = $this->db->query("SELECT * FROM penilaian WHERE kd_alternatif='" . $dataalternatif['kd_alternatif'] . "' AND kd_kriteria='" . $datakriteria['kd_kriteria'] . "'");

            if ($nilaiAlternatif->num_rows() > 0) {
                $nilai = $nilaiAlternatif->result_array();


                $tmpNilai = $nilai[0]['nilai'] / $MinKriteria[$datakriteria['kd_kriteria']];

                $hasil = round($tmpNilai, 2) * 100;


                $nilaiPerhitunganAwal[$dataalternatif['kd_alternatif']][$datakriteria['kd_kriteria']] = $hasil;
            } else {

                $nilaiPerhitunganAwal[$dataalternatif['kd_alternatif']][$datakriteria['kd_kriteria']] = 0;
            }
        }
    }

    $this->db->empty_table('hasil_spk');
    foreach ($alternatif as $dataalternatif) {
        $no = 0;
        $hasilPerhitungan = 0;
        foreach ($kriteria as $datakriteria) {
            $hasilPerhitungan += (($nilaiPerhitunganAwal[$dataalternatif['kd_alternatif']][$datakriteria['kd_kriteria']] * $datakriteria['nilai']) / 100);
        }

        $data = array(
            'kd_alternatif' => $dataalternatif['kd_alternatif'],
            'nilai' => round($hasilPerhitungan, 1)
        );

        $this->db->insert("hasil_spk", $data);
    }
    ?>
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
                            <h1 class="m-0 text-dark">Laporan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="beranda">Menu Utama</a></li>
                                <li class="breadcrumb-item active">Laporan</li>
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
                                    <h5 class="m-0">Penetuan Obat Pada Klinik Haji Medan-Kratau Menggunakan Metode CPI</h5>
                                </div>
                                <div class="card-body">
                                    <a href="<?= base_url('laporan/cetak') ?>">
                                        <button type="button" class="btn btn-success">
                                            <i class="fas fa-print"></i> Cetak Data
                                        </button>
                                    </a>

                                    <table id="tabelPerhitungan" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Rank.</th>
                                                <th>Kode Alternatif</th>
                                                <th>Nama Alternatif</th>
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $HasilDB = $this->db->query("SELECT*FROM hasil_spk INNER JOIN alternatif ON hasil_spk.kd_alternatif = alternatif.kd_alternatif ORDER BY hasil_spk.nilai DESC")->result_array();
                                            $no = 1;
                                            foreach ($HasilDB as $rank) {
                                                echo "<tr>";
                                                echo "<td>" . $no . "</td>";
                                                echo "<td>" . $rank['kd_alternatif'] . "</td>";
                                                echo "<td>" . $rank['nama'] . "</td>";
                                                echo "<td>" . $rank['nilai'] . "</td>";
                                                echo "</tr>";
                                                $no++;
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
        <!-- Main Footer -->
        <?php $this->load->view('templates/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

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


    <script>
        $(document).ready(function() {
            $('#tabelPerhitungan').DataTable({
                "order": [
                    [3, "desc"]
                ],
                "language": {
                    "lengthMenu": "Tampilkan entri per halaman _MENU_",
                    "zeroRecords": "Maaf entri tidak ditemukan",
                    "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Entri tidak ditemukan",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya",
                        "last": "Terakhir"
                    },
                    "responsive": "true",
                    "lengthMenu": ""
                }
            });
        });
    </script>

</body>

</html>