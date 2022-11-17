-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 18:00:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosindicadores`
--

CREATE TABLE `usuariosindicadores` (
  `idusuarioindicador` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idroles` int(11) NOT NULL,
  `idindicadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuariosindicadores`
--

INSERT INTO `usuariosindicadores` (`idusuarioindicador`, `idusuario`, `idroles`, `idindicadores`) VALUES
(1, 2, 2, 3),
(2, 2, 2, 4),
(3, 3, 3, 5),
(4, 4, 4, 6),
(5, 5, 5, 7),
(6, 6, 6, 8),
(7, 6, 6, 10),
(8, 6, 6, 11),
(9, 6, 6, 12),
(10, 6, 6, 13),
(11, 6, 6, 14),
(12, 7, 7, 15),
(13, 7, 7, 17),
(14, 7, 7, 20),
(15, 7, 7, 21),
(16, 7, 7, 22),
(17, 7, 7, 23),
(18, 7, 7, 24),
(19, 7, 7, 25),
(20, 7, 7, 26),
(21, 7, 7, 27),
(22, 7, 7, 28),
(23, 8, 8, 29),
(24, 8, 8, 30),
(25, 9, 9, 31),
(26, 9, 9, 32),
(27, 9, 9, 33),
(28, 9, 9, 35),
(29, 9, 9, 36),
(30, 9, 9, 37),
(31, 9, 9, 38),
(32, 9, 9, 39),
(33, 9, 9, 40),
(34, 9, 9, 41),
(35, 9, 9, 43),
(36, 9, 9, 44),
(37, 9, 9, 45),
(38, 9, 9, 46),
(39, 10, 10, 47),
(40, 10, 10, 48),
(41, 10, 10, 49),
(42, 10, 10, 50),
(43, 11, 11, 52),
(44, 12, 12, 53),
(45, 12, 12, 54),
(46, 12, 12, 55),
(47, 12, 12, 56),
(48, 12, 12, 57),
(49, 12, 12, 58),
(50, 12, 12, 59),
(51, 12, 12, 60),
(52, 12, 12, 61),
(53, 12, 12, 62),
(54, 12, 12, 63),
(55, 12, 12, 64),
(56, 13, 13, 65),
(57, 13, 13, 66),
(58, 13, 13, 67),
(59, 13, 13, 68),
(60, 13, 13, 69),
(61, 13, 13, 70),
(62, 13, 13, 71),
(63, 13, 13, 72),
(64, 13, 13, 73),
(65, 13, 13, 74),
(66, 13, 13, 75),
(67, 14, 14, 78),
(68, 14, 14, 79),
(69, 14, 14, 80),
(70, 14, 14, 81),
(71, 14, 14, 82),
(72, 14, 14, 83),
(73, 14, 14, 84),
(74, 14, 14, 85),
(75, 15, 15, 86),
(76, 15, 15, 77),
(77, 16, 16, 76);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariosindicadores`
--
ALTER TABLE `usuariosindicadores`
  ADD PRIMARY KEY (`idusuarioindicador`),
  ADD KEY `idroles` (`idroles`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idindicadores` (`idindicadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariosindicadores`
--
ALTER TABLE `usuariosindicadores`
  MODIFY `idusuarioindicador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuariosindicadores`
--
ALTER TABLE `usuariosindicadores`
  ADD CONSTRAINT `usuariosindicadores_ibfk_1` FOREIGN KEY (`idroles`) REFERENCES `roles` (`idrole`),
  ADD CONSTRAINT `usuariosindicadores_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `usuariosindicadores_ibfk_3` FOREIGN KEY (`idindicadores`) REFERENCES `indicadores` (`idindicadores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
