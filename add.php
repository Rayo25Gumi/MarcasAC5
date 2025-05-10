<?php
$nombre = $_POST['nombre'];
$ambito = $_POST['ambito'];
$popularidad = $_POST['popularidad'];

$mysqli = new mysqli("localhost:3306", "root", "", "lenguajes_frameworks");
$mysqli->query("INSERT INTO lenguajes(nombre, ambito, popularidad) VALUES('$nombre', '$ambito', '$popularidad');");
header("Location: ./index.php");
exit;
?>