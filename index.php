<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lenguajes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>LENGUAJES DE PROGRAMACIÓN</h1>
    <a href="frameworks.php">Ver Frameworks</a>

    <?php
    $mysqli = new mysqli("localhost:3306", "root", "", "lenguajes_frameworks");
    $resultado = $mysqli->query("SELECT * FROM lenguajes;");
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Ámbito</th>
            <th>Popularidad</th>
            <th>Eliminar</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $fila['nombre'] ?></td>
                <td><?= $fila['ambito'] ?></td>
                <td><?= $fila['popularidad'] ?></td>
                <td><button class="borrar" data-id="<?= $fila['id'] ?>">🗑️</button></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <div class="centrar">
    <h2>Añadir nuevo lenguaje</h2> </div>
    <form action="add.php" method="POST">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Ámbito: <input type="text" name="ambito" required></label><br>
        <label>Popularidad:
            <select name="popularidad" required>
                <option value="">--Seleccionar--</option>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>
        </label><br>
        <input type="submit" value="Añadir">
    </form>

    <script src="script.js"></script>
</body>
</html>