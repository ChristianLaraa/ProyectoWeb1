<?php
include "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Verifica si se recibieron los datos necesarios
if (isset($_POST['nombre_artista'], $_POST['albums'], $_POST['genero_musical'], $_POST['disquera'], $_POST['usuario'], $_POST['contraseña'])) {

    $nombreUser = $_POST['nombre_artista'];

    // Evitar inyección SQL utilizando consultas preparadas
    $buscarusuario = $conexion->prepare("SELECT * FROM artistas WHERE usuario = ?");
    $buscarusuario->bind_param("s", $nombreUser);
    $buscarusuario->execute();
    $resultado = $buscarusuario->get_result();
    $count = $resultado->num_rows;

    if ($count == 1) {
        echo "El usuario ya está registrado";
        echo "<a href='registro.php'>Nuevo registro</a>";
    } else {
        // Inserción de datos con consultas preparadas
        $stmt = $conexion->prepare("INSERT INTO artistas (nombre_artista, albums, genero_musical, disquera, usuario, contraseña) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "ssssss", 
            $_POST['nombre_artista'], 
            $_POST['albums'], 
            $_POST['genero_musical'], 
            $_POST['disquera'], 
            $_POST['usuario'], 
            $_POST['contraseña']
        );

        if ($stmt->execute()) {
            echo "<br> <h1>Usuario creado con éxito</h1>";
            echo "<a href='./Registro.php'>Puedes generar un nuevo registro</a>";
            echo "<a href='./index.php'>Ver registros</a>";
        } else {
            echo "Error al crear el usuario: " . $conexion->error;
        }
        $stmt->close();
    }
    $buscarusuario->close();
} else {
    echo "Faltan datos en el formulario.";
}
$conexion->close();
?>
