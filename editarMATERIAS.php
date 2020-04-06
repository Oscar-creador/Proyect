<?php
$id_categoria=$_GET['id'];
require 'bd_conect.php';
$buscar=mysqli_query($conex,"SELECT*FROM materias WHERE id='$id_categoria'");
$fila=mysqli_fetch_array($buscar);
$nombres=$fila['nombres'];
$claves=$fila['claves'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario editar materias</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet"href="../../plugins/fontawesome-free/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="2AdminLTE.min.css">


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
                <h3 class="card-title">Formulario editar materias</h3>
              </div>
              <!-- /.card-header -->
              <!-- Nombre, clave. -->
              <form action="modificarMATERIAS.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Clave de materia:</label>
                    <input type="hidden" name="id_categoria" value="<?php echo $id_categoria;?>">
                    <input type="number" class="form-control" name="clave" value="<?php echo $claves; ?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label></label>
                    <input type="hidden" name="id_categoria" value="<?php echo $id_categoria;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Nombre: </label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombres;?>">
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit"  name="submit" class="btn btn-primary">Modificar</button>
                </div>
                <!-- /.card -->
				       </div>
				       <p></p>
                  </div>
                </div>
              </form>
            </div>
        </body>
        </html>
