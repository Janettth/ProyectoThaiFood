<?php
include("../PHP/conexion.php");

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $ingredientes = $_POST["ingredientes"];
    $preparacion = $_POST["preparacion"];
    $origen = $_POST["origen"];

    $conexion->query("INSERT INTO platillos (Nombre, Ingredientes, Preparacion, Origen)
                      VALUES ('$nombre', '$ingredientes', '$preparacion', '$origen')");
    echo "<p>✅ Platillo agregado correctamente.</p>";
}

$resultado = $conexion->query("SELECT * FROM platillos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Platillos</title>
  <link rel="stylesheet" href="../CSS/estiloTablas.css">
</head>
<body>

  <!--
  <h2>Agregar nuevo platillo</h2>
  <form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="ingredientes" placeholder="Ingredientes">
    <input type="text" name="preparacion" placeholder="Preparación">
    <input type="text" name="origen" placeholder="Origen">
    <button type="submit">Guardar</button>
  </form>-->

  <h2>Patillos en la base de datos</h2>
  <table border="0">
    <tr><th>Nombre</th><th>Ingredientes</th><th>Preparación</th><th>Origen</th></tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
      <tr>
        <td><?= $fila["Nombre"] ?></td>
        <td><?= $fila["Ingredientes"] ?></td>
        <td><?= $fila["Preparacion"] ?></td>
        <td><?= $fila["Origen"] ?></td>
      </tr>
    <?php } ?>
  </table>

  <br><a href="../index.html">Volver al inicio</a>
</body>
</html>
