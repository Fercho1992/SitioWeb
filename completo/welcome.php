<?php
include("session.php");
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
  <!-- css files -->
  <!-- Bootstrap-Core-CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css"> 
  <!-- Style-CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div align="center"></div>
      <div align="right"></div>
      <div class="row">
        <div class="col-xs-6 col-sm-4">

        </div>
        <div class="col-xs-6 col-sm-4">

        </div>
        <div class="clearfix visible-xs-block">

        </div>
        <div class="col-xs-6 col-sm-4"><a href="logout.php">
          <p align="right">Cerrar Sesi&oacute;n</p></a>
        </div>
      </div>
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
                <a href="registry.php"><img src="images/user.png" alt="" class="img-responsive">
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

                    <a href="./admin/index.php" data-target=""><img src="images/userU.png" alt="" class="img-responsive">
                      <h4>ADMINISTRACION DE USUARIOS</h4></a>
                      <p>Cambio en los datos de los usuarios</p>

                    </div>
                    <?php } 
                    ?>

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

                  <div class="copyright-agile">
                    <p>&copy; 2017 Fernando Moya, Karina S&aacute;nchez</p>
                  </div>
                </div>
              </div>
              <!--//footer-->

              <!-- js files -->
              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
              <!-- Necessary-JavaScript-File-For-Bootstrap --> 
              <script type="text/javascript" src="js/bootstrap.js"></script> 
              <!-- For-Banner -->
              <script src="js/responsiveslides.min.js"></script>
              <!-- js for Counter -->
              <script src="js/buttomTop.js"></script>
              <!-- start-smoth-scrolling -->
              <script type="text/javascript" src="js/move-top.js"></script>
              <script type="text/javascript" src="js/top.js"></script>
               <script type="text/javascript" src="js/main.js"></script>
              <script type="text/javascript" src="js/text.js"></script>
              <!-- start-smoth-scrolling -->

              <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
              <!-- //for-bottom-to-top smooth scrolling -->
            </body>
            </html>