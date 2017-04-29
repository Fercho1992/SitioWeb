<?php
//include("session.php");
/*Conexion a la base*/
session_start();
require '../conexion.php';
/*regresar al index si no se realizo la sesion*/
if(!isset($_SESSION["id_usuario"])){
	header("location: ../welcome.php");
}

/*Recibir las variables que creamos de sesion le llamamos*/
$idUsuario = $_SESSION['id_usuario'];

/*Consultar a dos tablas procedimiento*/
$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
$result=$mysqli->query($sql);

$row = $result->fetch_assoc(); /*Asocia todos los resultados a la variable row*/


?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Actualizacion de usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
  <link rel="icon" href="images/logo.ico">
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>
    <?php if($_SESSION['tipo_usuario']==1) 

{ ?>
    
<body data-offset="40"  style="background-attachment: fixed">
	<div class="container">
		<header class="header">
			<div class="row">
			</div>
		</header>

  <!-- Navbar
  ================================================== -->


  <div class="navbar">
  	<div class="navbar-inner">
  		<div class="container">
  			<div class="nav-collapse">
  				
  			</div><!-- /.nav-collapse -->
  		</div>
  	</div><!-- /navbar-inner -->
  </div>

  <!-- ======================================================================================================================== -->
  <div class="row">
  	<div class="span12">

  		<div class="caption">
  			
  			<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
            <p align="center"> <img src="images/userUp.png"> </p>
  				
  			<div class="well well-small">
                 <button id="btn-salir"  type="button" class="close" data-dismiss="modal" >&times;</button>
                
                <h2 align="center"> Actualizacion de usuarios registrados</h2>
  				<hr  class="soft"/>
  				
  				<div class="row-fluid">
  						
	<?php
	include("update.php");
	?>

  					<form action="actualizarU.php" method="post" >
  						<p>Id</p>
                        <input placeholder="" type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
  						<p>Usuario</p>
                        <input type="text" name="user" value="<?php echo $user?>"><br>
  						Tipos de usuario<br> <input type="text" name="tipo" value="<?php echo $idT?>"><br>
  						<br>
                        <button type="submit"  name="actualizar" value=""  class="btn btn-primary btn-lg active dropdown-toggle">Actualizar</button>
  					</form>
                    <div class="row">
  <div class="col-xs-6 col-sm-6">
      <button type="button" class="btn btn-default btn-lg active" id="btn-cancelarU">Cancelar</button>
                 <br>
                <br>
                </div>

            
</div>		

  					
  					
  					
  					<div class="span8">
  						
  					</div>	
  				</div>	
  				<br/>
  			</div>

  		</div>

  	</div>
  </div>
        <div>
            </div>
<!-- Footer
	================================================== -->
<!--	<hr class="soften"/>-->
	<footer class="footer">

<!--		<hr class="soften"/>-->
<!--		<p>&copy;  <br/><br/></p>-->
	</footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
    <script type="text/javascript" src="js/log.js"></script>
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


