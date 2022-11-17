-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 18:01:49
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
-- Estructura de tabla para la tabla `valoresc`
--

CREATE TABLE `valoresc` (
  `idvaloresc` int(11) NOT NULL,
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
-- Volcado de datos para la tabla `valoresc`
--

INSERT INTO `valoresc` (`idvaloresc`, `Total`, `hombres`, `mujeres`, `pertenecenEtnia`, `HabitanEnElEstado`, `ingenieria`, `DiscapacidadMotriz`, `DiscapacidadMental`, `DiscapacidadSensorial`, `DiscapacidadPsicosocial`, `DiscapacidadComunicacion`, `creado`, `guardado`, `indicadores_idindicadores`) VALUES
(27, 16, 5, 6, 5, 6, 'Administración', 5, 6, 5, 6, 5, '0000-00-00', '0000-00-00', 30),
(28, 16, 6, 5, 6, 5, 'Gestión Empresarial', 6, 5, 6, 5, 6, '0000-00-00', '0000-00-00', 30),
(29, 30, 5, 6, 5, 6, 'Administración', 5, 6, 5, 6, 5, '0000-00-00', '0000-00-00', 29),
(30, 30, 6, 5, 7, 5, 'Gestión Empresarial', 6, 7, 6, 7, 6, '0000-00-00', '0000-00-00', 29),
(31, 10, 6, 7, 6, 7, 'Administración', 6, 7, 6, 7, 6, '2022-10-18', '2022-10-18', 29),
(32, 10, 6, 7, 6, 7, 'Gestión Empresarial', 6, 7, 6, 7, 6, '2022-10-18', '2022-10-18', 29),
(33, 30, 5, 6, 5, 6, 'Administración', 5, 6, 5, 6, 5, '2022-10-22', '2022-10-22', 29),
(34, 30, 6, 6, 7, 6, 'Gestión Empresarial', 67, 6, 7, 6, 7, '2022-10-22', '2022-10-22', 29),
(35, 6, 1, 1, 1, 1, 'Administración', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30),
(36, 6, 1, 1, 1, 1, 'Gestión Empresarial', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30),
(37, 6, 1, 1, 1, 1, 'Civil', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30),
(38, 6, 1, 1, 1, 1, 'Industrial', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30),
(39, 6, 1, 1, 1, 1, 'Sistemas', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30),
(40, 6, 1, 1, 1, 1, 'Ambiental', 1, 1, 1, 1, 1, '2022-10-28', '2022-10-28', 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `valoresc`
--
ALTER TABLE `valoresc`
  ADD PRIMARY KEY (`idvaloresc`),
  ADD KEY `fk_valoresc_indicadores1_idx` (`indicadores_idindicadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `valoresc`
--
ALTER TABLE `valoresc`
  MODIFY `idvaloresc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoresc`
--
ALTER TABLE `valoresc`
  ADD CONSTRAINT `fk_valoresc_indicadores1` FOREIGN KEY (`indicadores_idindicadores`) REFERENCES `indicadores` (`idindicadores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
