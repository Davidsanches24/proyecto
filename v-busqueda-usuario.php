<?php

include 'conexion_busqueda.php';




if(!isset($_POST['correo'])){

    $_POST['correo']= "";

    $buscar = $_POST['correo'];
}


$buscar = $_POST['correo'];

$SQL_READ = "SELECT * FROM usuario WHERE correo like '%".$buscar."%' ";

$sql_query = mysqli_query($conexion, $SQL_READ);
return $sql_query;

//echo $SQL_READ;
 
    