<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="icon" href="assets/Bandera2.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/estiloNosotros.css">
    <script src="https://kit.fontawesome.com/f22edbe064.js" crossorigin="anonymous"></script>
</head>
<body>
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

  <div class="carrusel_contenedor">

    <div id="sobreTexto">
      <img src="assets/logo4.png" alt="">
    </div>
    <div class="carrusel_slider">
      <img src="assets/carrusel/315_Thai_banner.jpg" alt="">
      <img src="assets/carrusel/1178479-sukhothai-les-photos-du-restaurant-thai.jpg" alt="">
      <img src="assets/carrusel/Caracteristicas-de-la-gastronomía-Tailandesa.jpg" alt="">

      <img src="assets/carrusel/cocina-Thai--scaled.jpg" alt="">
      <img src="assets/carrusel/comidatailandesa-portada.jpg" alt="">
      <img src="assets/carrusel/entradas.jpg" alt="">

      <img src="assets/carrusel/portada-salon-restaurante-tailandes-thai-barcelona.jpg" alt="">
      <img src="assets/carrusel/restau_thaigarden.webp" alt="">
    </div>

    <button class="fa-solid fa-circle-arrow-left prev" onclick="plusSlides(-1)"></button>
    <button class="fa-solid fa-circle-arrow-right next" onclick="plusSlides(1)"></button>
    
  </div>


  <div class="contenido_texto">
    <div id="titulo_bienvenida">
      Thai Food, originales recetas traídas directamente desde Tailandia hasta la frontera
    </div>

    <div class="banner">
      <p>Historia</p>
    </div>

    <div class="texto_restaurante">
      <p>Thai Food llevaba ya cinco años perfumando las calles de Ciudad Juárez 
        con aromas de lemongrass, chile rojo y leche de coco. El restaurante había 
        empezado como un pequeño local de apenas cuatro mesas, atendido por Niran, 
        un chef tailandés que llegó a la frontera buscando un lugar donde pudiera 
        combinar sus recetas familiares con el sabor atrevido del norte de México. 
      </p>

     
      <p>
        Su especialidad era el Tom Yum fronterizo: una sopa picante tradicional, 
        pero con un ligero toque de chile chilaca que Niran descubrió en uno de los 
        mercados locales. Al principio, muchos clientes llegaban con curiosidad, atraídos 
        por el aroma y la música suave que salía del local. Con el tiempo, ya se habían 
        vuelto clientes fieles: trabajadores de maquila, familias, estudiantes y hasta 
        turistas que cruzaban desde El Paso solo para probar el famoso Pad Thai con camarón.
      </p>
    </div>

    <div class="banner">
      <p>Misión y Visión</p>
    </div>

    <div class="misionVision">
      <h3>Misión</h3>
      <p>Ofrecer auténtica comida tailandesa elaborada con ingredientes frescos y sabores únicos, brindando una experiencia culinaria cálida, cercana y memorable que conecte la cultura de Tailandia con el corazón de Ciudad Juárez.</p>
    </div>

    <div class="misionVision">
      <h3>Visión</h3>
      <p>Consolidarnos como el restaurante tailandés más reconocido en la frontera norte, destacando por nuestra calidad, innovación gastronómica y compromiso con la satisfacción del cliente y la difusión de la cultura tailandesa.</p>
    </div>


    <div class="banner">
      <p>Contacto</p>
    </div>


    <div class="contacto">
      <p>e-mail: thaifood@gmail.com</p>
      <p>Tel: (656) 345 0098</p>
    </div>
  </div>




  <h4>Ficha del desarrollador de la página</h4>
  <div id="ficha">
    
    <img src="assets/ficha_yo.jpg" alt="">
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

<script src="JS/funciones.js"></script>
<script src="JS/carrusel.js"></script>
</html>