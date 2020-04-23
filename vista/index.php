 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />     

     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
    <title>Ejemplos</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header">Formulario de prueba</div>
        <div class="card-body">
        <form id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="apellido">Apellido</label>
                      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="direccion">Dirección</label>
                      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="usuario">Nombre de usuario</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="usuario" type="text" class="form-control" id="usuario" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="codigo.js"></script>       
  </body>
</html>