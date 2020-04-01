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
            <td>Editar</td>
        </thead>

		<?php 
		$sql="SELECT * from materias";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombres'] ?></td>
            <td><?php echo $mostrar['claves'] ?></td>
            <td>Hola</td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
</body>
</html>