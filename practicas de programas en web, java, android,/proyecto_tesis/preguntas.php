<?php 
$a = $_SESSION['$a'];
$b = $_SESSION['$b'];
$c = $_SESSION['$c'];
$d = $_SESSION['$d'];
$e = $_SESSION['$e'];

$aa = $_SESSION['$aa'];
$bb = $_SESSION['$bb'];
$cc = $_SESSION['$cc'];
$dd = $_SESSION['$dd'];
$ee = $_SESSION['$ee'];


/*modulo 2*/
$a16 = $_SESSION['$ma'];
$b17 = $_SESSION['$mb'];
$c18 = $_SESSION['$mc'];
$d19 = $_SESSION['$md'];
$e20 = $_SESSION['$me'];

$aa21 = $_SESSION['$mf'];
$bb22 = $_SESSION['$mg'];
$cc23 = $_SESSION['$mh'];
$dd24 = $_SESSION['$mi'];
$ee25 = $_SESSION['$mj'];
//modulo 3

$a26 = $_SESSION['$m3a'];

$b27= $_SESSION['$m3b'];
$c28 = $_SESSION['$m3c'];
$d29 = $_SESSION['$m3d'];
$e30 = $_SESSION['$m3e'];

$aa31 = $_SESSION['$m3f'];
$bb32 = $_SESSION['$m3g'];
$cc33 = $_SESSION['$m3h'];
$dd34 = $_SESSION['$m3i'];
$ee35 = $_SESSION['$m3j'];

//modulo 4

$a36 = $_SESSION['$m4a'];

$b37= $_SESSION['$m4b'];
$c38 = $_SESSION['$m4c'];
$d39 = $_SESSION['$m4d'];
$e40 = $_SESSION['$m4e'];

$aa41 = $_SESSION['$m4f'];
$bb42 = $_SESSION['$m4g'];
$cc43 = $_SESSION['$m4h'];
$dd44 = $_SESSION['$m4i'];
$ee45 = $_SESSION['$m4j'];


//modulo 5

$a46 = $_SESSION['$m5a'];
$b47= $_SESSION['$m5b'];
$c48 = $_SESSION['$m5c'];
$d49 = $_SESSION['$m5d'];
$e50 = $_SESSION['$m5e'];

$aa51 = $_SESSION['$m5f'];
$bb52 = $_SESSION['$m5g'];
$cc53 = $_SESSION['$m5h'];
$dd54 = $_SESSION['$m5i'];
$ee55 = $_SESSION['$m5j'];

?>


 
 <?php
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$a'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp'] = $row['idp'];
            $_POST['nombre_p'] = $row['nombre_p'];
            $_POST['uno'] = $row['uno'];
            $_POST['dos'] = $row['dos'];
            $_POST['tres'] = $row['tres'];  
            $_POST['cuatro'] = $row['cuatro'];  
            $_POST['respuesta'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$b'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp2'] = $row['idp'];
            $_POST['nombre_p2'] = $row['nombre_p'];
            $_POST['uno2'] = $row['uno'];
            $_POST['dos2'] = $row['dos'];
            $_POST['tres2'] = $row['tres']; 
            $_POST['cuatro2'] = $row['cuatro']; 
            $_POST['respuesta2'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$c'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp3'] = $row['idp'];
            $_POST['nombre_p3'] = $row['nombre_p'];
            $_POST['uno3'] = $row['uno'];
            $_POST['dos3'] = $row['dos'];
            $_POST['tres3'] = $row['tres']; 
            $_POST['cuatro3'] = $row['cuatro']; 
            $_POST['respuesta3'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$d'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp4'] = $row['idp'];
            $_POST['nombre_p4'] = $row['nombre_p'];
            $_POST['uno4'] = $row['uno'];
            $_POST['dos4'] = $row['dos'];
            $_POST['tres4'] = $row['tres']; 
            $_POST['cuatro4'] = $row['cuatro']; 
            $_POST['respuesta4'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$e'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp5'] = $row['idp'];
            $_POST['nombre_p5'] = $row['nombre_p'];
            $_POST['uno5'] = $row['uno'];
            $_POST['dos5'] = $row['dos'];
            $_POST['tres5'] = $row['tres']; 
            $_POST['cuatro5'] = $row['cuatro']; 
            $_POST['respuesta5'] = $row['respuesta'];
            }










$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$aa'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp6'] = $row['idp'];
            $_POST['nombre_p6'] = $row['nombre_p'];
            $_POST['uno6'] = $row['uno'];
            $_POST['dos6'] = $row['dos'];
            $_POST['tres6'] = $row['tres'];  
            $_POST['cuatro6'] = $row['cuatro'];  
            $_POST['respuesta6'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$bb'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp7'] = $row['idp'];
            $_POST['nombre_p7'] = $row['nombre_p'];
            $_POST['uno7'] = $row['uno'];
            $_POST['dos7'] = $row['dos'];
            $_POST['tres7'] = $row['tres']; 
            $_POST['cuatro7'] = $row['cuatro']; 
            $_POST['respuesta7'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$cc'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp8'] = $row['idp'];
            $_POST['nombre_p8'] = $row['nombre_p'];
            $_POST['uno8'] = $row['uno'];
            $_POST['dos8'] = $row['dos'];
            $_POST['tres8'] = $row['tres']; 
            $_POST['cuatro8'] = $row['cuatro']; 
            $_POST['respuesta8'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$dd'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp9'] = $row['idp'];
            $_POST['nombre_p9'] = $row['nombre_p'];
            $_POST['uno9'] = $row['uno'];
            $_POST['dos9'] = $row['dos'];
            $_POST['tres9'] = $row['tres']; 
            $_POST['cuatro9'] = $row['cuatro']; 
            $_POST['respuesta9'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$ee'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp10'] = $row['idp'];
            $_POST['nombre_p10'] = $row['nombre_p'];
            $_POST['uno10'] = $row['uno'];
            $_POST['dos10'] = $row['dos'];
            $_POST['tres10'] = $row['tres']; 
            $_POST['cuatro10'] = $row['cuatro']; 
            $_POST['respuesta10'] = $row['respuesta'];
            }




$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$a16'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp16'] = $row['idp'];
            $_POST['nombre_p16'] = $row['nombre_p'];
            $_POST['uno16'] = $row['uno'];
            $_POST['dos16'] = $row['dos'];
            $_POST['tres16'] = $row['tres'];  
            $_POST['cuatro16'] = $row['cuatro'];  
            $_POST['respuesta16'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$b17'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp17'] = $row['idp'];
            $_POST['nombre_p17'] = $row['nombre_p'];
            $_POST['uno17'] = $row['uno'];
            $_POST['dos17'] = $row['dos'];
            $_POST['tres17'] = $row['tres']; 
            $_POST['cuatro17'] = $row['cuatro']; 
            $_POST['respuesta17'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$c18'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp18'] = $row['idp'];
            $_POST['nombre_p18'] = $row['nombre_p'];
            $_POST['uno18'] = $row['uno'];
            $_POST['dos18'] = $row['dos'];
            $_POST['tres18'] = $row['tres']; 
            $_POST['cuatro18'] = $row['cuatro']; 
            $_POST['respuesta18'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$d19'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp19'] = $row['idp'];
            $_POST['nombre_p19'] = $row['nombre_p'];
            $_POST['uno19'] = $row['uno'];
            $_POST['dos19'] = $row['dos'];
            $_POST['tres19'] = $row['tres']; 
            $_POST['cuatro19'] = $row['cuatro']; 
            $_POST['respuesta19'] = $row['respuesta'];
            }
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$e20'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp20'] = $row['idp'];
            $_POST['nombre_p20'] = $row['nombre_p'];
            $_POST['uno20'] = $row['uno'];
            $_POST['dos20'] = $row['dos'];
            $_POST['tres20'] = $row['tres']; 
            $_POST['cuatro20'] = $row['cuatro']; 
            $_POST['respuesta20'] = $row['respuesta'];
            }










$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$aa21'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp21'] = $row['idp'];
            $_POST['nombre_p21'] = $row['nombre_p'];
            $_POST['uno21'] = $row['uno'];
            $_POST['dos21'] = $row['dos'];
            $_POST['tres21'] = $row['tres'];  
            $_POST['cuatro21'] = $row['cuatro'];  
            $_POST['respuesta21'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$bb22'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['id22'] = $row['idp'];
            $_POST['nombre_p22'] = $row['nombre_p'];
            $_POST['uno22'] = $row['uno'];
            $_POST['dos22'] = $row['dos'];
            $_POST['tres22'] = $row['tres']; 
            $_POST['cuatro22'] = $row['cuatro']; 
            $_POST['respuesta22'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$cc23'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp23'] = $row['idp'];
            $_POST['nombre_p23'] = $row['nombre_p'];
            $_POST['uno23'] = $row['uno'];
            $_POST['dos23'] = $row['dos'];
            $_POST['tres23'] = $row['tres']; 
            $_POST['cuatro23'] = $row['cuatro']; 
            $_POST['respuesta23'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$dd24'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp24'] = $row['idp'];
            $_POST['nombre_p24'] = $row['nombre_p'];
            $_POST['uno24'] = $row['uno'];
            $_POST['dos24'] = $row['dos'];
            $_POST['tres24'] = $row['tres']; 
            $_POST['cuatro24'] = $row['cuatro']; 
            $_POST['respuesta24'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$ee25'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp25'] = $row['idp'];
            $_POST['nombre_p25'] = $row['nombre_p'];
            $_POST['uno25'] = $row['uno'];
            $_POST['dos25'] = $row['dos'];
            $_POST['tres25'] = $row['tres']; 
            $_POST['cuatro25'] = $row['cuatro']; 
            $_POST['respuesta25'] = $row['respuesta'];
            }



$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$a26'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp26'] = $row['idp'];
            $_POST['nombre_p26'] = $row['nombre_p'];
            $_POST['uno26'] = $row['uno'];
            $_POST['dos26'] = $row['dos'];
            $_POST['tres26'] = $row['tres'];  
            $_POST['cuatro26'] = $row['cuatro'];  
            $_POST['respuesta26'] = $row['respuesta'];
            }
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$b27'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp27'] = $row['idp'];
            $_POST['nombre_p27'] = $row['nombre_p'];
            $_POST['uno27'] = $row['uno'];
            $_POST['dos27'] = $row['dos'];
            $_POST['tres27'] = $row['tres']; 
            $_POST['cuatro27'] = $row['cuatro']; 
            $_POST['respuesta27'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$c28'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp28'] = $row['idp'];
            $_POST['nombre_p28'] = $row['nombre_p'];
            $_POST['uno28'] = $row['uno'];
            $_POST['dos28'] = $row['dos'];
            $_POST['tres28'] = $row['tres']; 
            $_POST['cuatro28'] = $row['cuatro']; 
            $_POST['respuesta28'] = $row['respuesta'];
            }
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$d29'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp29'] = $row['idp'];
            $_POST['nombre_p29'] = $row['nombre_p'];
            $_POST['uno29'] = $row['uno'];
            $_POST['dos29'] = $row['dos'];
            $_POST['tres29'] = $row['tres']; 
            $_POST['cuatro29'] = $row['cuatro']; 
            $_POST['respuesta29'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$e30'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp30'] = $row['idp'];
            $_POST['nombre_p30'] = $row['nombre_p'];
            $_POST['uno30'] = $row['uno'];
            $_POST['dos30'] = $row['dos'];
            $_POST['tres30'] = $row['tres']; 
            $_POST['cuatro30'] = $row['cuatro']; 
            $_POST['respuesta30'] = $row['respuesta'];
            }




$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$aa31'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp31'] = $row['idp'];
            $_POST['nombre_p31'] = $row['nombre_p'];
            $_POST['uno31'] = $row['uno'];
            $_POST['dos31'] = $row['dos'];
            $_POST['tres31'] = $row['tres'];  
            $_POST['cuatro31'] = $row['cuatro'];  
            $_POST['respuesta31'] = $row['respuesta'];
            }
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$bb32'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['id32'] = $row['idp'];
            $_POST['nombre_p32'] = $row['nombre_p'];
            $_POST['uno32'] = $row['uno'];
            $_POST['dos32'] = $row['dos'];
            $_POST['tres32'] = $row['tres']; 
            $_POST['cuatro32'] = $row['cuatro']; 
            $_POST['respuesta32'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$cc33'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp33'] = $row['idp'];
            $_POST['nombre_p33'] = $row['nombre_p'];
            $_POST['uno33'] = $row['uno'];
            $_POST['dos33'] = $row['dos'];
            $_POST['tres33'] = $row['tres']; 
            $_POST['cuatro33'] = $row['cuatro']; 
            $_POST['respuesta33'] = $row['respuesta'];
            }
$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$dd34'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp34'] = $row['idp'];
            $_POST['nombre_p34'] = $row['nombre_p'];
            $_POST['uno34'] = $row['uno'];
            $_POST['dos34'] = $row['dos'];
            $_POST['tres34'] = $row['tres']; 
            $_POST['cuatro34'] = $row['cuatro']; 
            $_POST['respuesta34'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$ee35'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp35'] = $row['idp'];
            $_POST['nombre_p35'] = $row['nombre_p'];
            $_POST['uno35'] = $row['uno'];
            $_POST['dos35'] = $row['dos'];
            $_POST['tres35'] = $row['tres']; 
            $_POST['cuatro35'] = $row['cuatro']; 
            $_POST['respuesta35'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$a36'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp36'] = $row['idp'];
            $_POST['nombre_p36'] = $row['nombre_p'];
            $_POST['uno36'] = $row['uno'];
            $_POST['dos36'] = $row['dos'];
            $_POST['tres36'] = $row['tres'];  
            $_POST['cuatro36'] = $row['cuatro'];  
            $_POST['respuesta36'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$b37'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp37'] = $row['idp'];
            $_POST['nombre_p37'] = $row['nombre_p'];
            $_POST['uno37'] = $row['uno'];
            $_POST['dos37'] = $row['dos'];
            $_POST['tres37'] = $row['tres']; 
            $_POST['cuatro37'] = $row['cuatro']; 
            $_POST['respuesta37'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$c38'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp38'] = $row['idp'];
            $_POST['nombre_p38'] = $row['nombre_p'];
            $_POST['uno38'] = $row['uno'];
            $_POST['dos38'] = $row['dos'];
            $_POST['tres38'] = $row['tres'];
            $_POST['cuatro38'] = $row['cuatro']; 
            $_POST['respuesta38'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$d39'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp39'] = $row['idp'];
            $_POST['nombre_p39'] = $row['nombre_p'];
            $_POST['uno39'] = $row['uno'];
            $_POST['dos39'] = $row['dos'];
            $_POST['tres39'] = $row['tres']; 
            $_POST['cuatro39'] = $row['cuatro']; 
            $_POST['respuesta39'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$e40'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp40'] = $row['idp'];
            $_POST['nombre_p40'] = $row['nombre_p'];
            $_POST['uno40'] = $row['uno'];
            $_POST['dos40'] = $row['dos'];
            $_POST['tres40'] = $row['tres']; 
            $_POST['cuatro40'] = $row['cuatro']; 
            $_POST['respuesta40'] = $row['respuesta'];
            }










$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$aa41'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp41'] = $row['idp'];
            $_POST['nombre_p41'] = $row['nombre_p'];
            $_POST['uno41'] = $row['uno'];
            $_POST['dos41'] = $row['dos'];
            $_POST['tres41'] = $row['tres'];  
            $_POST['cuatro41'] = $row['cuatro'];  
            $_POST['respuesta41'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$bb42'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['id42'] = $row['idp'];
            $_POST['nombre_p42'] = $row['nombre_p'];
            $_POST['uno42'] = $row['uno'];
            $_POST['dos42'] = $row['dos'];
            $_POST['tres42'] = $row['tres']; 
            $_POST['cuatro42'] = $row['cuatro']; 
            $_POST['respuesta42'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$cc43'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp43'] = $row['idp'];
            $_POST['nombre_p43'] = $row['nombre_p'];
            $_POST['uno43'] = $row['uno'];
            $_POST['dos43'] = $row['dos'];
            $_POST['tres43'] = $row['tres']; 
            $_POST['cuatro43'] = $row['cuatro']; 
            $_POST['respuesta43'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$dd44'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp44'] = $row['idp'];
            $_POST['nombre_p44'] = $row['nombre_p'];
            $_POST['uno44'] = $row['uno'];
            $_POST['dos44'] = $row['dos'];
            $_POST['tres44'] = $row['tres']; 
            $_POST['cuatro44'] = $row['cuatro']; 
            $_POST['respuesta44'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$ee45'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp45'] = $row['idp'];
            $_POST['nombre_p45'] = $row['nombre_p'];
            $_POST['uno45'] = $row['uno'];
            $_POST['dos45'] = $row['dos'];
            $_POST['tres45'] = $row['tres']; 
            $_POST['cuatro45'] = $row['cuatro']; 
            $_POST['respuesta45'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$a46'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp46'] = $row['idp'];
            $_POST['nombre_p46'] = $row['nombre_p'];
            $_POST['uno46'] = $row['uno'];
            $_POST['dos46'] = $row['dos'];
            $_POST['tres46'] = $row['tres'];  
            $_POST['cuatro46'] = $row['cuatro'];  
            $_POST['respuesta46'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$b47'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp47'] = $row['idp'];
            $_POST['nombre_p47'] = $row['nombre_p'];
            $_POST['uno47'] = $row['uno'];
            $_POST['dos47'] = $row['dos'];
            $_POST['tres47'] = $row['tres']; 
            $_POST['cuatro47'] = $row['cuatro']; 
            $_POST['respuesta47'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$c48'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp48'] = $row['idp'];
            $_POST['nombre_p48'] = $row['nombre_p'];
            $_POST['uno48'] = $row['uno'];
            $_POST['dos48'] = $row['dos'];
            $_POST['tres48'] = $row['tres'];
            $_POST['cuatro48'] = $row['cuatro']; 
            $_POST['respuesta48'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$d49'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp49'] = $row['idp'];
            $_POST['nombre_p49'] = $row['nombre_p'];
            $_POST['uno49'] = $row['uno'];
            $_POST['dos49'] = $row['dos'];
            $_POST['tres49'] = $row['tres']; 
            $_POST['cuatro49'] = $row['cuatro']; 
            $_POST['respuesta49'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$e50'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp50'] = $row['idp'];
            $_POST['nombre_p50'] = $row['nombre_p'];
            $_POST['uno50'] = $row['uno'];
            $_POST['dos50'] = $row['dos'];
            $_POST['tres50'] = $row['tres']; 
            $_POST['cuatro50'] = $row['cuatro']; 
            $_POST['respuesta50'] = $row['respuesta'];
            }










$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$aa51'";

        $result=$mysqli->query($sql);
        $rows = $result->num_rows;

        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp51'] = $row['idp'];
            $_POST['nombre_p51'] = $row['nombre_p'];
            $_POST['uno51'] = $row['uno'];
            $_POST['dos51'] = $row['dos'];
            $_POST['tres51'] = $row['tres'];  
            $_POST['cuatro51'] = $row['cuatro'];  
            $_POST['respuesta51'] = $row['respuesta'];
            }


$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$bb52'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['id52'] = $row['idp'];
            $_POST['nombre_p52'] = $row['nombre_p'];
            $_POST['uno52'] = $row['uno'];
            $_POST['dos52'] = $row['dos'];
            $_POST['tres52'] = $row['tres']; 
            $_POST['cuatro52'] = $row['cuatro']; 
            $_POST['respuesta52'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$cc53'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp53'] = $row['idp'];
            $_POST['nombre_p53'] = $row['nombre_p'];
            $_POST['uno53'] = $row['uno'];
            $_POST['dos53'] = $row['dos'];
            $_POST['tres53'] = $row['tres']; 
            $_POST['cuatro53'] = $row['cuatro']; 
            $_POST['respuesta53'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$dd54'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp54'] = $row['idp'];
            $_POST['nombre_p54'] = $row['nombre_p'];
            $_POST['uno54'] = $row['uno'];
            $_POST['dos54'] = $row['dos'];
            $_POST['tres54'] = $row['tres']; 
            $_POST['cuatro54'] = $row['cuatro']; 
            $_POST['respuesta54'] = $row['respuesta'];
            }

$sql = "SELECT idp, nombre_p, uno, dos, tres,cuatro, respuesta FROM pregunta WHERE idp = '$ee55'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_POST['idp55'] = $row['idp'];
            $_POST['nombre_p55'] = $row['nombre_p'];
            $_POST['uno55'] = $row['uno'];
            $_POST['dos55'] = $row['dos'];
            $_POST['tres55'] = $row['tres']; 
            $_POST['cuatro55'] = $row['cuatro']; 
            $_POST['respuesta55'] = $row['respuesta'];
            }

   ?>