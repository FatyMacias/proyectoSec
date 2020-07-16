<?php

$servidor = "localhost"; 
$nombreusuario ="root"; 
$password = "admin123"; 
$db = "proyecto";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa";

$sql = "INSERT INTO usuarios(id_usuarios, ap_paterno, ap_materno,Nombres,correo_electronico, nombre_usaurio)
                    VALUES (1, 'macias', 'escobar', 'fatima celeste', 'celeste_macias@outlook.com','celeste' )";

if($conexion->query($sql)=== true){
    echo "no te cortas un cerro";
}else{
    die("si te cortas el cerro" . $conexion->error);
}


?>