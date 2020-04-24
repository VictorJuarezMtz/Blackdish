<?php 
session_start();
require('../conexion.php');
if(isset($_POST['boton1'])  && !empty($_POST['boton1'])){
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
$sql = "INSERT INTO curso (id_curso, nombre_curso, id_profesor )
VALUES ('".$_SESSION['id']."', '"."fundamentos de programacion"."','".$_SESSION['id']."' )";
            if (mysqli_query($conn, $sql)) { 
               print "<script>window.location='../welcome_teacher.php'; alert(\"Nuevo curso guardado con exito\");</script>";
            } 
            else {
               echo "ya estas registrado";
               echo $_SESSION['id'];
            }
            $conn->close();
         }
 ?>