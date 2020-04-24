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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>

<link type="text/css" href="css/util/bootstrap.min.css" rel="stylesheet">
<script src='css/fontawesome/css/all.css'></script>
<script src='css/fontawesome/js/brands.js'></script>
<script src='css/fontawesome/js/solid.js'></script>
<script src='css/fontawesome/js/fontawesome.js'></script>
<style>



table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:100%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
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
<div class="main-wrapper">
<h4>Editar Registro de usuario </h4>
<br>

<?php 
include("php/function.php");
$id = $_GET['id'];
select_id('usuario','id',$id);
?>


<form action="" method="post">
	<div>
	<input class="col-6"     type="text" value="<?php echo $row->nombre;?>" name="nombre">	
	</div>
	<div>
	<input class="col-6"  type="text" value="<?php echo $row->ap_pat;?>" name="ap_pat">
	</div>
	<div>
	<input class="col-6"  type="text" value="<?php echo $row->ap_mat;?>" name="ap_mat">
	</div>
	<div>
	<input class="col-6"  type="text" value="<?php echo $row->uni;?>"    name="uni">
	</div>
	<div>
			<input class="col-6"  type="text" value="<?php echo $row->correo;?>" name="correo">
	</div>
	<div>
		<input class="col-6"  type="text" value="<?php $row->pw;?>" name="pw" required pattern="[A-Za-z0-9]+" />>

	</div>
	<div>
			<input class="col-6"  type="text" value="<?php echo $row->tipo;?>" name="tipo">

	</div>

	<input class="btn btn-primary bg-success" type="submit" name="submit"  >
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'],
		               "ap_pat"=>$_POST['ap_pat'],
		               "ap_mat"=>$_POST['ap_mat'],
		               "uni"=>$_POST['uni'],
		               "correo"=>$_POST['correo'],
		               "pw"=>$_POST['pw'],
		               "tipo"=>$_POST['tipo']

		              );

		$tbl = "usuario";
		edit($tbl,$field,'id',$id);
		header("location: admin.php");
	}
?>
</div>
</body>
</html>