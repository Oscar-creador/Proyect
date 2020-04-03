<?php 
$id=$_GET['id'];
require('bd_conect.php');
echo "¿Estas seguro de querer eliminar? SI o NO ";
?>
<h3>Eliminar Usuario</h3>
<form action="" method="POST">
    <input type="text" name="r" value="NO">
    <input type="submit" name="submit" value="Subir">
</form>
<?php
if(isset($_POST['submit'])){
    $r=$_POST['r'];
    if($r=="NO"){
        header("location:listamaterias.php");
    }
    if($r=="SI"){
        echo $id;
        $buscar=mysqli_query($conex,"DELETE FROM materias WHERE id='$id'");
        header("location:listamaterias.php");
    }
}
?>   