<?php
// Iniciar la sesión
session_start();

// Comprobar si el usuario ya está logueado, si es así, redirigirlo al panel
if (isset($_SESSION['usuario'])) {
    header("Location: panel.php");
    exit;
}

// Variables para el login
$usuario_valido = "admin";
$contrasena_valida = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar si las credenciales son correctas
    if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
        // Si las credenciales son correctas, iniciar sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: panel.php"); // Redirigir al panel
        exit;
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form action="login.php" method="POST">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
