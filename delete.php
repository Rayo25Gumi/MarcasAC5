<?php
$id = $_POST['id'];

$mysqli = new mysqli("localhost:3306", "root", "", "lenguajes_frameworks");

$mysqli->query("DELETE FROM frameworks WHERE lenguaje = $id");

$mysqli->query("DELETE FROM lenguajes WHERE id = $id");

?>