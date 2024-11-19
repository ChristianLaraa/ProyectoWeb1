<?php
include 'db.php';

if (isset($_POST['register'])) {
    $nombre_artista = $_POST['nombre_artista'];
    $genero_musical = $_POST['genero_musical'];
    $disquera = $_POST['disquera'];
    $usuario = $_POST['usuario'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    $permisos = 2; // Nivel por defecto (puede ser 1 para admin)

    $query = "INSERT INTO users (nombre_artista, genero_musical, disquera, usuario, contraseña, permisos) 
              VALUES (:nombre_artista, :genero_musical, :disquera, :usuario, :contraseña, :permisos)";
    $stmt = $conn->prepare($query);

    try {
        $stmt->execute([
            'nombre_artista' => $nombre_artista,
            'genero_musical' => $genero_musical,
            'disquera' => $disquera,
            'usuario' => $usuario,
            'contraseña' => $contraseña,
            'permisos' => $permisos
        ]);
        header("Location: index.php?message=Registrado correctamente");
    } catch (PDOException $e) {
        header("Location: index.php?error=El usuario ya existe");
    }
}

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $query = "SELECT * FROM users WHERE usuario = :usuario";
    $stmt = $conn->prepare($query);
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['permisos'] = $user['permisos'];
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?error=Credenciales incorrectas");
    }
}
?>
