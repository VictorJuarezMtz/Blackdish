<?php session_start(); ?>
<?php include('conexion.php'); ?>
<?php
$var = $_SESSION['tipo'];
if ($var =='ALUMNO') {
  header("Location: welcome.php");
} 
$var = $_SESSION['tipo'];
if ($var =='ADMIN') {
  header("Location: admin.php");
} 
$var = $_SESSION['tipo'];
if ($var =='MAESTRO') {
  
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

	<title>bienvenido</title>
 <style>
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body background="img/fondo1.jpg">
<br>	
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"style="background: #262626 !important; color: #F9F7EF !important;" >
  <a class="navbar-brand" href="#">Fundamentos de programacion java</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php" >Inicio</a>
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

<div class="container-fluid">
<br><br>
  <div class="row" >

    <div class="col-sm-6" style="color:#F9F7EF" >
      <div class="col-12 bg-dark"  ><br>
<?php include('foto.php') ?>
     </div>
     <p></p>
  </div>

<div class="col-sm-6 " style="color:#F9F7EF ">
     <div class="col-12 bg-success"  ><br>
 <?php 
  $a=$_SESSION['id'];
  $sql = "SELECT id_curso FROM curso WHERE id_curso= '$a'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['cursoA'] = $row['id_curso'];
      }
      if (isset($_POST['cursoA'])>0) {
         echo "<h3><br><br><br><center> CURSO ACTIVO CLAVE:<br> <h3>"; echo "<h1>"; echo $_SESSION['id']; echo "</h1><br><br><br>";;
      } else {
        echo "<center><br><br>ACTIVA EL CURSO, PARA EL REGISTRO DE ALUMNOS CON CLAVE DEL PROFESOR PARA LA MATERIA FUNDAMENTOS DE PROGRAMACION JAVA ";
        echo "<br><br>";
        echo '<form action="php/ac_curso.php" method="post" >
    <input type="submit" class="btn btn-outline-light"  name="boton1" value="ACTIVAR EL CURSO " >
  </form><br><br><br><br><br><br></center>';
      }?>
     </div>
     <p></p>
  </div>

  <div class="col-sm-12 " style="color:#F9F7EF;  ">
     <div class="col-12 bg-dark"  >
      <center>
         <?php 
  $a=$_SESSION['id'];
  $sql = "SELECT id_curso FROM curso WHERE id_curso= '$a'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['cursoA'] = $row['id_curso'];
      }
      if (isset($_POST['cursoA'])>0) {
                 $clave=$_SESSION['id'];
          echo "TABLA DE ALUMNOS INSCRITOS AL CURSO";
                 include('calificacion.php');
                 
      }
      else{
        echo"ACTIVA EL CURSO EN EL RECUADRO VERDE.";
      }
      ?>
      </center>
      
     </div>



  </div>


   </div> 
  </div>
  
</body>
</html>