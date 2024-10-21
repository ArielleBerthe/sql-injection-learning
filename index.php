<?php
// index.php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "HAUM715./cadenas";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre de usuario del formulario
$user = $_GET['username'];

// Consulta SQL vulnerable
$sql = "SELECT * FROM users WHERE username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["username"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

<!-- Formulario HTML -->
<form method="GET" action="index.php">
    Nombre de usuario: <input type="text" name="username">
    <input type="submit" value="Buscar">
</form>