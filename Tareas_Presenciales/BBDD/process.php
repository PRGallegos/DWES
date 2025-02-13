<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';
$conn = $dbConnection; // Asegurar que $dbConnection está definido en db.php

// Verificar la conexión a la base de datos
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Función para redirigir con mensajes
function redirect(string $message, string $messageType) {
    header("Location: index.php?message=" . urlencode($message) . "&messageType=" . urlencode($messageType));
    exit();
}

// Procesar eliminación de usuario
if (isset($_GET['delete'])) {
    $userId = intval($_GET['delete']); // Convertir a entero para seguridad

    if ($userId <= 0) {
        redirect("Invalid user ID", "error");
    }

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        redirect("Error preparing statement: " . $conn->error, "error");
    }

    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        redirect("User deleted successfully", "success");
    } else {
        redirect("Error deleting user: " . $stmt->error, "error");
    }

    $stmt->close();
}

// Procesar inserción o actualización de usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = isset($_POST['userId']) ? intval($_POST['userId']) : 0;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if (empty($name) || empty($email)) {
        redirect("Name and email are required", "error");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect("Invalid email format", "error");
    }

    if ($userId <= 0) {
        // Insertar nuevo usuario
        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            redirect("Error preparing statement: " . $conn->error, "error");
        }

        $stmt->bind_param("ss", $name, $email);
    } else {
        // Actualizar usuario existente
        $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            redirect("Error preparing statement: " . $conn->error, "error");
        }

        $stmt->bind_param("ssi", $name, $email, $userId);
    }

    if ($stmt->execute()) {
        $message = $userId <= 0 ? "User added successfully" : "User updated successfully";
        redirect($message, "success");
    } else {
        redirect("Error: " . $stmt->error, "error");
    }

    $stmt->close();
}

// Cerrar la conexión globalmente si no hubo redirección antes
$conn->close();
?>
