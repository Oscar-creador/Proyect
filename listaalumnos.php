
<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Tabla de Datos</title>
</head>

<body>
<br>
	<table border="1" >
		<tr>
			<td>Matricula</td>
			<td>Nombre</td>
            <td>Correo</td>
            <td>Telefono</td>
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['matricula'] ?></td>
			<td><?php echo $mostrar['nombrealumno'] ?></td>
            <td><?php echo $mostrar['correoalumno'] ?></td>
            <td><?php echo $mostrar['telefonoalumno'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>

</html>
