<?php
include('../modelo/crud_libro.php');
include('../modelo/libro.php');
$crud= new CrudLibro();
$libro= new Libro();
include('../vista/ingresar.php');	

?>