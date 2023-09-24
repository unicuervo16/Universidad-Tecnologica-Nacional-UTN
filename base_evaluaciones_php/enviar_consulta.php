<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpintermedio";

// Conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recibir los datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

// Insertar los datos en la tabla "consultas"
$sql = "INSERT INTO consultas (nombre, apellido, correo, consulta) VALUES ('$nombre', '$apellido', '$correo', '$consulta')";

// Consulta y verificar si se realizó con éxito
if ($conn->query($sql) === TRUE) {
    echo '<div style="text-align: center;">';
    echo '<p style="font-size: 18px;">La consulta se envió correctamente.</p>';
    echo '<a href="contacto.php" style="text-decoration: none;">';
    echo '<button style="background-color: #007BFF; color: white; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;">Volver</button>';
    echo '</a>';
    echo '</div>';
} else {
    echo "Error al enviar la consulta: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
