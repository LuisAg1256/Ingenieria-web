-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2025 a las 18:40:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroturisticodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrorutas`
--

CREATE TABLE `registrorutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `procedencia` varchar(20) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `tipousuario` varchar(10) NOT NULL,
  `tiporuta` varchar(10) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `registrorutas`
--

INSERT INTO `registrorutas` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `procedencia`, `fechanacimiento`, `tipousuario`, `tiporuta`, `contraseña`) VALUES
(1, 'luis', 'Aguilar', '1111', 'laaguilar21@utpl.edu.ec', '0999', 'ec', '2012-12-12', 'usuario1', 'ruta1', 'elalejo123'),
(2, '', '', '', '', '', '', '0000-00-00', '', '', ''),
(3, 'Juan', 'Cueva', '124342', 'cuevini@uwu', '12321312', 'pe', '2025-11-14', 'usuario2', 'ruta2', '123'),
(4, 'Juan', 'Cueva', '124342', 'cuevini@uwu', '12321312', 'pe', '2025-11-14', 'usuario2', 'ruta2', '123'),
(5, 'Juan', 'Cueva', '124342', 'cuevini@uwu', '12321312', 'pe', '2025-11-14', 'usuario2', 'ruta2', '123'),
(6, 'Piper', 'Pimienta', '12345365', 'sdfasdfas@sdfasdf', '123124', 'pe', '2223-04-24', 'usuario2', 'ruta2', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrorutas`
--
ALTER TABLE `registrorutas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrorutas`
--
ALTER TABLE `registrorutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
