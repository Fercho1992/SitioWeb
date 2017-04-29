<?php
include("registroUsuario.php");
?>

<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Registro</title>
	<link rel="icon" href="images/logo.ico">
</head>
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="css/modal.css" type="text/css" media="all" />
<!-- //css files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/cleanForm.js"></script>
    <?php if($_SESSION['tipo_usuario']==1) 

{ ?>
    
<body>
    
    
    
	<div class="modal-dialog">
        <div align="left">
            <div class="row">
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-6 col-sm-4"><a href="logout.php"><p align="right">Cerrar Sesi&oacute;n</p></a></div></div>
</div>
        
		<div class="modal-content">
            <div align="center">
                    <p ><img src="images/register.png" alt="" class="img-responsive"></p><h1>Registro para nuevos usuarios</h1>
				</div>
			<div class="modal-header">
				<form id="registro" name="registro" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
                    
					<div><label>Nombre:</label><input id="nombre"name="nombre" type="text" class="form-control" ></div>
					<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" class="form-control"></div>
					<div><label>Password:</label><input id="password" name="password" type="password" class="form-control"></div>
					<div><label>Confirmar Password:</label><input id="con_password" name="con_password" type="password" class="form-control"></div>
					<div><label>Tipo Usuario:</label>
						<select id="tipo_usuario" name="tipo_usuario" class="btn btn-default dropdown-toggle">
							<option value="0">Seleccione tipo de usuario...</option>
							<?php while($row = $result->fetch_assoc()){ ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['tipo']; ?></option>
							<?php }?>
						</select>
					</div>
					
				</form>
				<div align="center">
					<button type="button"  name="registar" type="button" value="" onClick="validar();" class="btn btn-primary btn-lg active dropdown-toggle">Registrar</button>
					<button type="button" class="btn btn-default btn-lg active" id="btn-cancelar">Cancelar</button>	
				</div>
			</div>
		</div>
	</div>
    
	
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
    <script type="text/javascript" src="js/validateRegister.js"></script>
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
    echo '<script>location.href = "welcome.php";</script>';
}
?>


</html>