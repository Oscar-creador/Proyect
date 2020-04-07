<?php
//Aqui obtengo el parametro de la lista y consigo las variables de la tabla 
$id_categoria=$_GET['id'];
require 'bd_conect.php';
$buscar=mysqli_query($conex,"SELECT*FROM grupos WHERE id='$id_categoria'");
$fila=mysqli_fetch_array($buscar);
$nombres=$fila['nombres'];
$grupos=$fila['grupos'];
?>
<!DOCTYPE html>
<!--Aqui conecto los estilos para el form-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulario grupos</title>
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
     <!--Aqui empieza el form con las variables que consegui al principio impresas en el value del input-->
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
                <h3 class="card-title">Formulario Grupos</h3>
              </div>
              <!-- /.card-header -->
              <!-- Nombre, num de grupo. -->
              <!-- Esta informacion se envia despues del submit al action indicado. -->
              <form action="modificarGRUPOS.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombres;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label></label>
                    <input type="hidden" class="form-control" name="id_categoria" value="<?php echo $id_categoria;?>">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Numero de grupo: </label>
                    <input type="number" class="form-control" name="numgpo" value="<?php echo $grupos;?>">
                  </div>
                  <center>
                  <div class="card-footer">
                  <button type="submit"  name="submit" class="btn btn-primary">Modificar</button>
                </div>
                </center>
				          </div>
				          <p></p>
                  </div>
                  </div>
               <!-- /.card-body -->
              </form>
             </div>
              <!-- /.card -->
    </body>
</html>
<!--Aqui termina el form-->