<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="estilo.css">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registro - Blackdish</title>

<script>
src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>

<script src="https://www.google.com/recaptcha/api.js?render=6Lc85uwUAAAAAJ0ixjpPrHmAYc6ImhG_Qu46dw_E"></script><!-- CLAVE DE SITE --->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {

  overflow: hidden;
  background-color: black;
  padding: 60px 35px;
  max-height: 80px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
}


#navbar #logo {
  font-size: 35px;
  font-weight: bold;
  transition: 0.4s;
}




#navbar-right {
  float: right;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  
  #navbar-right {
    float: none;
  }
}
</style>
</head>

<br>

<body class="" style="background-color: ;">
  <div id="navbar">
<a title="logo" href="http://www.Blackdish.mx"><img id="logo" src="img/blackdishlogo.png" alt="logo" class="mx-auto " style="width:13%; min-width: 100px;" /></a>


  <div id="navbar-right">
    <a class="" href="#home"></a>
    <a href="#contact"></a>
   
  </div>
</div>
<br><br><br>
             
 <center>
   <h2 class="" style="color: black; padding-top: 90px;">Crea una cuenta como administrador</h2>
  </center>
 
<div class="container-fluid">
  

<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10 border  rounded" style="border-color: #7FC7F4;   " >

 <form action="" method="post" style="padding:15px;" enctype="multipart/form-data" name="inscripcion" id="form1" class="needs-validation" novalidate>
                <br />
                        <h6><font color="#808e95">Completa este formulario para que puedas disfrutar de la experiencia con Realidad Aumentada.</font></h6>
                        <h6><font color="#808e95">Nota: Los campos marcados con (*) son obligatorios.</font></h6> 
                        <h6><font color="#ff1744">Aviso: Paso 2 de 2 para terminar el registro exitosamente.</font></h6>
                <br />
                <label><h4><strong>Datos de contacto</strong></h4></label>
                     <div class="row">
                      <div class="col-sm-4">
                      <label class="required">Nombre completo</label>
                      <input type="text" class="form-control " id="name" name="name" placeholder="Ingrese su nombre completo" required="Ingrese nombre completo">

                        <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
                          </div>
                         <div class="col-sm-4">
                       <label class="required">Nombre de Usuario</label>
                       <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required="Ingrese su usuario">
                         <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
                          </div>
                      <div class="col-sm-3">
                        <label for="correo" class="required">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Escribe tu email" onkeup="validarEmail(this) " required="Ingrese correo">
                        <a id='resultado'></a>
                          <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
                    </div>
                </div>
                <br />
                <div class="row">
                      <div class="col-sm-3">
                          <label class="required">Contrase&ntilde;a</label>
                          <input type="password" class="form-control" id="contrasenia" name="contrasenia" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 caracteres" placeholder="Ingresa una contrase&ntilde;a" required="ingrese contraseña">
                            <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo ejem. "pAssword5".</div> 
                      </div>
                      <div class="col-sm-3">
                          <label class="required">Repetir Contrase&ntilde;a</label>
                           <input type="password" class="form-control" id="contrasenia1" name="contrasenia" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 caracteres" placeholder="Repete tu contrase&ntilde;a" required="ingrese nuevamente la contraseña">
                             <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
                      </div>
                        <!-- campo de imagen -->
                            <div class="col-sm-2">
                              <label class="mb-2 required">Imagen</label>
                              <div class="custom-file">
                                <!--<input class="custom-file-input" type="file" name="file" multiple="multiple">-->
                                <input class="custom-file-input" type="file" name="file" multiple="multiple" id="img" required="Selecciona la imagen">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                         <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 

                              </div>
                       
                            </div>
                                  <!-- end campo de imagen -->
                            <!--<input type="file" name="file">-->
                           


                        <div class="col-sm-3">

                        <label class="mb-2 required">Selecciona tu restaurante</label>
                           <select class="form-control" name="restaurante" id="restaurante" requerid>
                                <?php
                                 $servername = "localhost";
                                 $username = "root";
                                 $password = "";
                                 $dbname = "Blackdish";
                                 $mysqli=new mysqli($servername,$username,$password,$dbname);
                                  $sql = $mysqli -> query( " SELECT idRestaurante, Nombre FROM restaurantes " ) ;
                    
                                    while($row = $sql -> fetch_array(MYSQLI_NUM) ){
                                        printf ('<option value="'.$row[0].'">'.$row[0].'-'.$row[1].'</option>');
                                    }
                                ?>
                            </select>
                              <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div> 
                        </div>


                </div>
                
                       <hr>
     
                <center><button class="btn btn-dark" type="submit" name="button" style="max-width: 37%; width: 37%; " id="button" onclick="validaDatos();">Aceptar</button></center>
            
             
          </form>

  </div>


  <div class="col-sm-1"></div>
</div>



 <script src="codigo.js"></script>   

  

<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "60px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
</div>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer >
  <nav  class=" navbar sticky-top  justify-content-center" style="color: white; background-color: black;">
  <div class="footer"><div class='wsite-elements wsite-footer'>Site powered by Annox Managed by <a href="https://hosting-mexico.net" target="_blank" rel="nofollow">Hosting-México</a></div></div>
  
</nav>
</footer>

  </html>
 