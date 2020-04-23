<html>
<head>
	<title> Ingresar Libro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<header>

</header>
</form>
 <form action="administrar_libro.php" method="post" style="padding:15px;">
                     <h1><center>Registra tu restaurante</center></h1> 
               
              
                <label><h4><strong>Datos generales</strong></h4></label>
                  <div class="row">
                    <div class="col-sm-3">
                      <label for="Nombre" class="required">Nombre del restaurante</label>
                      <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre del negocio " required="ingrese nombre">
                    </div>
                    <div class="col-sm-5">
                      <label for="Direccion" class="required">Direcci&oacute;n de tu restaurante</label>
                      <input type="text" class="form-control"  name="Direccion" id="Direccion" placeholder="Direccion de tu negocio" required="ingrese Direccion">
                    </div>
                    <div class="col-sm-3">
                      <label for="CP" class="required">C&oacute;digo Postal del restaurante</label>
                      <input type="text" class="form-control" name="CP" id="cp" placeholder="C.P." required="ingrese codigo posta">
                    </div>
                  </div>
                  <div class="row">
                   
                  </div>
                  <br />
                  
                  <div class="row">
                      <div class="col-sm-3">

                        <label for="Categoria" class="required" >Categor&iacute;a</label>
                      <select  class="form-control" name="Categoria" id="Categoria" requerid>
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
                      <label for="Telefono" class="required">Tel&eacute;fono del restaurante</label>
                      <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="Telefono" pattern="[0-9]{10}" tittle="Ingresa un numero de Telefono correcto 10 digitos"  required="numero de 10 digitos"> 
                    </div>
                   <div class="col-sm-3">
                      <label for="Telefono">RFC del restaurante</label>
                      <input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC" tittle="Ingresa tu RFC " required="ingrese rfc"> 
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
            <input type='hidden' name='insertar' value='insertar'>
                  <center>
<input type='submit' value='Guardar'>

               
              
          </form>


<?php 
//Nombre  , Direccion  , CP  ,  Telefono  , Categoria  , estado , pais , ciudad , rfc
if (isset($_POST['insertar'])) {
		$libro->setNombre($_POST['Nombre']);
		$libro->setDireccion($_POST['Direccion']);
		$libro->setCodigo($_POST['CP']);

        $libro->setCategoria($_POST['Categoria']);
		$libro->setTelefono($_POST['Telefono']);
		$libro->setRfc($_POST['rfc']);

		$libro->setCiudad($_POST['ciudad']);
        $libro->setEstado($_POST['estado']);
		$libro->setPais($_POST['pais']);
		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		//header('Location: ../index.php');
	
	}
?>

</html>