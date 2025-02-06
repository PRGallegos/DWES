<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Obtener datos de la base de datos
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Data Table</title>
    <style src="styles.css"> </style>
</head>

<body>
    <h1>Add Data to Database</h1>
    <!-- Formulario para añadir datos -->
    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <button type="submit">Add User</button>
    </form>

    <h2>Users Table</h2>
    <!-- Tabla para mostrar los datos -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No data found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>