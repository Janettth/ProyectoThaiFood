<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones</title>
    <link rel="icon" href="assets/Bandera2.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/estiloUbicacion.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f22edbe064.js" crossorigin="anonymous"></script>
</head>
<body>
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

        <div id="texto_ubicaciones">
            <h1>¡No te quedes sin probarla!</h1>
            <h3>Encuentra más restaurantes de comida Tailandesa en Cd.Juárez y El Paso</h3>

            <img src="assets/logo3.png" alt="">
        </div>
        <div class="contenedor_locaciones">
            <div class="ubicacion">
                <div class="info_ubicacion">
                    <h3>Tara Thai Kitchen</h3>
                    <p> <b>Dirección</b> <br> 2606 N Mesa St, El Paso, TX 79902, Estados Unidos</p>
                    <p> <b>Teléfono</b> <br> +1 915-219-9307</p>
                    <div class="link_web"><a href="http://www.tarathaikitchen.com/">Sitio Web</a></div>
                    
                </div>

                <div class="mapa_ubicacion">
                    <p>Ubicación</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2583.5748747390817!2d-106.5024756!3d31.776756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75844d82771a1%3A0x71d19bf96ab66daa!2sTara%20Thai%20Cuisine!5e1!3m2!1ses-419!2smx!4v1763112603347!5m2!1ses-419!2smx" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="ubicacion">
                <div class="info_ubicacion">
                    <h3>Wok and Roll - Thai Food Truck </h3>
                    <p> <b>Dirección</b> <br> Av. Simona Barba #5747, Ciudad Juárez, Mexico</p>
                    <p> <b>Teléfono</b> <br> 656 769 0468</p>
                    <div class="link_web"><a href="https://www.facebook.com/WokandRollFoodTruck/?locale=es_LA">Sitio Web</a></div>
                    
                </div>

                <div class="mapa_ubicacion">
                    <p>Ubicación</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4347.599678985358!2d-106.43530441656931!3d31.722177461027705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75c04faf40497%3A0xcfc73c8af2eb67da!2sC.%20Simona%20Barba%205747%2C%20Misiones%20San%20Miguel%2C%2032380%20Ju%C3%A1rez%2C%20Chih.!5e1!3m2!1ses!2smx!4v1763112875595!5m2!1ses!2smx" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


            <div class="ubicacion">
                <div class="info_ubicacion">
                    <h3>Singapore Cafe</h3>
                    <p> <b>Dirección</b> <br> 3233 N Mesa St, El Paso, TX 79902, Estados Unidos</p>
                    <p> <b>Teléfono</b> <br> +1 915-533-2889</p>
                    <div class="link_web"><a href="https://thesingaporecafe.com/">Sitio Web</a></div>
                    
                </div>

                <div class="mapa_ubicacion">
                    <p>Ubicación</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2583.4274649999993!2d-106.50616339999999!3d31.782032899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7583e9af99033%3A0x37dcb1adb0b92b9c!2sSingapore%20Cafe!5e1!3m2!1ses-419!2smx!4v1763112977422!5m2!1ses-419!2smx" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


            <div class="ubicacion">
                <div class="info_ubicacion">
                    <h3>Flavors of Mae Kong Thai Restaurant</h3>
                    <p>Dirección <br> 1816 N Zaragoza Rd, El Paso, TX 79936, Estados Unidos</p>
                    <p>Teléfono <br> +1 915-856-0299</p>
                    <div class="link_web"><a href="https://www.orderflavorsofmaekongthairestaurant.com/">Sitio Web</a></div>
                    
                </div>

                <div class="mapa_ubicacion">
                    <p>Ubicación</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.155179848379!2d-106.2727631!3d31.755974900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7440b8178a489%3A0x9c32d9d5d767659c!2sFlavors%20of%20Mae%20Kong%20Thai%20Restaurant!5e1!3m2!1ses-419!2smx!4v1763113046128!5m2!1ses-419!2smx" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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