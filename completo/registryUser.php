<?php
/*Conexion a la base*/
session_start();
require 'conexion.php';
/*regresar al index si no se realizo la sesion*/
if(!isset($_SESSION["id_usuario"])){
	header("location: index.php");
}

/*mostrar datos con consulta*/
$sql = "SELECT id, tipo FROM tipo_usuario";
$result=$mysqli->query($sql);

/*para registro*/
$bandera = false;

/*identificar si se mando metodo post, para que no puedan hacer consultas he inyectar codigo a nuestro codigo*/
if(!empty($_POST))
{
	$nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
	$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
	$password = mysqli_real_escape_string($mysqli,$_POST['password']);
	$tipo_usuario = $_POST['tipo_usuario'];
	$sha1_pass = sha1($password);
	
	$error = '';
	
	$sqlUser = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
	$resultUser=$mysqli->query($sqlUser);
	$rows = $resultUser->num_rows;
	
	if($rows > 0) {
		$error = "El usuario ya existe";
	} else {
		
		$sqlPerson = "INSERT INTO personal (nombre) VALUES('$nombre')";
		$resultPerson=$mysqli->query($sqlPerson);
		$idPersona = $mysqli->insert_id;
		
		$sqlUsuario = "INSERT INTO usuarios (usuario, password, id_personal, id_tipo) VALUES('$usuario','$sha1_pass','$idPersona','$tipo_usuario')";
		$resultUsuario = $mysqli->query($sqlUsuario);
		
		if($resultUsuario>0)
			$bandera = true;
		else
			$error = "Error al Registrar";
		
	}
}

?>