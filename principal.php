<?php
session_start();
$usuario = $_SESSION['usermane']; // 413112576

if (!isset($usuario)) {
    header("location: ./index.php");
} else {
    echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Bienvenido</title>
    <link rel='stylesheet' href='./styles/stylesPrincipal.css'>
</head>
<body>
    <header class='header'>
        <h1>Hola, tu Usuario es <span class='usuario'>$usuario</span></h1>
        <nav>
            <a class='btn-salir' href='logica/salir.php'>Salir</a>
        </nav>
    </header>
    <main>
        <section class='tabla-section'>
            <h2>Lista de Artistas</h2>";
            
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    $consulta_sql = "SELECT * FROM artistas";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);

    if ($count > 0) {
        echo "<table class='tabla-estilos'>
                <thead>
                    <tr>
                        <th>Artistas</th>
                        <th>ID</th>
                        <th>Nombre Artista</th>
                        <th>Álbums</th>
                        <th>Género Musical</th>
                        <th>Disquera</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Fecha de Registro</th>
                        <th>Permisos</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>{$row['nombre_artista']}</td>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre_artista']}</td>
                    <td>{$row['albums']}</td>
                    <td>{$row['genero_musical']}</td>
                    <td>{$row['disquera']}</td>
                    <td>{$row['usuario']}</td>
                    <td>{$row['contraseña']}</td>
                    <td>{$row['fecha_registro']}</td>
                    <td>{$row['permisos']}</td>
                </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='sin-registro'>Sin ningún registro</p>";
    }

    echo "<div class='acciones'>
            <a href='EliminarUsuario.php' class='btn'>Eliminar Usuario</a>
            <a href='Registro.php' class='btn'>Registro</a>
        </div>
        </section>
    </main>
</body>
</html>";
}
?>
