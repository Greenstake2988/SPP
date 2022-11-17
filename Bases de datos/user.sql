-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 18:00:12
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
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LAURA', '_lMWJS9hgEa9l3ZQTlPW-sbNE1t0VCJo', '$2y$13$T8Vi3t7gDdCuBD0bfyctn.vqdzgR95cJgsZEYcp7RRMRD.xYx4x3u', NULL, 'diana.nohtun@itsva.deu.mx', 10, 1665594691, 1665594691),
(2, 'Pedro.Cosgaya', 'PY29j0lzibL_jN6UBN5UVfksKRoQpg4O', '$2y$13$ZiJF8iKgNPOPlmifEgGioOl1wUc.c/lvfYq7B1V8ql9vjeMnwnkPW', NULL, 'Pedro.gc@valladolid.tecnm.mx', 10, 1665601626, 1665601626),
(3, 'Virgilio.chimal', 'sF8_1ByVXaTRdPk44EyVZ6HmsZQeHDZD', '$2y$13$itsI0winBfvamlf9kBQtQecMlslWErFWRneFyvT9c9HdoUHRKa/Wm', NULL, 'virgilio.cc@valladolid.tecnm.mx', 10, 1665601677, 1665601677),
(4, 'Ana.Dzib', 'Jne0h-EU3qyrlRLQYIjJyrU4zqF2Xn21', '$2y$13$OnJjqvI3rnL51KSQoyRP5epdQR1z75rpUqB8u1MuHgbJ3IqWFhw6y', NULL, 'ana.dc@valladolid.tecnm.mx', 10, 1665601745, 1665601745),
(5, 'Antonio.Cab', 'rJZzWZ24wbYmr8Cp1XciBoyByiN1Wgrv', '$2y$13$4gJErFSZcooh4Z41P3UaWOaAeRArh7h57ZYf4DXDs4.8HqE53ch/O', NULL, 'antonio.cab@itsva.edu.mx', 10, 1665601796, 1665601796),
(6, 'Gilberto.Díaz', '_6qLteXdaEq7rjdKI3mOvXu8oREODBcR', '$2y$13$hAw3Qi.qvIMxYJyVYgtI/ONKxdSiV56xIKjG/IE.Q0DgSslBllhcy', NULL, 'gilberto.dg@valladolid.tecnm.mx', 10, 1665601854, 1665601854),
(7, 'Ermita.Cime', 'W1cmgQd9fA8arTw3VeFs1TKFpDtWFLIz', '$2y$13$PEyGYzuu/f4j9qWdBBelxOqGAJj2c9s82IgEB/0RdKmev0JgEcOUK', NULL, 'ermita.cc@valladolid.tecnm.mx', 10, 1665601906, 1665601906),
(8, 'Manuel.Mena', 'ZYMwRY3GA4DdH8s-F3iUOjPEeNmbR3Ni', '$2y$13$su8cdBy46yzr5NHjppIjeuvOGcyBrTs34zlFz7uVvxfupKLW78fsW', NULL, 'manuel.mn@valladolid.tecnm.mx', 10, 1665601963, 1665601963),
(9, 'Fanny.Rivero', 'Db-hbZvVoDvB78LYBwSgEei7M6iKbBQG', '$2y$13$VjPEHo5DzrHE/OMFjfJ5Lu8/FXTEurAJFji3htb2hzWIKczzhUltu', NULL, 'fanny.ra@valladolid.tecnm.mx', 10, 1665602033, 1665602033),
(10, 'Yamili.Garrido', 'tAnCPkRDsmQ_8VZkyhOXPmNH0Jl30J-o', '$2y$13$Yo4MNAi4SsQjvKPNed0Dc.QyEAseLnxuo.RBrPKs641P8BqbQpYPC', NULL, 'yamili.ga@valladolid.tecnm.mx', 10, 1666275902, 1666275902),
(11, 'Krystal.Burgos', 'nXJ0RR9c221o_9gql4AJ-_JQtrNoYZt7', '$2y$13$qQ2aOwQCsYIK/jFDRryrhetLw8UZShVB5/tZe.s2vet7/BXQ66j7G', NULL, 'krystal.be@valladolid.tecnm.mx', 10, 1666275956, 1666275956),
(12, 'Nardo.Balam', 'S1cDtr87UeuKY0c1RabtsFMkiyv1AJmz', '$2y$13$lEAI2u0wvqlM1uA4WoPUmeVY8TFtg9/fYCkgMJzbiJC/GNPwsqKni', NULL, 'nardo.ba@valladolid.tecnm.mx', 10, 1665602076, 1665602076),
(13, 'Rubí.Terrones.', 'YbYy0h1OMPagXAtV1rI7JVJvMWNU-tvq', '$2y$13$7zIZzKqO9g3gEcTnKWxvuuWBOF5JRjJeW1oUFqRKfFbozwgZ4ItsG', NULL, 'rubi.gt@valladolid.tecnm.mx', 10, 1665602126, 1665602126),
(14, 'Wendy.Alcaraz', 'EtW4gYSLATBbaobxaQuDopJz4b0kOjuX', '$2y$13$F9b.qYMLfkUZAq1USqIDL.KfzBIpJeVTGe2MU9jYNOEJAZUbCzvLi', NULL, 'wendy.at@valladolid.tecnm.mx', 10, 1665602186, 1665602186),
(15, 'Areli.Coronado', 'CA0l4KGX-KPhUAxucJoS3kZnsf2r2Yvw', '$2y$13$2mEAtiMg7UszwvI4VMG.bu93lOfa.nJrqDz3J9fwrfo0b4f5ABq0q', NULL, 'areli.cm@valladolid.tecnm.mx', 10, 1666276023, 1666276023),
(16, 'Oscar.Vazquez', 'PijiKv5BOPJ0_VFgS_Pptpq6iZHEWO8e', '$2y$13$/OkM2SekmIsoc0.7O7gLLOmFwHY6eFHXUTV1p4z.PRZL5WGpQIhcO', NULL, 'oscar.va@valladolid.tecnm.mx', 10, 1666276090, 1666276090);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
