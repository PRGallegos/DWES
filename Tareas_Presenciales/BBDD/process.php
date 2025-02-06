<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insertar datos en la base de datos
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirigir de vuelta al índice
    header("Location: index.php");
    exit();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>