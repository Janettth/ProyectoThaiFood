<?php
require_once(__DIR__ . "/conexion.php");

$id = intval($_GET['id']);
$sql = "SELECT c.TextoComentario, c.Fecha, u.Nombre 
        FROM comentarios c 
        INNER JOIN usuarios u ON c.usuario_id = u.ID 
        WHERE c.platillo_id = $id
        ORDER BY c.Fecha DESC";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
  while ($fila = $resultado->fetch_assoc()) {
    echo "<div class='plantilla_comentario'>
            <p class='nombre_usuario'>{$fila['Nombre']}</p>
            <p class='comentario_usuario'>{$fila['TextoComentario']}</p>
          </div>";
  }
} else {
  echo "<p>No hay comentarios aún. ¡Sé el primero en opinar!</p>";
}
?>
