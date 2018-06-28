<?php include("../cms/module/conexion.php"); ?>
<?php
$toEmail = "luizupdate@gmail.com, updatechristian@gmail.com";
$subject = "Mensaje enviado desde Branding en UPDATE";
$mailHeaders = "From: " . $_POST["nombre"] . "<". $_POST["mail"] .">\r\n";

$nombres = mysqli_real_escape_string($enlaces, $_POST["nombre"]);
$email = mysqli_real_escape_string($enlaces, $_POST["mail"]);
$telefono = mysqli_real_escape_string($enlaces, $_POST["telefono"]);
$comentario = mysqli_real_escape_string($enlaces, $_POST["mensaje"]);

$mensaje .= "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres : ".$nombres."\n";
$mensaje .= "Email : ".$email."\n";
$mensaje .= "Telefono : ".$telefono."\n";
$mensaje .= "Mensaje : ".$comentario."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='card-panel lighten-2' style='background: #ff0000; padding: 14px; color: #fff; font-size: 16px; font-weight: 700;'>Gracias, su mensaje fue enviado exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>