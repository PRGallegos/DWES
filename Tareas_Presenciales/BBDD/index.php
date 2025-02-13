<?php
include 'db.php';

// Obtener datos de la base de datos
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Cerrar la conexión a la base de datos
$conn->close();
?>
<!------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Database</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Access Granted</h1>

        <!-- Mostrar mensajes de éxito o error -->
        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $messageType = $_GET['messageType'];
            echo "<div class='message $messageType'>$message</div>";
        }
        ?>

        <!-- Formulario para añadir/editar usuarios -->
        <form action="process.php" method="POST">
            <input type="hidden" name="userId" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" required>
            <button type="submit"><?php echo isset($_GET['edit']) ? 'Update User' : 'Add User'; ?></button>
        </form>

        <h2>Users Table</h2>
        <table>
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
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <a href="index.php?edit=<?php echo $row['id']; ?>&name=<?php echo urlencode($row['name']); ?>&email=<?php echo urlencode($row['email']); ?>" class="btn">Edit</a>
                                <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn delete">Delete</a>
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
</body>
</html>