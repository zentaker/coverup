<?php 
  
  include_once 'templates/header.php'; 
  include_once 'templates/barra.php'; 
  include_once 'templates/aside.php'; 

?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Bienvenido Alexander
                    <small>Todo comienza aqui</small>
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
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>


                    </div>
                    <div class="box-body">
                    <?php

try{
    require_once('bd_conexion.php');
    $sql = "SELECT * FROM eventos ";
    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}


?>

<?php 
$eventos = $resultado->fetch_assoc();
?>
<pre>
<?php var_dump($eventos); ?>
</pre>

<?php
$conn->close();

?>



                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>

        <?php 
  
        include_once 'templates/footer.php'; 


        ?>

