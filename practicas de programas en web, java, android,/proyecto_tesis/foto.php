<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>
<style>
.error {font-weight: bold; color:red;}
.mensaje {color:#030;}
.listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
</style>
</head>
<body background="">
  <script type="text/javascript">
    
    $(function() {
    $("#btnExito").click(function(){        
      $('#modal_exito').modal('show');
    });
});
  </script>
</head>

<body>

<?php

include('conexion.php');
$id=$_SESSION['id'];
$sql="SELECT* from imagephp where usuario=$id;";
$result = $mysqli->query($sql);
if ($result->num_rows > 0)
{
while ($row = $result->fetch_array(MYSQLI_ASSOC))
{

echo "<img WIDTH='127' HEIGHT='150' src='data:imagen/jpeg;base64,".base64_encode($row["imagen"]). "'/>";
}
}
else
{
echo "<img WIDTH='127' HEIGHT='150' src='img/avatar.jpg'/>";
}
$mysqli->close(); 

?>
<?php
include('conexion.php');


if (mysqli_connect_errno()) {
die("Error al conectar: ".mysqli_connect_error());
}//-------------------------------------------------------




if (is_uploaded_file(@$_FILES["userfile"]["tmp_name"]))
{
if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png"|| $_FILES["userfile"]["type"]=="image/tif")
{
$info=getimagesize($_FILES["userfile"]["tmp_name"]);
$imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
$sql = "SELECT *  where usuario=$id;";
  $sql = "SELECT usuario FROM imagephp WHERE usuario= $id ";
    $result=$mysqli->query($sql);
    $col = $result->num_rows;
    if($col > 0) {
      $col = $result->fetch_assoc();
      $_POST['usuario'] = $col['usuario'];
      $user=1;
      }else{$user=0;}


      if (filesize($_FILES['userfile']['tmp_name'])<65535) {
 //echo filesize($_FILES['userfile']['tmp_name']);

        if($user>0){
$sql = "UPDATE imagephp SET imagen='$imagenEscapes' where usuario=$id;";
$mysqli->query($sql);
}else{
  $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen, usuario) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."', ".$id.")";
$mysqli->query($sql);
}
}else{
 echo '<script language="javascript">alert("imagen muy grande, maximo 65 kb");</script>'; 
}


$id=$mysqli->insert_id;
echo " <meta http-equiv='Refresh' content='0 ;url=welcome.php'> ";
}else{
  $llenar="no es compatible, debe ser menor  900kb";
echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
}
}//----------------

?>

<br>
<table class="table table-dark table table-responsive ">
    <thead>
      <tr>    
        <th>Nombre</th>
        <th>ID</th>
        <th>Correo</th>
      </tr>
    </thead>
    <tbody class="table-active">
      <tr>
       <td><?php echo $_SESSION['nombre'];?></td>
        <td><?php echo $_SESSION['id'];?></td>
        <td><?php echo $_SESSION['correo2']; ?>
</td>
      </tr>
    </tbody>
  </table>

  
<input type="button" value="Actualizar datos" name="registrar" id="btnExito" class="registrar" tabindex="8" />
<div class="modal fade" id="modal_exito" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-rii" >
                <!--<button type="button" class="close-left" data-dismiss="modal">&times;</button>  -->
                <center><h3 class="modal-title" style="color: black;">Actualizar foto</h3></center>
                <br>
                 </div>

<div style="">
  <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
<input name="userfile" type="file" style="
    font-size:14px; 
    color:black;
  font-weight:normal;
  font-family: 'Lato';"
  
  accept="image/png, .jpeg, .jpg">

<br><br>

<input type="submit" value="Actualizar">

</form>

</div>
 
                 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>

</body>
<br>
<p> &nbsp;&nbsp;</p>
</html>