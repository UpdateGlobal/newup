<?php
$toEmail = "luizupdate@gmail.com, updatechristian@gmail.com";
$subject = "Mensaje enviado desde Diseño Web de UPDATE";
$mailHeaders = "From: " . $_POST["nombre"] . "<". $_POST["mail"] .">\r\n";

$mensaje .= "Informacion del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombre"]."\n";
$mensaje .= "Email			:".$_POST["mail"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Mensaje		:".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='card-panel lighten-2' style='background:#53bcbd; padding:14px;'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>