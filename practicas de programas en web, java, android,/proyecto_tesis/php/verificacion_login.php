<?php
	require('../conexion.php');
	session_start();
	echo "";
	if(isset($_SESSION["id"])){
		header("Location: ../index.php");
	}
	if(!empty($_POST))
	{
		$correo = mysqli_real_escape_string($mysqli,$_POST['correo']);
		    $pw = mysqli_real_escape_string($mysqli,$_POST['pw']);
		$error = '';
		$sha1_pass = $pw;
		$sql = "SELECT id, tipo, nombre, correo FROM usuario WHERE correo = '$correo' AND pw = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id'] = $row['id'];
			$_SESSION['tipo'] = $row['tipo'];
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['correo2'] = $row['correo'];
			$variable1 = "0";
			switch ($_SESSION['tipo']) {
				case 'ALUMNO':
				header("location: ../welcome.php");
					break;
				case 'MAESTRO':
				header("location: ../welcome_teacher.php");
					break;
					case 'ADMIN':
				header("location: ../admin.php");
					break;
			}
			} 
			else {
                   
                       	header("location: ../indexfallopassword.php");
		}

$boton='0';

if ($boton='0'){
	echo "mal";

}else{
	



}

if ($boton='0'){
	echo "mal";

}else{
	//modulo 5
$f=array(67,68,69,70,71,72,73,74,75,76,77,78);
$random_keys=array_rand($f,11);
$m5a= $f[$random_keys[0]];
$m5b= $f[$random_keys[1]];
$m5c= $f[$random_keys[2]];
$m5d= $f[$random_keys[4]];
$m5e= $f[$random_keys[5]];
$m5f= $f[$random_keys[6]];
$m5g= $f[$random_keys[7]];
$m5h= $f[$random_keys[8]];
$m5i= $f[$random_keys[9]];
$m5j= $f[$random_keys[10]];

//modulo 4
$d=array(54,55,56,57,58,59,60,61,62,63,64,65,66);
$random_keys=array_rand($d,11);
$m4a= $d[$random_keys[0]];
$m4b= $d[$random_keys[1]];
$m4c= $d[$random_keys[2]];
$m4d= $d[$random_keys[4]];
$m4e= $d[$random_keys[5]];
$m4f= $d[$random_keys[6]];
$m4g= $d[$random_keys[7]];

$m4h= $d[$random_keys[8]];
$m4i= $d[$random_keys[9]];
$m4j= $d[$random_keys[10]];


//modulo 3
$a=array(36,37,38,39,40,41,42,43,44,45,47);
$random_keys=array_rand($a,11);
$m3a= $a[$random_keys[0]];
$m3b= $a[$random_keys[1]];
$m3c= $a[$random_keys[2]];
$m3d= $a[$random_keys[4]];
$m3e= $a[$random_keys[5]];
$m3f= $a[$random_keys[6]];
$m3g= $a[$random_keys[7]];

$m3h= $a[$random_keys[8]];
$m3i= $a[$random_keys[9]];
$m3j= $a[$random_keys[10]];
	
$a=array(16,17,18,19,20,21,22,23,24,25,27,28,29,30,31,32,33,34,35);
$random_keys=array_rand($a,11);
$ma= $a[$random_keys[0]];
$mb= $a[$random_keys[1]];
$mc= $a[$random_keys[2]];
$md= $a[$random_keys[4]];
$me= $a[$random_keys[5]];
$mf= $a[$random_keys[6]];
$mg= $a[$random_keys[7]];

$mh= $a[$random_keys[8]];
$mi= $a[$random_keys[9]];
$mj= $a[$random_keys[10]];


$b=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
$random_keys=array_rand($b,11);
$a1= $b[$random_keys[0]];
$b1= $b[$random_keys[1]];
$c= $b[$random_keys[2]];
$d= $b[$random_keys[4]];
$e= $b[$random_keys[5]];
$aa= $b[$random_keys[6]];
$bb= $b[$random_keys[7]];

$cc= $b[$random_keys[8]];
$dd= $b[$random_keys[9]];
$ee= $b[$random_keys[10]];



}


$sql = "SELECT idp  FROM pregunta WHERE idp = '$a1'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$a'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$b1'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$b'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$c'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$c'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$d'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$d'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$e'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$e'] = $row['idp']; }






/*aqui vamos a jalar el examen o las preguntas*/
$sql = "SELECT idp  FROM pregunta WHERE idp = '$aa'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$aa'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$bb'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$bb'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$cc'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$cc'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$dd'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$dd'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$ee'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$ee'] = $row['idp']; }



$sql = "SELECT idp  FROM pregunta WHERE idp = '$mf'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mf'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$mg'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mg'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$mh'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mh'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$mi'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mi'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$mj'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mj'] = $row['idp']; }


$sql = "SELECT idp  FROM pregunta WHERE idp = '$ma'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$ma'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$mb'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mb'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$mc'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$mc'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$md'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$md'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$me'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$me'] = $row['idp']; }


//-----------------------tercer examem--------------------------------

			/*aqui vamos a jalar el examen o las preguntas*/

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3f'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3f'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3g'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3g'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3h'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3h'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3i'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3i'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3j'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3j'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3a'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3a'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3b'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3b'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3c'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3c'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3d'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3d'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m3e'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m3e'] = $row['idp']; }


$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4f'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4f'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4g'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4g'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4h'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4h'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4i'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4i'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4j'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4j'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4a'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4a'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4b'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4b'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4c'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4c'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4d'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4d'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m4e'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m4e'] = $row['idp']; }


$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5f'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5f'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5g'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5g'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5h'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5h'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5i'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5i'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5j'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5j'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5a'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5a'] = $row['idp']; } 

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5b'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5b'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5c'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5c'] = $row['idp']; }
$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5d'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5d'] = $row['idp']; }

$sql = "SELECT idp  FROM pregunta WHERE idp = '$m5e'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['$m5e'] = $row['idp']; }






	}
?>