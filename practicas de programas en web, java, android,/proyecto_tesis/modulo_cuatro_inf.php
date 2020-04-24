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
<center><h3 style="color: white"> ORGANIZACION DE DATOS</h3></center>
 
  <div id="accordion" style=" color: white; " >


    <div class="card"  style="background-color:#2E3B40">

      <div class="card-header text-white" data-toggle="collapse" href="#collapseOne" style="cursor: pointer; background-color: #1985CE;">
      <h4>Tema 1 - arreglos</h4> 
      </div>

              <div id="collapseOne" class="collapse" data-parent="#accordion" ><!--class="collapse show"  -->
              <div class="card-body">
           
<div class="container">
  <p>Arreglo: Es un tipo de datos estructurado que está formado por una colección finita y ordenada de datos del mismo tipo. Los arreglos guardan en memoria la cantidad de espacios que se le indican en la declaración</p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/array_uni.mkv" type="video/mp4" />
</video>
  </div>
</div>



              </div>
              </div>

    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseTwo" style="cursor: pointer;background-color: #1985CE;">
       <h4>Tema 2 - unidimencional</h4> 
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">


                    <div class="container">
                      <div class="card-group"  >

                        <div class="card " style="background-color:#2E3B40">
                          <div class="card-body text-center">
                            <p class="card-text text-justify">
                              <strong>Los arreglos unidimencionales </strong><br>

Tambien pueden ser conocidos como vectores o arrays. Un ejemplo seria el siguiente: 
int miarreglo [] ={1,2,3,4};

  <img src="img/arreglo.jpg" class="mx-auto d-block" style="width:100%; height:80px;"> 

                            </p>
                          </div>
                        </div>
                        

 <div class="card" style="background-color:#2E3B40">
                          <div class="card-body text-center">
                            <p class="card-text text-justify">
                              <strong>  Caracteristicas de arreglos unidimencionales</strong><br>
                             
un arreglo unidimencional se caracterisa por modelar un listado de elementos iguales, arreglos se define como una coleccion finita, homogenea y ordenada de elementos.<br>
1 HOMOGENEA todos los elemntos deben ser del mismo tipo<br>
2 TAMAÑO FINITO el tamaño del array debe ser conocido en tiempo de <br>
3 ORDENADO debe haber un primer elemento, segundo elemento y sucesivamente.
4 FINITA debe terminar cual sera el numero maximo de elementos que forma parte del arreglo.<br>
                      </p>
                          
                          </div>
                        </div>
                      

                        



                        </div>  
                      </div>


                      <div class="container">
                      <div class="card-group">
                        




  <div class="card " style="background-color:#2E3B40">
                          <div class="card-body ">                          
  <strong>Algunas ventajas seria:</strong> <br>
  1 Son seguras<BR>
  2 Utiliza menos recursos del ordenador<BR>
  3 El acceso al los arreglos es directo, permite hacer un conjunto de operaciones para manipular datos<br>
  
    <strong>sus desventajas serian:</strong> <br>
  
  1 los datos deben de ser del mismo tipo<br>
  2 Para implementar arreglos se debe reservar un espacio de memoria, limitan en cuanto a la capacidad de maniobra<br>
                          </div>
                        </div>
  


                      </div>
                    </div>


          

        </div>
      </div>
    </div>


    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseThree" style="cursor: pointer; background-color: #1985CE;">
     <h4>Tema 3 - multidimencional</h4>  
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
       
<div class="container">
  <p> array_multiple </p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/arraysmultiples.mkv" type="video/mp4" />
</video>
  </div>
</div>

<br>
<div class="container">
    
     
  <h5>codigo del video: </h5>
  <pre style="color: white">

package array_multiple;
import java.util.Arrays;//importar

public class Array_multiple {

    public static void main(String[] args) {
        int arreglo_x[][];      //crear arreglo
        arreglo_x = new int[5][2];//tamaño del array
        int relleno = 0;//inicializar el relleno de las posiciones dentro de la matriz creada
        for (int i = 0; i < 5; i++) {//creamos un siclo for para las filas, length es para saber el valor maximo
            for (int j = 0; j < 2; j++) {//creamos un ciclo for para las columnas
                arreglo_x[i][j] = relleno;//p = asigna el relleno al arreglo
                relleno++;//incrementa el relleno
            }
            System.out.println(Arrays.toString(arreglo_x[i])); //imprime el arreglo
        }
    }
}

  </pre>

 
</div>



  <br>
<br>
<div class="btn-block">
  <a href="res4.php" class="btn btn-warning btn-block"> Vamos a realizar el examen.<br>super facil</a>
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


 