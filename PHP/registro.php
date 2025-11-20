<?php
include("conexion.php");

// Recibir los datos del formulario
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$contraseña = trim($_POST['contraseña']);
$carrera = !empty($_POST['carrera']) ? intval($_POST['carrera']) : NULL;

// Validar campos
if (empty($nombre) || empty($correo) || empty($contraseña)) {
    echo "<script>alert('Por favor completa todos los campos obligatorios.');
          window.location='../Registro.php';</script>";
    exit;
}

// Verificar si el correo ya existe
$sql_verificar = "SELECT ID FROM usuarios WHERE Correo = ?";
$stmt_verificar = $conexion->prepare($sql_verificar);
$stmt_verificar->bind_param("s", $correo);
$stmt_verificar->execute();
$resultado = $stmt_verificar->get_result();

if ($resultado->num_rows > 0) {
    echo "<script>alert('Este correo ya está registrado.');
          window.location='../Registro.php';</script>";
    exit;
}

// Encriptar la contraseña antes de guardar
$hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar usuario
$sql = "INSERT INTO usuarios (Nombre, Correo, Contraseña, carrera_id) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("sssi", $nombre, $correo, $hash, $carrera);

if ($stmt->execute()) {
    echo "<script>alert('Registro exitoso.');
          window.location='../InicioSesion.php';</script>";
} else {
    echo "<script>alert('Error al registrar. Intenta de nuevo.');
          window.location='../Registro.php';</script>";
}

$stmt->close();
$conexion->close();
?>
