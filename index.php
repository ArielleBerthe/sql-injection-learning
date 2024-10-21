<?php
// index.php

// Incluir el archivo de configuración
include 'config.php';

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre de usuario del formulario
$user = $_GET['username'];

// Consulta SQL segura con consultas preparadas
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["username"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$stmt->close();
$conn->close();
?>

<!-- Formulario HTML -->
<form method="GET" action="index.php">
    Nombre de usuario: <input type="text" name="username">
    <input type="submit" value="Buscar">
</form>