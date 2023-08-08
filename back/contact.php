<?php 

$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['data'];
$mensaje = $_POST['message'];

$destinatario = 'jnwebcom@jnweb.com.ar';
$asunto = 'Contacto desde la pagina';

$carta = "De:$nombre \n";
$carta .= "Correo:$email \n";
$carta .= "Asunto:$asunto \n";
$carta = "Mensaje:$mensaje \n";


  mail($destinatario,$asunto,$carta);
  // header("<script>alert('correo enviado correctamete')</script>");
  // header("<script>alert('correo enviado correctamete')</script>");





?>