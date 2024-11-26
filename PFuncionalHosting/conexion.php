<?php
$host_db="sql100.infinityfree.com";
$user_db="if0_37329547";
$pass_db="61JlTSeLlCBzHSR";
$db_name="if0_37329547_artists";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
$conexion->set_charset("utf8mb4");


if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
} 

?>