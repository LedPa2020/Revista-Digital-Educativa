-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2018 a las 09:28:46
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdrevistadigital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_apellido` varchar(255) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL DEFAULT 'Hombre',
  `curso` enum('1','2','3','4','5','6') NOT NULL DEFAULT '1',
  `division` enum('A','B','C','D') NOT NULL DEFAULT 'A',
  `orientacion` enum('HUMANISTICO','CIENTIFICO','ADMINISTRATIVO') DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `nombre_apellido`, `dni`, `correo`, `nombre_usuario`, `contra`, `sexo`, `curso`, `division`, `orientacion`, `fechaNacimiento`, `id_perfil`) VALUES
(11, 'Florencia Ledezma', '38750057', 'Flc@gmail.com', 'Flor Ledezma', '$2y$10$cw4iYaEYsN7abNx9i5DsS.Rdwi4yt/7YZq71SdSHyc9S9QKDpk7kq', 'Mujer', '6', 'B', 'CIENTIFICO', '1995-01-03', 2),
(12, 'Alumno Prueba', '4554896311', 'AlumnoPrueba@gmail.com', 'AlumnoPrueba', '$2y$10$QTl9rffndI9k0UqGRIbew.QwuyeSXyrwreWgSwJ3LGTEbxwN8KFqK', 'Mujer', '3', 'A', 'HUMANISTICO', '1995-12-31', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `nombre` text,
  `link` varchar(255) DEFAULT NULL,
  `curso` enum('1','2','3','4','5','6') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` text,
  `apellido` text,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `texto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `apellido`, `correo`, `telefono`, `texto`) VALUES
(6, 'Florencia', 'Ledezma', 'flc@gmail.com', '2664759843', 'queria consultarle sobre el proximo examen , que temas no entran de la unidad 2?'),
(7, 'Pablo', 'Ledezma', 'LPablo93@gmail.com', '2664986525', 'No podre asistir hoy a clases por enfermedad. Saludos.'),
(8, 'Francisco', 'Garro', 'FGarro@gmail.com', '2664589635', 'Tengo problemas para entender las fracciones, queria pedirle por favor si podria decirme cuando son las clases de consulta. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombre` text,
  `apellido` text,
  `dni` varchar(10) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `contra` varchar(255) DEFAULT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL DEFAULT 'Mujer',
  `fechaNacimiento` date DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre`, `apellido`, `dni`, `correo`, `nombre_usuario`, `contra`, `sexo`, `fechaNacimiento`, `id_perfil`) VALUES
(9, 'Sebastian', 'Aguirre', '28555486', 'SebaAguirre@gmail.com', 'VisualAguirre', '$2y$10$WZPA4NtdrHocxdc5SNR6OOVmrzMtLXB6idSO4ju3XN2lvOFoOrM0i', 'Hombre', '1980-12-31', 1),
(10, 'Docente', 'Prueba', '33556698', 'DocPrueba@gmail.com', 'DocentePrueba', '$2y$10$k3W3hm2YoCK5DgCTvgKL1OX7F7BWRu/av.wAWNRF8UUD6ix30DXPu', 'Mujer', '1995-12-31', 1),
(11, 'Gerardo', 'Repeto', '25012356', 'GerRep@gmail.com', 'Gerardo', '$2y$10$kfrQGOiJ1Ldg/elIsy88mO6nJAfWzdphWxyph2VXXZlhNOyKieBsm', 'Hombre', '1995-12-31', 1),
(12, 'Gonzales', 'Carlos', '22036520', 'cgonzalez@gmail.com', 'Carlos', '$2y$10$snZZwfpateXfOwH/9BM.HufhbcVp0D30SALbLyh7xGyWXc3XYz/OG', 'Hombre', '1995-12-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_alumno_contacto`
--

CREATE TABLE `relacion_alumno_contacto` (
  `id_relacion_alumno` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_docente_articulo`
--

CREATE TABLE `relacion_docente_articulo` (
  `id_relacion_docente` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `relacion_alumno_contacto`
--
ALTER TABLE `relacion_alumno_contacto`
  ADD PRIMARY KEY (`id_relacion_alumno`),
  ADD KEY `id_consulta` (`id_contacto`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `relacion_docente_articulo`
--
ALTER TABLE `relacion_docente_articulo`
  ADD PRIMARY KEY (`id_relacion_docente`),
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_docente` (`id_docente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `relacion_alumno_contacto`
--
ALTER TABLE `relacion_alumno_contacto`
  MODIFY `id_relacion_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relacion_docente_articulo`
--
ALTER TABLE `relacion_docente_articulo`
  MODIFY `id_relacion_docente` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
