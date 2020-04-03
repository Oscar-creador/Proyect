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
			<td>Nombre</td>
			<td>Clave</td>
			<td>Modificar</td>
			<td>Eliminar</td>
		</thead>

		<?php 
		
		$result=mysqli_query($conexion,"SELECT * from carreras");

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
			<td><?php echo $mostrar['claves'] ?></td>
			<td><a href="editarCARRERAS.php?id=<?php echo urlencode($mostrar['id']);?>">Modificar</a></td>
			<td><a href="eliminarCARRERAS.php?id=<?php echo urlencode($mostrar['id']);?>">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>