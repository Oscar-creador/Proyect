<?php
/*Aqui modifico los camos de la tabla y en donde la condicion del query es el indice que 
se encuentra en la base de datos
*/
require('bd_conect.php');
$id=$_POST['id_categoria'];
$matricula=$_POST['matricula'];    
$nombrealumno=$_POST['nombrealumno'];
$correoalumno=$_POST['correoalumno'];
$telefonoalumno=$_POST['telefonoalumno'];
$consulta = mysqli_query($conex,"UPDATE alumnos SET matricula='$matricula', nombrealumno='$nombrealumno',correoalumno='$correoalumno',telefonoalumno='$telefonoalumno' 
WHERE id='$id'");
  if ($consulta) {
      echo"Guardado";
      header('location:listaalumnos.php');
  }else{
      echo"No guardado";
  }
?>   