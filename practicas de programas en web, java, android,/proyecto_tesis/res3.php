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

    <title>modulo 3</title>
</head>
<body background="img/fondo1.jpg">



   <div id="section1" class="container-fluid  col-11" style="padding-top:70px;padding-bottom:70px; background:#2E3B40; color:white;">
    
                <center><h2> EXAMEN MODULO 3 </h2>
                    </center>
                     <h3> Llene el cuestionario: </h3>
<?php
include('conexion.php');
session_start();
include('preguntas.php');


 ?>






   
   <form action="php/examenes3.php" method="post" >


   <div><p> <h5>1 ¿<?php echo $_POST['nombre_p26']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta26" value="1" required="">A) <?php echo $_POST['uno26']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta26" value="2" >B)<?php echo $_POST['dos26']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta26" value="3" >C)<?php echo $_POST['tres26']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta26" value="4">D)<?php echo $_POST['cuatro26']; ?></label>
    </div>


<br>
  <div><p> <h5>2 ¿<?php echo $_POST['nombre_p27']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta27" value="1" required="">A) <?php echo $_POST['uno27']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta27" value="2">B)<?php echo $_POST['dos27']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta27" value="3" >C)<?php echo $_POST['tres27']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta27" value="4">D)<?php echo $_POST['cuatro27']; ?></label>
    </div>
<br>
  <div><p> <h5>3 ¿<?php echo $_POST['nombre_p28']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta28" value="1" required="">A) <?php echo $_POST['uno28']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta28" value="2">B)<?php echo $_POST['dos28']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta28" value="3" >C)<?php echo $_POST['tres28']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta28" value="4">D)<?php echo $_POST['cuatro28']; ?></label>
    </div>
<br>
 
  <div><p> <h5>4 ¿<?php echo $_POST['nombre_p29']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta29" value="1" required="">A) <?php echo $_POST['uno29']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta29" value="2">B)<?php echo $_POST['dos29']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta29" value="3" >C)<?php echo $_POST['tres29']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta29" value="4">D)<?php echo $_POST['cuatro29']; ?></label>
    </div>
<br>
       
     <div><p> <h5>5 ¿<?php echo $_POST['nombre_p30']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta30" value="1" required="">A) <?php echo $_POST['uno30']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta30" value="2">B)<?php echo $_POST['dos30']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta30" value="3" >C)<?php echo $_POST['tres30']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta30" value="4">D)<?php echo $_POST['cuatro30']; ?></label>
    </div>










     <div><p> <h5>6 ¿<?php echo $_POST['nombre_p31']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta31" value="1" required="">A) <?php echo $_POST['uno31']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta31" value="2" >B)<?php echo $_POST['dos31']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta31" value="3" >C)<?php echo $_POST['tres31']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta31" value="4">D)<?php echo $_POST['cuatro31']; ?></label>
    </div>


<br>
  <div><p> <h5>7 ¿<?php echo $_POST['nombre_p32']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta32" value="1" required="">A) <?php echo $_POST['uno32']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta32" value="2">B)<?php echo $_POST['dos32']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta32" value="3" >C)<?php echo $_POST['tres32']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta32" value="4">D)<?php echo $_POST['cuatro32']; ?></label>
    </div>
<br>
  <div><p> <h5>8 ¿<?php echo $_POST['nombre_p33']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta33" value="1" required="">A) <?php echo $_POST['uno33']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta33" value="2">B)<?php echo $_POST['dos33']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta33" value="3" >C)<?php echo $_POST['tres33']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta33" value="4">D)<?php echo $_POST['cuatro33']; ?></label>
    </div>
<br>
 
  <div><p> <h5>9 ¿<?php echo $_POST['nombre_p34']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta34" value="1" required="">A) <?php echo $_POST['uno34']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta34" value="2">B)<?php echo $_POST['dos34']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta34" value="3" >C)<?php echo $_POST['tres34']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta34" value="4">D)<?php echo $_POST['cuatro34']; ?></label>
    </div>
<br>
       
     <div><p> <h5>10 ¿<?php echo $_POST['nombre_p35']; ?></h5></p></div>
    <div class="radio">
      <label><input type="radio" name="pregunta35" value="1" required="">A) <?php echo $_POST['uno35']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta35" value="2">B)<?php echo $_POST['dos35']; ?></label>
    </div>

        <div class="radio">
      <label><input type="radio" name="pregunta35" value="3" >C)<?php echo $_POST['tres35']; ?></label>
    </div>
    
    <div class="radio">
      <label><input type="radio" name="pregunta35" value="4">D)<?php echo $_POST['cuatro35']; ?></label>
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















