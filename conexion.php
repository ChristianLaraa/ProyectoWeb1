<?php
$host_db="localhost";
$user_db="root";
$pass_db="Lunapug09";
$db_name="artists";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>