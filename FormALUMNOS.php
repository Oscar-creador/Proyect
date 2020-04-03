<?php
include("bd_conect.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulario - Alumnos</title>
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
                <h3 class="card-title">Formulario Alumnos</h3>
              </div>
              <!-- /.card-header -->
              <!-- Matrícula, nombre, correo y teléfono. -->
              <form role="form" action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >Matricula: </label>
                    <input type="number" class="form-control" name="matricula">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Nombre: </label>
                    <input type="text" class="form-control" name="nombrealumno">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Correo: </label>
                    <input type="email" class="form-control" name="correoalumno">
                  </div>
                  <p></p>
                  <div class="form-group">
                    <label >Telefono: </label>
                    <input type="tel" class="form-control" name="telefonoalumno"  >
                  </div>
                  </div>
                  <p></p>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Subir</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </body>
        </html>

<?php
if(isset($_POST['submit'])){
$matricula=$_POST['matricula'];    
$nombrealumno=$_POST['nombrealumno'];
$correoalumno=$_POST['correoalumno'];
$telefonoalumno=$_POST['telefonoalumno'];
$consulta = "INSERT INTO alumnos(matricula,nombrealumno,correoalumno,telefonoalumno) VALUES ('$matricula',
'$nombrealumno','$correoalumno','$telefonoalumno')";
$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
	    echo "Guardado";
	} else {
	    echo "Error";
	}
}
?>