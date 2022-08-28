<?php

$destinatario=$email;

// resibo datos del formulario

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];


$header = 'Enviado desde cakezone.cl';
$mensajeCompleto = $mensaje . '\nAtentamente: '. $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo"<script>alert ('Enviado correctamente')</script>";
echo"<script> setTimeout (\"location.href='index.html'\",1000)</script>";



?>