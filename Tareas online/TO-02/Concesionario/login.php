<?php
session_start();

// Simulación de usuario
$usuario_valido = "admin";
$password_valido = "1234";

if ($_POST['usuario'] === $usuario_valido && $_POST['password'] === $password_valido) {
    $_SESSION['usuario'] = $_POST['usuario'];
    header("Location: calcularPresupuesto.php");
} else {
    echo "Credenciales incorrectas.";
}
