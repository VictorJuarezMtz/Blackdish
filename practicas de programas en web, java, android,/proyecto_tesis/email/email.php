<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/util/bootstrap.min.css">
  <script src="../css/util/jquery.min.js"></script>
  <script src="../css/util/popper.min.js"></script>
  <script src="../css/util/bootstrap.min.js"></script>

	<title>login</title>
</head>
<body background="../img/fondo1.jpg">

	
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"style="background: #262626 !important; color: white !important;" >
  <a class="navbar-brand" href="../index.php">Fundamentos de Programacion Java</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../formulario.php" >Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php"><span class="glyphicon glyphicon-log-in"></span> Inicio sesion</a>
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
    	   <div class="p-2 mb-2  text-white rounded-lg"  style="background: #6d2c7d !important; color: white !important;">
      

       <form  action="../email/enviopw.php" name="login" method="post" >
       	<br>

        	  <div class="form-group row" >
            <label class="col-sm-5 col-form-label">Ingrese correo:</label>
            <div class="col-sm-7" >
           <input class="form-control form-control-sm" type = "email" name = "correo" placeholder='email@gmail.com:' required="" />
          </div>
          </div>

         
          
         
          	   <div class="form-group row" >
            <label class="col-sm-5 col-form-label"></label>
            <div class="col-sm-7" >
            	          	 <button  class="btn btn-outline-light btn-md float-right" >Recuperar password</button>


          </div>
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













	</section> <!-- / #main-content -->

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


	 <footer >
  <nav class="navbar sticky-top navbar-light bg-dark justify-content-center">

  <a class="navbar-brand " href="#"> &copy; derechos recervados 2019 </a>
</nav>
</footer>
</body>
</html>


