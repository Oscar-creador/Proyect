<?php 
$id=$_GET['id'];
require('bd_conect.php');
?>
<center>
<h3>Eliminar Usuario</h3><br>
<font  color="white" face="Comic Sans MS,arial,arial">¿Estas seguro de querer eliminar? SI o NO</font>
</center>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar formulario</title>
	<link rel="stylesheet" href="boton.css">
	<style>
		body{font-family: Arial; background-color: #18A383; box-sizing: border-box;}

		form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}


		.center-content{
			text-align: center;
		}

	</style>
</head>
<body>
	<form action="" method="POST">
		<input type="text"  name= "r" class="field"> <br/>
		<p class="center-content">
			<input type="submit"  name="submit" class="btn btn-green" value="Subir">
		</p>
	</form>
</body>
</html> 
<?php
if(isset($_POST['submit'])){
    $r=$_POST['r'];
    if($r=="NO"){
        header("location:listamaestros.php");
    }
    if($r=="SI"){
        $buscar=mysqli_query($conex,"DELETE FROM maestros WHERE id='$id'");
        header("location:listamaestros.php");
    }
}
?>  
