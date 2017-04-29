<?php
//extract($_GET);

	
	//$sqlborrar="DELETE FROM personal WHERE id=$id";
    //$sqlborrar="DELETE FROM  personal, usuarios personal join usuarios on personal.id = usuarios.id WHERE id=$id";
$sqlborrar="DELETE FROM personal,usuarios WHERE id=$id" ;
	$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						header('Location: table.php');
						echo "<script>location.href='../welcome.php'</script>";


?>
