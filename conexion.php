<?php
$servidor = "sql201.infinityfree.com"; //  Reemplaza con el host de tu base de datos en InfinityFree
$usuario_db = "if0_38463761"; //  Reemplaza con tu usuario de base de datos
$clave_db = "h5gHMbFbVuJCi"; //  Reemplaza con la contraseña de tu base de datos
$nombre_db = "if0_38463761_XXX"; //  Reemplaza con el nombre real de tu base de datos

$conexion = new mysqli($servidor, $usuario_db, $passsword_db );

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>