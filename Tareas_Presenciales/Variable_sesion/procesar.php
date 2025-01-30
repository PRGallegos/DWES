<?php
session_start(); // Iniciar sesión

// Simulamos una base de datos con un array asociativo
$alumnos = [
    "alumno1@example.com" => "Juan Pérez",
    "alumno2@example.com" => "María Gómez",
    "alumno3@example.com" => "Carlos Rodríguez"
];

// Obtener el email del formulario
$email = $_POST['email'];

// Verificar si el email existe en el array
if (array_key_exists($email, $alumnos)) {
    $_SESSION['nombre'] = $alumnos[$email]; // Almacenar el nombre en la sesión
    header("Location: bienvenido.php"); // Redirigir a la página de bienvenida
    exit();
} else {
    echo "El correo electrónico no se encuentra en nuestra lista.";
}
