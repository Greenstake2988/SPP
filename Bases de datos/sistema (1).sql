-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2022 a las 21:33:12
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
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `idestatus` int(11) NOT NULL,
  `tipoEstatus` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idestatus`, `tipoEstatus`) VALUES
(1, 'Proceso'),
(2, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `idindicadores` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objetivo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivelObjetivo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unidadMedida` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta` int(11) DEFAULT NULL,
  `variableB` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medioVerificacionB` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `variableC` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `medioVerificacionC` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `periodicidad_idperiodicidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`idindicadores`, `nombre`, `objetivo`, `nivelObjetivo`, `unidadMedida`, `meta`, `variableB`, `medioVerificacionB`, `variableC`, `medioVerificacionC`, `periodicidad_idperiodicidad`) VALUES
(3, 'Porcentaje de académicos y alumnos con habilidad de comunicación en una segunda lengua NIVEL B1 ', 'Mejorar el posicionamiento del Tecnológico Nacional de México a nivel nacional e internacional.', 'Actividad 1.4.3', 'Académicos y estudiantes', 15, 'Número de académicos y alumnos con habilidad de comunicación en una segunda lengua NIVEL B1.', 'Constancias en listas de Excel', 'Total de académicos y estudiantes en el ITSVA', 'Listas de inscritos en el curso', 2),
(4, 'Número de asignaturas, planes o programas académicos impartidos en una segunda lengua.', 'Mejorar el posicionamiento del Tecnológico Nacional de México a nivel nacional e internacional.', 'Actividad 1.4.5', 'Asignaturas, planes o programas.', 0, 'Número de asignaturas, planes o programas académicos impartidos en una segunda lengua.', 'Planeaciones de clase y evidencias de trabajo', 'Total de asignaturas, planes o programas académicos impartidos en el ITSVA.', 'Planeaciones de clase y evidencias de trabajo', 2),
(5, 'Número de empresas incubadas.', 'Desarrollo del talento emprendedor y la creación de empresas de base tecnológica.', 'Actividad  5.3.1', 'Empresas ', 10, 'Número de empresas incubadas.', 'Carta de terminación', 'Total de empresas incubadas en el ITSVA.', 'Formato de inscripción', 2),
(6, 'Número de estudiantes beneficiados con una beca.', 'Ampliar y diversificar la oferta educativa con énfasis en las regiones con menor índice de cobertura.\r\n', 'Actividad 2.2.1', 'Estudiantes', 1135, 'Número de estudiantes beneficiados con beca.', 'Base de datos de Excel', 'Total de estudiantes en el ITSVA.', 'Sistema de control escolar ', 2),
(7, 'Número de células de producción de materiales educativos y recursos digitales del ITSVA.', 'Promover el uso de las tecnologías de información y comunicación en los servicios educativos.', 'Actividad 1.3.3', 'Células', 0, 'Número de células de producción conformadas.', 'Formatos de creación de cursos en plataforma ', 'Total de células de producción.', 'Formatos de creación de cursos en plataforma ', 2),
(8, 'Porcentaje de estudiantes de licenciatura inscritos en programas acreditados.', 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.', 'Actividad 1.1.3', 'Estudiantes', 100, 'Número de estudiantes de licenciatura inscritos en programas acreditados.', 'Reporte de matrícula del semestre', 'Total de estudiantes de los programas evaluables.', 'Reporte de matrícula del semestre', 2),
(10, 'Académicos y estudiantes participantes en convocatorias en materia académica y/o de investigación.\r\n', 'Mejorar el posicionamiento del Tecnológico Nacional de México a nivel nacional e internacional.', 'Actividad 1.4.2', 'Académicos y estudiantes', 77, 'Número de académicos y estudiantes participantes en convocatorias en materia académica y/o de investigación.', 'Reconocimientos de participación', 'Total de académicos y estudiantes en el ITSVA', 'Reporte de junta directiva.', 2),
(11, 'Número de académicos y estudiantes que participan en programas de intercambio académico nacional e internacional.', 'Mejorar el posicionamiento del Tecnológico Nacional de México a nivel nacional e internacional.', 'Actividad 1.4.4', 'Académicos y estudiantes.', 5, 'Número de académicos y estudiantes que participan en programas de intercambio académico nacional e internacional.', 'Oficios de aceptación', 'Total de académicos y estudiantes en el ITSVA', 'Reporte a junta directiva.', 2),
(12, 'Tasa de variación de la matrícula de licenciatura.', 'Ampliar y diversificar la oferta educativa con énfasis en las regiones con menor índice de cobertura.', 'Actividad 2.2.2', 'Matrícula.', 1495, 'Número de estudiantes de licenciatura.', 'Oficios de apertura de nuevos programas académicos.', 'Total de estudiantes de licenciatura.', 'Reporte de servicios escolares.', 2),
(13, 'Índice de eficiencia terminal de licenciatura', 'Ampliar y diversificar la oferta educativa con énfasis en las regiones con menor índice de cobertura.', 'Actividad 2.2.6', 'Estudiantes', 59, 'Número de estudiantes de licenciatura egresados del ITSVA.', 'Reporte de servicios escolares.', 'Número de estudiantes de nuevo ingreso.', 'Reporte de servicios escolares. ', 2),
(14, 'Índice de eficiencia terminal de licenciatura.', 'Contribuir al desarrollo humano de los estudiantes en las esferas físico corporal, social, emocional e intelectual cognitivo.', 'Actividad 3.1.1', 'Estudiantes ', 90, 'Total de estudiantes de nuevo ingreso que participan en alguno de los programas de primer nivel de atención. ', 'Reporte de servicios escolares.', 'Total estudiantes de nuevo ingreso.', 'Reporte de servicios escolares.', 2),
(15, 'Porcentaje de la matrícula de los semestres 2 a 12 que participa en alguno de los equipos y grupos representativos o en alguno de los clubes cívico, cultural y deportivo.\r\n', 'Contribuir al desarrollo humano de los estudiantes en las esferas físico corporal, social, emocional e intelectual cognitivo.', 'Actividad 3.1.2', 'Estudiantes', 33, 'Total de estudiantes de los semestres 2 a 12 que participan en alguno de los grupos o equipos representativos del segundo nivel de atención.', 'Listas de estudiantes matriculados. ', 'Total estudiantes de los semestres 2 a 12.', 'Listas de estudiantes matriculados.', 2),
(17, 'Porcentaje de instalaciones para el desarrollo de actividades cívicas, culturales y deportivas rehabilitados para su uso.', 'Fortalecer las actividades culturales, artísticas, cívicas, deportivas y de recreación.', 'Actividad 3.2.1', 'Espacios', 1, 'Número espacios de infraestructura para el desarrollo de actividades cívicas, culturales, deportivas y recreativas renovadas.', 'Croquis Institución. ', 'Total de espacios de infraestructura para el desarrollo de actividades cívicas, culturales, deportivas y recreativas.', 'Croquis Institución. ', 2),
(20, 'Número de promotores culturales, cívicos y deportivos incorporados y/o formados.', 'Fortalecer las actividades culturales, artísticas, cívicas, deportivas y de recreación.', 'Actividad 3.2.2', 'Promotores', 12, 'Número de promotores culturales, cívicos y deportivos incorporados y/o formados.', 'Expedientes y constancias.', 'Total de promotores culturales, cívicos y deportivos incorporados y/o formados.', 'Expedientes y constancias.', 2),
(21, 'Número de eventos culturales, cívicos y deportivos realizados.', 'Fortalecer las actividades culturales, artísticas, cívicas, deportivas y de recreación.', 'Actividad 3.2.3', 'Eventos', 10, 'Numero de eventos  intra y extra muros, de compromiso cívico, culturales, artísticos, deportivos y recreativos Programados.', 'Plan de trabajo.', 'Numero de eventos  intra y extra muros, de compromiso cívico, culturales, artísticos, deportivos y recreativos realizados.', 'Plan de trabajo.', 2),
(22, 'Número de académicos participantes en cursos de capacitación.', 'Mejorar el nivel de habilitación del personal académico.', 'Actividad 1.2.2', 'Académicos', 52, 'Número de académicos participantes en cursos de formación y actualización.', 'Listas de docentes acreditados y constancias.', 'Total de académicos del ITSVA.', 'Lista de docentes.', 2),
(23, 'Número de académicos con grado de especialidad, maestría o doctorado.', 'Mejorar el nivel de habilitación del personal académico.', 'Actividad 1.2.3', 'Académicos', 42, 'Número de académicos con grado de especialidad, maestría o doctorado.', 'Lista de docentes, nombre de especialidad, numero de célula.', 'Total de académicos del ITSVA.', 'Lista de docentes.', 2),
(24, 'Número de académicos con competencias digitales.', 'Mejorar el nivel de habilitación del personal académico.', 'Actividad 1.2.5', 'Académicos', 52, 'Número de académicos con competencias digitales.', 'Lista de docentes con cursos acreditados en competencias digitales.', 'Total de académicos del ITSVA.', 'Lista de docentes.', 2),
(25, 'Número de académicos formados en recursos educativos digitales, en ambientes virtuales de aprendizaje.', 'Promover el uso de las tecnologías de información y comunicación en los servicios educativos.\r\n', 'Actividad 1.3.1', 'Académicos', 50, 'Número de académicos que acreditan el DREAVA ', 'Lista de docentes acreditados en el DREAVA.', 'Total de académicos del ITSVA Lista de docentes.', 'Lista de docentes.', 2),
(26, 'Número de Académicos con plaza.', 'Mejorar el nivel de habilitación del personal académico.', 'Actividad 1.2.1', 'Académicos', 23, 'Número de nuevos académicos incorporados a la planta docente del ITSVA con plaza.', 'Lista de docentes con plaza.', 'Total de académicos en el ITSVA.', 'Lista de docentes.', 2),
(27, 'Porcentaje de programas académicos con elementos orientados hacia el desarrollo sustentable y la inclusión.', 'Incorporar como parte de la calidad educativa, los temas de inclusión, igualdad y desarrollo sustentable.', 'Actividad 1.2', 'Programas', 15, 'Número de programas académicos con elementos orientados hacia el desarrollo sustentable y la inclusión.', 'Retícula de los programas educativos, señalando las asignaturas con este enfoque. ', 'Total de programas académicos en el ITSVA.', 'Retículas.', 2),
(28, 'Número de tutores formados', 'Ampliar y diversificar la oferta educativa con énfasis en las regiones con menor índice de cobertura.', 'Actividad 2.2.5', 'Tutores', 45, 'Personal académico formados como tutores.', 'Lista de docentes con cursos o diplomados para la formación de tutores, constancias.', 'Total de personal académico.', 'Lista de personal docente.', 2),
(29, 'Porcentaje de institutos tecnológicos y centros que operan un proyecto de difusión y preservación de patrimonio artístico cultural y la memoria histórica.', 'Fortalecer las actividades culturales, artísticas, cívicas, deportivas y de recreación.', 'Actividad 3.2.4', 'Proyectos', 1, 'Número de proyecto de difusión y preservación de patrimonio artístico cultural y la memoria histórica en operación.', 'Redes sociales ITSVA.', 'Total de proyecto de difusión y preservación de patrimonio artístico cultural y la memoria histórica en operación.', 'Redes sociales, drive.', 2),
(30, 'Porcentaje de institutos tecnológicos y centros que implementan la estrategia institucional de comunicación.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.2', 'Estrategias. ', 1, 'Número de estrategia institucional de comunicación.', 'Redes sociales.', 'Total de estrategia institucional de comunicación.', 'Redes sociales, drive.', 2),
(31, 'Porcentaje de programas de licenciatura acreditados.', 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.', 'Actividad 1.1.3', 'Programas', 100, 'Número de programas de licenciatura acreditados.', 'Base de datos de investigadores Excel.', 'Total de programas de licenciatura evaluables.', 'Base de datos de investigadores Excel.', 2),
(32, 'Porcentaje de programas de posgrado registrados en el PNPC.', 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.', 'Actividad 1.1.4', 'Programas', 0, 'Número de programas de posgrado registrados en el PNPC ', 'Base de datos de investigadores Excel.', 'Total de programas de posgrado.', 'Base de datos de investigadores Excel.', 2),
(33, 'Número de nuevos programas de posgrado autorizados.', 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.', 'Actividad 1.1.5', 'Programas.', 0, 'Número de nuevos programas de posgrado autorizados.', 'Base de datos de investigadores Excel.', 'Total de programas de posgrado solicitados.', 'Base de datos de investigadores Excel.', 2),
(35, 'Número de nuevos programas de posgrado especiales, interinstitucional es y/o multisedes autorizados.', 'Mejorar la calidad, la pertinencia y la evaluación de los programas académicos de licenciatura y posgrado hacia un nivel de competencia internacional.', 'Actividad 1.1.6', 'Programas', 0, 'Número de programas de posgrado especial, interinstitucional y/o multisede autorizados.', 'Base de datos de investigadores Excel.', 'Total de programas de posgrado especial, interinstitucional y/o multisede solicitados.', 'Base de datos de investigadores Excel.', 2),
(36, 'Número de académicos con reconocimiento al perfil deseable vigente.', 'Mejorar el nivel de habilitación del personal académico.', 'Actividad 1.2.4', 'Académicos', 24, 'Número de académicos con perfil deseable.', 'Base de datos de investigadores Excel.', 'Total de académicos del ITSVA', 'Base de datos de investigadores Excel.', 2),
(37, 'Tasa de variación de la matrícula de posgrado.', 'Ampliar y diversificar la oferta educativa con énfasis en las regiones con menor índice de cobertura.', 'Actividad 2.2.3', 'Matrícula', 0, 'Matrícula de posgrado a alcanzar.', 'Base de datos de investigadores Excel.', 'Total de matrícula de posgrado.', 'Base de datos de investigadores Excel.', 2),
(38, 'Porcentaje de proyectos de investigación con enfoque en inclusión, igualdad y desarrollo sustentable.', 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas de investigación, desarrollo tecnológico e innovación.', 'Actividad 4.1', 'Proyectos', 7, 'Número de proyectos de investigación con enfoque en inclusión, igualdad y desarrollo sustentable.', 'Base de datos de investigadores Excel.', 'Número de proyectos de investigación financiados.', 'Base de datos de investigadores Excel.', 2),
(39, 'Número de estudiantes de licenciatura que participan en proyectos de investigación.', 'Impulsar la formación de capital humano de alta especialización para generar investigación y desarrollo tecnológico, innovación y emprendimiento.', 'Actividad 4.1.4', 'Estudiantes', 60, 'Número de estudiantes de licenciatura que participan en proyectos de investigación', 'Base de datos de investigadores Excel.', 'Total de estudiantes de licenciatura que participan en proyectos de investigación.', 'Base de datos de investigadores Excel.', 2),
(40, 'Número de proyectos de investigación científica, desarrollo tecnológico e innovación financiados.', 'Propiciar el incremento de los productos de la investigación científica, el desarrollo tecnológico y la innovación.', 'Actividad 4.2.1', 'Proyectos', 7, 'Número de proyectos de investigación científica, desarrollo tecnológico e innovación financiados.', 'Base de datos de investigadores Excel.', 'Total de proyectos de investigación científica, desarrollo tecnológico e innovación financiados.', 'Base de datos de investigadores Excel.', 2),
(41, 'Tasa de variación de académicos registrados en el SNI.', 'Impulsar la formación de capital humano de alta especialización para generar investigación y desarrollo tecnológico, innovación y emprendimiento.', 'Actividad 4.1.1', 'Académicos', 0, 'Académicos registrados en el SNI.', 'Base de datos de investigadores Excel.', 'Total de académicos.', 'Base de datos de investigadores Excel.', 2),
(43, 'Número de cuerpos académicos conformados y en operación.', 'Impulsar la formación de capital humano de alta especialización para generar investigación y desarrollo tecnológico, innovación y emprendimiento.', 'Actividad 4.1.2', 'Académicos', 5, 'Número de cuerpos académicos conformados y operando.', 'Base de datos de investigadores Excel.', 'Total de cuerpos académicos conformados y operando.', 'Base de datos de investigadores Excel.', 2),
(44, 'Número de académicos que participan en redes de investigación, científica y tecnológica.', 'Propiciar el incremento de los productos de la investigación científica, el desarrollo tecnológico y la innovación.', 'Actividad 4.2.3', 'Académicos', 3, 'Número de académicos que participan en redes de investigación, científica y tecnológica.', 'Base de datos de investigadores Excel.', 'Total de académicos que participan en redes de investigación, científica y tecnológica.', 'Base de datos de investigadores Excel.', 2),
(45, 'Número de estudiantes de posgrado que participan en proyectos de investigación.', 'Propiciar el incremento de los productos de la investigación científica, el desarrollo tecnológico y la innovación.', 'Actividad 4.2.4', 'Estudiantes', 0, 'Número de estudiantes de posgrado que participan en proyectos de investigación.', 'Base de datos de investigadores Excel.', 'Total de estudiantes de posgrado que participan en proyectos de investigación', 'Base de datos de investigadores Excel.', 2),
(46, 'FICDT-TecNM en operación.', 'Diseñar mecanismos que contribuyan a un financiamiento suficiente.', 'Actividad 6.3.2', 'Proyectos', 0, 'Número de proyectos participantes en el FICDT-TecNM ITSVA.', 'Base de datos de investigadores Excel.', 'Total  de proyectos participantes en el FICDT-TecNM ITSVA.', 'Base de datos de investigadores Excel.', 2),
(47, 'Número personal de apoyo y asistencia a la educación y directivos que tomaron al menos un curso de capacitación presencial o a distancia.', 'Promover el uso de las tecnologías de información y comunicación en los servicios educativos.', 'Actividad 1.3.2', 'Personal', 100, 'Número de personal de apoyo y asistencia a la educación y directivo capacitados.', 'Indicadores del PAC y listas.', 'Total del personal del personal administrativo.', 'Total de plazas autorizadas.', 2),
(48, 'Manual de organización actualizado.', 'Renovar el marco jurídico normativo del TecNM.', 'Actividad 6.1.2', 'Manual', 1, 'Manual de organización actualizado.', 'Manual de organización.', 'Total de Manual de organización actualizado.', 'Normatividad ITSVA.', 2),
(49, 'Manual de procedimientos actualizado.', 'Renovar el marco jurídico normativo del TecNM.', 'Actividad 6.1.3', 'Manual', 1, 'Manual de procedimientos actualizado.', 'Sistema de Gestión Integral (SGI).', 'Total de Manual de procedimientos actualizado.', 'Sistema de Gestión Integral (SGI).', 2),
(50, 'Número de documentos jurídico normativos creados y/o actualizados.', 'Renovar el marco jurídico normativo del TecNM.', 'Actividad 6.1.4', 'Documentos jurídico-normativo', 0, 'Número de documentos jurídico normativos creados y/o actualizados.', 'Documentos jurídico normativos.', 'Total de documentos jurídico normativos creados y/o actualizados.', 'Documentos jurídico normativos.', 2),
(52, 'Porcentaje de Institutos tecnológicos y centros que operen el programa institucional de cero plástico de un solo uso.', 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas administrativos y cuidado del medio ambiente.', 'Actividad 6.1', 'Programa', 1, 'Programa institucional de cero plásticos de un solo uso Operado.', 'Plan de trabajo y certificado.', 'Total Programa institucional de cero plásticos de un solo uso Operado.', 'Plan de trabajo y certificado.', 2),
(53, 'Porcentaje de Institutos Tecnológicos y centros con el programa de equidad y justicia social implementado.', 'Establecer mecanismos que fomenten la igualdad, la no discriminación y la inclusión en el TecNM.', 'Actividad 2.1', 'Programas', 1, 'Número de programas de equidad y justicia social aplicado.', 'NMX-025-SCFI-2015', 'Total de programas de equidad y justicia social.', 'NMX-025-SCFI-2015', 2),
(54, 'Porcentaje de institutos tecnológicos y centros que difundieron el código de conducta del TecNM entre la comunidad.', 'Fomentar entre los estudiantes la cultura de la igualdad, la no discriminación, la inclusión y el desarrollo sostenible y sustentable.', 'Actividad 3.2', 'Código', 1, 'Número de código de conducta dirigido a la comunidad estudiantil del TecNM Campus Valladolid Difundido. ', '025-SCFI', 'Total de código de conducta dirigido a la comunidad estudiantil del TecNM Campus Valladolid', '025-SCFI', 2),
(55, 'Porcentaje de institutos tecnológicos y centros que cuentan con comisiones de Seguridad e Higiene en el Trabajo instaladas y en operación.', 'Fomentar la cultura de la prevención, la seguridad y la solidaridad.', 'Actividad 3.3.1', 'Comisión', 1, 'Número de Comisión de Seguridad e Higiene en el Trabajo instaladas y en operación.', 'CSEM', 'Total de Comisión de Seguridad e Higiene en el Trabajo.', 'CSEM', 2),
(56, 'Número de acciones afirmativas para la equidad de género implementadas.', 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas de investigación, desarrollo tecnológico e innovación.', 'Actividad 4.2', 'Acciones', 1, 'Número de acciones afirmativas para la equidad de género implementadas.', 'NMX-025', 'Total de acciones afirmativas para la equidad de género implementadas.', 'NMX-025', 2),
(57, 'Porcentaje de Institutos tecnológicos y centros que cuenten con un programa de utilización de energías renovables y del cuidado del medio ambiente en operación.', 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas administrativos y cuidado del medio ambiente.', 'Actividad 6.2', 'Programa', 1, 'Programa de utilización de energías renovables y del cuidado del medio ambiente Operado.', 'Matriz de energía. ', 'Total Programa de utilización de energías renovables y del cuidado del medio ambiente Operado.', 'Matriz de energía.', 2),
(58, 'Porcentaje de institutos tecnológicos y centros que cuentan con sistema de gestión de la calidad certificado.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Certificado de calidad.', 1, 'Certificado de Calidad obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 'Total de Certificado de Calidad obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 2),
(59, 'Porcentaje de institutos tecnológicos y centros que cuentan con sistema de gestión ambiental certificado.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Certificado de gestión.', 1, 'Certificado de Gestión Ambiental obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 'Total de Certificado de Gestión Ambiental obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 2),
(60, 'Porcentaje de institutos tecnológicos y centros que cuentan con sistema de gestión de la energía certificado.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Certificado de gestión.', 1, 'Certificado de Gestión de energía obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 'Certificado de Gestión de energía obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI)', 2),
(61, 'Porcentaje de institutos tecnológicos y centros que cuentan con el modelo de equidad de género certificado.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Certificado de gestión.', 1, 'Certificado de gestión de la igualdad de género y no discriminación obtenido por el ITSVA.', 'NMX-025-SCFI-2015 de igualdad laboral y no discriminación.', 'Total de Certificado de gestión de la igualdad de género y no discriminación obtenido por el ITSVA.', 'NMX-025-SCFI-2015 de igualdad laboral y no discriminación.', 2),
(62, 'Porcentaje de institutos tecnológicos y centros que cuentan con sistema de gestión de la salud y seguridad en el trabajo certificado.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Certificado de gestión.', 1, 'Certificado de Gestión de la Seguridad obtenido.', 'Sistema Gestión Integral (SGI).', 'Total de Certificado de Gestión de la Seguridad obtenido.', 'Sistema Gestión Integral (SGI).', 2),
(63, 'Porcentaje de institutos tecnológicos y centros que cuentan con reconocimiento a la responsabilidad social.', 'Fortalecer los mecanismos para la gobernanza y mejora de la gestión institucional.', 'Actividad 6.2.3', 'Reconocimiento', 1, 'Reconocimiento obtenido por el ITSVA.', 'Sistema Gestión Integral (SGI).', 'Total de Reconocimiento obtenido por el ITSVA', 'Sistema de equidad y género, reconocimiento de la ONU', 2),
(64, 'Porcentaje de institutos tecnológicos y centros con Comités de Ética y Previsión de Conflictos de Interés en operación.', 'Fortalecer los mecanismos para garantizar la transparencia, rendición de cuentas y el combate a la corrupción.', 'Actividad 6.4.1', 'Comités', 1, 'Número de Comités de Ética y Previsión de Conflictos de Interés en operación.', 'Subcomité de Ética de interés y Subcomité de Ética y prevención conflictivo. ', 'Total de Comités de Ética y Previsión de Conflictos de Interés en operación. ', 'Subcomité de Ética de interés y Subcomité de Ética y prevención conflictivo. ', 2),
(65, 'Número de grupos de trabajo interdisciplinario para la innovación y emprendimiento integrados y en operación.', 'Impulsar la formación de capital humano de alta especialización para generar investigación y desarrollo tecnológico, innovación y emprendimiento.', 'Actividad 4.1.3', 'Grupos', 2, 'Número de grupos de trabajo interdisciplinario integrados y operando.', 'Fichas de registro.', 'Total de grupos de trabajo interdisciplinario integrados y operando.', 'Cartas de liberación.', 2),
(66, 'Número de alianzas con los diferentes sectores regionales para desarrollar proyectos de Ciencia, Tecnología e Innovación.', 'Propiciar el incremento de los productos de la investigación científica, el desarrollo tecnológico y la innovación.', 'Actividad 4.2.2', 'Alianzas ', 3, 'Número de alianzas establecidas con los diferentes sectores regionales para desarrollo de proyectos de ciencia, tecnología e innovación.', 'Convenios solicitados.', 'Total de alianzas establecidas con los diferentes sectores regionales para desarrollo de proyectos de ciencia, tecnología e innovación.', 'Convenios firmados. ', 2),
(67, 'Número de convenios de uso compartido de instalaciones para las actividades científicas, tecnológicas y de innovación realizados.', 'Fortalecer la infraestructura de la actividad científica, tecnológica y de innovación.', 'Actividad 4.3.1', 'Convenios', 2, 'Número de convenios de uso compartido de instalaciones para las actividades científicas, tecnológicas y de innovación realizados.', 'Solicitud de convenios.', 'Total de convenios de uso compartido de instalaciones para las actividades científicas, tecnológicas y de innovación realizados.', 'Convenios firmados.', 2),
(68, 'Número de proyectos de emprendimiento con enfoque de innovación y sustentabilidad.', 'Fortalecer la inclusión, igualdad y sustentabilidad en los temas de vinculación y emprendurismo.', 'Actividad 5.1', 'Proyectos', 2, 'Número de proyectos de emprendimiento con enfoque de innovación y sustentabilidad.', 'Fichas de registro.', 'Total de proyectos de emprendimiento con enfoque de innovación y sustentabilidad.', 'Constancias de proyectos.', 2),
(69, 'Porcentaje de institutos tecnológicos y centros que cuentan con Consejos de Vinculación en operación.', 'Optimizar los mecanismos de vinculación institucional.', 'Actividad 5.1.1', 'Consejos', 1, 'Número de Consejo de Vinculación en operación.', 'Acta de instalación.', 'Total de Consejo de Vinculación en operación.', 'Actas de las sesiones realizadas.', 2),
(70, 'Número de convenios vigentes de vinculación entre institutos tecnológicos y centros.', 'Optimizar los mecanismos de vinculación institucional.', 'Actividad 5.1.3', 'Convenios', 13, 'Número de convenios de vinculación entre institutos tecnológicos y centros vigentes.', 'Solicitud de convenios.', 'Total de convenios de vinculación entre institutos tecnológicos y centros vigentes.', 'Convenios firmados.', 2),
(71, 'Número de convenios vigentes de vinculación de los institutos tecnológicos y centros con otras instituciones de educación superior nacionales e internacionales.', 'Optimizar los mecanismos de vinculación institucional.', 'Actividad 5.1.4', 'Convenios', 23, 'Número de convenios de vinculación con otras instituciones de educación superior nacionales e internacionales vigentes.', 'Solicitud de convenios.', 'Total de convenios de vinculación con otras instituciones de educación superior nacionales e internacionales vigentes.', 'Convenios firmados.', 2),
(72, 'Número de convenios o contratos vigentes de vinculación con los sectores público, social y privado.', 'Optimizar los mecanismos de vinculación institucional.', 'Actividad 5.1.5', 'Convenios', 29, 'Número de convenios o contratos de vinculación con los sectores público, social y privado vigentes.', 'Solicitud de convenios.', 'Total de convenios o contratos de vinculación con los sectores público, social y privado vigentes.', 'Convenios firmados.', 2),
(73, 'Número de estudiantes que participan en proyectos de vinculación con los sectores público, social y privado.', 'Optimizar los mecanismos de vinculación institucional.', 'Actividad  5.1.6', 'Estudiantes', 45, 'Número de estudiantes que participan en proyectos de vinculación con los sectores público, social y privado.', 'Registro de proyectos.', 'Total de estudiantes que participan en proyectos de vinculación con los sectores público, social y privado.', 'Cartas de liberación de los estudiantes ', 2),
(74, 'Número de registros de propiedad intelectual', 'Fomentar la gestión de la propiedad intelectual.', 'Actividad  5.2.1', 'Propiedad ', 1, 'Número de registros de propiedad intelectual.', 'Solicitudes realizados', 'Total de registros de propiedad intelectual.', 'Certificados obtenidos.', 2),
(75, 'Porcentaje de egresados incorporados al mercado laboral en los primeros doce meses de su egreso.', 'Desarrollo del talento emprendedor y la creación de empresas de base tecnológica.', 'Actividad 5.3.2', 'Egresados', 45, 'Número de egresados incorporados al mercado laboral en los primeros doce meses de su egreso.', 'CV de egresados recibidos.', 'Total de egresados.', 'retroalimentación de las empresas que se envío el CV.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1510611467),
('m130524_201442_init', 1510611484);

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
(2, '2023-01-01', '2023-03-31', 1),
(3, '2023-04-01', '2023-06-30', 1),
(4, '2023-07-01', '2023-09-30', 1),
(5, '2023-10-01', '2022-12-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `idprogramas` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`idprogramas`, `nombre`) VALUES
(1, NULL),
(2, 'Programas Departamentales Institucionales PDI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_has_indicadores`
--

CREATE TABLE `programas_has_indicadores` (
  `programas_idprogramas` int(11) NOT NULL,
  `indicadores_idindicadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programas_has_indicadores`
--

INSERT INTO `programas_has_indicadores` (`programas_idprogramas`, `indicadores_idindicadores`) VALUES
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 17),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75);

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
(1, 'ruselliuit', 'MzUMgzTIPi6qtbc9L1mprseU9U-98rIG', '$2y$13$DGvcQvW/XxFxdXpU/aohW.pf.LBOOVWhR83681JGZ8cVb10rc.eSy', NULL, 'rusell75@hotmail.com', 10, 1511896802, 1511896802),
(2, 'Alondra', '2XzizAmXEfCvGPfoYTEc6pe0IWAFRlym', '$2y$13$q8kc6qVh4.vPnB3Czmh93.qwbHRkAcDAtPvLJI46yHy1iG5xRNma6', NULL, 'alondra.carrilloespadas@itsva.edu.mx', 10, 1663684793, 1663684793);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE `valores` (
  `idvalores` int(11) NOT NULL,
  `tipo` char(1) COLLATE utf8_unicode_ci NOT NULL,
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
  `indicadores_idindicadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`idestatus`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`idindicadores`),
  ADD KEY `fk_indicadores_periodicidad1_idx` (`periodicidad_idperiodicidad`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  ADD PRIMARY KEY (`idperiodicidad`),
  ADD KEY `fk_periodicidad_estatus1_idx` (`estatus_idestatus`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`idprogramas`);

--
-- Indices de la tabla `programas_has_indicadores`
--
ALTER TABLE `programas_has_indicadores`
  ADD PRIMARY KEY (`programas_idprogramas`,`indicadores_idindicadores`),
  ADD KEY `fk_programas_has_indicadores_indicadores1_idx` (`indicadores_idindicadores`),
  ADD KEY `fk_programas_has_indicadores_programas1_idx` (`programas_idprogramas`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indices de la tabla `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`idvalores`),
  ADD KEY `fk_valores_indicadores1_idx` (`indicadores_idindicadores`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `idestatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `idindicadores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  MODIFY `idperiodicidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `idprogramas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `valores`
--
ALTER TABLE `valores`
  MODIFY `idvalores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD CONSTRAINT `fk_indicadores_periodicidad1` FOREIGN KEY (`periodicidad_idperiodicidad`) REFERENCES `periodicidad` (`idperiodicidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `periodicidad`
--
ALTER TABLE `periodicidad`
  ADD CONSTRAINT `fk_periodicidad_estatus1` FOREIGN KEY (`estatus_idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `programas_has_indicadores`
--
ALTER TABLE `programas_has_indicadores`
  ADD CONSTRAINT `fk_programas_has_indicadores_indicadores1` FOREIGN KEY (`indicadores_idindicadores`) REFERENCES `indicadores` (`idindicadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_programas_has_indicadores_programas1` FOREIGN KEY (`programas_idprogramas`) REFERENCES `programas` (`idprogramas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `fk_valores_indicadores1` FOREIGN KEY (`indicadores_idindicadores`) REFERENCES `indicadores` (`idindicadores`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
