<?php
// se usa el requiere para si psi se necesita el archivo conexion
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM artistas";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Artistas</th>
        
        <th>id</th>
        <th>nombre_artista</th>
        <th>Albums</th>
        <th>Genero Musical</th>
        <th>Disquera</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
        <th>Permisos</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_artista'] ."</td>";
  
     echo"<td>". $row['id'] ."</td>";
     echo"<td>". $row['nombre_artista'] ."</td>";
     echo"<td>". $row['albums'] ."</td>";
     echo"<td>". $row['genero_musical'] ."</td>";
     echo"<td>". $row['disquera'] ."</td>";
     echo"<td>". $row['usuario'] ."</td>";
     echo"<td>". $row['contraseña'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo"<td>". $row['permisos'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    ?>
    
    <h1 style='color:red' >Sin Ningun registro</h1>
<?php } ?>
    <h1><a href='EliminarUsuario.php'>ElimnarUsuario</a></h1>
    <h1><a href='Registro.php'>Registro</a></h1>
    



