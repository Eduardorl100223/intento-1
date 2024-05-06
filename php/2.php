<?php
// Establecer la conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Crear la consulta SQL para obtener todos los registros
$sql = "SELECT * FROM tu_tabla";

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Mostrar los resultados
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Función: " . $fila["funcion"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conexion->close();
?>
