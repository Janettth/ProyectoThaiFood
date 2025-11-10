<?php
$host = "localhost";
$usuario = "root";       // o el usuario de tu base de datos
$contraseña = "";        // deja vacío si estás usando XAMPP
$base_datos = "cocinainternacional"; // cámbialo por el tuyo

$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

