<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Crea el mensaje que va a enviar
$to = 'jvasquez@gendesoft.com,jquiroga@gendesoft.com'; 
$email_subject = "formulario web enviado por:  $name";
$email_body = "Ha recibido un nuevo mensaje de su formulario de contacto del sitio web GendeSoft.\n\n"."Aquí están los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "From:" . $email_address;
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;

?>