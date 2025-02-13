<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Verificar si la conexión a la base de datos se estableció correctamente
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Función para redirigir con un mensaje
function redirect($message, $type) {
    header("Location: index.php?message=" . urlencode($message) . "&messageType=$type");
    exit();
}

// Procesar eliminación de usuario
if (isset($_GET['delete'])) {
    $userId = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$userId";

    if ($conn->query($sql)) {
        redirect("User deleted successfully", "success");
    } else {
        redirect("Error deleting user: " . $conn->error, "error");
    }
}

// Procesar inserción o actualización de usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($userId)) {
        // Insertar nuevo usuario
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    } else {
        // Actualizar usuario existente
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$userId";
    }

    if ($conn->query($sql)) {
        redirect("Operation successful", "success");
    } else {
        redirect("Error: " . $conn->error, "error");
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>