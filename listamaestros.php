
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
			<td>No. de Empleado</td>
			<td>Nombre</td>
            <td>Correo</td>
			<td>Telefono</td>
			<td>Modificar</td>
			<td>Eliminar</td>
		</thead>

		<?php 
		$result=mysqli_query($conexion,"SELECT * from maestros");

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['numempleado'] ?></td>
			<td><?php echo $mostrar['nombremaestro'] ?></td>
            <td><?php echo $mostrar['correomaestro'] ?></td>
			<td><?php echo $mostrar['telefonomaestro'] ?></td>
			<td><a href="editarMAESTROS.php?id=<?php echo urlencode($mostrar['id']);?>">Modificar</a></td>
			<td><a href="eliminarMAESTROS.php?id=<?php echo urlencode($mostrar['id']);?>">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>
