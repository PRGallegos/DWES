<?php
// Configuración de la base de datos
$servername = "localhost"; // Servidor (spoiler no hay, trabajamos en local :D )
$username = "root";        // Nombre de usuario 
$password = "";            // Contraseña o contrasenia para los guiris
$dbname = "test_db";       // Nombre 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
?>