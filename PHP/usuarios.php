<?php
include("../PHP/conexion.php");

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $carrera_id = $_POST["carrera_id"];
    $conexion->query("INSERT INTO usuarios (Nombre, Correo, Contraseña, carrera_id)
                      VALUES ('$nombre', '$correo', '$contraseña', '$carrera_id')");
    echo "<p>✅ Usuario agregado correctamente.</p>";
}

$carreras = $conexion->query("SELECT * FROM carreras");
$usuarios = $conexion->query("SELECT u.Nombre, u.Correo, c.Nombre AS Carrera
                              FROM usuarios u
                              LEFT JOIN carreras c ON u.carrera_id = c.ID");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
  <link rel="stylesheet" href="../CSS/estiloTablas.css">
</head>
<body>
  <h2>Agregar usuario</h2>
  <form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="password" name="contraseña" placeholder="Contraseña" required>
    <select name="carrera_id" required>
      <option value="">Seleccione carrera</option>
      <?php while ($fila = $carreras->fetch_assoc()) { ?>
        <option value="<?= $fila["ID"] ?>"><?= $fila["Nombre"] ?></option>
      <?php } ?>
    </select> <br>
    <button type="submit">Guardar</button>
  </form>

  <h2>Usuarios en la base de datos</h2>
  <table border="0">
    <tr><th>Nombre</th><th>Correo</th><th>Carrera</th></tr>
    <?php while ($fila = $usuarios->fetch_assoc()) { ?>
      <tr>
        <td><?= $fila["Nombre"] ?></td>
        <td><?= $fila["Correo"] ?></td>
        <td><?= $fila["Carrera"] ?></td>
      </tr>
    <?php } ?>
  </table>

  <br><a href="../index.html">Volver al inicio</a>
</body>
</html>
