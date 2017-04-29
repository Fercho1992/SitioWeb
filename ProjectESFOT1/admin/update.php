  					<?php
  					extract($_GET);
  					require("../conexion.php");

  					$sql="SELECT * FROM usuarios WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
  					$ressql=mysqli_query($mysqli,$sql);
  					while ($row=mysqli_fetch_row ($ressql)){
  						$id=$row[0];
  						$user=$row[1];
  						$idTipo=$row[2];
                        $idT=$row[4];
                        

  					}



  					?>