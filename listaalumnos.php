
<?php 

$conexion=mysqli_connect('localhost','root','','proyecto');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista</title>
	<link rel="stylesheet" href="tabla.css">
</head>
<body>
<br>
<div id="main-container">
<table border="1" >
	<thead>
		<td>Matricula</td>
		<td>Nombre</td>
		<td>Correo</td>
		<td>Telefono</td>
		<td>Modificar</td>
		<td>Eliminar</td>
	</thead>

	<?php 
	
	$result=mysqli_query($conexion,"SELECT * from alumnos");

	while($mostrar=mysqli_fetch_array($result)){
	 ?>

	<tr>
		<td><?php echo $mostrar['matricula'] ?></td>
		<td><?php echo $mostrar['nombrealumno'] ?></td>
		<td><?php echo $mostrar['correoalumno'] ?></td>
		<td><?php echo $mostrar['telefonoalumno'] ?></td>
		<td><a href="editarALUMNOS.php?id=<?php echo urlencode($mostrar['id']);?>">Modificar</a></td>
		<td><?php echo $mostrar['telefonoalumno'] ?></td>
	</tr>
<?php 
}
 ?>
</table>

</body>

</html>

