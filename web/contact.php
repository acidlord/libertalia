
<?php
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['msg'];
$para = 'HOSTING@LIBERTALIA.COM.VE';
$titulo = 'ASUNTO DEL MENSAJE';
$header = ‘From: ‘ . $email.’ ‘;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://libertalia.com.ve';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
