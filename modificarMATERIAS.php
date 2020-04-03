<?php
require ('bd_conect.php');
  $name=$_POST['nombre'];
  $clave=$_POST['clave'];
  $id=$_POST['id_categoria'];
  //hace la consulta de insertar dentro de los campos de la tabla de la base de datos las variables del form
  $consulta = mysqli_query($conex,"UPDATE materias SET nombres='$name',claves='$clave' WHERE id='$id'");
  if ($consulta) {
  echo"Guardado";
  header('location:listamaterias.php');
  } else {
  echo"No guardado";
  }
?>   