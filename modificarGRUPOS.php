<?php
/*Aqui modifico los camos de la tabla y en donde la condicion del query es el indice que 
se encuentra en la base de datos
*/
require ('bd_conect.php');
  $name=$_POST['nombre'];
  $grupo=$_POST['numgpo'];
  $id=$_POST['id_categoria'];
  //hace la consulta de insertar dentro de los campos de la tabla de la base de datos las variables del form
  $consulta = mysqli_query($conex,"UPDATE grupos SET nombres='$name',grupos='$grupo' WHERE id='$id'");
  if ($consulta) {
  echo"Guardado";
  header('location:listagrupos.php');
  } else {
  echo"No guardado";
  }
?>   