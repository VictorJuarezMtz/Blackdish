<?php
include('../conexion.php');
if( isset($_POST['correo']) && !empty($_POST['correo'])){
$correo=$_POST['correo'];
}
$e=$correo;
$sql = "SELECT correo, id  FROM usuario WHERE correo = '$e'";
$result=$mysqli->query($sql);
$rows = $result->num_rows;
if($rows > 0) {
$row = $result->fetch_assoc();
$_post['$correo'] = $row['correo'];
$_post['$id'] = $row['id'];}


$y=$_post['$id'];
$sql = "SELECT pw  FROM usuario WHERE id = '$y'";
$result=$mysqli->query($sql);
$rows = $result->num_rows;
if($rows > 0) {
$row = $result->fetch_assoc();
$_post['$pw'] = $row['pw'];}
?>

<?php
  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->IsHTML(TRUE);
$mail->CharSet = "UTF-8";
$mail->Encoding = "quoted-printable";
$mail->Username = 'fundamentosdeprogramacionjava@gmail.com'; //Correo de donde enviaremos los correos
$mail->Password = 'yoselin012345'; // Password de la cuenta de envío
$usuario=$_post['$correo'];


$mail->setFrom('156w0196@itszongolica.edu.mx', 'FUNDAMENTOS DE PROGRAMACION');
$mail->addReplyTo('156w0196@itszongolica.edu.mx', 'Your Name');

$mail->addAddress($usuario, 'Receiver Name');
$mail->Subject = 'Envio de contraseña de fundamentos de programacion java !!  ';
$mensaje ="<H5>SU CONTRASEÑA ES:</H5> \n ";
$mensaje .=$_post['$pw'];
$mail->Body=$mensaje;
if($mail->send()){
echo "<script>window.location='../email/email.php'; alert(\"Se ha enviado la contrase\u00F1a al correo.\");</script>";
}else{
   // echo "<script>window.location='../email/email.php'; alert(\"NO EXISTE CORREO\");</script>";
}
?>