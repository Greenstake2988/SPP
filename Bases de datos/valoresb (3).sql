-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 18:01:06
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
-- Estructura de tabla para la tabla `valoresb`
--

CREATE TABLE `valoresb` (
  `idvaloresb` int(11) NOT NULL,
  `Total` int(5) DEFAULT NULL,
  `hombres` int(11) NOT NULL,
  `mujeres` int(11) NOT NULL,
  `pertenecenEtnia` int(11) NOT NULL,
  `HabitanEnElEstado` int(5) NOT NULL,
  `ingenieria` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `DiscapacidadMotriz` int(5) NOT NULL,
  `DiscapacidadMental` int(5) NOT NULL,
  `DiscapacidadSensorial` int(5) NOT NULL,
  `DiscapacidadPsicosocial` int(5) NOT NULL,
  `DiscapacidadComunicacion` int(5) NOT NULL,
  `creado` date NOT NULL,
  `guardado` date NOT NULL,
  `indicadores_idindicadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `valoresb`
--

INSERT INTO `valoresb` (`idvaloresb`, `Total`, `hombres`, `mujeres`, `pertenecenEtnia`, `HabitanEnElEstado`, `ingenieria`, `DiscapacidadMotriz`, `DiscapacidadMental`, `DiscapacidadSensorial`, `DiscapacidadPsicosocial`, `DiscapacidadComunicacion`, `creado`, `guardado`, `indicadores_idindicadores`) VALUES
(143, 100, 4, 5, 4, 5, 'Industrial', 4, 5, 4, 5, 4, '0000-00-00', '0000-00-00', 3),
(144, 100, 5, 4, 5, 4, 'Sistemas', 5, 4, 5, 4, 5, '0000-00-00', '0000-00-00', 3),
(145, 100, 4, 5, 4, 5, 'Ambiental', 4, 5, 4, 5, 4, '0000-00-00', '0000-00-00', 3),
(154, 23, 4, 5, 4, 5, 'Administración', 4, 5, 4, 5, 4, '2022-10-18', '2022-10-18', 29),
(155, 23, 4, 3, 4, 3, 'Gestión Empresarial', 4, 3, 4, 3, 4, '2022-10-18', '2022-10-18', 29),
(156, 10, 5, 4, 5, 4, 'Administración', 5, 4, 5, 4, 5, '2022-10-21', '2022-10-21', 29),
(157, 10, 5, 6, 5, 6, 'Gestión Empresarial', 5, 6, 5, 6, 5, '2022-10-21', '2022-10-21', 29),
(158, 30, 5, 6, 5, 6, 'Administración', 5, 6, 5, 6, 5, '2022-10-22', '2022-10-22', 29),
(159, 30, 4, 5, 4, 5, 'Gestión Empresarial', 4, 5, 4, 5, 4, '2022-10-22', '2022-10-22', 29),
(160, 45, 1, 1, 1, 1, 'Administración', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 29),
(161, 45, 1, 1, 1, 1, 'Gestión Empresarial', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 29),
(162, 45, 1, 1, 1, 1, 'Civil', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 29),
(163, 45, 1, 1, 1, 1, 'Industrial', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 29),
(164, 45, 1, 1, 1, 1, 'Sistemas', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `valoresb`
--
ALTER TABLE `valoresb`
  ADD PRIMARY KEY (`idvaloresb`),
  ADD KEY `fk_valores_indicadores1_idx` (`indicadores_idindicadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `valoresb`
--
ALTER TABLE `valoresb`
  MODIFY `idvaloresb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoresb`
--
ALTER TABLE `valoresb`
  ADD CONSTRAINT `fk_valores_indicadores1` FOREIGN KEY (`indicadores_idindicadores`) REFERENCES `indicadores` (`idindicadores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
