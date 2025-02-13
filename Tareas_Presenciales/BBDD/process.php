<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

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

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Operation successful"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete'])) {
    $userId = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id=$userId";

    if ($conn->query($sql)) {
        echo json_encode(["status" => "success", "message" => "User deleted"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error deleting user"]);
    }
}

$conn->close();

?>