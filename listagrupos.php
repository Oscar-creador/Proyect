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
			<td>Eliminar
        </thead>

		<?php 
	
		$result=mysqli_query($conexion,"SELECT * from grupos");

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
            <td><?php echo $mostrar['grupos'] ?></td>
			<td><a href="editarGRUPOS.php?id=<?php echo urlencode($mostrar['id']);?> ">Modificar</a></td>
			<td><a href="eliminarGRUPOS.php?id=<?php echo urlencode($mostrar['id']);?>">Eliminar</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>