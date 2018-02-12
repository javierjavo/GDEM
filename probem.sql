-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2018 a las 04:07:13
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `probem`
--
CREATE DATABASE IF NOT EXISTS `probem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `probem`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `IDAct` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `tipo` text NOT NULL,
  `idioma` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguaje`
--

CREATE TABLE `lenguaje` (
  `ID` int(11) NOT NULL,
  `en` text NOT NULL,
  `es` text NOT NULL,
  `page` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lenguaje`
--

INSERT INTO `lenguaje` (`ID`, `en`, `es`, `page`) VALUES
(1, 'holis en ingles', 'holis', 'home'),
(2, 'Show/Hide', 'Mostrar/Ocultar', 'index'),
(3, 'Welcome', 'Bienvenido', 'index'),
(4, 'Private Policy', 'Aviso De Privacidad', 'pie'),
(5, 'All rights reserved', 'Todos los derechos reservados', 'pie');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `IDLogin` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`IDLogin`, `user`, `pass`) VALUES
(1, 'javier', '$2y$10$wRyPfVFC7x7qwIrrNViUTOeL9HpGed9kMhMN50bmM4PPe/gUEHxrO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcador`
--

CREATE TABLE `marcador` (
  `IDMarcador` int(11) NOT NULL,
  `IDLogin` int(11) NOT NULL,
  `IDActividad` int(11) NOT NULL,
  `progreso` text NOT NULL,
  `calificacion` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalinfo`
--

CREATE TABLE `personalinfo` (
  `IDLogin` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `edad` text NOT NULL,
  `escolaridad` text NOT NULL,
  `pais` text NOT NULL,
  `idioma` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `IDPregunta` int(11) NOT NULL,
  `IDActividad` int(11) NOT NULL,
  `textoPregunta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `IDRespuesta` int(11) NOT NULL,
  `IDPregunta` int(11) NOT NULL,
  `textoRespuesta` text NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`IDAct`);

--
-- Indices de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDLogin`),
  ADD KEY `IDLogin` (`IDLogin`);

--
-- Indices de la tabla `marcador`
--
ALTER TABLE `marcador`
  ADD PRIMARY KEY (`IDMarcador`),
  ADD KEY `IDLogin` (`IDLogin`),
  ADD KEY `IDActividad` (`IDActividad`);

--
-- Indices de la tabla `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`IDLogin`),
  ADD KEY `IDLogin` (`IDLogin`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`IDPregunta`),
  ADD KEY `IDActividad` (`IDActividad`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`IDRespuesta`),
  ADD KEY `IDPregunta` (`IDPregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `IDAct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `IDLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcador`
--
ALTER TABLE `marcador`
  MODIFY `IDMarcador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `IDPregunta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `IDRespuesta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
