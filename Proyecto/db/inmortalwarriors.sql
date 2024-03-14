-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2024 a las 10:22:57
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
-- Base de datos: `inmortalwarriors`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boxes`
--

CREATE TABLE `boxes` (
  `ID_Boxes` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Horario` varchar(255) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Foto` varchar(50) DEFAULT NULL,
  `Is_Solicitud` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `boxes`
--

INSERT INTO `boxes` (`ID_Boxes`, `Nombre`, `Direccion`, `Telefono`, `Email`, `Horario`, `Localidad`, `Descripcion`, `Foto`, `Is_Solicitud`) VALUES
(1, 'dragon box', 'C/profesor motos guirao,2 local 1', 2147483647, 'alexcortesronda63@gmail.com', '8:00 a 21:00', 'Granada', 'aaaa', '', 0),
(12, 'Crossfit Altea', 'Calle almendras', 345345345, 'crossfitaltea@gmail.com', '6:00 - 21:00', 'Altea', 'asdasd', NULL, 0),
(13, 'Animal Box', 'C/ Camino la huerta edf. la cruz II, 9 Local D 9', 2147483647, 'alexcortesronda63@gmail.com', '6:00 - 21:00', 'Granada', 'asadasd', NULL, 0),
(14, 'mi bvo', 'C/profesor motos guirao,2 local 1', 2147483647, 'alexcortesronda63@gmail.com', '6:00 - 21:00', 'Granada', 'asdasd', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `ID_Clases` int(11) NOT NULL,
  `Nombe` varchar(50) NOT NULL,
  `Horario` varchar(50) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Wods` int(11) NOT NULL,
  `ID_Boxes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_records`
--

CREATE TABLE `personal_records` (
  `ID_Records` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Resultado` int(10) NOT NULL,
  `Formato` enum('Kg','Lb','min') NOT NULL,
  `ID_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `ID_Reservas` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Clases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `superadmin`
--

INSERT INTO `superadmin` (`id`, `username`, `password`) VALUES
(2, 'root', '$2y$10$gswsHQet31un5njV1zj4IesXme.uhOLgXYXPxMfD9DUXkXFXB2SVG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  `Foto` varchar(255) NOT NULL DEFAULT 'imagenPredeterminada.jpg',
  `Is_Admin` tinyint(1) NOT NULL,
  `Is_Instructor` tinyint(1) NOT NULL,
  `ID_Boxes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `Nombre`, `Apellido`, `Email`, `Username`, `Password`, `Fecha_Creacion`, `Foto`, `Is_Admin`, `Is_Instructor`, `ID_Boxes`) VALUES
(36, 'Alex', 'cortes ronda', 'alexcortesronda63@gmail.com', 'alex', '$2y$10$SMtZYVFpGZA.SQF7v4M0Ru14lcmUX.pdjLmWI1V64tSTofKq4RW.K', '2024-03-13', '', 0, 0, 1),
(40, 'Jose', 'Anderson', 'crossfitaltea@gmail.com', 'jose', '$2y$10$LCNm1kjI27DVs7vx71Ix7uygRX98A/8IuWzmpF3kUUReLCGy1Q7zm', '2024-03-13', '', 1, 0, 12),
(41, 'Jose Antonio', 'Tenz', 'alexcortesronda63@gmail.com', 'antonio', '$2y$10$jv9Zw7cfsC4U3Lr2X/9yT.Ip82R.Sa2rvxLI5YNS8ddO/484dnuYy', '2024-03-13', '', 1, 0, 13),
(42, 'Ramon', 'perez', 'alexcortesronda63@gmail.com', 'ramon', '$2y$10$VZTDbgTl1MMQzjmQGryKc.KQ/2VKIeFd2DPlc8ujRTcBfhgSTZmay', '2024-03-13', '', 0, 0, 1),
(48, 'simon', 'cortes ronda', 'alexcortesronda63@gmail.com', 'root', '$2y$10$Hp5Ue2r.ARudQDNvjBanS.eAQjwCU03MduCDHxIeqbJtF/e6Q5RgO', '2024-03-13', '', 0, 0, 14),
(49, 'Esteban', 'co', 'alexcortesronda63@gmail.com', 'esteban', '$2y$10$w4cUvzSam2qVHumu3/ZgzeXC1P3ComTaPO4Kz2etZ2aPGF3JpIjSW', '2024-03-13', '', 0, 0, 12),
(50, 'sancho', 'lkjsadf', 'alexcortesronda63@gmail.com', 'sancho', '$2y$10$Rz7FheyxBpiz8E8b59ao1O.ohWBolzP2fo7ppb20O8i1/WYc/gVsG', '2024-03-13', '', 0, 0, 12),
(51, 'encarnma', 'cortes ronda', 'alexcortesronda63@gmail.com', 'encarna', '$2y$10$RGZY8HSx3p561NdOuAY1ieRAXwm2HlAzJgdDgLJNyeqrlNhxzDyPa', '2024-03-13', '', 0, 0, 1),
(52, 'angie', 'cortes ronda', 'alexcortesronda63@gmail.com', 'angie', '$2y$10$dtDDnwUg5DIg3a8ZAPUp6us79V/tt5mR7isCKhKv/q6X2rpRBz.eG', '2024-03-13', '', 0, 0, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wods`
--

CREATE TABLE `wods` (
  `ID_Wods` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Descripcion` int(11) NOT NULL,
  `Tipo` enum('The Girls','The Herores','Programas','Distancias','Desafios','Qualifiers') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`ID_Boxes`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`ID_Clases`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Wods` (`ID_Wods`),
  ADD KEY `ID_Box` (`ID_Boxes`);

--
-- Indices de la tabla `personal_records`
--
ALTER TABLE `personal_records`
  ADD PRIMARY KEY (`ID_Records`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`ID_Reservas`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Clase` (`ID_Clases`);

--
-- Indices de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD KEY `ID_Boxes` (`ID_Boxes`);

--
-- Indices de la tabla `wods`
--
ALTER TABLE `wods`
  ADD PRIMARY KEY (`ID_Wods`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boxes`
--
ALTER TABLE `boxes`
  MODIFY `ID_Boxes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `ID_Clases` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_records`
--
ALTER TABLE `personal_records`
  MODIFY `ID_Records` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID_Reservas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `wods`
--
ALTER TABLE `wods`
  MODIFY `ID_Wods` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`ID_Boxes`) REFERENCES `boxes` (`ID_Boxes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clases_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clases_ibfk_3` FOREIGN KEY (`ID_Wods`) REFERENCES `wods` (`ID_Wods`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal_records`
--
ALTER TABLE `personal_records`
  ADD CONSTRAINT `personal_records_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuarios` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`ID_Clases`) REFERENCES `clases` (`ID_Clases`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_Boxes`) REFERENCES `boxes` (`ID_Boxes`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
