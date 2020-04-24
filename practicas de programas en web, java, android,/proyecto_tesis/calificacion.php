<div class="container-fluid" >
  <div class="row"  >

  <div class="col-sm-12" style="color:#F9F7EF; ">
      <div class="col-12 bg-dark"  ><!--seccion1--->

  <table class="table table-dark table-striped  table-responsive justify-content-center" >
               
    <tr class="bg-secondary">

            <th class="pad-basic">id</th>
            <th class="pad-basic"> Nombre</th>
            <th class="pad-basic">ap_pat</th>
            <th class="pad-basic">ap_mat</th>
            <th class="pad-basic">intento M1</th>
            <th class="pad-basic">intento M2</th>
            <th class="pad-basic">intento M3</th>
            <th class="pad-basic">intento M4</th>
            <th class="pad-basic">intento M5</th>
            
            <th class="pad-basic"> MODULO 1</th>
            <th class="pad-basic"> MODULO 2</th>
            <th class="pad-basic"> MODULO 3</th>
            <th class="pad-basic"> MODULO 4</th>
            <th class="pad-basic"> MODULO 5</th>
    </tr>

 
<?php
 include('conexion.php');
  

try {
   $conexion = new PDO('mysql:host='.$servername.'; dbname='.$dbname, $username, $password);
      $acentos = $conexion->query("SET NAMES 'utf8'"); //para los acentos de la tabla
} catch (Exception $e) {
  print "!error!:".$e->getMessage() . "<br/>";
  die();
}
?>
<?php 
$query= "SELECT ins.id_usuario, ins.intento,ins.intento_2,ins.intento_3,ins.intento_4,ins.intento_5, u.nombre, u.ap_pat, u.ap_mat,ins.modulo_1,ins.modulo_2,ins.modulo_3,ins.modulo_4,ins.modulo_5  
FROM inscrito ins
INNER JOIN curso c ON ins.id_curso=c.id_curso 
INNER JOIN usuario u ON ins.id_usuario=u.id 
WHERE c.id_curso='$clave';";
$consulta=$conexion->query($query);
while ( $fila=$consulta->fetch(PDO::FETCH_ASSOC)) {
# code...
  echo '
            <tr>
              <td>'.$fila['id_usuario'].'</td>
              <td>'.$fila['nombre'].'</td>
              <td>'.$fila['ap_pat'].'</td>
              <td>'.$fila['ap_mat'].'</td>
              <td>'.$fila['intento'].'</td>
              <td>'.$fila['intento_2'].'</td>
              <td>'.$fila['intento_3'].'</td>
              <td>'.$fila['intento_4'].'</td>
              <td>'.$fila['intento_5'].'</td>
              
              <td>'.$fila['modulo_1'].'</td>
              <td>'.$fila['modulo_2'].'</td>
              <td>'.$fila['modulo_3'].'</td>
              <td>'.$fila['modulo_4'].'</td>
              <td>'.$fila['modulo_5'].'</td>
            </tr>';
}

 ?>
 </table>







     </div>
     <p></p><!-- esto es para el salto de la seccion tamaño 6/12-->
  </div>



</div>
</div>




