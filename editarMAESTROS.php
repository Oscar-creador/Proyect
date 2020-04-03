<?php
$id_categoria=$_GET['id'];
require 'bd_conect.php';
$buscar=mysqli_query($conex,"SELECT*FROM maestros WHERE id='$id_categoria'");
$fila=mysqli_fetch_array($buscar);
$numempleado=$fila['numempleado'];    
$nombremaestro=$fila['nombremaestro'];
$correomaestro=$fila['correomaestro'];
$telefonomaestro=$fila['telefonomaestro'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario editar Maestros</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Formulario editar Maestros</h3>
              </div>
              <!-- /.card-header -->
              <!-- Matrícula, nombre, correo y teléfono. -->
              <!---¡¡¡HAY QUE CHECAR BIEN PARA QUE SIRVE EL FORM ROLE EN ESTE ARCHIVO Y TODOS LOS DEMAS-->
              <form role="form" action="modificarMESTROS.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >No. de Empleado: </label>
                <input type="number" class="form-control" name="numempleado" value="<?php echo $numempleado;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label > </label>
                    <input type="hidden" class="form-control" name="id_categoria" value="<?php echo $id_categoria;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Nombre: </label>
                    <input type="text" class="form-control" name="nombremaestro" value="<?php echo $nombremaestro;?>" >
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Correo: </label>
                    <input type="email" class="form-control" name="correomaestro" value="<?php echo $correomaestro;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Telefono: </label>
                    <input type="tel" class="form-control" name="telefonomaestro"  value="<?php echo $telefonomaestro;?>" >
                  </div>
                  </div>
                  </div>
                  <p></p>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


        </body>
        </html>