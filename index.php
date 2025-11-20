<?php
session_start();
include("PHP/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Base de Datos</title>
  <link rel="icon" href="assets/Bandera2.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/estilo.css">
  <link rel="stylesheet" href="CSS/estiloSplash.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/f22edbe064.js" crossorigin="anonymous"></script>
</head>


<body>

  <div class="intro">
    <h1 class="logo_header">

      <span class="logo"></span> 

      <span class="logo"><img src="assets/logo2.png" alt="" width="80%"></span>

    </h1>
  </div>

  <div id="contenedor_principal">
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

    

    <div id="texto_bienvenida">
      <p>Conoce la comida tailandesa, una experiencia única del sudeste asiático, llena de texturas, aromas e intenso sabor</p>
    </div>

    <div class="separador">
      <img src="assets/logo3.png" alt="">
      <h3>Menú</h3>
    </div>


    <!-- Lista de platillos -->
    <!--<h3 class="tipo_menu">General</h3>-->
    <div class="contenedor_platillos">
      
      <?php
        $sql = "SELECT ID, Nombre, Imagen FROM platillos";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
            ?>
            <div class="plantilla_info" onclick="MostrarInfo(<?php echo $fila['ID']; ?>)">
              <img src="<?php echo $fila['Imagen']; ?>" alt="<?php echo $fila['Nombre']; ?>" width="200">
              <p><?php echo $fila['Nombre']; ?></p>
            </div>
            <?php
          }
        } else {
          echo "<p>No hay platillos registrados.</p>";
        }
      ?>

    </div>

    

    <!-- Contenedor que mostrará la información del platillo seleccionado -->
    <div class="contenedor_info_platillo" id="contenedor_info">
        <div class="seccion_salir">
          <button onclick="cerrarInfo()" class="fa-solid fa-circle-xmark"></button>
        </div>
        
        <div class="contenedor_uno">

          <div class="titulo platillo" id="nombre_platillo">Selecciona un platillo</div>

          <div class="Contenerdor_informacion_importante">
            <div id="primera_seccion">
              <img id="imagen_platillo" src="" alt="">
            </div>

            <div id="segunda_seccion">
              <div class="info_platillo" id="info_platillo"></div>
            </div>
          </div>

        </div>

        <div class="contenedor_dos">
          <h3>Opiniones sobre este platillo</h3>
          <div id="comentarios"></div>
          <button class="btn_comentar" onclick="HacerComentario(<?php echo isset($_SESSION['usuario_id']) ? 'true' : 'false'; ?>)">
            COMENTAR
          </button>
          <div class="seccion_comentar" style="display: none;">
            <textarea id="comentario_texto" placeholder="¿Qué te pareció la comida?"></textarea> <br>
            <button class="btn_comentar" onclick="EnviarComentario()">Enviar</button>
          </div>
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

  <div id="overlay"></div>
  
</body>

<script src="JS/splash.js"></script>
<script src="JS/funciones.js"></script>

</html>
