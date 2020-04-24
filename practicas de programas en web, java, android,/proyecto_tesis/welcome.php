<?php session_start(); ?>
<?php $var = $_SESSION['tipo'];
if ($var =='ALUMNO') {
}$var = $_SESSION['tipo'];
if ($var =='ADMIN') {
header("Location: admin.php");
} $var = $_SESSION['tipo'];
if ($var =='MAESTRO') {
header("Location: welcome_teacher.php");
}if ($var =='') {
header("Location: index.php");
}?>
<?php include('conexion.php'); ?>
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
  <a class="navbar-brand" href="welcome.php">Fundamentos de Programacion Java</a>
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

    <div class="col-sm-6" style="color:#F9F7EF " >
      <div class="col-12 bg-dark"  ><br>
<br>
<div>
         
  <?php include('foto.php'); ?>
  
</div>


  <br>
      <p>
        </p>
     </div>
    <div class="card border border-0" >
      <div class="card-body  border border-0"style=" background: #091740 !important; color:#F9F7EF">
<div class="container-fluid">
  <div class="row">
    <div style="  color:#F9F7EF">
  <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.png" alt="java" width="800" height="300">
    </div>
    <div class="carousel-item ">
      <img src="img/2.jpg" alt="java" width="800" height="300">
    </div>
    <div class="carousel-item">
      <img src="img/3.png" alt="fpj" width="800" height="300">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    </div>
</div>
</div>
        <h5 class="card-title">1 . java</h5>

 <p class="card-text text-justify"> 
        Desde el 2001, JAVA es el lenguaje programación más usado. Actualmente cuenta con más de 9 millones desarrolladores que lo usan y está presente en más de 7 mil millones de dispositivos en todo el mundo. Su popularidad se debe a su gran legibilidad y simplicidad.
<br>
</p>
      </div>
    </div>
         <p></p><!-- esto es para el salto de la seccion tamaño 6/12-->
  </div>
  <div class="col-sm-6 " style="color:#F9F7EF ">
    <div class="card border border-0">
      <div class="card-body" style="background:#2E3B40 !important;">        

        <?php 
        //se modifico esto
        include('conexion.php');

  $a=$_SESSION['id'];
  $sql = "SELECT id_usuario FROM inscrito WHERE id_usuario= '$a'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['id_usuario'] = $row['id_usuario'];
      }

      if (isset($_POST['id_usuario'])>0) {
        echo "<center><h5>Modulos activos</h5></center>";
        
        echo '
<div class="btn-block">
  <a href="modulo_uno_inf.php" class="btn btn-block" style="color: white; background: #1985CE;" >Modulo 1</a>
</div>       '; 



  $clave=$_SESSION['id'];?> 
 <?php
$sql = "SELECT modulo_1,modulo_2,modulo_3,modulo_4,modulo_5 FROM inscrito WHERE id_usuario = '$clave'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['modul'] = $row['modulo_1'];
      $_POST['modul2'] = $row['modulo_2'];
       $_POST['modul3'] = $row['modulo_3'];
        $_POST['modul4'] = $row['modulo_4'];
         $_POST['modul5'] = $row['modulo_5'];
      
      }
      echo "Calificacion actual:";
      echo $_POST['modul'];
      echo "<br>";



      if ($_POST['modul']>0) {
        echo '
<div class="btn-block">
  <a href="modulo_dos_inf.php" class="btn btn-success btn-block" style="color: white " >Modulo 2</a>
</div>


';
  echo "Calificacion actual:";
      echo $_POST['modul2'];
       
        
      }


      if ($_POST['modul2']>0) {
        echo '
<div class="btn-block">
  <a href="modulo_tres_inf.php" class="btn btn-block" style="color: white; background: #8E44AD; " >Modulo 3</a>
</div>


';
  echo "Calificacion actual:";
      echo $_POST['modul3'];
       
        
      }
   if ($_POST['modul3']>0) {
        echo '
<div class="btn-block">
  <a href="modulo_cuatro_inf.php" class="btn btn-info btn-block" style="color: white " >Modulo 4</a>
</div>


';
  echo "Calificacion actual:";
      echo $_POST['modul4'];
       
       
      }
         if ($_POST['modul4']>0) {
        echo '
<div class="btn-block">
  <a href="modulo_cinco_inf.php" class="btn btn-secondary btn-block" style="color: white " >Modulo 5</a>
</div>
';
  echo "Calificacion actual:";
      echo $_POST['modul5']; 
     
      }
      echo "<br><br>";
include('progreso.php');
        
      } else {
        
        echo '<br>
        <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Para el registro,</strong>  el profesor debe activar el curso, de lo contrario no podra estar inscrito para realizar los test de evaluacion
  </div>
        <br><center><h4>Ingrese la clave del curso del profesor: </h4><form action="inscrito.php" method="post" >
                    <input type="text" name="clave_profesor" required="">
                    
            <br><br><input type="submit"  name="boton1" value="Activar curso">
            </form>';
      }   
       ?>
<br><br><br>
      </div>
    </div>
  </div>
   </div> 
  </div>
  
  
  
  
  
  
  
  <div class="container-fluid pt-4">
  <div class="row ">
    <div class="card-columns  col-12">
  <div class="card bg-info " >
    <div class="card-body text-justify ">
      <p class="card-text"><h5>                 2. C</h5>
                <p>

Creado entre 1969 y 1972 en los Laboratorios Bell, este lenguaje de programación es uno de los más utilizados en el mundo. Lo utilizan la mayoría de los sistemas operativos lo cual hace que sea un lenguaje muy flexible, además, es muy popular para el desarrollo de aplicaciones de escritorio, como el conocido editor gráfico GIMP.
                </p></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-justify">
      <p class="card-text"> <h5>
                3. PYTHON

      </h5>
      <p>

Python es un lenguaje de programación multiplataforma y multiparadigma. Soporta la orientación a objetos, la programación imperativa y funcional. Su simpleza, legibilidad y similitud con el idioma inglés lo convierten en un lenguaje ideal para principiantes.
<br><br>
      </p></p>
    </div>
  </div>
  <div class="card bg-info">
    <div class="card-body text-justify">
      <p class="card-text">
                          <h5>
    4. C++

</h5>
<p>

C Plus Plus es un lenguaje de programación orientado a objetos y una evolución del lenguaje C. Existe una gran cantidad de programas escritos en C++, como por ejemplo los paquetes de Adobe.
<br><br><br><br>
</p></p>
    </div>
  </div>
  
 
  
</div>
  </div>
</div>


<script type="application/javascript">
jQuery('input[type=file]').change(function(){
 var filename = jQuery(this).val().split('\\').pop();
 var idname = jQuery(this).attr('id');
 console.log(jQuery(this));
 console.log(filename);
 console.log(idname);
 jQuery('span.'+idname).next().find('span').html(filename);
});
</script>
</body>
   <footer >
  <nav class="navbar sticky-top navbar-light bg-dark justify-content-center">
  <a class="navbar-brand " href="#"> &copy; Derechos recervados 2019 </a>
</nav>
</footer>
</html>
<?php include('insertar.php'); ?>