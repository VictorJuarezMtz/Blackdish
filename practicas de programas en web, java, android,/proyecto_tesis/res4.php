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

    <title>modulo 4</title>
</head>
<body background="img/fondo1.jpg">



   <div id="section1" class="container-fluid  col-11" style="padding-top:70px;padding-bottom:70px; background:#2E3B40; color:white;">
    
                <center><h2> EXAMEN MODULO 4 </h2>
                    </center>
                     <h3> Llene el cuestionario: </h3>
<?php
include('conexion.php');
session_start();
include('preguntas.php');


 ?>



   
   <form action="php/examenes4.php" method="post" >


   <div><p> <h5>1 ¿<?php echo $_POST['nombre_p36']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta36" value="1" required="">A) <?php echo $_POST['uno36']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta36" value="2" >B)<?php echo $_POST['dos36']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta36" value="3" >C)<?php echo $_POST['tres36']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta36" value="4">D)<?php echo $_POST['cuatro36']; ?></label>
    </div>


<br>
  <div><p> <h5>2 ¿<?php echo $_POST['nombre_p37']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta37" value="1" required="">A) <?php echo $_POST['uno37']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta37" value="2">B)<?php echo $_POST['dos37']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta37" value="3" >C)<?php echo $_POST['tres37']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta37" value="4">D)<?php echo $_POST['cuatro37']; ?></label>
    </div>
<br>
  <div><p> <h5>3 ¿<?php echo $_POST['nombre_p38']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta38" value="1" required="">A) <?php echo $_POST['uno38']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta38" value="2">B)<?php echo $_POST['dos38']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta38" value="3" >C)<?php echo $_POST['tres38']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta38" value="4">D)<?php echo $_POST['cuatro38']; ?></label>
    </div>
<br>
 
  <div><p> <h5>4 ¿<?php echo $_POST['nombre_p39']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta39" value="1" required="">A) <?php echo $_POST['uno39']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta39" value="2">B)<?php echo $_POST['dos39']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta39" value="3" >C)<?php echo $_POST['tres39']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta39" value="4">D)<?php echo $_POST['cuatro39']; ?></label>
    </div>
<br>
       
     <div><p> <h5>5 ¿<?php echo $_POST['nombre_p40']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta40" value="1" required="">A) <?php echo $_POST['uno40']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta40" value="2">B)<?php echo $_POST['dos40']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta40" value="3" >C)<?php echo $_POST['tres40']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta40" value="4">D)<?php echo $_POST['cuatro40']; ?></label>
    </div>









     <div><p> <h5>6 ¿<?php echo $_POST['nombre_p41']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta41" value="1" required="">A) <?php echo $_POST['uno41']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta41" value="2" >B)<?php echo $_POST['dos41']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta41" value="3" >C)<?php echo $_POST['tres41']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta41" value="4">D)<?php echo $_POST['cuatro41']; ?></label>
    </div>


<br>
  <div><p> <h5>7 ¿<?php echo $_POST['nombre_p42']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta42" value="1" required="">A) <?php echo $_POST['uno42']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta42" value="2">B)<?php echo $_POST['dos42']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta42" value="3" >C)<?php echo $_POST['tres42']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta42" value="4">D)<?php echo $_POST['cuatro42']; ?></label>
    </div>
<br>
  <div><p> <h5>8 ¿<?php echo $_POST['nombre_p43']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta43" value="1" required="">A) <?php echo $_POST['uno43']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta43" value="2">B)<?php echo $_POST['dos43']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta43" value="3" >C)<?php echo $_POST['tres43']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta43" value="4">D)<?php echo $_POST['cuatro43']; ?></label>
    </div>
<br>
 
  <div><p> <h5>9 ¿<?php echo $_POST['nombre_p44']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta44" value="1" required="">A) <?php echo $_POST['uno44']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta44" value="2">B)<?php echo $_POST['dos44']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta44" value="3" >C)<?php echo $_POST['tres44']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta44" value="4">D)<?php echo $_POST['cuatro44']; ?></label>
    </div>
<br>
       
     <div><p> <h5>10 ¿<?php echo $_POST['nombre_p45']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta45" value="1" required="">A) <?php echo $_POST['uno45']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta45" value="2">B)<?php echo $_POST['dos45']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta45" value="3" >C)<?php echo $_POST['tres45']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta45" value="4">D)<?php echo $_POST['cuatro45']; ?></label>
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















