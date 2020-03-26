
<?php
include("bd_conect.php");
?>

<html>
<body>
<h3>Materias</h3>
<form action="" method="POST">
<label >Clave de la materia</label>
<input name="clave" type="number">
<label >Nombre</label>
<input name="nombre" type="text"><br>
<input type="submit" value="Enviar">
</form>
</body>
</html>
<?php
$clave=$_POST('clave');
$nombre=$_POST('nombre');
$sql=INSERT INTO `carreras`(`nombres`, `claves`) VALUES ([value-1],[value-2])

?>


