-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 02:46:41
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaisj22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy'),
(7, 'noel.titus', '2018-03-26 19:15:47', 'Add Class ICT - Computer Programming'),
(8, 'noel.titus', '2018-03-26 19:18:01', 'Edit Class ICT - Computer Programming'),
(9, 'noel.titus', '2018-03-26 19:18:35', 'Edit Class Form 6'),
(10, 'noel.titus', '2018-03-26 19:18:43', 'Edit Class ICT - Computer Programming'),
(11, 'yna.ecole', '2018-03-26 19:51:24', 'Add User quinie.dungog'),
(12, 'yna.ecole', '2018-03-26 20:14:52', 'Add Student Ronel G.'),
(13, 'yna.ecole', '2018-09-05 20:41:37', 'Deleted Student aaa bbb'),
(14, 'yna.ecole', '2018-09-05 20:44:09', 'Add Class PHP'),
(15, 'yna.ecole', '2018-09-05 20:49:18', 'Agregar Usuario gorchor.platea21'),
(16, 'yna.ecole', '2018-09-05 20:54:11', 'Add Student gorchor p'),
(17, 'yna.ecole', '2018-09-05 20:56:39', 'Deleted Student gorchor p'),
(18, 'yna.ecole', '2018-09-05 20:57:04', 'Add Student gorchor p'),
(19, 'gorchor.platea21', '2018-09-05 21:07:47', 'Updated Student gorchor p'),
(20, 'gorchor.platea21', '2018-09-05 21:08:11', 'Updated Student gorchor p'),
(21, 'gorchor.platea21', '2018-09-05 21:08:37', 'Updated Student gorchor p'),
(22, 'gorchor.platea21', '2018-09-05 21:08:48', 'Updated Student gorchor p'),
(23, 'gorchor.platea21', '2018-09-05 21:10:11', 'Updated Student gorchor p'),
(24, 'gorchor.platea21', '2018-09-05 21:13:51', 'Updated Student gorchor p'),
(25, 'gorchor.platea21', '2018-09-05 21:15:49', 'Updated Student gorchor p'),
(26, 'gorchor.platea21', '2018-09-05 21:16:02', 'Updated Student gorchor p'),
(27, 'gorchor.platea21', '2018-09-05 21:17:22', 'Updated Student gorchor p'),
(28, 'gorchor.platea21', '2018-09-05 21:18:13', 'Updated Student gorchor p'),
(29, 'gorchor.platea21', '2018-09-05 21:18:19', 'Updated Student gorchor p'),
(30, 'gorchor.platea21', '2018-09-05 21:18:26', 'Updated Student gorchor p'),
(31, 'gorchor.platea21', '2018-09-05 21:18:39', 'Updated Student gorchor p'),
(32, 'gorchor.platea21', '2018-09-05 21:20:33', 'Updated Student gorchor p'),
(33, 'gorchor.platea21', '2018-09-05 21:21:25', 'Updated Student gorchor p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `carrera_id` int(11) NOT NULL,
  `carrera_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`carrera_id`, `carrera_nombre`) VALUES
(1, 'tec. sup. en desarroolo de software'),
(2, 'tec. sup. en desarrollo de diseño grafico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`) VALUES
(1, 'CSharp', 'Junior High', 250000),
(2, 'ICT - Computer Programming', 'Senior High', 20000),
(3, 'PHP', 'Secundaria Avanzada', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `estudiante_id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `fec_nac` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `carrera_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`estudiante_id`, `nombres`, `apellido`, `genero`, `email`, `telefono`, `fec_nac`, `direccion`, `localidad`, `carrera_id`) VALUES
(1, 'fernando', 'gonzalez', 0, 'fer.danigon2@gmail.com', '3884338109', '1987-10-06', 'las vicuñas 380', 'san salvador de jujuy', ''),
(2, 'Tomas', 'Gonzalez', 0, 'fer.danigon2@gmail.com', '3884338166', '1999-02-02', 'las vicuñas 380', 'san salvador de jujuy', 'tec. sup. en desarrollo de diseño grafico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'noel.titus', '2016-10-24 09:10:07', '2018-09-06 21:05:59', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2018-09-06 21:05:59', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2018-09-06 21:05:59', 3),
(4, 'abdul.hemedy', '2016-10-24 09:23:30', '2018-03-26 20:10:41', 4),
(5, 'noel.titus', '2018-03-23 22:28:25', '2018-09-06 21:05:59', 3),
(6, 'noel.titus', '2018-03-23 22:28:31', '2018-09-06 21:05:59', 3),
(7, 'noel.titus', '2018-03-26 15:59:08', '2018-09-06 21:05:59', 3),
(8, 'noel.titus', '2018-03-26 16:03:29', '2018-09-06 21:05:59', 3),
(9, 'noel.titus', '2018-03-26 16:04:56', '2018-09-06 21:05:59', 3),
(10, 'noel.titus', '2018-03-26 16:20:09', '2018-09-06 21:05:59', 3),
(11, 'noel.titus', '2018-03-26 18:18:51', '2018-09-06 21:05:59', 3),
(12, 'noel.titus', '2018-03-26 18:18:52', '2018-09-06 21:05:59', 3),
(13, 'lovely.dumasig', '2018-03-26 19:56:44', '2018-03-26 20:10:41', 4),
(14, 'yna.ecole', '2018-03-26 20:10:57', '2018-09-06 21:05:59', 3),
(15, 'yna.ecole', '2018-08-02 21:48:56', '2018-09-06 21:05:59', 3),
(16, 'yna.ecole', '2018-08-02 21:51:21', '2018-09-06 21:05:59', 3),
(17, 'yna.ecole', '2018-08-04 15:43:10', '2018-09-06 21:05:59', 3),
(18, 'yna.ecole', '2018-09-05 16:49:08', '2018-09-06 21:05:59', 3),
(19, 'yna.ecole', '2018-09-05 16:51:03', '2018-09-06 21:05:59', 3),
(20, 'yna.ecole', '2018-09-05 16:51:20', '2018-09-06 21:05:59', 3),
(21, 'yna.ecole', '2018-09-05 20:53:38', '2018-09-06 21:05:59', 3),
(22, 'yna.ecole', '2018-09-05 20:53:41', '2018-09-06 21:05:59', 3),
(23, 'gorchor.platea21', '2018-09-05 20:59:58', '2018-09-06 21:10:33', 6),
(24, 'gorchor.platea21', '2018-09-05 21:09:54', '2018-09-06 21:10:33', 6),
(25, 'gorchor.platea21', '2018-09-05 22:25:07', '2018-09-06 21:10:33', 6),
(26, 'yna.ecole', '2018-09-06 20:55:28', '2018-09-06 21:05:59', 3),
(27, 'gorchor.platea21', '2018-09-06 21:06:09', '2018-09-06 21:10:33', 6),
(28, 'gorchor.platea21', '2018-09-06 21:09:59', '2018-09-06 21:10:33', 6),
(29, 'gorchor.platea21', '2018-09-06 21:17:52', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioid` int(11) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuarioid`, `nombreusuario`, `contraseña`, `nombre`, `apellido`, `estado`) VALUES
(1, 'fergon', '25846', 'fernando daniel', 'gonzalez', 'administrador'),
(2, 'juan', '12345', 'juan', 'perez', 'secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_log`
--

CREATE TABLE `usuario_log` (
  `usuario_log_id` int(11) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `fecha_log` varchar(50) NOT NULL,
  `cerrar_sesion_fecha` varchar(50) NOT NULL,
  `usuarioid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_log`
--

INSERT INTO `usuario_log` (`usuario_log_id`, `nombreusuario`, `fecha_log`, `cerrar_sesion_fecha`, `usuarioid`) VALUES
(1, 'fergon', '2022-02-07 17:39:21', '', 1),
(2, 'fergon', '2022-02-07 17:39:21', '', 1),
(3, 'fergon', '2022-02-07 17:39:21', '', 1),
(4, 'fergon', '2022-02-07 17:39:21', '', 1),
(5, 'fergon', '2022-02-07 17:39:21', '', 1),
(6, 'fergon', '2022-02-07 17:39:21', '', 1),
(7, 'juan', '2022-02-05 17:48:00', '', 2),
(8, 'fergon', '2022-02-07 17:39:21', '', 1),
(9, 'fergon', '2022-02-07 17:39:21', '', 1),
(10, 'fergon', '2022-02-07 17:39:21', '', 1),
(11, 'fergon', '2022-02-07 17:39:21', '', 1),
(12, 'fergon', '2022-02-07 17:39:21', '', 1),
(13, 'fergon', '2022-02-07 17:39:21', '', 1),
(14, 'fergon', '2022-02-07 17:39:21', '', 1),
(15, 'fergon', '2022-02-08 10:50:20', '', 1),
(16, 'fergon', '2022-02-08 14:55:18', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`carrera_id`);

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`estudiante_id`);

--
-- Indices de la tabla `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioid`);

--
-- Indices de la tabla `usuario_log`
--
ALTER TABLE `usuario_log`
  ADD PRIMARY KEY (`usuario_log_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `carrera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_log`
--
ALTER TABLE `usuario_log`
  MODIFY `usuario_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`estudiante_id`) REFERENCES `carrera` (`carrera_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
