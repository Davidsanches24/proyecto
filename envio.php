<?php 
include("v-busqueda-usuario.php");
$row= mysqli_fetch_array($sql_query);
$to = $_GET['correo'];
$subject = "contraseña";
$message =  " La contraseña de su cuenta TIPKEY del correo " . $row['correo'] . " es ".$row['clave'];
$headers = "From: tipkeysena@gmail.com" . "\r\n" . "CC: tipkeysena@gmail.com";
 
$r =mail($to, $subject, $message, $headers);
if ($r){
    echo "<h1>Correo enviado a:" . $_GET['correo'] . "</h1>";
}else{
    echo "<h1>No se pudo enviar el correoa: " . $_GET['correo'] . "</h1>";
}
?>