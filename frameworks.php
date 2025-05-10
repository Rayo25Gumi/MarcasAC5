<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frameworks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>FRAMEWORKS</h1>
    <a href="index.php">Volver</a>

    <?php
    $mysqli = new mysqli("localhost:3306", "root", "", "lenguajes_frameworks");
    $resultado = $mysqli->query("SELECT * FROM frameworks;");
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Lenguaje</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['lenguaje'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>