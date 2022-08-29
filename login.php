<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Klinik Haji Medan-Krakatau</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url() ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div style="color: red;margin-bottom: 15px;">
    </div>
    <div class="card card-outline card-teal">
      <div class="card-body login-card-body text-center">
        <?php if ($this->session->flashdata("error") == TRUE) : ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= $this->session->flashdata("error"); ?>
          </div>
        <?php endif; ?>
        <span><b>Sistem Penunjang Keputusan Penentuan Obat Pada Anak</b></span>
        <br>
        <span>Metode Composite Performance Index</span>
        <br><br>
        <img src="assets/img/assets.jfif" width="87%">
        <hr>
        <form method="post" action="<?= base_url(); ?>Auth/validasi_login">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="text-danger"><?= form_error('username'); ?></span>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <span class="text-danger"><?= form_error('password'); ?></span>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-success btn-block" name="login">Masuk</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assetsassets/js/adminlte.min.js') ?>"></script>

</body>

</html>
