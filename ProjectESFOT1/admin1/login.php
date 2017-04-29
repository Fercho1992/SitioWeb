<?php
include("admin/conexionLogin.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/estilo.css" />
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--prettyPhoto-->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">
    <!-- startedTemplate CSS -->
    <link href="css/startedTemplate.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
</head>
<body>
<div class="contenedor">
    <h2>Login</h2>
   
    <div id="formulario">
        <form method="POST" action="return false" onsubmit="return false">
            <div id="resultado"></div>
            <p><input type="text" name="user" id="user" value="" placeholder="usuario" class="form-control"></p>
            <p><input type="password" name="pass" id="pass" value="" placeholder="" class="form-control"></p>
            <p><button class="btn btn-primary" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">Iniciar sesion</button></p>
            <a href="" data-toggle="modal" data-target="#myModal">Si eres nuevo registrate</a>
        </form>
        </div>




        <script>
        function Validar(user, pass)
        {
            $.ajax({
                url: "validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#resultado').html(resp)
                }       
            });
        }
        </script>

</div>
<form data-toggle="validator" role="form" action="save.php" method="POST">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center">Registro nuevos usuarios</h4>
      </div>

      <div id="verificar"class="modal-body" align="center">
        <div class="form-group">
    <label for="inputName" class="control-label">Nombre</label>
    <input type="text" class="form-control" id="inputName" data-minlength="3" placeholder="Fernando" required>
  </div>                <br>

                <div class="form-group" align="center">
    <label for="inputName" class="control-label">Usuario</label>
    <input type="text" class="form-control" id="inputName"  data-minlength="6" placeholder="userxyz" required>
  </div>   
    <div class="form-group" align="center">
    <label for="inputPassword" class="control-label">Contraseña</label>
      <input type="password" data-minlength="5" class="form-control" id="inputPassword" placeholder="Password" required>
      <br>
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="¡Vaya , estos no coinciden" placeholder="Confirmar contraseña" required>
      <div class="help-block with-errors"></div>
    </div>
                 
      <div class="modal-footer" align="center" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-lg btn-primary " type="submit">Crear usuario</button>
      </div>
       </div>
    </div>
  </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>
<script src="js/validator.min.js"> </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php

}
?>
