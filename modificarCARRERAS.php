<?php
/*Aqui modifico los camos de la tabla y en donde la condicion del query es el indice que 
se encuentra en la base de datos
*/
require ('bd_conect.php');
  $name=$_POST['nombre'];
  $clave=$_POST['clave'];
  $id=$_POST['id_categoria'];
  $consulta = mysqli_query($conex,"UPDATE carreras SET nombres='$name',claves='$clave' WHERE id='$id'");
  if ($consulta) {
  echo"Guardado";
  header('location:listacarreras.php');
  } else {
  echo"No guardado";
  }
?>   