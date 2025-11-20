<?php
session_start();
require_once(__DIR__ . "/conexion.php");

header('Content-Type: application/json; charset=utf-8');

// Verificar que el usuario haya iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(["error" => "Debes iniciar sesión para comentar."]);
    exit;
}

// Verificar que se reciban los datos necesarios
if (isset($_POST['texto']) && isset($_POST['platillo_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $platillo_id = intval($_POST['platillo_id']);
    $texto = trim($_POST['texto']);
    $fecha = date('Y-m-d');

    if ($texto === "") {
        echo json_encode(["error" => "El comentario no puede estar vacío."]);
        exit;
    }

    $stmt = $conexion->prepare("INSERT INTO comentarios (TextoComentario, Fecha, usuario_id, platillo_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $texto, $fecha, $usuario_id, $platillo_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => "Comentario guardado correctamente."]);
    } else {
        echo json_encode(["error" => "Error al guardar el comentario."]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "Datos incompletos."]);
}
?>
