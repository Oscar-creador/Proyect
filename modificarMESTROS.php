<?php
require('bd_conect.php');
$id=$_POST['id_categoria'];
$numempleado=$_POST['numempleado'];    
$nombremaestro=$_POST['nombremaestro'];
$correomaestro=$_POST['correomaestro'];
$telefonomaestro=$_POST['telefonomaestro'];
$consulta = mysqli_query($conex,"UPDATE maestros SET numempleado='$numempleado', nombremaestro='$nombremaestro',correomaestro='$correomaestro',telefonomaestro='$telefonomaestro' 
WHERE id='$id'");
  if ($consulta) {
  echo"Guardado";
  header('location:listamaestros.php');
  } else {
  echo"No guardado";
  }
?>   
