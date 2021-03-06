<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('asset/css/styles.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="icon" href="<?= base_url('asset/image/favico.png') ?>" type="image/gif ?>">
  <link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" id="containerlogin">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <?= $this->session->flashdata('pesan');
        ?>
        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image border-right"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="logologin">
                    <img src="<?= base_url('asset/image/loginlogo.png') ?>" alt="" height="100">
                  </div>
                  <form class="user" action="<?= base_url('/') ?>" method="POST">
                    <div class="form-group">
                      <input name="username" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" value="<?= set_value('username') ?>">
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Inget-inget</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="#">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('daftar') ?>">Ajukan Buat Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php base_url('asset/js/jquery-3.5.1.min') ?>"></script>
  <script src="<?php base_url('asset/js/bootstrap.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php base_url('asset/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php base_url('asset/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>