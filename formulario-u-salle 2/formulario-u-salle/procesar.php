<?php
include "db.php";

// 1. Recoger datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// 2. MEJORA: Consulta Preparada para evitar Inyección SQL
// En lugar de insertar las variables directamente, usamos "?" como marcadores
$stmt = $conn->prepare("INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)");

// 3. Vincular los parámetros ("sss" indica que los 3 datos son strings)
$stmt->bind_param("sss", $nombre, $email, $mensaje);

// 4. Ejecutar la consulta
if ($stmt->execute() === TRUE) {
    echo "<div style='color: green; font-weight: bold;'>Formulario guardado correctamente (Protección SQL activa)</div>";
} else {
    echo "Error al guardar: " . $conn->error;
}

$stmt->close();

// --- CONSULTAR DATOS (Visualización) ---
echo "<hr><h2>Registros guardados</h2>";

$sql = "SELECT * FROM contactos ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%;'>
            <tr style='background-color: #f2f2f2;'>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>" . htmlspecialchars($row['nombre']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['mensaje']) . "</td>
                <td>{$row['fecha']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros";
}

$conn->close();
?>