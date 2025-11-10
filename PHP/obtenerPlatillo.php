<?php
header('Content-Type: application/json; charset=utf-8');
include(__DIR__ . "/conexion.php");


// Evita mostrar errores PHP directamente (para que no se mezclen con el JSON)
error_reporting(0);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Consulta preparada para evitar inyecciones SQL
    $stmt = $conexion->prepare("SELECT * FROM platillos WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $platillo = $resultado->fetch_assoc();
        echo json_encode($platillo, JSON_UNESCAPED_UNICODE);
    } else {
        echo json_encode(["error" => "Platillo no encontrado"]);
    }

    $stmt->close();
} else {
    echo json_encode(["error" => "ID no recibido"]);
}
?>
