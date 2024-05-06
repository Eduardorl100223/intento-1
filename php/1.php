<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>


