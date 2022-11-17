-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 17:59:13
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
-- Estructura de tabla para la tabla `periodicidad`
--

CREATE TABLE `periodicidad` (
  `idperiodicidad` int(11) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `estatus_idestatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `periodicidad`
--

INSERT INTO `periodicidad` (`idperiodicidad`, `fechaInicio`, `fechaFinal`, `estatus_idestatus`) VALUES
(2, '2023-01-01', '2023-03-31', 2),
(3, '2023-04-01', '2023-06-30', 2),
(4, '2023-07-01', '2023-09-30', 2),
(5, '2023-10-01', '2022-12-31', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  ADD PRIMARY KEY (`idperiodicidad`),
  ADD KEY `fk_periodicidad_estatus1_idx` (`estatus_idestatus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  MODIFY `idperiodicidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  ADD CONSTRAINT `fk_periodicidad_estatus1` FOREIGN KEY (`estatus_idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
