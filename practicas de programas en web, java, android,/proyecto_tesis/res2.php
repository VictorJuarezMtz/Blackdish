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

    <title>modulo 2</title>
</head>
<body background="img/fondo1.jpg">



   <div id="section1" class="container-fluid  col-11" style="padding-top:70px;padding-bottom:70px; background:#2E3B40; color:white;">
    
                <center><h2> EXAMEN MODULO 2 </h2>
                    </center>
                     <h3> Llene el cuestionario: </h3>
<?php
include('conexion.php');
session_start();
include('preguntas.php');


 ?>






   
   <form action="php/examenes2.php" method="post" >


   <div><p> <h5>1 ¿<?php echo $_POST['nombre_p16']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta16" value="1" required="">A) <?php echo $_POST['uno16']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta16" value="2" >B)<?php echo $_POST['dos16']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta16" value="3" >C)<?php echo $_POST['tres16']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta16" value="4">D)<?php echo $_POST['cuatro16']; ?></label>
    </div>


<br>
  <div><p> <h5>2 ¿<?php echo $_POST['nombre_p17']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta17" value="1" required="">A) <?php echo $_POST['uno17']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta17" value="2">B)<?php echo $_POST['dos17']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta17" value="3" >C)<?php echo $_POST['tres17']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta17" value="4">D)<?php echo $_POST['cuatro17']; ?></label>
    </div>
<br>
  <div><p> <h5>3 ¿<?php echo $_POST['nombre_p18']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta18" value="1" required="">A) <?php echo $_POST['uno18']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta18" value="2">B)<?php echo $_POST['dos18']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta18" value="3" >C)<?php echo $_POST['tres18']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta18" value="4">D)<?php echo $_POST['cuatro18']; ?></label>
    </div>
<br>
 
  <div><p> <h5>4 ¿<?php echo $_POST['nombre_p19']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta19" value="1" required="">A) <?php echo $_POST['uno19']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta19" value="2">B)<?php echo $_POST['dos19']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta19" value="3" >C)<?php echo $_POST['tres19']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta19" value="4">D)<?php echo $_POST['cuatro19']; ?></label>
    </div>
<br>
       
     <div><p> <h5>5 ¿<?php echo $_POST['nombre_p20']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta20" value="1" required="">A) <?php echo $_POST['uno20']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta20" value="2">B)<?php echo $_POST['dos20']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta20" value="3" >C)<?php echo $_POST['tres20']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta20" value="4">D)<?php echo $_POST['cuatro20']; ?></label>
    </div>










     <div><p> <h5>6 ¿<?php echo $_POST['nombre_p21']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta21" value="1" required="">A) <?php echo $_POST['uno21']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta21" value="2" >B)<?php echo $_POST['dos21']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta21" value="3" >C)<?php echo $_POST['tres21']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta21" value="4">D)<?php echo $_POST['cuatro21']; ?></label>
    </div>


<br>
  <div><p> <h5>7 ¿<?php echo $_POST['nombre_p22']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta22" value="1" required="">A) <?php echo $_POST['uno22']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta22" value="2">B)<?php echo $_POST['dos22']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta22" value="3" >C)<?php echo $_POST['tres22']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta22" value="4">D)<?php echo $_POST['cuatro22']; ?></label>
    </div>
<br>
  <div><p> <h5>8 ¿<?php echo $_POST['nombre_p23']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta23" value="1" required="">A) <?php echo $_POST['uno23']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta23" value="2">B)<?php echo $_POST['dos23']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta23" value="3" >C)<?php echo $_POST['tres23']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta23" value="4">D)<?php echo $_POST['cuatro23']; ?></label>
    </div>
<br>
 
  <div><p> <h5>9 ¿<?php echo $_POST['nombre_p24']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta24" value="1" required="">A) <?php echo $_POST['uno24']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta24" value="2">B)<?php echo $_POST['dos24']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta24" value="3" >C)<?php echo $_POST['tres24']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta24" value="4">D)<?php echo $_POST['cuatro24']; ?></label>
    </div>
<br>
       
     <div><p> <h5>10 ¿<?php echo $_POST['nombre_p25']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta25" value="1" required="">A) <?php echo $_POST['uno25']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta25" value="2">B)<?php echo $_POST['dos25']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta25" value="3" >C)<?php echo $_POST['tres25']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta25" value="4">D)<?php echo $_POST['cuatro25']; ?></label>
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















