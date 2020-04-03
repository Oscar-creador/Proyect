<?php
$id_categoria=$_GET['id'];
require 'bd_conect.php';
$buscar=mysqli_query($conex,"SELECT*FROM carreras WHERE id='$id_categoria'");
$fila=mysqli_fetch_array($buscar);
$nombres=$fila['nombres'];
$claves=$fila['claves'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario editar carreras</title>
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
                <h3 class="card-title">Formulario editar carreras</h3>
              </div>
              <!-- /.card-header -->
              <!-- Nombre, clave. -->
              <form action="modificarCARRERAS.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombres?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label></label>
                    <input type="hidden" class="form-control" name="id_categoria" value="<?php echo $id_categoria;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Clave: </label>
                    <input type="number" class="form-control" name="clave" value="<?php echo $claves;?>">
                  </div>
				  </div>
				  <p></p>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name="submit" class="btn btn-primary">Modificar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </body>
        </html>