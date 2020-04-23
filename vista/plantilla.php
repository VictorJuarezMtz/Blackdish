<!DOCTYPE html>
<html lang="es">

<link rel="stylesheet" type="text/css" href="estilo.css">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registro - Blackdish</title>
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
   <h2 class="" style="color: black; padding-top: 90px;">Registra tu restaurante</h2>
  </center>
 
<div class="container-fluid">
  

<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10 border  rounded" style="border-color: #7FC7F4;   " >

            <form  class="needs-validation" action="controllerData.php" method="post" style="padding:15px;" novalidate>
                      
<br>
                <label><h4><strong>Datos generales</strong></h4></label>
                  <div class="row">
                    <div class="col-sm-3">
                      <label for="nombre" class="required">Nombre del restaurante</label>
                      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del negocio " required="">
                       <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <div class="col-sm-5">
                      <label for="direccion" class="required">Direcci&oacute;n de tu restaurante</label>
                      <input type="text" class="form-control"  name="direccion" id="direccion" placeholder="Direccion de tu negocio" required="">
                       <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
                    </div>
                    <div class="col-sm-3">
                      <label for="codigo" class="required">C&oacute;digo Postal del restaurante</label>
                      <input type="text" class="form-control" name="codigo" id="codigo" placeholder="C.P." required="">
                       <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete el campo.</div>  
                    </div>
                  </div>
                  <div class="row">
                      <!--<div class="col-sm-3">
                        <label for="fecha">Fecha de registro</label>
                      <input class="form-control" type="date" name="fecha" id="fecha" >
                      </div>-->
                  </div>
                  <br />
                  
                  <div class="row">
                      <div class="col-sm-3">
                        <label for="categoria" class="required">Categor&iacute;a</label>
                      <select  class="form-control" name="categoria" id="categoria" requerid>
                           <option value="Asian Food">Comida asiática</option>
                           <option value="Cafeteria">Cafeteria</option>
                           <option value="Desserts">Postres</option>
                           <option value="Fast Food">Comida r&aacute;pida</option>
                           <option value="Gourmet">Gourmet</option>
                           <option value="Italian Food">Comida italiana</option>
                           <option value="Meats">Carnes</option>
                           <option value="Mexican Food">Comida mexicana</option>
                           <option value="Seafood">Marisqueria</option>
                      </select>
                      </div>
                   <div class="col-sm-3">
                      <label for="telefono" class="required">Tel&eacute;fono del restaurante</label>
                      <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" pattern="[0-9]{10}" tittle="Ingresa un numero de telefono correcto 10 digitos"  required=""> 
                       <div class="valid-feedback">¡Completado!</div>
                      <div class="invalid-feedback">Complete 10 digitos.</div>  
                    </div>
                   <div class="col-sm-3">
                      <label for="telefono">RFC del restaurante</label>
                      <input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC" tittle="Ingresa tu RFC "> 
                      <div class="valid-feedback">El RFC es ¡opcional!</div>

                    </div>
                  </div>
                  <br />
                  
                  <div class="row">
                        <div class="col-sm-3">
                          <label for="ciudad" class="required">Ciudad</label>
                        <select class="form-control" name="ciudad" id="ciudad" requerid>
                              <option value="Cordoba">Cordoba</option>
                              <option value="Veracruz">Veracruz</option>
                              <option value="Orizaba">Orizaba</option>
                              <option value="Fortin">Fortin</option>
                              <option value="Cuitlahuac">Cuitlahuac</option>
                              <option value="Amatlan">Amatlan</option>
                        <!-- end consulta -->
                        </select>
                        
                        </div>
                        <div class="col-sm-3">
                          <label for="estado" class="required">Estado</label>
                          <select id="estado" class="form-control" id="estado" name="estado"  placeholder="Estado">
                           <option value="Veracruz">Veracruz</option>
                           <option value="Puebla">Puebla</option>
                        <!-- end consulta -->
                          </select>
                        </div>
                        <div class="col-sm-3" >
                          <label for="pais" class="required">Pa&iacute;s</label>
                          <select id="pais" class="form-control" name="pais" placeholder="Pais" requerid>
                              <option value="Mexico">Mexico</option>
                              <option value="Canada">Canada</option>
                          </select>
                        </div>
                  </div>
                  <br />
                  <hr>
            
                  <center><button class="btn btn-outline-dark btn-lg" type="submit" name="button" style="max-width: 37%; width: 37%; " id="button">Aceptar</button></center>
               
               <input type="hidden"  name="recaptcha_response" id="recaptchaResponse">
              
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
 