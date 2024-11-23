<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Document</title>
</head>
<body>

    <header  >
        <h3>Registro en mi DB</h3>
    </header>
    
    <div>
        <form action="./logica/enviarRegistro.php" method="post">
        <!-- <form action="./tempo.php" method="get"> -->
            <hr>
            <div>
                <label for="nombre_artista">Ingresa el nombre del artista: </label>
                <input type="text" name="nombre_artista" required maxlength="100" placeholder="Nombre: ">
                <br><br>
                <label for="albums">¿Cuantos albumes tiene?</label>
                <input type="text" name="albums" required maxlength="100" placeholder="Albumes: ">
                <br><br>
                <label for="genero_musical">¿Qué genero musical representa?</label>
                <input type="text" name="genero_musical" required maxlength="100" placeholder="Genero: ">
                <br><br>
                <label for="disquera">¿Cual es su disquera?</label>
                <input type="text" name="disquera" required maxlength="100" placeholder="Disquera: ">
                <br><br>
                <label for="usuario">Usuario o correo electronico</label>
                <input type="text" name="usuario" required maxlength="100" placeholder="Usuario o email: ">
                <br><br>
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" required maxlength="10" placeholder="Password: ">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>
</body>
</html>

<a href='./Registro.php'>Nuevo registro</a>
<a href='./Principal.php'>Ver registro</a>