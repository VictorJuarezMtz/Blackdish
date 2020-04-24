<?php
include('conexion.php');
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
<?php include("php/function.php"); ?>
<html>
<head>
<title>gestion </title>
	<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>
	
<script src='css/fontawesome/css/all.css'></script>
<script src='css/fontawesome/js/brands.js'></script>
<script src='css/fontawesome/js/solid.js'></script>
<script src='css/fontawesome/js/fontawesome.js'></script>


<style>

.main-wrapper{
	width:100%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
	margin:auto;
}

</style>
</head>

<body>
<div class="main-wrapper" >
	<center>
		
		<h3>Administrador de usuarios de FPJ </h3>

	</center>

<form action="" method="post" >
  <div class="col-6">
    <input class="form-control" name="nombre" type="text" placeholder="nombre" required="">
  </div>
  <div class="col-6">
    <input class="form-control" name="ap_pat" type="text" placeholder="ap_pat" required="">
  </div>
  <div class="col-6">
    <input class="form-control" name="ap_mat" type="text" placeholder="ap_mat" required="">
  </div>
  <div class="col-6">
    <input class="form-control" name="uni" type="text" placeholder="uni" required="">
  </div> 
  <div class="col-6">
    <input class="form-control" name="correopro" type="text" placeholder="correo" required="">
  </div>
  <div class="col-6">
    <input class="form-control" name="pw" type="text" placeholder="pw" required="">
  </div> 
  <div class="col-6">
   <select class="form-control form-control-sm" name="tipo" required="">
   <option value="ALUMNO">Alumno</option> 
   <option value="MAESTRO">Maestro</option>
   <option value="ADMIN">Administrador</option>  
</select>
  </div>
<div class="col-6">
		<input type="submit" name="submit" class="btn btn-primary " value="Registrar usuario">
</div>
   

</form>
<?php
 include('conexion.php');
?>
<?php 


if(isset($_POST['submit'])){

   $a=$_POST['correopro'];
  $sql = "SELECT correo FROM usuario WHERE correo = '$a'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['valco'] = $row['correo'];
            }
            if (isset($_POST['valco'])==$a) {
            	echo "ya existe correo";
            }else{
            		$campos = array("nombre"=>$_POST['nombre'], "ap_pat"=>$_POST['ap_pat'], "ap_mat"=>$_POST['ap_mat'], "uni"=>$_POST['uni'], "correo"=>$_POST['correopro'], "pw"=>$_POST['pw'], "tipo"=>$_POST['tipo'] );
		$tabla = "usuario";
		insertar($tabla,$campos);	

            }
	}        
?>
            
<br>
<div id="div1" style="overflow:scroll; height:200px; width:100%; ">
<table class=".col-sm-6" border="1" style=" width:100%; background-color:#E0E4E5;">
               

    <tr class="bg-success" >
            <th class="pad-basic">Id</th>
            <th class="pad-basic">Nombre</th>
            <th class="pad-basic">Apellido paterno</th>
            <th class="pad-basic">Apellido materno</th>
            <th class="pad-basic">Universidad</th>
            <th class="pad-basic"> Correo</th>
           <!-- <th class="pad-basic"> Pw</th>-->
            <th class="pad-basic"> Tipo </th>
            <th class="pad-basic"> Opc</th>

	</tr>
</div>
<?php 
	$sql = "select * from usuario";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->id;?></td>
		<td><?php echo $row->nombre;?></td>
		<td><?php echo $row->ap_pat;?></td>
		<td><?php echo $row->ap_mat;?></td>
		<td><?php echo $row->uni;?></td>
		<td><?php echo $row->correo;?></td>
		<td><?php echo $row->tipo;?></td>  
		<td>
<a class="btn btn-primary " href="editar.php?id=<?php echo $row->id; ?>"> <i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="php/borrar.php?id=<?php echo $row->id;?>"> <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
</td>
	</tr>
	<?php } ?>
</table>
</div>
</div>
</body>
</html>