<?php
include('conexion.php');
session_start();
 ?>
 <?php
$var = $_SESSION['tipo'];
if ($var =='ADMIN') {
} 
$var = $_SESSION['tipo'];
if ($var =='ALUMNO') {
		header("Location: index.php");
} 
$var = $_SESSION['tipo'];
if ($var =='ALUMNO') {
    header("Location: welcome.php");
} 
$var = $_SESSION['tipo'];
if ($var =='ADMIN') {
} 
$var = $_SESSION['tipo'];
if ($var =='MAESTRO') {
	  header("Location: welcome_teacher.php");
} 
if ($var =='') {
  header("Location: index.php");
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>
	<title>admin</title>
</head>
<body background="img/fondo1.jpg">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"style="background: #262626 !important; color: #F9F7EF !important;" >
  <a class="navbar-brand" href="#">Fundamentos de programacion java</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin.php" >Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acercade.php"><span class="glyphicon glyphicon-log-in"></span> Acerca de</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="php/exit.php"><span class="glyphicon glyphicon-log-in"></span> Cerrrar sesion</a>
      </li> 
    </ul>
  </div>  
</nav>
<br><br>
<?php  
include('acceso.php');
?>  
</body>
</html>