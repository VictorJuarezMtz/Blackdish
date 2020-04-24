<?php
include('../conexion.php');

 $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
          $id = $_GET['id'];
            $sql="DELETE from imagephp WHERE usuario='$id'";
            if (mysqli_query($conn, $sql)) {
               echo " SE ELIMINO";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
  ?>



<?php
include('../conexion.php');

 $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
          $id = $_GET['id'];
            
            $sql="DELETE from inscrito where id_curso='$id'";
            if (mysqli_query($conn, $sql)) {
               echo " SE ELIMINO";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
  ?>
  <?php
include('../conexion.php');

 $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
          $id = $_GET['id'];
            
            $sql="DELETE from inscrito where id_usuario='$id'";
            if (mysqli_query($conn, $sql)) {
               echo " SE ELIMINO";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
  ?>


<?php
include('../conexion.php');

 $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
          $id = $_GET['id'];
            
$sql="DELETE from  curso where id_curso='$id'";
            if (mysqli_query($conn, $sql)) {
               echo " SE ELIMINO";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
  ?>

<?php 
include('../conexion.php');
 $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
               die("La conexion ha fallado: " . $conn->connect_error);
            } 
          $id = $_GET['id'];
				$sql="DELETE from usuario where id='$id'";
            if (mysqli_query($conn, $sql)) {
               echo " SE ELIMINO";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();

header("location: ../admin.php");
?>

