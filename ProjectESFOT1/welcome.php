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
<body>

    <div align="center"></div>
	<div align="right"></div>
	<div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"><a href="logout.php"><p align="right">Cerrar Sesi&oacute;n</p></a></div></div>
	<!-- Services -->
	<div class="welcome agileits" id="services">
		<div class="container">
			<div class="welcome-main">
				<div class="welcome-top">
                    <img src="images/welcome.png" alt="" class="img-responsive">
					<h1><?php echo ($row['nombre']); ?></h1>
					<p></p>
				</div>
				<div class="welcome-bottom">
					<div class="col-md-4 welcome-grid">
						<?php if($_SESSION['tipo_usuario']==1) { ?>
						<a href="registro.php"><img src="images/user.png" alt="" class="img-responsive">
							<h4>Registro nuevos usuarios</h4></a>
                        <p>Ingreso de nuevos usuarios</p>

							<br />
							<?php } ?>
						</div>
						
						
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
								<!-- Modal content-->
								<form  id="myForm">
									<div class="modal-content">
										<div class="modal-header">
											<button id="btn-salir"  type="button" class="close" data-dismiss="modal" >&times;</button>
											<br>
											<div class="row ">
												<div class="col-md-12">
													<div class="price-div" >
														<ul class="media-list">
															<li class="media">
<!--
        <div class="media-body">
            
            <h3 class="media-heading" ><input  class="btn btn-primary btn-lg active" name="submit" id="fileInput" type="file" size="100" onchange="processFiles(this.files)"></h3>
          <p>
              <textarea style="width:100%"  class="form-control custom-control"  name="fileOutput" id="fileOutput" type="file" cols ="100" rows="20" align="center" disabled ></textarea>
          </p>
            </div>
        -->
        <p></p>
        <p></p>
                                                                
                                                                
        <div class="img-responsive"><img src="images/search.png"></div>
            
                                                                <div id="page-wrapper">
            
        	<div id="media-body" class="media-body">
        		
        		<h2>Visualizacion backups de video vigilancia</h2>
                <br>
        		<h3 class="media-heading" ><input type="file" id="fileInput" type="file" class="btn btn-primary btn-lg active" size="500" ></h3>
        		<p>
        			<textarea id="fileDisplayArea"  name="fileDisplayArea" style="width:100%"  class="form-control custom-control"   type="file" cols ="100" rows="20" align="center" disabled ></textarea>
        		</p>
        	</div>

        </div>
                                                               
        
    </li>
</ul>
</div>

</div>
</div>

</div>
</div>
</form>		
</div>
</div>

<!-- //Modal1 -->



<div class="col-md-4 welcome-grid">

	<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/research.png" alt="" class="img-responsive">
		<h4>Backups camaras IP</h4></a>
		<p>Revisión de la vitacora de copiado de las cámaras IP</p>

	</div>
                    <?php if($_SESSION['tipo_usuario']==1) { ?>
	<div class="col-md-4 welcome-grid">
        
        <a href="./admin/table.php" data-target=""><img src="images/userU.png" alt="" class="img-responsive">
		<h4>ADMINISTRACION DE USUARIOS</h4></a>
		<p>Cambio en los datos de los usuarios</p>
		
	</div>
                    <?php } ?>
	<div class="clearfix"> </div>
</div>
</div>		
</div>
</div>
<!-- Services -->

<hr style="color: #17202A;" />

<!-- Services -->
<div class="welcome agileits" id="services">
	<div class="container">
		<div class="welcome-main">
			<div class="welcome-top">
				<p>IMPLEMENTACIÓN DE UN SISTEMA DE VIDEO VIGILANCIA MEDIANTE 
					EL USO DE CÁMARAS IP EN LOS PASILLOS  DE LAS AULAS DE LA 
					ESCUELA DE FORMACIÓN DE TECNÓLOGOS (ESFOT) DE LA ESCUELA 
					POLITÉCNICA NACIONAL</p>
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

			

			<div class="clearfix">
				
				
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
	<script>
		
	</script>
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
	<script type="text/javascript" src="js/text.js"></script>
	<!-- start-smoth-scrolling -->
	
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->

	<!-- //js files -->
</body>
</html>