<?php 
  
  include_once 'funciones/funciones.php'; 
  include_once 'templates/header.php'; 



?>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Cover</b>Up</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia seccion aqui</p>

    <form name="login-admin-form" id="login-admin" method="post" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <button name="login-admin" type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
        <?php 
  
        include_once 'templates/footer.php'; 


        ?>

