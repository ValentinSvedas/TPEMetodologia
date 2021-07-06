-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 21:34:51
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cartonero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_volumen` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartonero`
--

INSERT INTO `cartonero` (`dni`, `nombre`, `apellido`, `direccion`, `fecha_nacimiento`, `tipo_volumen`) VALUES
(0, 'Jogef', 'Diaz', 'Roca 610', '2021-05-11', 'A'),
(3, 'Jogef', 'Diaz', 'Roca 610', '2018-11-09', 'C'),
(4, 'Junn', 'Dia\r\n               ', 'Roca 610', '2018-11-09', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudadano`
--

CREATE TABLE `ciudadano` (
  `id_ciudadano` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudadano`
--

INSERT INTO `ciudadano` (`id_ciudadano`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'Juan', 'Fernandez', 'alam 123', 2222),
(2, 'Lili', 'Valdez', 'San Martin 230', 23523);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `franja_horario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `franja_horario`) VALUES
(1, '9 a 12'),
(2, '13 a 17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_material` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `descripcion`) VALUES
(1, 'papel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(2, 'cartón', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(3, 'envases plásticos', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(4, 'latas de conserva', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(5, 'tetrabrik', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(6, 'envases de aluminio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(7, 'botellas de vidrio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(8, 'papel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(9, 'cartón', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(10, 'envases plásticos', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(11, 'latas de conserva', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(12, 'tetrabrik', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(13, 'envases de aluminio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(14, 'botellas de vidrio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(15, 'papel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(16, 'cartón', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(17, 'envases plásticos', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(18, 'latas de conserva', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(19, 'tetrabrik', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(20, 'envases de aluminio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has'),
(21, 'botellas de vidrio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_transporte`
--

CREATE TABLE `oferta_transporte` (
  `id_oferta_transporte` int(11) NOT NULL,
  `id_ciudadano` int(11) NOT NULL,
  `tipo_volumen` char(1) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `texto_libre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_ciudadano` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `tipo_franja_horaria` int(11) NOT NULL,
  `tipo_volumen` char(1) NOT NULL,
  `imagen_materiales` varchar(50) DEFAULT NULL,
  `id_cartonero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_ciudadano`, `id_pedido`, `tipo_franja_horaria`, `tipo_volumen`, `imagen_materiales`, `id_cartonero`) VALUES
(1, 6, 2, 'C', NULL, 3),
(1, 7, 2, 'B', NULL, 4),
(1, 8, 1, 'D', NULL, 0),
(2, 9, 1, 'A', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(0, 'admin@gmail.com', '$2y$10$SecyWR4GYEgtxZoIzA9Z9u9RqFClBdusWbM6voGAvXWoCJ0HCt3Xa'),
(1, 'admin@gmail.com', '$2y$10$SecyWR4GYEgtxZoIzA9Z9u9RqFClBdusWbM6voGAvXWoCJ0HCt3Xa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `volumen`
--

CREATE TABLE `volumen` (
  `id_volumen` char(1) NOT NULL,
  `tamanio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `volumen`
--

INSERT INTO `volumen` (`id_volumen`, `tamanio`) VALUES
('A', 'En una caja'),
('B', 'En un auto'),
('C', 'En una camioneta'),
('D', 'En un camion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `FK_CARTONERO_VOLUMEN` (`tipo_volumen`);

--
-- Indices de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  ADD PRIMARY KEY (`id_ciudadano`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD PRIMARY KEY (`id_oferta_transporte`),
  ADD KEY `FK_CIUDADANO_OT` (`id_ciudadano`),
  ADD KEY `FK_VOLUMEN_OT` (`tipo_volumen`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `FK_PEDIDO_VOLUMEN` (`tipo_volumen`),
  ADD KEY `FK_PEDIDO_HORARIO` (`tipo_franja_horaria`),
  ADD KEY `FK_PEDIDO_CIUDADANO` (`id_ciudadano`),
  ADD KEY `id_cartonero` (`id_cartonero`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `volumen`
--
ALTER TABLE `volumen`
  ADD PRIMARY KEY (`id_volumen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudadano`
--
ALTER TABLE `ciudadano`
  MODIFY `id_ciudadano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  MODIFY `id_oferta_transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD CONSTRAINT `FK_CARTONERO_VOLUMEN` FOREIGN KEY (`tipo_volumen`) REFERENCES `volumen` (`id_volumen`);

--
-- Filtros para la tabla `oferta_transporte`
--
ALTER TABLE `oferta_transporte`
  ADD CONSTRAINT `FK_CIUDADANO_OT` FOREIGN KEY (`id_ciudadano`) REFERENCES `ciudadano` (`id_ciudadano`),
  ADD CONSTRAINT `FK_VOLUMEN_OT` FOREIGN KEY (`tipo_volumen`) REFERENCES `volumen` (`id_volumen`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_PEDIDO_CIUDADANO` FOREIGN KEY (`id_ciudadano`) REFERENCES `ciudadano` (`id_ciudadano`),
  ADD CONSTRAINT `FK_PEDIDO_HORARIO` FOREIGN KEY (`tipo_franja_horaria`) REFERENCES `horario` (`id_horario`),
  ADD CONSTRAINT `FK_PEDIDO_VOLUMEN` FOREIGN KEY (`tipo_volumen`) REFERENCES `volumen` (`id_volumen`),
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cartonero`) REFERENCES `cartonero` (`dni`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
