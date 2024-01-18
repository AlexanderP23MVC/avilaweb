-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2024 a las 02:05:39
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `avilabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `users` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_personas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(8) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(7) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) NOT NULL,
  `edad` int(2) NOT NULL,
  `sexo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `password`, `edad`, `sexo`) VALUES
(6, 'pepe ', 'el pollo', '10556896', '7845896', 'ASDASDASDA@GMAIL.COM', '$2y$10$M6nJxMg9BNzdgR0sqWyS8.8oFU8E.uqj2RHKk9.SU4gJDzFGe6/6u1', 44, 1),
(5, 'karen', 'maza', '11111111', '4556585', 'ASDASDaaASDA@GMAIL.COM', '$2y$10$v8YjNnT0bekYgHMF9tmeK.JY4/9yZX1qxpEZwTEXxcmTnSUEacPzu1', 40, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programar_ruta`
--

CREATE TABLE `programar_ruta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_personas` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `id_rutaInicio` int(11) NOT NULL,
  `id_rutaDestino` int(11) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programar_ruta`
--

INSERT INTO `programar_ruta` (`id`, `id_personas`, `id_tipo_usuario`, `id_rutaInicio`, `id_rutaDestino`, `id_reporte`, `estado`) VALUES
(1, 5, 1, 2, 2, 1, 0),
(2, 6, 3, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `fecha`) VALUES
(1, '2023-11-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `id` int(11) NOT NULL,
  `nombre_ruta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(2) NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `img_ruta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`id`, `nombre_ruta`, `nivel`, `descripcion`, `img_ruta`) VALUES
(1, 'bellas artes', 1, 'Ruta Furte', 'flora.jpg'),
(2, 'Altamira', 4, 'Ruta Furte', 'mont.jpg'),
(3, 'Los Dos Camino', 10, 'Ruta Furte', 'rocas.jpg'),
(4, 'bellas artes', 6, 'ghjmhfjfghj', 'mont.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `tipo_usuario`) VALUES
(1, 'campista'),
(2, 'senderista'),
(3, 'guia'),
(4, 'guarda parque');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreing_login` (`id_personas`) USING BTREE;

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE,
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `programar_ruta`
--
ALTER TABLE `programar_ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_personas` (`id_personas`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`),
  ADD KEY `id_rutaInicio` (`id_rutaInicio`),
  ADD KEY `id_rutaDestino` (`id_rutaDestino`),
  ADD KEY `id_reporte` (`id_reporte`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `programar_ruta`
--
ALTER TABLE `programar_ruta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `foreing_login` FOREIGN KEY (`id_personas`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `programar_ruta`
--
ALTER TABLE `programar_ruta`
  ADD CONSTRAINT `id_personas` FOREIGN KEY (`id_personas`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `id_reporte` FOREIGN KEY (`id_reporte`) REFERENCES `reporte` (`id`),
  ADD CONSTRAINT `id_rutaDestino` FOREIGN KEY (`id_rutaDestino`) REFERENCES `ruta` (`id`),
  ADD CONSTRAINT `id_rutaInicio` FOREIGN KEY (`id_rutaInicio`) REFERENCES `ruta` (`id`),
  ADD CONSTRAINT `id_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipousuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
