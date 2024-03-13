<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Docker Compose Example</title>
</head>
<body>
    <h1>Bienvenido a mi aplicación PHP en Docker</h1>
    
    <?php

    $mysqli = new mysqli(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), getenv('MYSQL_DATABASE'));

   
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    } else {
        echo "<p>Conexión a la base de datos exitosa!</p>";
    }

    
    $result = $mysqli->query("SELECT * FROM ejemplo");

    
    echo "<h2>Resultados de la consulta:</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['nombre']}</li>";
    }
    echo "</ul>";

    
    $mysqli->close();
    ?>

    <p><a href="http://localhost:8081" target="_blank">Acceder a PhpMyAdmin</a></p>
</body>
</html>
