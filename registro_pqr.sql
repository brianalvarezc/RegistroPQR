-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2022 a las 14:02:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_pqr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqr`
--

CREATE TABLE `pqr` (
  `pqr_id` int(10) NOT NULL,
  `pqr_tipo` varchar(10) NOT NULL,
  `pqr_asunto` varchar(100) NOT NULL,
  `pqr_texto` varchar(1000) NOT NULL,
  `pqr_usuario_id` int(10) NOT NULL,
  `pqr_estado` varchar(13) NOT NULL,
  `pqr_fecha_creado` datetime NOT NULL,
  `pqr_fecha_limite` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) NOT NULL,
  `usuario_nombre` varchar(30) NOT NULL,
  `usuario_apellido` varchar(30) NOT NULL,
  `usuario_correo` varchar(100) NOT NULL,
  `usuario_pass` varchar(100) NOT NULL,
  `usuario_telefono` varchar(10) NOT NULL,
  `usuario_admin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_pass`, `usuario_telefono`, `usuario_admin`) VALUES
(101010101, 'Prueba', 'Prueba', 'prueba@mail.com', '$2y$10$PMLVvLSlVAwZmHp8gKIoXubOHhsiKUzEiXZjxJgMuaCRbz7pVgEGu', '1234567890', 'No'),
(1082929825, 'Brian', 'Alvarez', 'brian.alvarez.cuadros@gmail.com', '$2y$10$AOZvrmZ3o9feYhiru873hullY4G1AsoBIbQjIuFfYNHLUozSrQp/q', '3045284003', 'Si'),
(1234567890, 'qwerty', 'qwertyqwerty', 'qwerty@mail.com', '$2y$10$tZB41EcVJQzDKyPsJ7lP8.aVy/JXbR4dEh4x4YTVU.PPqhCB4mL2O', '12345678', 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD PRIMARY KEY (`pqr_id`),
  ADD KEY `pqr_usuario_id` (`pqr_usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pqr`
--
ALTER TABLE `pqr`
  MODIFY `pqr_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`pqr_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
