-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2024 a las 11:39:33
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
(16, 'CrossFit Elite', 'Calle del Deporte 123', 123456789, 'info@crossfitelite.com', 'Lunes a Viernes: 6am - 10pm', 'Ciudad Ficticia', 'El mejor lugar para entrenar y superar tus límites.', 'crossfit_elite.jpg', 0),
(17, 'Iron Gym', 'Avenida de la Fuerza 456', 987654321, 'contacto@irongym.com', 'Lunes a Sábado: 5am - 11pm', 'Otra Ciudad', 'Gimnasio especializado en levantamiento de pesas y entrenamiento funcional.', 'iron_gym.jpg', 0),
(18, 'FitBox', 'Calle de la Salud 789', 111222333, 'info@fitbox.com', 'Lunes a Domingo: 7am - 9pm', 'Ciudad Principal', 'Entrenamientos variados para todas las edades y niveles de condición física.', 'fitbox.jpg', 0),
(19, 'Power Fitness Center', 'Paseo del Deporte 456', 444555666, 'contacto@powerfitness.com', 'Lunes a Viernes: 6am - 11pm', 'Otra Ciudad', 'Centro de fitness con equipos de última generación y entrenadores certificados.', 'power_fitness.jpg', 0),
(20, 'StrongBody CrossFit', 'Avenida de la Resistencia 789', 777888999, 'info@strongbodycrossfit.com', 'Lunes a Sábado: 5am - 10pm', 'Ciudad Grande', 'Ambiente amigable y programas de entrenamiento desafiantes para todos los niveles.', 'strongbody_crossfit.jpg', 0),
(21, 'Vitality Gym', 'Calle de la Vitalidad 123', 123987456, 'info@vitalitygym.com', 'Lunes a Domingo: 6am - 10pm', 'Otra Ciudad', 'Gimnasio completo con clases grupales y entrenamiento personalizado.', 'vitality_gym.jpg', 0),
(22, 'Endurance Fitness Studio', 'Avenida de la Resistencia 456', 789456123, 'info@endurancefitness.com', 'Lunes a Viernes: 7am - 10pm', 'Ciudad Ficticia', 'Enfoque en entrenamientos de resistencia y cardio para mejorar la salud y el rendimiento.', 'endurance_fitness.jpg', 0),
(23, 'Eagles Nest CrossFit', 'Calle de la Fortaleza 789', 555666777, 'contacto@eaglesnestcrossfit.com', 'Lunes a Sábado: 6am - 9pm', 'Otra Ciudad', 'CrossFit box con entrenadores experimentados y comunidad acogedora.', 'eaglesnest_crossfit.jpg', 0),
(24, 'Grit & Grind Fitness', 'Paseo de la Determinación 123', 123456789, 'info@gritandgrindfitness.com', 'Lunes a Domingo: 5am - 11pm', 'Ciudad Principal', 'Entrenamientos desafiantes y programas de acondicionamiento físico para todos.', 'gritandgrind_fitness.jpg', 0),
(25, 'Active Life Fitness', 'Calle de la Actitud 456', 987654321, 'info@activelifefitness.com', 'Lunes a Viernes: 6am - 10pm', 'Otra Ciudad', 'Gimnasio moderno con clases grupales y equipo de entrenamiento variado.', 'activelife_fitness.jpg', 0),
(26, 'Limitless CrossFit', 'Paseo de la Libertad 789', 111222333, 'contacto@limitlesscrossfit.com', 'Lunes a Sábado: 5am - 9pm', 'Ciudad Grande', 'Box de CrossFit comprometido con ayudarte a alcanzar tus objetivos de fitness.', 'limitless_crossfit.jpg', 0),
(27, 'Xtreme Fitness Center', 'Calle de la Fuerza 123', 444555666, 'info@xtremefitnesscenter.com', 'Lunes a Domingo: 6am - 11pm', 'Otra Ciudad', 'Centro de fitness completo con clases y entrenamiento personalizado.', 'xtreme_fitness.jpg', 0),
(28, 'FlexFit Gym', 'Avenida de la Flexibilidad 456', 777888999, 'contacto@flexfitgym.com', 'Lunes a Viernes: 7am - 10pm', 'Ciudad Ficticia', 'Gimnasio con equipos modernos y programas de entrenamiento versátiles.', 'flexfit_gym.jpg', 0),
(29, 'Core Strength CrossFit', 'Calle de la Resistencia 789', 123987456, 'info@corestrengthcrossfit.com', 'Lunes a Sábado: 6am - 9pm', 'Otra Ciudad', 'Enfocado en el fortalecimiento del núcleo y el rendimiento atlético.', 'corestrength_crossfit.jpg', 0),
(30, 'Fitness Fusion Studio', 'Paseo de la Fusión 123', 789456123, 'info@fitnessfusionstudio.com', 'Lunes a Domingo: 7am - 10pm', 'Ciudad Principal', 'Combinación de entrenamiento funcional, yoga y pilates para un enfoque holístico del fitness.', 'fitnessfusion.jpg', 0),
(31, 'Pulse Performance Gym', 'Calle del Pulso 456', 555666777, 'contacto@pulseperformancegym.com', 'Lunes a Viernes: 6am - 10pm', 'Otra Ciudad', 'Gimnasio con entrenamiento de alta intensidad y equipos de calidad.', 'pulseperformance.jpg', 0),
(32, 'FitLife Wellness Center', 'Avenida de la Vida 789', 123456789, 'info@fitlifewellnesscenter.com', 'Lunes a Sábado: 5am - 9pm', 'Ciudad Grande', 'Promoviendo un estilo de vida saludable con programas de fitness y bienestar.', 'fitlife_wellness.jpg', 0),
(33, 'Elevate Fitness Studio', 'Paseo de la Elevación 123', 987654321, 'info@elevatefitnessstudio.com', 'Lunes a Domingo: 6am - 10pm', 'Otra Ciudad', 'Estudio de fitness con enfoque en ejercicios de cuerpo completo y movimientos funcionales.', 'elevate_fitness.jpg', 0),
(34, 'Blaze CrossFit', 'Calle del Fuego 456', 111222333, 'contacto@blazecrossfit.com', 'Lunes a Viernes: 7am - 9pm', 'Ciudad Ficticia', 'Entrenamientos de alta intensidad y comunidad apasionada por el fitness.', 'blaze_crossfit.jpg', 0),
(35, 'Harmony Gym', 'Avenida de la Armonía 789', 444555666, 'info@harmonygym.com', 'Lunes a Sábado: 6am - 10pm', 'Otra Ciudad', 'Gimnasio con un ambiente acogedor y variedad de clases grupales.', 'harmony_gym.jpg', 0),
(36, 'Titanium Fitness Center', 'Calle del Titanio 123', 777888999, 'contacto@titaniumfitnesscenter.com', 'Lunes a Domingo: 5am - 11pm', 'Ciudad Principal', 'Centro de fitness con equipos de alta gama y entrenadores capacitados.', 'titanium_fitness.jpg', 0),
(37, 'Dynamic Performance Gym', 'Paseo de la Dinámica 456', 123987456, 'info@dynamicperformancegym.com', 'Lunes a Sábado: 6am - 9pm', 'Otra Ciudad', 'Enfoque en entrenamiento de fuerza, resistencia y agilidad.', 'dynamic_performance.jpg', 0),
(38, 'FitZone Fitness Studio', 'Avenida de la Zona Fitness 789', 789456123, 'info@fitzonefitnessstudio.com', 'Lunes a Viernes: 7am - 10pm', 'Ciudad Ficticia', 'Ofreciendo una amplia gama de clases y servicios para todos los niveles.', 'fitzone_fitness.jpg', 0),
(39, 'Prime Fitness Club', 'Calle de la Excelencia 123', 555666777, 'contacto@primefitnessclub.com', 'Lunes a Sábado: 6am - 10pm', 'Otra Ciudad', 'Club de fitness premium con instalaciones de lujo y programas personalizados.', 'prime_fitness.jpg', 0),
(40, 'Velocity CrossFit', 'Paseo de la Velocidad 456', 123456789, 'info@velocitycrossfit.com', 'Lunes a Domingo: 6am - 9pm', 'Ciudad Grande', 'CrossFit box enfocado en el rendimiento y el progreso personal.', 'velocity_crossfit.jpg', 0),
(41, 'BodyFlex Fitness Studio', 'Avenida de la Flexibilidad 789', 987654321, 'contacto@bodyflexstudio.com', 'Lunes a Viernes: 5am - 11pm', 'Otra Ciudad', 'Estudio de fitness con clases variadas y equipo moderno.', 'bodyflex_fitness.jpg', 0),
(42, 'Iron Strong CrossFit', 'Calle del Hierro 123', 111222333, 'info@ironstrongcrossfit.com', 'Lunes a Sábado: 6am - 9pm', 'Ciudad Ficticia', 'Desafiantes entrenamientos de CrossFit para mejorar la fuerza y la resistencia.', 'ironstrong_crossfit.jpg', 0),
(43, 'FitPro Gym', 'Paseo del Profesional 456', 444555666, 'info@fitprogym.com', 'Lunes a Domingo: 7am - 10pm', 'Otra Ciudad', 'Gimnasio con programas de entrenamiento personalizado y seguimiento de progreso.', 'fitpro_gym.jpg', 0),
(44, 'FlexFit Studio', 'Avenida de la Flexibilidad 789', 777888999, 'contacto@flexfitstudio.com', 'Lunes a Sábado: 6am - 9pm', 'Ciudad Principal', 'Estudio de fitness con enfoque en flexibilidad y movilidad.', 'flexfit_studio.jpg', 0),
(45, 'Revolution CrossFit', 'Calle de la Revolución 123', 123987456, 'info@revolutioncrossfit.com', 'Lunes a Viernes: 6am - 10pm', 'Otra Ciudad', 'Box de CrossFit comprometido con transformaciones físicas y mentales.', 'revolution_crossfit.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `ID_Clases` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Horario` varchar(50) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Wods` int(11) NOT NULL,
  `ID_Boxes` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`ID_Clases`, `Nombre`, `Horario`, `ID_Usuario`, `ID_Wods`, `ID_Boxes`, `Fecha`) VALUES
(1, 'este team', '16:15', 40, 7, 12, '2024-03-28'),
(2, 'Clase de mobilidad', '19:12', 40, 6, 12, '2024-03-08'),
(3, 'team nuevo', '20:14', 40, 5, 12, '2024-03-21'),
(4, 'mobilidad', '16:21', 40, 6, 12, '2024-03-20'),
(5, 'th10', '21:20', 40, 7, 12, '2024-03-21'),
(6, 'nuevoi', '16:28', 40, 7, 12, '2024-03-27'),
(7, 'asdasd', '17:33', 52, 9, 13, '2024-03-20'),
(8, 'clase de jose', '21:40', 40, 8, 12, '2024-03-19');

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

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`ID_Reservas`, `Fecha`, `ID_Usuario`, `ID_Clases`) VALUES
(30, '2024-03-20', 49, 8),
(31, '2024-03-20', 49, 1),
(32, '2024-03-20', 49, 4),
(34, '2024-03-20', 50, 5),
(35, '2024-03-20', 50, 3);

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
(49, 'Esteban', 'co', 'alexcortesronda63@gmail.com', 'esteban', '$2y$10$w4cUvzSam2qVHumu3/ZgzeXC1P3ComTaPO4Kz2etZ2aPGF3JpIjSW', '2024-03-13', '', 0, 0, 12),
(50, 'sancho', 'lkjsadf', 'alexcortesronda63@gmail.com', 'sancho', '$2y$10$Rz7FheyxBpiz8E8b59ao1O.ohWBolzP2fo7ppb20O8i1/WYc/gVsG', '2024-03-13', '', 0, 0, 12),
(51, 'encarnma', 'cortes ronda', 'alexcortesronda63@gmail.com', 'encarna', '$2y$10$RGZY8HSx3p561NdOuAY1ieRAXwm2HlAzJgdDgLJNyeqrlNhxzDyPa', '2024-03-13', '', 0, 0, 1),
(52, 'angie', 'cortes ronda', 'alexcortesronda63@gmail.com', 'angie', '$2y$10$dtDDnwUg5DIg3a8ZAPUp6us79V/tt5mR7isCKhKv/q6X2rpRBz.eG', '2024-03-13', '', 0, 1, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wods`
--

CREATE TABLE `wods` (
  `ID_Wods` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Tipo` enum('The Girls','The Heroes','Programas','Distancias','Desafios','Qualifiers') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wods`
--

INSERT INTO `wods` (`ID_Wods`, `Nombre`, `Descripcion`, `Tipo`) VALUES
(2, 'Angie', 'For Time: 100 Pull-ups, 100 Push-ups, 100 Sit-ups, 100 Air Squats', 'The Girls'),
(3, 'Barbara', '5 Rounds For Time: 20 Pull-ups, 30 Push-ups, 40 Sit-ups, 50 Air Squats', 'The Girls'),
(4, 'Chelsea', 'Every Minute on the Minute (EMOM) for 30 Minutes: 5 Pull-ups, 10 Push-ups, 15 Air Squats', 'The Girls'),
(5, 'Diane', '21-15-9 Reps For Time: Deadlifts (225/155 lbs), Handstand Push-ups', 'The Girls'),
(6, 'Elizabeth', '21-15-9 Reps For Time: Squat Cleans (135/95 lbs), Ring Dips', 'The Girls'),
(7, 'Fran', '21-15-9 Reps For Time: Thrusters (95/65 lbs), Pull-ups', 'The Girls'),
(8, 'Grace', 'For Time: 30 Clean and Jerks (135/95 lbs)', 'The Girls'),
(9, 'Helen', '3 Rounds For Time: 400 meter Run, 21 Kettlebell Swings (53/35 lbs), 12 Pull-ups', 'The Girls'),
(10, 'Isabel', 'For Time: 30 Snatches (135/95 lbs)', 'The Girls'),
(11, 'Karen', 'For Time: 150 Wall Ball Shots (20/14 lbs)', 'The Girls'),
(12, 'Murph', 'For Time: 1 Mile Run, 100 Pull-ups, 200 Push-ups, 300 Air Squats, 1 Mile Run', 'The Heroes'),
(13, 'DT', '5 Rounds For Time: 12 Deadlifts, 9 Hang Power Cleans, 6 Push Jerks', 'The Heroes'),
(14, 'Linda', '10-9-8-7-6-5-4-3-2-1 Reps For Time: Deadlifts (1.5x bodyweight), Bench Press (bodyweight), Clean (0.75x bodyweight)', 'The Heroes'),
(15, 'Jackie', 'For Time: 1000 Meter Row, 50 Thrusters (45/35 lbs), 30 Pull-ups', 'The Heroes'),
(16, 'Josh', 'For Time: 21 Overhead Squats (95/65 lbs), 42 Pull-ups, 15 Overhead Squats, 30 Pull-ups, 9 Overhead Squats, 18 Pull-ups', 'The Heroes'),
(17, 'Nate', 'AMRAP in 20 Minutes: 2 Muscle-ups, 4 Handstand Push-ups, 8 Kettlebell Swings (70/53 lbs)', 'The Heroes'),
(18, 'Tommy V', 'For Time: 21 Thrusters (115/75 lbs), 12 Rope Climbs, 15 Thrusters, 9 Rope Climbs, 9 Thrusters, 6 Rope Climbs', 'The Heroes'),
(19, 'Ryan', '5 Rounds For Time: 7 Muscle-ups, 21 Burpees', 'The Heroes'),
(20, 'Michael', '3 Rounds For Time: 800 Meter Run, 50 Back Extensions, 50 Sit-ups', 'The Heroes'),
(21, 'Badger', '3 Rounds For Time: 30 Squat Cleans (95/65 lbs), 30 Pull-ups, Run 800 meters', 'The Heroes'),
(22, 'Max Pull-ups in 2 Minutes', 'Realiza la mayor cantidad de Pull-ups posibles en 2 minutos.', 'Desafios'),
(23, '1 Rep Max Back Squat', 'Encuentra tu máximo peso en una repetición de Back Squat.', 'Desafios'),
(24, '1000 Meter Row For Time', 'Realiza un remo de 1000 metros lo más rápido posible.', 'Desafios'),
(25, 'Fran Challenge', 'Completa Fran (21-15-9 Thrusters y Pull-ups) en el menor tiempo posible.', 'Desafios'),
(26, 'Handstand Hold Max Time', 'Mantén una posición de Handstand por el mayor tiempo posible.', 'Desafios'),
(27, '1 Mile Run For Time', 'Corre una milla (1609 metros) lo más rápido posible.', 'Desafios'),
(28, 'Max Weight Clean and Jerk', 'Encuentra tu máximo peso en Clean and Jerk.', 'Desafios'),
(29, '500 Meter Row For Time', 'Realiza un remo de 500 metros lo más rápido posible.', 'Desafios'),
(30, 'Burpee Challenge', 'Completa la mayor cantidad de Burpees en 5 minutos.', 'Desafios'),
(31, 'Tabata Challenge', 'Realiza Tabata (8 rondas de 20 segundos de trabajo y 10 segundos de descanso) para varios ejercicios.', 'Desafios'),
(32, '5K Run For Time', 'Corre 5 kilómetros lo más rápido posible.', 'Distancias'),
(33, '10K Bike For Time', 'Monta en bicicleta 10 kilómetros lo más rápido posible.', 'Distancias'),
(34, '1 Mile Swim For Time', 'Nada una milla (1609 metros) lo más rápido posible.', 'Distancias'),
(35, 'Half Marathon Run', 'Corre un medio maratón (21.1 kilómetros).', 'Distancias'),
(36, '20K Row For Time', 'Rema 20 kilómetros lo más rápido posible.', 'Distancias'),
(37, '1000 Meter Swim For Time', 'Nada 1000 metros lo más rápido posible.', 'Distancias'),
(38, '10 Mile Bike For Time', 'Monta en bicicleta 10 millas lo más rápido posible.', 'Distancias'),
(39, 'Marathon Run', 'Corre un maratón completo (42.2 kilómetros).', 'Distancias'),
(40, '500 Meter Swim For Time', 'Nada 500 metros lo más rápido posible.', 'Distancias'),
(41, '15K Row For Time', 'Rema 15 kilómetros lo más rápido posible.', 'Distancias'),
(42, 'Programa de Fuerza 1', 'Entrenamiento enfocado en el desarrollo de fuerza.', 'Programas'),
(43, 'Programa de Resistencia 1', 'Entrenamiento diseñado para mejorar la resistencia cardiovascular.', 'Programas'),
(44, 'Programa de Flexibilidad 1', 'Rutina para aumentar la flexibilidad y movilidad articular.', 'Programas'),
(45, 'Programa de Hipertrofia 1', 'Entrenamiento orientado a aumentar la masa muscular.', 'Programas'),
(46, 'Programa de CrossFit Básico', 'Introducción al CrossFit para principiantes.', 'Programas'),
(47, 'Programa de CrossFit Avanzado', 'Entrenamiento de alto nivel para atletas experimentados.', 'Programas'),
(48, 'Programa de Pérdida de Peso', 'Rutina diseñada para quemar grasa y perder peso.', 'Programas'),
(49, 'Programa de Preparación ', 'Entrenamiento específico para preparar a los atletas para competiciones.', 'Programas'),
(50, 'Programa de Rehabilitación', 'Rutina de ejercicios para recuperarse de lesiones y prevenir futuras.', 'Programas'),
(51, 'Programa de Entrenamiento Funcional', 'Entrenamiento para mejorar el rendimiento en actividades diarias.', 'Programas'),
(52, 'Qualifier 1', 'Por determinar', 'Qualifiers'),
(53, 'Qualifier 2', 'Por determinar', 'Qualifiers'),
(54, 'Qualifier 3', 'Por determinar', 'Qualifiers'),
(55, 'Qualifier 4', 'Por determinar', 'Qualifiers'),
(56, 'Qualifier 5', 'Por determinar', 'Qualifiers'),
(57, 'Qualifier 6', 'Por determinar', 'Qualifiers'),
(58, 'Qualifier 7', 'Por determinar', 'Qualifiers'),
(59, 'Qualifier 8', 'Por determinar', 'Qualifiers'),
(60, 'Qualifier 9', 'Por determinar', 'Qualifiers'),
(61, 'Qualifier 10', 'Por determinar', 'Qualifiers'),
(62, 'Qualifier 1', 'Desafío de fuerza y resistencia. Completa un circuito de ejercicios con repeticiones y tiempo cronometrado.', 'Qualifiers'),
(63, 'Qualifier 2', 'Desafío de resistencia cardiovascular. Realiza una serie de ejercicios intensos con intervalos de descanso.', 'Qualifiers'),
(64, 'Qualifier 3', 'Desafío de habilidades técnicas. Completa una serie de ejercicios que requieren coordinación y precisión.', 'Qualifiers'),
(65, 'Qualifier 4', 'Desafío de fuerza máxima. Encuentra tu máximo peso en levantamientos básicos como sentadillas y press de banca.', 'Qualifiers'),
(66, 'Qualifier 5', 'Desafío de velocidad y agilidad. Completa un circuito de ejercicios explosivos y rápidos.', 'Qualifiers'),
(67, 'Qualifier 6', 'Desafío de resistencia muscular. Realiza ejercicios de alta intensidad con repeticiones elevadas.', 'Qualifiers'),
(68, 'Qualifier 7', 'Desafío de capacidad anaeróbica. Completa una serie de ejercicios cortos e intensos con poco descanso.', 'Qualifiers'),
(69, 'Qualifier 8', 'Desafío de trabajo en equipo. Completa una serie de ejercicios en pareja o grupo.', 'Qualifiers'),
(70, 'Qualifier 9', 'Desafío de equilibrio y estabilidad. Realiza ejercicios que requieren control postural y coordinación.', 'Qualifiers'),
(71, 'Qualifier 10', 'Desafío de resistencia mental. Completa un circuito de ejercicios que requieren concentración y determinación.', 'Qualifiers');

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
  MODIFY `ID_Boxes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `ID_Clases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_records`
--
ALTER TABLE `personal_records`
  MODIFY `ID_Records` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `ID_Reservas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `wods`
--
ALTER TABLE `wods`
  MODIFY `ID_Wods` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

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
