-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2022 a las 17:51:29
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
-- Estructura de tabla para la tabla `valores`
--



--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`idvalores`, `tipo`, `hombres`, `mujeres`, `pertenecenEtnia`, `interiorEstado`, `programaAcademico_idprogramaAcademico`, `discapacidad_iddiscapacidad`, `indicadores_idindicadores`) VALUES
(3, 'B', 23, 12, 10, 5, 1, 1, 3),
(4, 'C', 20, 10, 11, 13, 1, 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`idvalores`),
  ADD KEY `fk_valores_programaAcademico1_idx` (`programaAcademico_idprogramaAcademico`),
  ADD KEY `fk_valores_discapacidad1_idx` (`discapacidad_iddiscapacidad`),
  ADD KEY `fk_valores_indicadores1_idx` (`indicadores_idindicadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `valores`
--
ALTER TABLE `valores`
  MODIFY `idvalores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `fk_valores_discapacidad1` FOREIGN KEY (`discapacidad_iddiscapacidad`) REFERENCES `discapacidad` (`iddiscapacidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valores_indicadores1` FOREIGN KEY (`indicadores_idindicadores`) REFERENCES `indicadores` (`idindicadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_valores_programaAcademico1` FOREIGN KEY (`programaAcademico_idprogramaAcademico`) REFERENCES `programaacademico` (`idprogramaAcademico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
