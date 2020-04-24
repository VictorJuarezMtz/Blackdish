<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>bienvenido</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/util/bootstrap.min.css">
  <script src="css/util/jquery.min.js"></script>
  <script src="css/util/popper.min.js"></script>
  <script src="css/util/bootstrap.min.js"></script>
</head>
<body  class="" style="background:#2E3B40;">
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"style="background: #262626 !important; color: #F9F7EF !important;" >
  <a class="navbar-brand" href="#">Fundamentos de programacion java</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="welcome.php" >Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acercade.php"><span class="glyphicon glyphicon-log-in"></span> Acerca de</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="php/exit.php"><span class="glyphicon glyphicon-log-in"></span> Cerrrar sesion</a>
      </li>
    </ul>
  </div>  
</nav>

  
<div class="container" style="background:#2E3B40;" >
  <br>
<br>
<br>
<br>
<center><h3 style="color: white"> MODULARIDAD</h3></center>
 
  <div id="accordion" style=" color: white; " >


    <div class="card"  style="background-color:#2E3B40">

      <div class="card-header text-white" data-toggle="collapse" href="#collapseOne" style="cursor: pointer; background-color: #1985CE;">
      <h4>Tema 1 - uso de modulos</h4> 
      </div>

              <div id="collapseOne" class="collapse" data-parent="#accordion" >
              <div class="card-body">
           
<div class="container">
  <p>uso de metodo</p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/metodo.mkv" type="video/mp4" />
</video>
  </div>
</div>



              </div>
              </div>

    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseTwo" style="cursor: pointer;background-color: #1985CE;">
       <h4>Tema 2 - paso de parametros</h4> 
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">


<div class="container">
  <p> Explicacion de paso de parametros, ver el video y hacer ejercicio. </p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/paso_parametros.mkv" type="video/mp4" />
</video>
  </div>
</div>

                


          

        </div>
      </div>
    </div>


    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseThree" style="cursor: pointer; background-color: #1985CE;">
     <h4>Tema 3 - implementacion</h4>  
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
       
<div class="container">
  <p> implementacion de metodo y funcion </p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/implementacion.mkv" type="video/mp4" />
</video>
  </div>
</div>



<br><br>

<div class="container">
    
     
  <h5>codigo del video: </h5>
  <pre style="color: white">

package implementacion;
public class Implementacion {
    public static void main(String[] args) {//metodo principal
        // TODO code application logic here
        int a=1;
        int b=1;
       int resultado = suma(a, b);//llamada a funcion
       System.out.println(resultado);
        metodo_implementado();
        metodo_implementado();
        metodo_implementado();
    }
    public static void metodo_implementado(){
        System.out.println("soy un metodo y no retorno");   
    }
    public static int suma(int a, int b){//paso de los parametro a y b del metodo principal 
        int c;
        c=a+b;
                System.out.println("soy una funcion y retorno");
        return c;   
    }  
}


  </pre>

 
</div>

<div class="btn-block">
  <a href="res5.php" class="btn btn-warning btn-block"> Vamos a realizar el examen.<br>super facil</a>
</div>









        </div>
      </div>
    </div>

  </div>
</div>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer >
   <nav class="navbar sticky-top navbar-light bg-dark justify-content-center">
  <a class="navbar-brand bg-dark" href="#"> &copy; Derechos recervados 2019 </a>
</nav>
</footer>
</html>