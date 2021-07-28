<?php 
include("v-busqueda-usuario.php");
if ($row= mysqli_fetch_array($sql_query))
{
    $to = $_GET['correo'];
    $subject = "Contraseña";
    $message = " La contraseña de su cuenta TIPKEY del correo " . $row['correo'] . " es ".$row['clave'];
    $headers = "From: tipkeysena@gmail.com" . "\r\n" . "CC: tipkeysena@gmail.com";
    //echo $row['clave'];
    $r =mail($to, $subject, $message, $headers);
    if ($r){echo  $row['correo'] . " es ".$row['clave'];
        echo "<h1>Correo enviado a:" . $_GET['correo'] . "</h1>";
    }else{
        echo "<h1>No se pudo enviar el correoa: " . $_GET['correo'] . "</h1>";echo  $row['correo'] . " es ".$row['clave'];
    }

}else
{
    // echo '<script language="javascript">alert("el correo no esta registrado ");window.location.href="index.php";</script>';
}

?>


