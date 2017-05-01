<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
require("../conexion.php");

//$sentencia="update usuarios set user='$user', id_Tipo='$idTipo', email='$email', pasadmin='$pasadmin' where id='$id'";

$sentencia="update usuarios set usuario='$user',id_Tipo='$tipo'  where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
	echo "Error de procesamieno no se han actuaizado los datos";
	echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
	header("location: index.php");
	
	echo "<script>location.href='index.php'</script>";
}else {
	echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
	
	echo "<script>location.href='index.php'</script>";

	
}
?>