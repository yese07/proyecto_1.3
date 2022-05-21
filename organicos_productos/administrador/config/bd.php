<?php
$host="localhost";
$bd="productos";
$usuario="root";
$contrasenia="";

try {
       $conexion=new PDO("mysql:host=$host;bdname=$bd",$usuario,$contrasenia);
       if($conexion){echo "Conectado... a sistema";}
} catch ( Exception $ex) {
    echo $ex->getMessage();
}
?>