-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2016 a las 20:12:09
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lacasadelasopticas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `fk_id_optica` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `imagen`, `fk_id_optica`) VALUES
(1, '0', 1),
(4, '0', 4),
(5, 'upload/5803bd0104dc0color-light-lamps-seamless-background-vector-51200391.jpg', 5),
(6, 'upload/5803bd01052d7x11ch_av006.jpg', 5),
(7, 'upload/58051eab0a183x11ch_av006.jpg', 6),
(8, 'upload/580667fb88f8e12735936_10208592452153871_1548735069_n.jpg', 7),
(9, 'upload/580667fb8946c20160104154026.jpg', 7),
(10, 'upload/580668114f41bdead_big_daddy__crying_little_sister-wallpaper-1600x1200.jpg', 8),
(11, 'upload/580668114f910descarga (2).jpg', 8),
(14, 'upload/5806730c149f86325779333_a9d048709f_o.jpg', 12),
(15, 'upload/5806730c14ed320160104154026.jpg', 12),
(16, 'upload/58068dfc8a12312140080_10207094328064164_5452487230126798313_o.jpg', 13),
(17, 'upload/58068e0c73b442d04295c-e1d6-4d6e-b757-dd49730412fa.jpg', 14),
(18, 'upload/58068e0c73fff3cac9fe0-2bae-423b-ac35-f8cdd0304c74.jpg', 14),
(20, 'upload/5807ae8327c336058[1].jpg', 16),
(21, 'upload/5807ae8328078306960_215337948526928_100001521729991_575207_48702922_n.jpg', 16),
(22, 'upload/5807ae9300fbf1458081.jpg', 17),
(23, 'upload/5807ae93014eafaro.png', 17),
(24, 'upload/5807ae930193fInstalacion-tira-LED-tuning-faro-delantero-proceso-montaje-motorzoom-2013.jpg', 17),
(27, 'upload/5807aeae4a2b1faros.jpg', 19),
(28, 'upload/5807aeae4a6f5fk-automotive-fkfsvw8013-angel-tp_166922357152123603f.jpg', 19),
(29, 'upload/5807aeae4aa53Instalacion-tira-LED-tuning-faro-delantero-proceso-montaje-motorzoom-2013.jpg', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(2, 'Ford'),
(21, 'Toyota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `optica`
--

CREATE TABLE IF NOT EXISTS `optica` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fk_id_marca` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `optica`
--

INSERT INTO `optica` (`id`, `titulo`, `descripcion`, `fk_id_marca`) VALUES
(16, 'Faros Toyota', 'asdasdasd', 21),
(17, 'Faros Ford', 'asdasdasdasdasdasd', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `optica`
--
ALTER TABLE `optica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `optica`
--
ALTER TABLE `optica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
