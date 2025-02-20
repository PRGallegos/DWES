<?php
include 'db.php';

// Procesar eliminación de usuario
if (isset($_GET['delete'])) {
    $userId = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$userId";

    if ($conn->query($sql)) {
        header("Location: index.php?message=User deleted successfully&messageType=success");
    } else {
        header("Location: index.php?message=Error deleting user&messageType=error");
    }
    exit();
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
        header("Location: index.php?message=Operation successful&messageType=success");
    } else {
        header("Location: index.php?message=Error: " . urlencode($conn->error) . "&messageType=error");
    }
}

$conn->close();
?>