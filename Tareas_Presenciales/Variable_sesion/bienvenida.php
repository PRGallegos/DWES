<?php
session_start(); // Iniciar sesión

if (isset($_SESSION['nombre'])) { // Verificar si la variable de sesión está definida
    echo "<h1>Bienvenido, " . $_SESSION['nombre'] . "!</h1>";
    echo '<a href="logout.php">Cerrar sesión</a>'; // Enlace para cerrar sesión
} else {
    echo "<h1>No puedes visitar esta página. Debes ingresar primero.</h1>";
    echo '<a href="formulario.php">Regresar al formulario</a>'; // Enlace para regresar al formulario
}
