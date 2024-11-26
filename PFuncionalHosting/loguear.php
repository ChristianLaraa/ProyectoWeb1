<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT * FROM artistas WHERE usuario = ? AND clave = ?";
$stmt = $conexion->prepare($q);
$stmt->bind_param("ss", $usuario, $clave);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuario y contraseña correctos
    $_SESSION['usermane'] = $usuario;
    header("location: ../Principal.php");
} else {
    header("location: ../indexError.php");
}

?>

