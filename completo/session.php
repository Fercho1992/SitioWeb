<?php
//include("session.php");
/*Conexion a la base*/
session_start();
require 'conexion.php';
/*regresar al index si no se realizo la sesion*/
if(!isset($_SESSION["id_usuario"])){
	header("location: index.php");
}

/*Recibir las variables que creamos de sesion le llamamos*/
$idUsuario = $_SESSION['id_usuario'];

/*Consultar a dos tablas procedimiento*/
$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
$result=$mysqli->query($sql);

$row = $result->fetch_assoc(); /*Asocia todos los resultados a la variable row*/

?>