<?php
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
$id = $_POST['id'];
$tabla = $_POST['tabla'];

$query = "DELETE FROM $tabla WHERE id_$tabla = $id";
$conexion->query($query);
header('Location: index.php?tabla=' . $tabla);
?>
