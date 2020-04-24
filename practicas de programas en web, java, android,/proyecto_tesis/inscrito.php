<?php session_start(); include('conexion.php');
?>
<?php
if(isset($_POST['clave_profesor']) && !empty($_POST['clave_profesor'])){
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("La#conexion#ha#fallado:".$conn->connect_error);
}
$sql = "INSERT INTO inscrito(id_usuario,id_curso,intento,intento_2,intento_3,intento_4,intento_5,modulo_1,modulo_2,modulo_3,modulo_4,modulo_5)
VALUES('".$_SESSION['id']."','".$_POST['clave_profesor']."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."','"."0"."')";
if(mysqli_query($conn,$sql)){
echo "<script>window.location='welcome.php'; alert(\" Clave exitoso !!\");</script>";
}
else{
echo "<script>window.location=' welcome.php'; alert(\" Clave no valido\");</script>";
}
$conn->close();
}
?>