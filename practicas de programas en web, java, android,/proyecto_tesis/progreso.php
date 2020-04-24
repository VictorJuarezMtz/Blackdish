<?php include('conexion.php');?>

<?php 
 $clave=$_SESSION['id'];?> 
 <?php
$sql = "SELECT modulo_1,modulo_2,modulo_3,modulo_4,modulo_5 FROM inscrito WHERE id_usuario = '$clave'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_POST['m1'] = $row['modulo_1'];
			$_POST['m2'] = $row['modulo_2'];
			$_POST['m3'] = $row['modulo_3'];
			$_POST['m4'] = $row['modulo_4'];
			$_POST['m5'] = $row['modulo_5'];
			}

$r1=$_POST['m1'];
$r2=$_POST['m2'];
$r3=$_POST['m3'];
$r4=$_POST['m4'];
$r5=$_POST['m5'];

?>
  <script src="css/jquery.knob.js"></script>
  <script>
    $(document).ready(function() {
      $('.dial').knob({
 'format' : function (value) {
     return value + '%';
  },
        'min':0,
        'max':100,
        'width':200,
        'height':200,
        'displayInput':true,
        'fgColor':"#33E3FF",
        'release':function(v) {$("p").text(v);},
        'readOnly':true
      });
    });
  </script>
  <style>
    .container{
      margin:0 auto;
      text-align: center
    }
    
  </style>
<?php	
if ($r1>0) {
	# code...
	$var=20;
}
if ($r2>0) {
	# code...
	$var=40;
}
if ($r3>0) {
	# code...
	$var=60;
}
if ($r4>0) {
	# code...
	$var=80;
}
if ($r5>0) {
	# code...
	$var=100;
}
if ($r1<=0) {
	# code...
	$var=0;
}

?>



<div class="container ">
    <h5>Avance del curso de Fundamentos<br> de Programacion Java</h5>
    <input  type="text" value="<?php echo $var;?>" class="dial" data-thickness=".21"> 
  </div>