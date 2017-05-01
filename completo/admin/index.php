<?php
include("conexionUser.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bienvenido</title>
	<!-- Icon -->
	<link rel="icon" href="images/logo.ico">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php if($_SESSION['tipo_usuario']==1) 
{ 
	?>
	<body>
		<div class="modal-dialog">
			<div align="right"><a href="../logout.php">
				Cerrar Sesi&oacute;n</a></div>
				<div class="modal-content">
					<br>
					<div align="center"><img  src="images/team.png" alt="" class="img-responsive"></div>
					<h2 align="center">Tabla de usuarios</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<tbody>
								<?php
								require("../conexion.php");
								$sql=("SELECT * FROM personal");
//la variable  $mysqli viene de connect_db que lo traigo con el require(".php");
								$query=mysqli_query($mysqli,$sql);
								echo "<table border='2'; class='table table-hover';>";
								echo "<tr class='warning'>";
								echo "<thead>";
								echo "<th>Id</th>";
								echo "<th>Nombre</th>";
								echo "<th>Editar</th>";
								echo "<th>Borrar</th>";
								echo "</thead>";
								echo "</tr>";
								?>
								<?php 
								while($arreglo=mysqli_fetch_array($query)){
									echo "<tr class='success'>";
									echo "<td>$arreglo[0]</td>";
									echo "<td>$arreglo[1]</td>";
									echo "<td><a href='updateUser.php?id=$arreglo[0]'><img src='images/edit.png' ></td>";
									echo "<td><a href='delete.php?id=$arreglo[0]'><img src='images/trash.png' ></a></td>";    
									echo "</tr>";
								}
								echo "</table>";
								?>
							</tbody>
						</table>
					</div>
					<div class="col-md-4 welcome-grid">
					</div>
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<button type="button" class="btn btn-default btn-lg active" id="btn-cancelar">Cancelar</button>
							<br>
							<br>
						</div>
					</div>

				</div>		
			</div>
			<!-- Services -->
			<div class="welcome agileits" id="services">
				<div class="container">
					<div class="welcome-main">
						<div class="welcome-top">
<!--
			<p>IMPLEMENTACIÓN DE UN SISTEMA DE VIDEO VIGILANCIA MEDIANTE 
				EL USO DE CÁMARAS IP EN LOS PASILLOS  DE LAS AULAS DE LA 
				ESCUELA DE FORMACIÓN DE TECNÓLOGOS (ESFOT) DE LA ESCUELA 
				POLITÉCNICA NACIONAL</p>
			-->
		</div>

	</div>		
</div>
</div>
<!-- //Services -->

<!--footer-->
<div class="w3l-footer">
	<div class="container">
		<div class="left-w3">
		</div>
		<div class="clearfix">
		</div>
		<div class="copyright-agile">
			<p>&copy; 2017 Fernando Moya, Karina S&aacute;nchez</p>
		</div>
	</div>
</div>
<!--//footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script src="js/buttomTop.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/top.js"></script>

<!-- start-smoth-scrolling -->

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
<?php
}
else
{
	echo '<script>alert("Acción solo para el Administrador")</script>';
	echo '<script>location.href = "../welcome.php";</script>';
}
?>
</html>