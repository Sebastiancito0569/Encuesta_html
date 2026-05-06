<?php
// 1. Configuración de la base de datos
$servidor = "localhost";
$usuario  = "root";
$password = ""; 
$base_datos = "encuesta"; // Basado en tu captura imagen_2026-05-05_232912663.jpg

// 2. Crear la conexión
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// 3. Verificar si la conexión falló
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// 4. Recibir los datos del formulario (usando los nombres del 'name' en HTML)
$nombre_usuario = $_POST['nombre'];
$email_usuario  = $_POST['email'];
$opinion_usuario = $_POST['opinion']; // Este es el nuevo campo del textarea

// 5. Preparar la orden SQL (INSERT)
// IMPORTANTE: Asegúrate de haber creado la columna 'opinion' en phpMyAdmin antes de probar
$sql = "INSERT INTO usuarios (nombre, email, opinion) VALUES ('$nombre_usuario', '$email_usuario', '$opinion_usuario')";

// 6. Ejecutar y redirigir
if ($conexion->query($sql) === TRUE) {
    // Si todo sale bien, te manda a ver la lista de resultados
    header("Location: ver_usuarios.php");
} else {
    echo "Hubo un error al guardar los datos: " . $conexion->error;
}

// 7. Cerrar la conexión
$conexion->close();
?>