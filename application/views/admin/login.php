<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Farmacia Virtual</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
  <link href="<?php echo base_url();?>assets/template/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/template/bootstrap/css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-dark">
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error");?></p>
                </div>
                <?php endif ?>
              </div>
              <form class="user" action="<?php echo site_url('Auth/login')?>" method="post">
                <div class="form-group">
                  <input type="text" name ="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" name="password">
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Recuerdame</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-dark btn-user btn-block">
                  Login
                </button>
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?php echo site_url('Auth/register')?>">Crear una cuenta</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/template/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/sb-admin-2.min.js"></script>
</body>
</html>
