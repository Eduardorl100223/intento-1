<?php
// Establecer la conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener el ID del registro a eliminar
$id = $_POST['id'];

// Crear la consulta SQL para eliminar el registro
$sql = "DELETE FROM tu_tabla WHERE id=$id";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro eliminado exitosamente";
} else {
    echo "Error al eliminar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
