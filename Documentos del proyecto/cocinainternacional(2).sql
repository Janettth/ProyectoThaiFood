-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2025 a las 03:48:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocinainternacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`ID`, `Nombre`) VALUES
(111, 'Ing. Biomedica'),
(113, 'Economia'),
(114, 'Derecho'),
(115, 'Diseño Grafico'),
(1112, 'Diseño Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` int(11) NOT NULL,
  `TextoComentario` varchar(60) NOT NULL,
  `Fecha` date NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `platillo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID`, `TextoComentario`, `Fecha`, `usuario_id`, `platillo_id`) VALUES
(1, 'holaaaa', '2025-10-21', 1, 1),
(2, 'Ejemplo de comentarioooo', '2025-10-21', 3, 1),
(3, 'Me encanta la comidaaa', '2025-10-21', 2, 1),
(4, '¡Este es el mejor platillo que he probado en la vida!', '2025-11-18', 6, 3),
(5, '¡Una comida deliciosa en un lugar increíble!', '2025-11-18', 6, 7),
(6, 'Me encantó esta comida, es mi favorita ahora!', '2025-11-18', 9, 13),
(7, 'Que delicia de platilloooo', '2025-11-02', 8, 8),
(8, 'Delicisa comida, voy a volver', '2025-11-01', 7, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Ingredientes` text DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`ID`, `Nombre`, `Ingredientes`, `Descripcion`, `Imagen`) VALUES
(1, 'Curry Massaman', 'Proteína (Pollo, ternera, pato, cordero o tofu), Pasta de curry\r\nCardamomo y canela, Leche de coco, caldo y pasta de tamarindo, Patatas y cebolla, Hojas de laurel, canela, anís estrellado, azúcar de y salsa de Cacahuetes tostados para añadir textura crujiente y cilantro fresco (como guarnición).\r\n', 'plato tailandés rico, sabroso y ligeramente picante, reconocido como una de las comidas más deliciosas del mundo.', 'assets\\img\\curriMassamag.jpg'),
(2, 'Gaeng kiew wan', 'Pasta de curry verde, Leche de coco, Proteína (pollo o pescado, también se pueden usar otras carnes, tofu o mariscos.), Berenjenas tailandesas, brotes de bambú y ajíes para dar textura y sabor, Hojas de lima kaffir, albahaca tailandesa, salsa de pescado y azúcar de palma.\r\n', 'Plato de curry verde tailandés, fragante y picante, que se prepara con pasta de curry verde y leche de coco.', 'assets\\img\\Gaeng kiew wan.jpg'),
(3, 'Khao Soi', 'Leche de coco, Pasta de curry rojo, Pollo o res, Fideos de huevo (hervidos y fritos), Cebolla morada, Lima, pepinillos encurtidos y chile seco frito.\r\n', 'Sopa cremosa y aromática del norte de Tailandia, especialmente popular en Chiang Mai.', 'assets\\img\\Khao Soi.jpg'),
(4, 'Nám tok', 'Carne de cerdo o res a la parrilla, Jugo de lima, Salsa de pescado, Arroz tostado molido, Chile seco molido, menta, cebolla morada y cilantro.\r\n', 'Conocido como “ensalada de carne”, es un plato del noreste con carne asada cortada en tiras, mezclada con hierbas frescas, arroz tostado molido y salsa picante.', 'assets\\img\\Nám tok.jpg'),
(5, 'Pad Thai', 'Fideos de arroz, Huevo, Tofu, Camarones o pollo, Brotes de soya, Cebollín, Cacahuates, Salsa de tamarindo, Azúcar de palma, salsa de pescado y chile seco.\r\n', 'Son fideos de arroz salteados con salsa agridulce, tofu, camarones o pollo, y brotes de soya, servidos con cacahuates y lima.', 'assets\\img\\Pad Thai.avif'),
(6, 'Poh piah', 'Papel de arroz o masa de trigo\r\nZanahoria, repollo y brotes de soya\r\nFideos de arroz, Cerdo o camarones,Ajo y salsa dulce de chile.\r\n', 'Rollos primavera tailandeses, que pueden ser frescos o fritos, rellenos con vegetales, fideos y a veces carne o camarones.', 'assets\\img\\Poh piah.jpg'),
(7, 'Satay', 'Pollo, Cerdo o res, Leche de coco, Curry amarillo, Cúrcuma, Azúcar, Salsa de soya, Salsa de cacahuate y Pepinos en vinagre.\r\n', 'Brochetas de carne marinada a la parrilla, servidas con una salsa cremosa de cacahuate y una salsa agria de pepino.', 'assets\\img\\Satay.jpg'),
(8, 'Som tam', 'Papaya verde, Chile, ajo, Jugo de lima, Salsa de pescado, Azúcar de palma, Tomate, Cacahuates y Camarones secos.\r\n', 'Ensalada fresca, picante y ácida hecha con papaya verde rallada. Es crujiente, sabrosa y una de las más representativas del noreste de Tailandia.', 'assets\\img\\Som tam.png'),
(9, 'Tom Yum', 'Hierba limón, Hojas de lima kaffir, Galanga, Chile, Camarones o pollo, Hongos, Jugo de lima, Salsa de pescado y Cilantro.\r\n', 'Sopa tailandesa agria y picante con aroma a hierbas frescas.', 'assets\\img\\Tom Yum.jpg'),
(10, 'Kuay Teow Lui Suan', 'Láminas de fideos de arroz, Lechuga, Zanahoria, Hierbas frescas (albahaca, menta), Pollo o camarones, Salsa de chile con ajo y limón.\r\n', 'Rollos frescos de fideos de arroz rellenos de verduras, hierbas y carne, servidos con una salsa picante a base de chile y ajo.', 'assets\\img\\Kuay Teow Lui Suan.jpg'),
(11, 'Tom Kha Kai', 'Pollo, Leche de coco, Galanga, Hierba limón, Hojas de lima kaffir, Chile, jugo de lima y cilantro.\r\n', 'Sopa cremosa de pollo con leche de coco y galanga, menos picante que el Tom Yum, con sabor suave y aromático.', 'assets\\img\\Tom Kha Kai.jpg'),
(12, 'Kai Med Ma Muang', 'Pollo, anacardos, Cebolla, Pimiento, ajo, Salsa de soya, Salsa de ostras, Azúcar y chile seco.\r\n', 'Salteado de pollo con anacardos, verduras y salsa agridulce, muy popular tanto en Tailandia como internacionalmente.', 'assets\\img\\Kai Med Ma Muang.jpg'),
(13, 'Panaeng mu', 'Carne de cerdo, Leche de coco, Pasta de curry panaeng, Hojas de lima kaffir y Azúcar de palma.\r\n', 'Curry espeso y ligeramente dulce con carne de cerdo, leche de coco y pasta de curry panaeng.', 'assets\\img\\Panaeng mu.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `carrera_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Correo`, `Contraseña`, `carrera_id`) VALUES
(1, 'Antonio Lopez', 'anto@gmail.com', '1234', 111),
(2, 'Ana Mora', 'ana@gmail.com', '3434', 114),
(3, 'Camila Castro', 'cami@gmail.com', '7070', 115),
(4, 'Fabrisio', 'fabi@gmail.com', '$2y$10$B6dhh2wCrnKSM5wcq5.zp.W6yxINf4ZJ1xMaquGU65.OLj5IVTpYa', 115),
(5, 'Camila', 'camilanum1@gmail.com', '$2y$10$uvfj2ehL9FHsDQQLwYLIIOjGPmZCojk819TIpSV2Y9hD7hebCY.uS', 111),
(6, 'Emiliano', 'emi@gmail.com', '$2y$10$6P949s/ixwDkk3Q4uOWDEeV4M3OITDeRS.35ahi/ZvB7oROQfbJTC', 113),
(7, 'Juan Esteban', 'juanito@gmail.com', '303030', 113),
(8, 'Esmeralda', 'esme@gmail.com', '252525', 114),
(9, 'Galilea', 'galyy@gmail.com', '121212', 1112);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_comentario_platillo` (`platillo_id`),
  ADD KEY `fk_comentario_usuario` (`usuario_id`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_usuarios_carreras` (`carrera_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1113;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentario_platillo` FOREIGN KEY (`platillo_id`) REFERENCES `platillos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_carreras` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
