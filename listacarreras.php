<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Nombre</td>
			<td>Clave</td>
		</tr>

		<?php 
		$sql="SELECT * from carreras";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
			<td><?php echo $mostrar['claves'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>