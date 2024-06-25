<?php
$servername = "db";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

if (!$username || !$password || !$dbname) {
    die("Error: Las variables de entorno no se han establecido correctamente.");
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a MySQL!<br>";
echo "Hola Mundo!";
$conn->close();
?>