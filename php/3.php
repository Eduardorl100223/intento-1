<?php
// Establecer la conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$id = $_POST['id'];
$nombreNuevo = $_POST['nombre'];
$funcionNueva = $_POST['rol'];

// Crear la consulta SQL para actualizar el registro
$sql = "UPDATE tu_tabla SET nombre='$nombreNuevo', funcion='$funcionNueva' WHERE id=$id";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error al actualizar el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

