<?php
// funcion de mailer comunacha
$mensaje="";
if($_REQUEST['mensaje']){$mensaje=$_REQUEST['mensaje'];}
$nombre="";
if($_REQUEST['nombre']){$nombre=$_REQUEST['nombre'];}
$email="";
if($_REQUEST['email']){$email=$_REQUEST['email'];}
$asunto = "";
if($_REQUEST['asunto']){$email=$_REQUEST['asunto'];}
//datos basicones

require_once("./PHPmailer/class.phpmailer.php");
var_dump($nombre);

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
// aca va a donde va a parar el mail
$mail->AddAddress("nicolasperez95.a@gmail.com", "MBI");
// a donde vamos a parar :8
$mail->AddReplyTo($email, $nombre);
$mail->From = $nombre;
$mail->FromMail = $email;
$mail->FromName = 'MBI Ingenieria';
$mail->Subject = $asunto;

$mail->Body = $mensaje;

if(!$mail->Send())
{
    print_r(error_get_last());
    echo "<br>";
    $email->ErrorInfo;
}
else
{
    echo '<p>Se ha enviado correctamente el email!</p>';
}
//"Subject: $plan" ."\r\n" .
