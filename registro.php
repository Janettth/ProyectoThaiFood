<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="icon" href="assets/Bandera2.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/estiloLogin.css">

  <link rel="stylesheet" href="CSS/estilo.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/f22edbe064.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contenedor_de_loginRegistro">

    <header>
      <div id="logo">
        <a href="index.php"><img src="assets/logo2.png" alt=""></a>
      </div>

      <nav>
        <ul>
          <li><a href="index.php">Menú</a></li>
          <li><a href="ubicaciones.php">Ubicaciones</a></li>
          <li><a href="nosotros.php">Nosotros</a></li>
          
          <?php if (isset($_SESSION['usuario_id'])): ?>
            <!-- Si el usuario está logueado -->
            <li><a id="btn_cerrar_sesion" href="PHP/cerrar_sesion.php">Cerrar sesión</a></li>
          <?php else: ?>
            <!-- Si el usuario no ha iniciado sesión -->
            <li><a id="btn_iniciar_sesion" href="InicioSesion.php">Iniciar sesión</a></li>
          <?php endif; ?>
        </ul>
      </nav>

    </header>

    <div class="contenedor_estilo_form">

      <div class="contenedor_form">
      
        <div class="cont_titulo">
          <img src="assets/logo3.png" alt="">
          <h2>Regístrate</h2>
        </div>

        <form action="PHP/registro.php" method="POST">
          <label for="nombre">Nombre completo:</label><br>
          <input type="text" id="nombre" name="nombre" required><br><br>

          <label for="correo">Correo electrónico:</label><br>
          <input type="email" id="correo" name="correo" required><br><br>

          <label for="contraseña">Contraseña:</label><br>
          <input type="password" id="contraseña" name="contraseña" required><br><br>

          <label for="carrera">Carrera</label><br>
          <select name="carrera" id="carrera">
            <option value="">Selecciona una carrera</option>
            <option value="111">Ing. Biomedica</option>
            <option value="113">Economía</option>
            <option value="114">Derecho</option>
            <option value="115">Diseño Gráfico</option>
            <option value="1112">Diseño Industrial</option>
          </select><br><br>

          <button type="submit">Registrarse</button>
        </form>

        <div id="inciarSesionlink" class="registrase">
          <p>¿Ya tienes cuenta? <a href="InicioSesion.php">Inicia sesión</a></p>
        </div>

      </div>
    </div>
  </div>

  <footer>
    <div id="redes_sociales">
      <a class="fa-brands fa-facebook-f"></a>
      <a class="fa-brands fa-instagram"></a>
      <a class="fa-brands fa-x-twitter"></a>
    </div>

    <div id="contacto">
      <p>thaifood@gmail.com</p>
      <p>(656) 345 0098</p>
    </div>

    <hr>

    <div class="mapa_sitio">

        <div class="cont_mapa">
            <h3>Thai Food</h3>
            <a href="index.php">Menú</a>
            <a href="nosotros.php">Nosotros</a>
        </div>

        <div class="cont_mapa">
            <h3>Información</h3>
            <a href="ubicaciones.php">Lugares</a>
            <a href="nosotros.php">Contacto</a>
        </div>

        <div class="cont_mapa">
            <h3>Formularios</h3>
            <a href="InicioSesion.php">Iniciar Sesión</a>
            <a href="registro.php">Cerrar Sesión</a>
        </div>
        
    </div>

    <div id="info_desarrollador">
      <p>Creado por: Janeth Guadalupe Castañeda Romero</p>
    </div>
   
  </footer>
</body>
</html>
