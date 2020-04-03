<?php
include("bd_conect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario grupos</title>
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
                <h3 class="card-title">Formulario Grupos</h3>
              </div>
              <!-- /.card-header -->
              <!-- Nombre, num de grupo. -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Numero de grupo: </label>
                    <input type="number" class="form-control" name="numgpo">
                  </div>
				  </div>
				  <p></p>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name="submit" class="btn btn-primary">Subir</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </body>
        </html>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['nombre'];
  $grupo=$_POST['numgpo'];
  //hace la consulta de insertar dentro de los campos de la tabla de la base de datos las variables del form
  $consulta = "INSERT INTO grupos(nombres,grupos) VALUES ('$name','$grupo')";
  $resultado = mysqli_query($conex,$consulta);
if ($resultado) {
echo"Guardado";
} else {
echo"No guardado";
}
}
?>   
