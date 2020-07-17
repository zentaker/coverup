<?php 
  
  include_once 'funciones/funciones.php'; 
  include_once 'templates/header.php'; 

  include_once 'templates/barra.php'; 
  include_once 'templates/aside.php'; 

?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Crear Administrador
                    <small>llena el formulario para crear un administrador</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Examples</a></li>
                    <li class="active">Blank page</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="row">
                    <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Crear Administrador</h3>


                    </div>
                    <div class="box-body">

                   


            <form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre Completo">
                </div>
                <div class="form-group">
                  <label for="contrasenia">Contraseña:</label>
                  <input type="password" class="form-control" id="contrasenia" name="password" placeholder="Password">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <input type="hidden" name="agragar-admin" value="1">
                <button type="submit" class="btn btn-primary">Añadir</button>
              </div> 
            </form>

            </div>
            </div>
                    </div>
                    <!-- /.box-body -->

                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>

        <?php 
  
        include_once 'templates/footer.php'; 


        ?>

