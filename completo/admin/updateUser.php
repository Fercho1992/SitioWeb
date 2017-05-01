<?php
include("update.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Actualizacion de usuarios</title>
	<!-- Icon -->
	<link rel="icon" href="images/logo.ico">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <?php if($_SESSION['tipo_usuario']==1) 

  { ?>

  <body data-offset="40"  style="background-attachment: fixed">
  	<div class="container">
  		<header class="header">
  			<div class="row">
  			</div>
  		</header>

  <div class="navbar">
  	<div class="navbar-inner">
  		<div class="container">
  			<div class="nav-collapse">
  				
  			</div><!-- /.nav-collapse -->
  		</div>
  	</div><!-- /navbar-inner -->
  </div>

  <div class="modal-dialog">
  	<div align="left">
  		<div class="row">
  			<div class="col-xs-6 col-sm-4"></div>
  			<div class="col-xs-6 col-sm-4"></div>
  			<div class="clearfix visible-xs-block"></div>
  			<div class="col-xs-6 col-sm-4"><a href="../logout.php"><p align="right">Cerrar Sesi&oacute;n</p></a></div></div>
  		</div>

  		<div class="modal-content">
  			<div align="center">
  				<p ><img src="images/userUp.png" alt="" class="img-responsive"></p><h1>Actualizacion de usuarios registrados</h1>
  			</div>
  			<div class="modal-header">

  				<?php
  				include("extractInf.php");
  				?>

  				<form action="updateDB.php" method="post" >
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
            <br>
  						<button type="button" class="btn btn-default btn-lg active" id="btn-cancelarU">Cancelar</button>
  						<br>
  						<br>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
<!-- Footer
	================================================== -->
	<!--	<hr class="soften"/>-->

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script src="js/buttomTop.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/main.js"></script>
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