<?php

$server = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "cursosdw"; 

$conexion = mysqli_connect($server, $user, $password, $database);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$query = "SELECT * FROM cursos";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    die("Error al ejecutar la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisión de Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    
</head>
<body>
    <div>
    <h2>Registros en la base de datos</h2>
        <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Curso</th>
            </tr>
        </thead>
    </div>  
<tbody>
            <?php
           
            if (mysqli_num_rows($resultado) > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['curso'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No hay registros en la tabla.</td></tr>";
            }
            ?>
</tbody>
        </table>
    <?php
    mysqli_close($conexion);
    ?>
    <form action="index.php" method="GET">
        <button type="submit" class="boton_revisar">Volver al Inicio</button>
    </form>
</body>
</html>
