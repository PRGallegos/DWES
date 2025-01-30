<?php
$tabla = $_POST['tabla'];

// Generar formulario para insertar datos basado en la tabla seleccionada.
if ($tabla === 'AUTORES') {
    $campos = ['apellidos', 'nombre', 'nacionalidad'];
} elseif ($tabla === 'LIBROS') {
    $campos = ['titulo', 'categoria', 'autor_id', 'descripcion'];
}
// Agregar más condiciones para USUARIOS y ALQUILERES según sea necesario
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar en <?= htmlspecialchars($tabla) ?></title>
</head>
<body>
    <form action="procesar_insercion.php" method="post">
        <input type="hidden" name="tabla" value="<?= htmlspecialchars($tabla) ?>">
        <?php foreach ($campos as $campo): ?>
            <label for="<?= $campo ?>"><?= ucfirst($campo) ?>:</label>
            <input type="text" id="<?= $campo ?>" name="<?= $campo ?>" required><br>
        <?php endforeach; ?>
        <button type="submit">Insertar</button>
    </form>
</body>
</html>
