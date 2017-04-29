 <?php
  require('conexion.php');
  session_start(); /*Comenzando una sesion*/
  /*Para que no se regrese al login y se mantenfa en la pagina welcome*/
  if(isset($_SESSION["id_usuario"])){
    header("location: welcome.php");
  }
  if(!empty($_POST))
  {
     $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']); /*filtre string para metodos que recibe el post, para que no alteren proteccion*/
     $password = mysqli_real_escape_string($mysqli,$_POST['password']);
     $error=''; 
     /*CIFRAR CLAVE*/
     $sha1_pass = sha1($password);
     /*usuario existe en la base de datos*/
     $sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
     $result=$mysqli->query($sql);
     $rows = $result->num_rows; /*numero filas*/
      /*Usuario no existe en la base de datos*/
      if($rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['id_usuario'] = $row['id'];
      $_SESSION['tipo_usuario'] = $row['id_tipo'];
      header("location: welcome.php");
      } else {
      $error = "El nombre o contraseña son incorrectos";
    }

  }

?>