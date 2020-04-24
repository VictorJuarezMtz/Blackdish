<?php
include('conexion.php');
session_start();
 ?>
 <?php 
  $clave=$_SESSION['id'];?> 
 <?php
$sql = "SELECT modulo_1,modulo_2,modulo_3,modulo_4,modulo_5 FROM inscrito WHERE id_usuario = '$clave'";
    $result=$mysqli->query($sql);
    $rows = $result->num_rows;
    if($rows > 0) {
      $row = $result->fetch_assoc();
      $_POST['m1'] = $row['modulo_1'];
      $_POST['m2'] = $row['modulo_2'];
      $_POST['m3'] = $row['modulo_3'];
      $_POST['m4'] = $row['modulo_4'];
      $_POST['m5'] = $row['modulo_5'];
      }

   ?>
<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>
</head>
<body background="img/fondo1.jpg">
<div class="container" >
<div class="row">
    <div class="login col-md-3">
    </div>
    <div class=" col-md-6">
         <div class="p-2 mb-2 bg-dark text-white rounded-lg"  >
          <center>
                            <h5 class="texto" style="color: white"> Felicidades <?php echo "&nbsp";
 echo $_SESSION['nombre'];?> </h5>
          </center>
<div class="container">
  <p>
    <?php
$r1=$_POST['m1'];
$r2=$_POST['m2'];
$r3=$_POST['m3'];
$r4=$_POST['m4'];
$r5=$_POST['m5']; 


if ($r1>70) {
echo "1er modulo, calificacion: ";
echo "&nbsp";
echo $r1;
  # code...

echo "<br>";
}
if ($r2>70) {
echo "2do modulo, calificacion:";
echo "&nbsp";
echo $r2;
  # code...
echo "<br>";
}

if ($r3>70) {
echo "3er modulo, calificacion:";
echo "&nbsp";
echo $r3;
  # code...
echo "<br>";
}
if ($r4>70) {
echo "4to modulo, calificacion:";
echo "&nbsp";
echo $r4;
  # code...
echo "<br>";
}
if ($r5>70) {
echo "5to modulo, calificacion:";
echo "&nbsp";
echo $r5;
  # code...
echo "<br>";
}

 ?>
  </p>            
  <img src="img/medalla1.jpg" class="img-thumbnail" alt="Cinque Terre" width="500" height="300"> 
  <div class="btn-block">
    <br>
  <a href="welcome.php" class="btn btn-warning btn-block">continuar</a>
</div>    
</div>
</div>
</div>
<div class="  col-md-3">
</div>
</div>

 
</div>
<br><br><br><br><br><br>
<footer >
<nav class="navbar sticky-top navbar-light bg-dark justify-content-center">
<a class="navbar-brand " href="#"> &copy; Derechos recervados 2019 </a>
</nav>
</footer>
</body>
</html>