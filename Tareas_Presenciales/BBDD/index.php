<?php
// Importar conexión con la BD
include 'db.php';

// Datos de la BD
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!-- *************************************************************************** -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP con MySQL</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">

        <h1>Conected to the Database</h1>
        <!-- Formulario para agregar usuarios -->
        <form id="userForm" onsubmit="return submitForm(event)">
            <input type="hidden" id="userId" name="userId">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit" id="submitBtn">Add User</button>
        </form>

        <h2>Users Table</h2>
        <!-- Tabla de usuarios -->
        <table id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr id="row-<?php echo $row['id']; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <button onclick="editUser(<?php echo $row['id']; ?>, '<?php echo $row['name']; ?>', '<?php echo $row['email']; ?>')">Edit</button>
                                <button onclick="deleteUser(<?php echo $row['id']; ?>)">Delete</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No data found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <Script SRc="script.js"></Script>
</body>

</html>