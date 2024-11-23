<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Sanitizar los datos para prevenir inyección SQL
$nombreUser = mysqli_real_escape_string($conexion, $_POST['nombre_artista']);
$albums = mysqli_real_escape_string($conexion, $_POST['albums']);
$genero = mysqli_real_escape_string($conexion, $_POST['genero_musical']);
$disquera = mysqli_real_escape_string($conexion, $_POST['disquera']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$password = mysqli_real_escape_string($conexion, $_POST['contraseña']); // Considera hashear la contraseña

// Verificar si el usuario ya existe
$buscarusuario = "SELECT * FROM artistas WHERE nombre_artista = '$nombreUser'";
$resultado = $conexion->query($buscarusuario);

if ($resultado && $resultado->num_rows > 0) {
    echo "El usuario ya está registrado.";
    echo "<a href='../Registro.php'>Nuevo registro</a>";
} else {
    // Intentar insertar el nuevo usuario
    $consulta = "INSERT INTO artistas (nombre_artista, albums, genero_musical, disquera, usuario, contraseña) 
                 VALUES ('$nombreUser', '$albums', '$genero', '$disquera', '$usuario', '$password')";

    if ($conexion->query($consulta) === TRUE) {
        echo "<br><h1>Usuario creado con éxito</h1>";
        echo "<a href='../Registro.php'>Puedes generar un nuevo registro</a>";
        echo "<a href='../Principal.php'>Ver registros</a>";
    } else {
        // Mostrar el error de MySQL si la consulta falla
        echo "Error al crear el usuario: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>

