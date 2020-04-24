<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>

    <title>modulo 5</title>
</head>
<body background="img/fondo1.jpg">



   <div id="section1" class="container-fluid  col-11" style="padding-top:70px;padding-bottom:70px; background:#2E3B40; color:white;">
    
                <center><h2> EXAMEN MODULO 5 </h2>
                    </center>
                     <h3> Llene el cuestionario: </h3>
<?php
include('conexion.php');
session_start();
include('preguntas.php');


 ?>




   
   <form action="php/examenes5.php" method="post" >


   <div><p> <h5>1 ¿<?php echo $_POST['nombre_p46']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta46" value="1" required="">A) <?php echo $_POST['uno46']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta46" value="2" >B)<?php echo $_POST['dos46']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta46" value="3" >C)<?php echo $_POST['tres46']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta46" value="4">D)<?php echo $_POST['cuatro46']; ?></label>
    </div>


<br>
  <div><p> <h5>2 ¿<?php echo $_POST['nombre_p47']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta47" value="1" required="">A) <?php echo $_POST['uno47']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta47" value="2">B)<?php echo $_POST['dos47']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta47" value="3" >C)<?php echo $_POST['tres47']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta47" value="4">D)<?php echo $_POST['cuatro47']; ?></label>
    </div>
<br>
  <div><p> <h5>3 ¿<?php echo $_POST['nombre_p48']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta48" value="1" required="">A) <?php echo $_POST['uno48']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta48" value="2">B)<?php echo $_POST['dos48']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta48" value="3" >C)<?php echo $_POST['tres48']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta48" value="4">D)<?php echo $_POST['cuatro48']; ?></label>
    </div>
<br>
 
  <div><p> <h5>4 ¿<?php echo $_POST['nombre_p49']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta49" value="1" required="">A) <?php echo $_POST['uno49']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta49" value="2">B)<?php echo $_POST['dos49']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta49" value="3" >C)<?php echo $_POST['tres49']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta49" value="4">D)<?php echo $_POST['cuatro49']; ?></label>
    </div>
<br>
       
     <div><p> <h5>5 ¿<?php echo $_POST['nombre_p50']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta50" value="1" required="">A) <?php echo $_POST['uno50']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta50" value="2">B)<?php echo $_POST['dos50']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta50" value="3" >C)<?php echo $_POST['tres50']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta50" value="4">D)<?php echo $_POST['cuatro50']; ?></label>
    </div>









     <div><p> <h5>6 ¿<?php echo $_POST['nombre_p51']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta51" value="1" required="">A) <?php echo $_POST['uno51']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta51" value="2" >B)<?php echo $_POST['dos51']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta51" value="3" >C)<?php echo $_POST['tres51']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta51" value="4">D)<?php echo $_POST['cuatro51']; ?></label>
    </div>


<br>
  <div><p> <h5>7 ¿<?php echo $_POST['nombre_p52']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta52" value="1" required="">A) <?php echo $_POST['uno52']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta52" value="2">B)<?php echo $_POST['dos52']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta52" value="3" >C)<?php echo $_POST['tres52']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta52" value="4">D)<?php echo $_POST['cuatro52']; ?></label>
    </div>
<br>
  <div><p> <h5>8 ¿<?php echo $_POST['nombre_p53']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta53" value="1" required="">A) <?php echo $_POST['uno53']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta53" value="2">B)<?php echo $_POST['dos53']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta53" value="3" >C)<?php echo $_POST['tres53']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta53" value="4">D)<?php echo $_POST['cuatro53']; ?></label>
    </div>
<br>
 
  <div><p> <h5>9 ¿<?php echo $_POST['nombre_p54']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta54" value="1" required="">A) <?php echo $_POST['uno54']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta54" value="2">B)<?php echo $_POST['dos54']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta54" value="3" >C)<?php echo $_POST['tres54']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta54" value="4">D)<?php echo $_POST['cuatro54']; ?></label>
    </div>
<br>
       
     <div><p> <h5>10 ¿<?php echo $_POST['nombre_p55']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta55" value="1" required="">A) <?php echo $_POST['uno55']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta55" value="2">B)<?php echo $_POST['dos55']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta55" value="3" >C)<?php echo $_POST['tres55']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta55" value="4">D)<?php echo $_POST['cuatro55']; ?></label>
    </div>
   
   
    
    



<br>
<br>
<center>
        <button   class ="button" >Calificar examen</button>

</center>

</form>


            </div>
            
        </article> <!-- /article -->


    </section> 
</div>
</body>
</html>















