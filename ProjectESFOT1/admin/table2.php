<?php

/*Conexion a la base*/
session_start();
require '../conexion.php';
/*regresar al index si no se realizo la sesion*/
if(!isset($_SESSION["id_usuario"])){
	header("location: table.php");
}

/*Recibir las variables que creamos de sesion le llamamos*/
$idUsuario = $_SESSION['id_usuario'];

/*Consultar a dos tablas procedimiento*/
$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
$result=$mysqli->query($sql);

$row = $result->fetch_assoc(); /*Asocia todos los resultados a la variable row*/


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion</title>
    <link rel="icon" href="../images/logo.ico">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <?php if($_SESSION['tipo_usuario']==1) 

    { ?>
    <body>
        


        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="table.php">Administracion</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                     
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                          
                                        </span>
                                        <div class="media-body">
                                         
                                            
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            
                                            
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            
                                            
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                     
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                            <li>
                             
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                            <li class="divider"></li>
                            <li>
                                
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ($row['nombre']); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="" data-target="#myModal"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            
                        </li>
                        <li>
                         
                        </li>
                        <li>
                            <a href="table.php"><i class="fa fa-fw fa-table"></i>Usuarios</a>
                        </li>
                        <li>
                            
                        </li>
                        <li>
                         
                        </li>
                        <li>
                            
                        </li>
                        <li>
                            
                            <ul id="demo" class="collapse">
                                <li>
                                    
                                </li>
                                <li>
                                    
                                </li>
                            </ul>
                        </li>
                        <li>
                         
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <h1 class="page-header" align="center">
                                <p > <img src="images/team.png" alt="" class="img-responsive"></p>
                                <p>Administracion de usuarios</p>
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    
                                </li>
<!--
                            <li class="active">
                                <i class="fa fa-table"></i> Usuarios
                            </li>
                        -->
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">
                    <h2>Tabla de usuarios</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            
                            
                            
                            <tbody>
                                <?php

                                require("../conexion.php");
                                $sql=("SELECT * FROM personal");
                                
//la variable  $mysqli viene de connect_db que lo traigo con el require(".php");
                                $query=mysqli_query($mysqli,$sql);

                                echo "<table border='1'; class='table table-hover';>";
                                echo "<tr class='warning'>";
                                echo "<thead>";
                                echo "<th>Id</th>";
                                echo "<th>Usuario</th>";
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

                                 echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/pencil.png' class='img-rounded'></td>";
                                 echo "<td><a href='table.php?id=$arreglo[1]&idborrar=2'><img src='images/delete.png' class='img-rounded'/></a></td>";
                                 

                                 
                                 echo "</tr>";
                             }

                             echo "</table>";

                             
                             ?>
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="col-lg-6">
                <h2></h2>
                <div class="table-responsive">
<!--
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2></h2>
                    <div class="table-responsive">
<!--
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2></h2>
                    <div class="table-responsive">
<!--
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr>
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr>
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2></h2>
                    <div class="table-responsive">
<!--
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                        <th>Visits</th>
                                        <th>% New Visits</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="success">
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        -->
                        
                        <a href="../welcome.php" ><img src="images/arrow.png" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                 
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

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
