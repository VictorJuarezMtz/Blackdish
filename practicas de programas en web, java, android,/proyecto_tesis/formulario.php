<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>

</head>
<body background="img/fondo1.jpg">

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"style="background: #262626 !important; color: white !important;" >
  <a class="navbar-brand" href="#">Fundamentos de programacion java</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="formulario.php" >Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><span class="glyphicon glyphicon-log-in"></span> Inicio sesion</a>
      </li>
       
    </ul>
  </div>  
</nav>
<br>
<br>
<br>
<br>


<div class="container" >
<div class="row">
    <div class="formularioregistro col-md-7">
      <div class="p-2 mb-2 bg-dark text-white rounded-lg"  >
       <CENTER><H3> Registrate:</H3></CENTER>

        <form  action = "insertar.php" method="post"  >

          

           <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Nombre</label>
            <div class="col-sm-7" >
           <input class="form-control form-control-sm" type = "text" name = "nombre" placeholder='ingrese su nombre:' required="" />
          </div>
          </div>

 <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Apellido paterno</label>
            <div class="col-sm-7" >
            <input class="form-control form-control-sm" type = "text" name = "ap_pat" placeholder='apellido paterno:' required=""/>
          </div>
          </div>

           
            <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Apellido materno</label>
            <div class="col-sm-7" >
         <input class="form-control form-control-sm" type = "text" name = "ap_mat"  placeholder='apellido materno:' required=""/>
          </div>
          </div>


            <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Universidad</label>
            <div class="col-sm-7" >
         <input class="form-control form-control-sm" type = "text" name = "uni"  placeholder='universidad:'required />
          </div>
          </div>



            <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Correo</label>
            <div class="col-sm-7" >
         <input class="form-control form-control-sm" type = "email" name = "correo"  placeholder='correo@gmail.com:' required />
          </div>
          </div>
          
          <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Contraseña</label>
            <div class="col-sm-7" >
        <input class="form-control form-control-sm" id="myInput" type = "password" name = "pw" placeholder='contraseña:' required pattern="[A-Za-z0-9@#$%ñ]{6,20}" title="Una contraseña válida, es un conjunto de letras entre 6 y 20 caracteres,puedes ocupar los símboloss '@', '#', '$', 'ñ' y '%'. Sin embargo se prohibe los espacios y saltos de linea" />
        <input type="checkbox" onclick="myFunction()">Mostrar password
          </div>
          </div>
          

 <div class="form-group row" >
            <label class="col-sm-8 col-form-label">Tipo de usuario</label>
            <div class="col-sm-4" >

         <select class="form-control form-control-sm" name="tipo">
   <option value="ALUMNO">Alumno</option> 
   <option value="MAESTRO">Maestro</option> 
</select>

          </div>
          </div>



           

          





          <div class="form-group">
            <input class="btn btn-outline-info btn-lg btn-block" type = "submit" value ="Enviar" name="submit"/>
          </div>
        </form>
       
      </div>
    </div>

    <div class=" col-md-2">
    </div>

    <div class="  col-md-3">
    </div>


  </div>

 
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>