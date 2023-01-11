<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/template/bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/template/bootstrap/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Crea tu cuenta!</h1>
                <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error");?></p>
                </div>
                <?php endif ?>
              </div>
              <form class="user" action="<?php echo site_url('Auth/store')?>" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Nombre" name="Nombre" placeholder="Primer Nombre">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="Nombre"name="Apellidos" placeholder="Apellidos">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Telefono" name="Telefono"  placeholder="Telefono">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="Direccion" placeholder="Direccion">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="Mail" placeholder="Direccion de correo Electronico">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="User" placeholder="Usuario">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="Password" placeholder="Contraseña">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="repeatPass" placeholder="Repita contraseña">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" >Registrar</button>


                
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/template/bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
