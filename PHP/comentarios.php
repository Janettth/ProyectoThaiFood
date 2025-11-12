<?php
include("../PHP/conexion.php");


if (isset($_POST["texto"])) {
    $texto = $_POST["texto"];
    $fecha = date("Y-m-d");
    $usuario_id = $_POST["usuario_id"];
    $platillo_id = $_POST["platillo_id"];

    $conexion->query("INSERT INTO comentarios (TextoComentario, Fecha, usuario_id, platillo_id)
                      VALUES ('$texto', '$fecha', '$usuario_id', '$platillo_id')");
    echo "<p>✅ Comentario agregado correctamente.</p>";
}

$usuarios = $conexion->query("SELECT ID, Nombre FROM usuarios");
$platillos = $conexion->query("SELECT ID, Nombre FROM platillos");

$sql = "SELECT c.TextoComentario, c.Fecha, u.Nombre AS Usuario, p.Nombre AS Platillo
        FROM comentarios c
        JOIN usuarios u ON c.usuario_id = u.ID
        JOIN platillos p ON c.platillo_id = p.ID";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Comentarios</title>
  <link rel="stylesheet" href="../CSS/estiloTablas.css">
</head>
<body>
  <h2>Agregar comentario</h2>
  <form method="POST">
    <textarea name="texto" placeholder="Comentario" required></textarea><br>
    <label>Usuario:</label>
    <select name="usuario_id" required>
      <option value="">Seleccione</option>
      <?php while ($u = $usuarios->fetch_assoc()) { ?>
        <option value="<?= $u["ID"] ?>"><?= $u["Nombre"] ?></option>
      <?php } ?>
    </select>
    <label>Platillo:</label>
    <select name="platillo_id" required>
      <option value="">Seleccione</option>
      <?php while ($p = $platillos->fetch_assoc()) { ?>
        <option value="<?= $p["ID"] ?>"><?= $p["Nombre"] ?></option>
      <?php } ?>
    </select> <br>
    <button type="submit">Guardar</button>
  </form>

  <h2>Comentarios</h2>
  <table border="0">
    <tr><th>Usuario</th><th>Platillo</th><th>Comentario</th><th>Fecha</th></tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?= $fila["Usuario"] ?></td>
        <td><?= $fila["Platillo"] ?></td>
        <td><?= $fila["TextoComentario"] ?></td>
        <td><?= $fila["Fecha"] ?></td>
      </tr>
    <?php } ?>
  </table>

  <br><a href="../index.html">Volver al inicio</a>
</body>
</html>
