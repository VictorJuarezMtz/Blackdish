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
<body  class="" style="background:#2E3B40;"><!--background: #f1f1f1; -->
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
<center><h3 style="color: white">INTRODUCCION A LA PROGRAMACION EN JAVA</h3></center>
 
  <div id="accordion" style=" color: white; " >


    <div class="card"  style="background-color:#2E3B40">

      <div class="card-header text-white" data-toggle="collapse" href="#collapseOne" style="cursor: pointer; background-color: #1985CE;">
     <h4>Tema 1 - conceptos basicos</h4> 
      </div>

              <div id="collapseOne" class="collapse" data-parent="#accordion" >
              <div class="card-body">
                                      

                    <div class="container">
                      <div class="card-group"  >
                           <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que es un objeto ?</strong> <br>
                          Es un elemento de software que intenta representar un objeto del mundo real. De esta forma un objeto tendrá sus propiedades y acciones a realizar con el objeto. Estas propiedades y acciones están encapsuladas dentro del objeto, cumpliendo así los principios de encapsulamiento. el objeto tiene (estado, comportamiento, caracteristica)
                           </p>
                           </div>
                           </div>
                        
                        <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> Ejemplos de objeto </strong> <br>
                          Cualquier concepto del mundo real se puede modelar como un objeto con su estado y comportamiento. Por ejemplo un televisor es un objeto**, cuyos estados pueden ser: *encendida, apagada, en el canal1, en el canal2, grabando,… y sus acciones serán “encender televisor”, “apagar televisor”, “cambiar de canal”, “iniciar la grabación”.
                           </p>
                           </div>
                           </div>
                        </div>  
                      </div>

<div class="container">
                      <div class="card-group"  >
                           <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> El uso de objetos nos proporciona los siguientes beneficios:</strong> <br>
                         Modularidad, el objeto y sus propiedades puede ser pasado por diferentes estructuras del código fuente, pero el objeto es el mismo.
                          Encapsular Datos, ocultamos la implementación de propiedades del objeto ya que accederemos a través de los métodos del objeto.
                          Reutilización de Código, podemos tener diferentes instancias de un objeto de tal manera que esas diferentes instancias están compartiendo el mismo código.
                          Reemplazo, podemos reemplazar un objeto por otro siempre y cuando estos objetos tengan el mismo comportamiento.
                           </p>
                           </div>
                           </div>
                        
                        <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que reprecenta una clase ? </strong> <br>
                         Las clases representan los prototipos de los objetos que tenemos en el mundo real. Es decir, es una generalización de un conjunto de objetos. A su vez los objetos serán instancias de una determinada clase.
                           </p>
                           </div>
                           </div>
                        </div>  
                      </div>


                    <div class="container">
                      <div class="card-group"  >
                           <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que permite la encapsulación de datos ?</strong> <br>
                          Las interacciones con los objetos se hacen mediante los métodos. Es decir, si queremos conocer información del estado del objeto deberemos de llamar a uno de sus métodos y no directamente a las propiedades.

                          Esta encapsulación nos permitiría el cambiar las propiedades del objeto sin que los consumidores se vean afectados siempre y cuando les sigamos retornando el mismo resultado.

                          Si bien hay objetos que tienen propiedades públicas, por lo cual podremos acceder directamente a dichas propiedades sin necesidad de utilizar un método.
                           </p>
                           </div>
                           </div>
                        
                        <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que es una interfaz ? </strong> <br>
                         Un interface es una forma de establecer un contrato entre dos elementos. Un interface indica qué acciones son las que una determinada clase nos va a ofrecer cuando vayamos a utilizarla.
                           </p>
                           </div>
                           </div>
                        </div>  
                      </div>
                


   <div class="container">
                      <div class="card-group"  >
                           <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que es la herencia ?</strong> <br>
                         La herencia es una forma de estructurar el software. Mediante la herencia podemos indicar que una clase hereda de otra. Es decir la clase extiende las capacidades (propiedades y métodos) que tenga y añade nuevas propiedades y acciones.<br>Ejemplo <br>public class Triangulo extends Poligono {
    ...
}
                           </p>
                           </div>
                           </div>
                        
                        <div class="card " style="background-color:#2E3B40">
                           <div class="card-body text-center">
                           <p class="card-text text-justify">
                          <strong> ¿Que es un paquete en java ? </strong> <br>
                       
                            Un paquete es una forma de organizar elementos de software mediante un espacio de nombres. Así podremos afrontar desarrollos grandes de software facilitando la forma de encontrar o referirnos a un elemento.
                            <br>Ejemplo:<br> package net.manualweb.java.ejemplos;
                           </p>
                           </div>
                           </div>
                        </div>  
                      </div>

                     


              </div>
              </div>

    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseTwo" style="cursor: pointer;background-color: #1985CE;">
      <h4>Tema 2 - caracteristicas del lenguaje de programacion</h4>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">

           

  <div class="container">
  <p>caracteristicas de java:</p>
  <div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/caracteristicas-de-java-upv.mp4" type="video/mp4" />
</video>
  </div>
</div>

<br><br>
<div class="container">
  <p>Visualizar el video de como instalar java, en caso de ya haberlo instalado omita el video:
<br><a href="https://netbeans.org/downloads/8.2/
">Direccion de netbeans</a>
<br>
<a href="https://www.oracle.com/technetwork/es/java/javase/downloads/jdk-netbeans-jsp-3413139-esa.html">Direccion del JDK</a>

  </p>
  <div class="embed-responsive embed-responsive-16by9">
   

    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/instalar-netbeans-82-y-jdk-2018.mp4" type="video/mp4" />
</video>
  </div>
</div>







        </div>
      </div>
    </div>


    <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseThree" style="cursor: pointer; background-color: #1985CE;">
       <h4>Tema 3 - estructura básica de un programa</h4>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
         
  <div class="container">
  <p>Estructura de un programa</p>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6XAWUw9wh00"></iframe>
  </div>
</div>



        </div>
      </div>
    </div>

 <div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseFour" style="cursor: pointer; background-color: #1985CE;">
      <h4> Tema 4 - elementos del lenguaje</h4>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">

<div class="container">
  <p>Tipos de datos </p>
  <div class="embed-responsive embed-responsive-16by9">
   

    <video class="video-fluid z-depth-1"  controls >
  <source src="videos/TiposdeDatos.mp4" type="video/mp4" />
</video>
  </div>
</div>



        </div>
      </div>
    </div>

<div class="card" style="background-color: #2E3B40;">
      <div class="card-header text-white" data-toggle="collapse" href="#collapseFive" style="cursor: pointer; background-color: #1985CE;">
      <h4> Tema 5 - traduccion de un programa</h4>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">

                                <div class="container">
                                <div class="card-group">
                                <div class="card" style="background-color:#2E3B40">
                                      <div class="card-body text-center">
                                        <p class="card-text text-justify">
                                          <strong>¿ Que es un conpilador ?</strong><br> 
                                          Es un programa que permite traducir el código fuente de un programa en lenguaje de alto nivel, a otro lenguaje de nivel inferior (típicamente lenguaje de máquina). De esta manera un programador puede diseñar un programa en un lenguaje mucho más cercano a cómo piensa un ser humano, para luego compilarlo a un programa más manejable por una computadora.
                                        </p>
                                      </div>
                                    </div>
                                    <div class="card " style="background-color:#2E3B40">
                                      <div class="card-body text-center">
                                        <p class="card-text text-justify">
                                        <strong>¿ Que es un enlace ?</strong><br> 
                                       
                                        Montador o enlazador (Linker ): Es el programa encargado de insertar al programa objeto el código máquina de las funciones de las librerías (archivos de biblioteca) usadas en el programa y realizar el proceso de montaje, que producirá un programa ejecutable .exe. Las librerías son una colección de código (funciones) ya programado y traducido a código máquina, listo para utilizar en un programa y que facilita la labor del programador.
                                        </p>
                                      </div>
                                    </div>

                                    </div>
                                    </div>

                                       <div class="container">
                                <div class="card-group">
                                <div class="card" style="background-color:#2E3B40">
                                      <div class="card-body text-center">
                                        <p class="card-text text-justify">
                                          <strong>  ¿ Que son los errores o por que se producen ?</strong><br> 
                                        
Los errores que se pueden producir en la fase de compilación son: − Errores fatales: Son raros. Indican errores internos del compilador. Cuando ocurre la compilación se detiene inmediatamente. − Errores de sintaxis: Son los errores típicos de sintaxis. No detienen la compilación sino que al finalizar ésta se mostrará la lista con todos los errores encontrados. Algunos errores suelen ser consecuencia de otros cometidos con anterioridad. Con este tipo de errores no se puede obtener un programa objeto y por lo tanto tampoco el ejecutable. − Advertencias o avisos (warnings): Indican que hay líneas de código sospechosas que a pesar de no infringir ninguna regla sintáctica, el compilador las encuentra susceptibles de provocar un error. Cuando se detecta un warning la compilación no se detiene. Si en un programa fuente sólo se detectan warnings, se podrá obtener un programa objeto, que tras el linkado dará lugar a un programa ejecutable.
                                        </p>
                                      </div>
                                    </div>
                              
                                    </div>
                                    </div>   
 <center>                    
<P>Realiza el test para evaluar lo aprendido en el modulo, mucho exito chicos!! </P>

  <div class="btn-block">
  <a href="res2.php" class="btn btn-warning btn-block"> Vamos a realizar el examen.<br>super facil</a>
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