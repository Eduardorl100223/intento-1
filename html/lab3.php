<?php

if($_POST['nombre']){
    echo 'hay un nombre';
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>LABORATORIO 3</title>
    <style>
        body {
            background-color: #ecdc82; /* Fondo */
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            height: 100vh; /* Altura del viewport */
            margin: 0; /* Elimina los márgenes por defecto */
            animation: moveBackground 10s linear infinite; /* Animación de movimiento del fondo */
        }
        
        form {
            background-color: rgb(116, 207, 243); /* Fondo para el formulario */
            padding: 20px; /* Espacio interior alrededor del formulario */
            border-radius: 10px; /* Bordes redondeados */
            margin: 0 10px; /* Margen entre los formularios */
        }

        @keyframes moveBackground {
            0% { background-position: 0% 50%; } /* Posición inicial del fondo */
            50% { background-position: 100% 50%; } /* Posición intermedia del fondo */
            100% { background-position: 0% 50%; } /* Posición final del fondo */
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        Nombre:  <input type="text" name="nombre"> Funcion: <input type="text" name="FUNCION"><br>
        <input type="submit" value="Agregar">
    </form>
    <form action="update.php" method="POST">
        Actualizar ID de Registro: <input type="number" name="id"><br>
        Nombre Nuevo: <input type="text" name="nombre"> Funcion Nueva: <input type="text" name="rol"><br>
        <input type="submit" value="Agregar">
    </form>
    <form action="delete.php" method="POST">
        Registro a Eliminar: <input type="number" name="id"><br>
        <input type="submit" value="Eliminar">
    </form>

</body>
</html>
