<?php

header("Content-Type: text/html; charset=UTF-8");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>

    <title>modulo 1</title>
</head>
<body background="img/fondo1.jpg">



   <div id="section1" class="container-fluid  col-11" style="padding-top:70px;padding-bottom:70px; background:#2E3B40; color:white;">
    
                <center><h2> EXAMEN MODULO 1 </h2>
                    </center>
                     <h3> Llene el cuestionario: </h3>
  

<?php
include('conexion.php');


session_start();
include('preguntas.php');
 ?>

   
   <form action="php/examenes.php" method="post" >


   <div><p> <h5>1 ¿<?php echo $_POST['nombre_p']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta1" value="1" required="">A) <?php echo $_POST['uno']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta1" value="2" >B)<?php echo $_POST['dos']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta1" value="3" >C)<?php echo $_POST['tres']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta1" value="4">D)<?php echo $_POST['cuatro']; ?></label>
    </div>


<br>
  <div><p> <h5>2 ¿<?php echo $_POST['nombre_p2']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta2" value="1" required="">A) <?php echo $_POST['uno2']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta2" value="2">B)<?php echo $_POST['dos2']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta2" value="3" >C)<?php echo $_POST['tres2']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta2" value="4">D)<?php echo $_POST['cuatro2']; ?></label>
    </div>
<br>
  <div><p> <h5>3 ¿<?php echo $_POST['nombre_p3']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta3" value="1" required="">A) <?php echo $_POST['uno3']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta3" value="2">B)<?php echo $_POST['dos3']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta3" value="3" >C)<?php echo $_POST['tres3']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta3" value="4">D)<?php echo $_POST['cuatro3']; ?></label>
    </div>
<br>
 
  <div><p> <h5>4 ¿<?php echo $_POST['nombre_p4']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta4" value="1" required="">A) <?php echo $_POST['uno4']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta4" value="2">B)<?php echo $_POST['dos4']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta4" value="3" >C)<?php echo $_POST['tres4']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta4" value="4">D)<?php echo $_POST['cuatro4']; ?></label>
    </div>
<br>
       
     <div><p> <h5>5 ¿<?php echo $_POST['nombre_p5']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta5" value="1" required="">A) <?php echo $_POST['uno5']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta5" value="2">B)<?php echo $_POST['dos5']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta5" value="3" >C)<?php echo $_POST['tres5']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta5" value="4">D)<?php echo $_POST['cuatro5']; ?></label>
    </div>










     <div><p> <h5>6 ¿<?php echo $_POST['nombre_p6']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta6" value="1" required="">A) <?php echo $_POST['uno6']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta6" value="2" >B)<?php echo $_POST['dos6']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta6" value="3" >C)<?php echo $_POST['tres6']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta6" value="4">D)<?php echo $_POST['cuatro6']; ?></label>
    </div>


<br>
  <div><p> <h5>7 ¿<?php echo $_POST['nombre_p7']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta7" value="1" required="">A) <?php echo $_POST['uno7']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta7" value="2">B)<?php echo $_POST['dos7']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta7" value="3" >C)<?php echo $_POST['tres7']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta7" value="4">D)<?php echo $_POST['cuatro7']; ?></label>
    </div>
<br>
  <div><p> <h5>8 ¿<?php echo $_POST['nombre_p8']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta8" value="1" required="">A) <?php echo $_POST['uno8']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta8" value="2">B)<?php echo $_POST['dos8']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta8" value="3" >C)<?php echo $_POST['tres8']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta8" value="4">D)<?php echo $_POST['cuatro8']; ?></label>
    </div>
<br>
 
  <div><p> <h5>9 ¿<?php echo $_POST['nombre_p9']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta9" value="1" required="">A) <?php echo $_POST['uno9']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta9" value="2">B)<?php echo $_POST['dos9']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta9" value="3" >C)<?php echo $_POST['tres9']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta9" value="4">D)<?php echo $_POST['cuatro9']; ?></label>
    </div>
<br>
       
     <div><p> <h5>10 ¿<?php echo $_POST['nombre_p10']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta10" value="1" required="">A) <?php echo $_POST['uno10']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta10" value="2">B)<?php echo $_POST['dos10']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta10" value="3" >C)<?php echo $_POST['tres10']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta10" value="4">D)<?php echo $_POST['cuatro10']; ?></label>
    </div>
   
   
    
    



<br>
<br>
<center>
        <button   class ="button" >Calificar examen</button>

</center>

</form>


            </div>
            
        </article> 


    </section> 
</div>
</body>
</html>















