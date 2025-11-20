<?php
session_start();
include("conexion.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE Correo = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();

    if (password_verify($contraseña, $usuario['Contraseña'])) {
        $_SESSION['usuario_id'] = $usuario['ID'];
        $_SESSION['usuario_nombre'] = $usuario['Nombre'];
        header("Location: ../index.php");
        exit;
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='../InicioSesion.php';</script>";
    }
} else {
    echo "<script>alert('Correo no registrado'); window.location='../InicioSesion.php';</script>";
}
?>
