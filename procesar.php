<?php
include "db.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// INSERTAR DATOS
$sql = "INSERT INTO contactos (nombre, email, mensaje)
        VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Formulario guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}

// CONSULTAR DATOS
echo "<hr><h2>Registros guardados</h2>";

$sql = "SELECT * FROM contactos ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['email']}</td>
                <td>{$row['mensaje']}</td>
                <td>{$row['fecha']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No hay registros";
}
?>