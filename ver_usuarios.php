<?php
$conexion = new mysqli("localhost", "root", "", "encuesta");

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

// 1. Ahora seleccionamos también la columna 'opinion'
$sql = "SELECT id, nombre, email, opinion FROM usuarios";
$resultado = $conexion->query($sql);

echo "<h2>Resultados de la Encuesta</h2>";

if ($resultado->num_rows > 0) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>
            <tr style='background-color: #57b894; color: white;'>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Opinión</th>
            </tr>";
    
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila["id"] . "</td>
                <td>" . $fila["nombre"] . "</td>
                <td>" . $fila["email"] . "</td>
                <td>" . $fila["opinion"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aún no hay respuestas.";
}

echo "<br><a href='index.html'>Volver a la encuesta</a>";
$conexion->close();
?>