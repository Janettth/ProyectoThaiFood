<?php
session_start();
include("conexion.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE Correo = '$correo' AND Contraseña = '$contraseña'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['usuario_id'] = $usuario['ID'];
    $_SESSION['usuario_nombre'] = $usuario['Nombre'];
    header("Location: ../index.php");
} else {
    echo "<script>alert('Correo o contraseña incorrectos'); window.location='../InicioSesion.html';</script>";
}
?>
