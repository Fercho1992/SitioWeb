<?php
include("conexionLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Escuela de Formaci&oacuten; de Tecn&oacute;logos</title>

	<!-- Icon -->
	<link rel="icon" href="images/logo.ico">
	<!-- //Icon -->
	<!-- css files -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="css/modal.css" type="text/css" media="all" />
	<!-- //css files -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<!-- header -->
  	<div class="header" onfocus="if(this.value=='A new value') this.value='';">
  		<div class="agile-top-header">
  			<div class="logo">
  				<h1 align="center"><a href="http://esfot.epn.edu.ec/"><span>Escuela</span></a></h1>
  				<h1 align="center"><a href="http://esfot.epn.edu.ec/"><span>de</span></a></h1>
  				<h1 align="center"><a href="http://esfot.epn.edu.ec/"><span>Formaci&oacuten de Tecn&oacute;logos</span></a></h1>
  			</div>
  		</div>


  		<div class="slider" >
  			<!-- Slideshow 3 -->
  			<ul class="rslides" id="slider">
  				<li>
  					<img src="images/esfot2.JPG" alt="">
  					<div class="slider-info">
  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot3.JPG" alt="">
  					<div class="slider-info">
  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot4.JPG" alt="">
  					<div class="slider-info">

  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot5.JPG" alt="">
  					<div class="slider-info">

  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModall">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot7.jpg" alt="">
  					<div class="slider-info">
  						<div class="button" style="font-weight: bold;" >
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot8.JPG" alt="">
  					<div class="slider-info">

  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot9.JPG" alt="">
  					<div class="slider-info">
  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  				<li>
  					<img src="images/esfot10.JPG" alt="">
  					<div class="slider-info">
  						<div class="button" style="font-weight: bold;">
  							<a href="#" data-toggle="modal" data-target="#myModal">Ingresar<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
  						</div>
  					</div>
  				</li>
  			</ul>
  			<!-- Slideshow 3 Pager -->
  			<ul id="slider3-pager">
  				<li><a href=""><img src="images/esfot1.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot2.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot4.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot5.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot7.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot8.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot9.1.jpg" alt=""></a></li>
  				<li><a href=""><img src="images/esfot10.1.jpg" alt=""></a></li>
  			</ul>
  		</div>	
  	</div>

  	<!--//header -->

  	<!-- Modal -->

  	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
  					<button id="btn-salir"  type="button" class="close" data-dismiss="modal" >&times;</button>
  					<form id="myForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="Login_Form" class="form-signin">       
  						<h2 class="form-signin-heading">Bienvenido</h2>
  						<hr class="colorgraph"><br>
  						<input type="text" class="form-control" id="usuario" type="text" name="usuario" placeholder="Usuario" required="" autofocus="" />
  						<input type="password" class="form-control" id="password" type="password" name="password" placeholder="Contraseña" required=""/>     		  
  						<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
  					</form>			
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- //Modal -->
  	<!-- Information -->
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
  		<!-- Information -->


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
  		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  		<!-- cleanForm for clean the login form -->
  		<script type="text/javascript" src="js/cleanForm.js"></script>
  		<!-- Necessary-JavaScript-File-For-Bootstrap --> 
  		<script type="text/javascript" src="js/bootstrap.js"></script>
  		<!-- For-Banner -->
  		<script src="js/responsiveslides.min.js"></script>	
  		<!-- js for buttomTop -->
  		<script src="js/buttomTop.js"></script>
  		<!-- js for banner -->
  		<script src="js/banner.js"></script>
  		<!-- js for button form -->
  		<script type="text/javascript" src="js/main.js"></script>
  		<!-- start-smoth-scrolling -->
  		<script type="text/javascript" src="js/move-top.js"></script>
  		<script type="text/javascript" src="js/easing.js"></script>
  		<script type="text/javascript" src="js/top.js"></script>
  		<!-- start-smoth-scrolling -->
  		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  		<!-- //js files -->
  		
  	</body>
  	</html>