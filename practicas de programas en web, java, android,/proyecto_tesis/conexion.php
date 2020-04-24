<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "academia_itsz";
 $mysqli=new mysqli($servername,$username,$password,$dbname);
 $acentos = $mysqli->query("SET NAMES 'utf8'");
?>