<?php
include("bd_conect.php");
?>

</html>
<body>
    <h3>Grupos</h3>
    <form action="" method="POST">
    <label >Numero de grupo</label>
    <input name="num" type="number">
    <label >Nombre</label>
    <input name="nombre" type="text"><br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
$name=$_POST['nombre'];
$num=$_POST['num'];
//hace la consulta de insertar dentro de los campos de la tabla de la base de datos las variables del form
$consulta = "INSERT INTO grupos(nombres,grupos) VALUES ('$name','$num')";
$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
	    ?> 
	    <h3 class="ok">¡Te has inscripto correctamente!</h3>
        <?php
	} else {
	    ?> 
	    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
	}

?>

    
    
    
    