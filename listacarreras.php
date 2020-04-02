<?php 

	$conexion=mysqli_connect('localhost','root','','proyecto');

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dando estilo a las tablas</title>
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
		$sql="SELECT * from carreras";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
			<td><?php echo $mostrar['claves'] ?></td>
			<td><a href="">Modificar</a></td>
			<td><a href="">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>