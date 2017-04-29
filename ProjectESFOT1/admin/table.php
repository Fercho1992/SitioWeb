<?php
//include("session.php");
/*Conexion a la base*/
session_start();
require '../conexion.php';
/*regresar al index si no se realizo la sesion*/
if(!isset($_SESSION["id_usuario"])){
	header("location: ../index.php");
}

/*Recibir las variables que creamos de sesion le llamamos*/
$idUsuario = $_SESSION['id_usuario'];

/*Consultar a dos tablas procedimiento*/
$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
$result=$mysqli->query($sql);

$row = $result->fetch_assoc(); /*Asocia todos los resultados a la variable row*/


?>

<html>
<head>
	<title>Bienvenido</title>
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="icon" href="images/logo.ico">
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
     <?php if($_SESSION['tipo_usuario']==1) 

{ ?>
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
//				    	echo "<td>$arreglo[2]</td>";
//				    	echo "<td>$arreglo[3]</td>";
//				    	echo "<td>$arreglo[4]</td>";

                                 echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/edit.png' ></td>";
                                 echo "<td><a href='table.php?id=$arreglo[0]'><img src='images/trash.png' ></a></td>";
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
</div>
    
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
	<!-- Services -->
	
	
	
	<!--footer-->
	<div class="w3l-footer">
		
		<div class="container">
			
			<div class="left-w3">
				
			</div>

		
			<div class="copyright-agile">
				<p>&copy; 2017 Fernando Moya, Karina S&aacute;nchez</p>
			</div>
		</div>
	</div>
	<!--//footer-->



	<!-- js files -->
	<!-- js -->
	
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	<!-- For-Banner -->
	<script src="js/responsiveslides.min.js"></script>

	<!-- //For-Banner -->
	

	
	<!-- js for Counter -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- /js for Counter -->
	
	<!--		<script src="js/callTxt.js"></script>-->
	<script src="js/buttomTop.js"></script>
	<!--<script src="js/openDocuments.js"></script>-->
	<script src="js/banner.js"></script>
	

	<!-- start-smoth-scrolling -->
	
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/top.js"></script>
	
	<!-- start-smoth-scrolling -->
	
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->

	<!-- //js files -->
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