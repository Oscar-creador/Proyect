
<?php
include("bd_conect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario materias</title>
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
                <h3 class="card-title">Formulario Materias</h3>
              </div>
              <!-- /.card-header -->
              <!-- Nombre, clave. -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Clave de materia:</label>
                    <input type="number" class="form-control" name="clave">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Nombre: </label>
                    <input type="text" class="form-control" name="nombre">
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
  $clave=$_POST['clave'];
  //hace la consulta de insertar dentro de los campos de la tabla de la base de datos las variables del form
  $consulta = "INSERT INTO materias(nombres,claves) VALUES ('$name','$clave')";
  $resultado = mysqli_query($conex,$consulta);
if ($resultado) {
echo"Guardado";
} else {
echo"No guardado";
}
}
?>   
