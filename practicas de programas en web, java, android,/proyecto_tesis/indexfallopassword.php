<!DOCTYPE html>
<html>
<head>





<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>

	<title>login</title>
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
<br> <br> <br> <br> <br>

<div class="container" >
<div class="row">
    <div class="login col-md-3">
   
    </div>

    <div class=" col-md-6">
    	   <div class="p-2 mb-2 bg-dark text-white rounded-lg"  >
      

       <form  action="php/verificacion_login.php" name="login" method="post" >

        	  <div class="form-group row" >
            <label class="col-sm-5 col-form-label">correo</label>
            <div class="col-sm-7" >
           <input class="form-control form-control-sm" type = "text" name = "correo" placeholder='email@gmail.com:'  />
          </div>
          </div>

          <div class="form-group row" >
            <label class="col-sm-5 col-form-label">contraseña</label>
            <div class="col-sm-7" >
           <input class="form-control form-control-sm" type = "password" name = "pw" placeholder='*********'  />
           
          </div>
          </div>
          
         
          	   <div class="form-group row" >
            <label class="col-sm-5 col-form-label"></label>
            <div class="col-sm-7" >
            	          	 <button  class="btn btn-outline-info btn-md float-right" onclick="login()" >iniciar sesion</button>


          </div>
          </div>          
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Lo siento</strong> tu correo o contraseña es incorrecto.
  </div>
</div>
          </div>
          </div>





        </form>

      
       
      </div>
    </div>

    <div class="  col-md-3">
    </div>


  </div>

 
</div>













	</section> 

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


	 <footer >
  <nav class="navbar sticky-top navbar-light bg-dark justify-content-center">

  <a class="navbar-brand " href="#"> &copy; Derechos recervados 2019 </a>
</nav>
</footer>
</body>
</html>
    
    <script type="text/javascript"  src="js/valida_login.js"></script>




 