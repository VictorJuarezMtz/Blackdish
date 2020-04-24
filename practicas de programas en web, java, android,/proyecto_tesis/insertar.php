<?php
include('conexion.php');
if( 
    isset($_POST['nombre'])  && !empty($_POST['nombre']) && //todos los campos deben estar llenos
	isset($_POST['ap_pat']) && !empty($_POST['ap_pat']) &&
	isset($_POST['ap_mat']) && !empty($_POST['ap_mat']) &&
	isset($_POST['uni'])    && !empty($_POST['uni']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['pw'])     && !empty($_POST['pw'])&&
	isset($_POST['tipo']) && !empty($_POST['tipo']) ){
            $conn = new mysqli($servername, $username, $password, $dbname);            // Create connection
            if ($conn->connect_error) {            // Check connection
               die("La conexion ha fallado: " . $conn->connect_error);
            }
  $a=$_POST['correo'];
  $sql = "SELECT correo FROM usuario WHERE correo = '$a'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['valco'] = $row['correo'];
            }
            if (isset($_POST['valco'])==$a) {
               echo "<script>window.location='formulario.php'; alert(\" CORREO existente\");</script>";
            } else {  // insertar en la bd las variables que ontiene de post
            $sql = "INSERT INTO usuario (nombre, ap_pat, ap_mat, uni, correo, pw, tipo)VALUES ( '".$_POST["nombre"]."', '".$_POST["ap_pat"]."','".$_POST["ap_mat"]."', '".$_POST["uni"]."', '".$_POST["correo"]."', '".$_POST["pw"]."', '".$_POST["tipo"]."')";

            if (mysqli_query($conn, $sql)) {
               //echo "<script>window.location='index.php'; alert(\" Registro exitoso\"); </script>";
               include('php/verificacion_registro.php');
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
            }
         else{

         }
?>