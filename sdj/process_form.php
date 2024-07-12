<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practicum";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idiest = $_POST['idiest'];
$nombre = $_POST['nombre'];
$semestre = $_POST['semestre'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];
$motivo = $_POST['motivo'];
$descripcion = $_POST['descripcion'];
$uso_tele = $_POST['uso_tele'];
$uso_multicontacto = $_POST['uso_multicontacto'];
$uso_ethernet = $_POST['uso_ethernet'];
$uso_plumones = $_POST['uso_plumones'];
$cable_hdmi = $_POST['cable_hdmi'];
$cable_ethernet = $_POST['cable_ethernet'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO saladejuntas (idiest, nombre, semestre, hora_entrada, hora_salida, motivo, descripcion, uso_tele, uso_multicontacto, uso_ethernet, uso_plumones, cable_hdmi, cable_ethernet, comentarios) 
VALUES ('$idiest', '$nombre', '$semestre', '$hora_entrada', '$hora_salida', '$motivo', '$descripcion', '$uso_tele', '$uso_multicontacto', '$uso_ethernet', '$uso_plumones', '$cable_hdmi', '$cable_ethernet', '$comentarios')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
