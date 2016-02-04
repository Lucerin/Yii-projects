-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2014 a las 02:02:29
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Terror'),
(2, 'Ciencia Ficcion'),
(3, 'Drama'),
(4, 'Comedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE IF NOT EXISTS `clasificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `num_asiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `sala_funcion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_has_funcion_user1_idx` (`user_id`),
  KEY `fk_entrada_sala_funcion1_idx` (`sala_funcion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `user_id`, `num_asiento`, `fecha`, `hora`, `sala_funcion_id`) VALUES
(1, 2, 1, '2014-06-03', '20:52:22', 1),
(2, 2, 2, '2014-06-03', '21:33:59', 1),
(3, 2, 3, '2014-06-03', '21:33:59', 1),
(4, 2, 4, '2014-06-03', '21:33:59', 1),
(5, 4, 1, '2014-06-03', '21:45:11', 2),
(6, 4, 2, '2014-06-03', '21:45:11', 2),
(7, 2, 5, '2014-06-04', '00:31:29', 1),
(8, 2, 6, '2014-06-04', '00:31:29', 1),
(9, 2, 7, '2014-06-04', '00:31:29', 1),
(10, 2, 8, '2014-06-04', '00:31:29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE IF NOT EXISTS `funcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `sinopsis` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `clasificacion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_funcion_categoria_idx` (`categoria_id`),
  KEY `fk_funcion_clasificacion1_idx` (`clasificacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id`, `nombre`, `estado`, `sinopsis`, `categoria_id`, `clasificacion_id`) VALUES
(1, 'Godzilla', 1, ' lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweulifjw uiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu.', 2, 1),
(2, 'Malefica', 1, 'lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu.', 2, 1),
(3, 'X-Men', 1, 'lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu.', 2, 2),
(4, 'Saw', 1, 'lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu lifjwuiodfiweu diweohdwuied dwehdwuie wdeuhdiweu.', 1, 1),
(5, 'asd', 1, 'asd', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE IF NOT EXISTS `idioma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`id`, `nombre`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Español'),
(4, 'Ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `capacidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `nombre`, `capacidad`) VALUES
(1, 'A', 30),
(2, 'B', 45),
(3, 'C', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala_funcion`
--

CREATE TABLE IF NOT EXISTS `sala_funcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcion_id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `precio` double NOT NULL,
  `idioma_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_funcion_has_sala_sala1_idx` (`sala_id`),
  KEY `fk_funcion_has_sala_funcion1_idx` (`funcion_id`),
  KEY `fk_sala_funcion_idioma1_idx` (`idioma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `sala_funcion`
--

INSERT INTO `sala_funcion` (`id`, `funcion_id`, `sala_id`, `fecha`, `hora`, `precio`, `idioma_id`) VALUES
(1, 1, 2, '2014-06-04', '12:12:00', 4.3, 1),
(2, 1, 1, '2014-06-04', '12:12:00', 5.25, 1),
(3, 1, 2, '2014-06-11', '10:10:00', 8.25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala_tipo`
--

CREATE TABLE IF NOT EXISTS `sala_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_id` int(11) NOT NULL,
  `sala_id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tipo_has_sala_sala1_idx` (`sala_id`),
  KEY `fk_tipo_has_sala_tipo1_idx` (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `sala_tipo`
--

INSERT INTO `sala_tipo` (`id`, `tipo_id`, `sala_id`, `fecha`, `hora`) VALUES
(1, 1, 1, '2014-06-04', '20:20:00'),
(2, 2, 2, '2014-06-04', '20:20:00'),
(5, 3, 3, '2014-06-09', '10:10:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`) VALUES
(1, 'VIP'),
(2, '3D'),
(3, 'Djigital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `cedula`, `email`, `nombres`, `apellidos`) VALUES
(1, 'jrwmer', '123', '0804008860', 'jrwmer@hotmail.com', 'Junior', 'Mera'),
(2, 'luis', '202cb962ac59075b964b07152d234b70', '0523698547', 'luis@correo.com', 'luis', 'herrera'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0852145855', 'admin@correo.com', 'Usuario', 'Admin');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_user_has_funcion_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_entrada_sala_funcion1` FOREIGN KEY (`sala_funcion_id`) REFERENCES `sala_funcion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `fk_funcion_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcion_clasificacion1` FOREIGN KEY (`clasificacion_id`) REFERENCES `clasificacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sala_funcion`
--
ALTER TABLE `sala_funcion`
  ADD CONSTRAINT `fk_funcion_has_sala_funcion1` FOREIGN KEY (`funcion_id`) REFERENCES `funcion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_funcion_has_sala_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sala_funcion_idioma1` FOREIGN KEY (`idioma_id`) REFERENCES `idioma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sala_tipo`
--
ALTER TABLE `sala_tipo`
  ADD CONSTRAINT `fk_tipo_has_sala_sala1` FOREIGN KEY (`sala_id`) REFERENCES `sala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_has_sala_tipo1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
