<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
    $registroEliminado = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $consulta = "DELETE FROM artistas WHERE usuario = '$registroEliminado'";

    if (mysqli_query($conexion, $consulta)) {
        echo "Registro eliminado correctamente.";
        header('Location: ../EliminarUsuario.php');
    } else {
        echo "Error en la consulta: " . mysqli_error($conexion);
    }
} else {
    echo "Error: no se recibió el usuario a eliminar.";
}

mysqli_close($conexion);
?>