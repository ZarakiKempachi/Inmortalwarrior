-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 17:19:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

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
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `boxes`
--

INSERT INTO `boxes` (`ID_Boxes`, `Nombre`, `Direccion`, `Telefono`, `Email`, `Horario`, `Localidad`, `Descripcion`) VALUES
(1, 'dragon box', 'C/profesor motos guirao,2 local 1', 2147483647, 'alexcortesronda63@gmail.com', '8:00 a 21:00', 'Granada', 'aaaa');

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
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Password` varchar(50) NOT NULL,
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
(14, 'Alex', 'cortes ronda', 'alexcortesronda63@gmail.com', 'javi', '$2y$10$S6cVCt8I0T8GZ2Jej/E6k.xIirWzl3CF8CjZ2DSHb5v', '2024-03-11', '', 1, 1, 1);

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
  MODIFY `ID_Boxes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
