-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2022 a las 05:39:40
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
-- Base de datos: `course_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_course` int(10) NOT NULL,
  `course_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `course_group` varchar(30) COLLATE utf8_bin NOT NULL,
  `course_description` varchar(300) COLLATE utf8_bin NOT NULL,
  `grade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `features_banners`
--

CREATE TABLE `features_banners` (
  `id_feature` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(300) COLLATE utf8_bin NOT NULL,
  `link` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `features_banners`
--

INSERT INTO `features_banners` (`id_feature`, `title`, `description`, `link`) VALUES
(1, 'Confianza total de nuestros maestros', 'Maestros y tutores comparten un gusto por la facilidad de enseñanza.', ''),
(2, 'Sencillo', 'Diseñado para un aprendizaje facil e intuitivo.', ''),
(3, 'Tu tambien puedes contribuir', 'Crea e ingresa a una cuenta de maestro para acceder a herramientas de enseñanza.', ''),
(4, 'Cursos totales', '520', ''),
(5, 'Alumnos Inscritos', '300', ''),
(6, 'Tutores enseñando', '40', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `headers`
--

CREATE TABLE `headers` (
  `id_header` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `descrption1` varchar(300) COLLATE utf8_bin NOT NULL,
  `description2` varchar(300) COLLATE utf8_bin NOT NULL,
  `button1` varchar(50) COLLATE utf8_bin NOT NULL,
  `button2` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `headers`
--

INSERT INTO `headers` (`id_header`, `title`, `descrption1`, `description2`, `button1`, `button2`) VALUES
(1, 'La enseñanza a travez de la tecnologia.', 'Plataforma de videocursos dispuesto a ofrecerte un servicio simplificado de videos.', '', 'Más Información', 'Ver video'),
(2, 'Pagina dinamica con cursos actuales', 'Proveemos videos enfocados a diferentes categorias desde programacion web, MySQL, python y mucho mas.', 'La practica hace al maestro', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `latest_courses`
--

CREATE TABLE `latest_courses` (
  `id_course` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `teacher` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `description` varchar(300) COLLATE utf8_bin NOT NULL,
  `course_group` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonials`
--

CREATE TABLE `testimonials` (
  `id_testi` int(10) NOT NULL,
  `person` varchar(50) COLLATE utf8_bin NOT NULL,
  `message` varchar(300) COLLATE utf8_bin NOT NULL,
  `job` varchar(50) COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `testimonials`
--

INSERT INTO `testimonials` (`id_testi`, `person`, `message`, `job`, `photo`) VALUES
(1, 'Alfredo Mateos', 'La plataforma es bastante intuitiva y facil de usar, la verdad estoy conmovido por esto no paro de llorar jaja C dura', '- Maestro Particular', ''),
(2, 'Test2', 'Test', '- Testing Job', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `realname` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8_bin NOT NULL,
  `age` int(10) NOT NULL,
  `usertype` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `realname`, `username`, `pass`, `age`, `usertype`) VALUES
(1, 'plants72@hotmail.com', 'Fernando Martinez Bocanegra', 'Fercho18', 'admin', 29, 0),
(2, '', 'Mario Alberto Alvarado Olivas', 'elrobanovias69', 'ferchoesdeltecno', 20, 1),
(3, 'a', 'a', 'a', 'a', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_course`);

--
-- Indices de la tabla `features_banners`
--
ALTER TABLE `features_banners`
  ADD PRIMARY KEY (`id_feature`);

--
-- Indices de la tabla `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id_header`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_course` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `features_banners`
--
ALTER TABLE `features_banners`
  MODIFY `id_feature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `headers`
--
ALTER TABLE `headers`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id_testi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
