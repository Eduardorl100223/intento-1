<?php
// Establecer la conexión a la base de datos
include 'intento-1/1.php';

// Obtener datos del formulario
$nombre = $_POST['NOMBRE'];
$funcion = $_POST['FUNCION'];

// Crear la consulta SQL para insertar datos
$sql = "INSERT INTO tu_tabla (nombre, funcion) VALUES ('$nombre', '$funcion')";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
    echo "Registro creado exitosamente";
} else {
    echo "Error al crear el registro: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
