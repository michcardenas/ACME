-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 18:52:49
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
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `id_conductor` int(11) NOT NULL,
  `cc_conductor` int(10) NOT NULL,
  `primer_nombre_c` varchar(255) NOT NULL,
  `segundo_nombre_c` varchar(255) NOT NULL,
  `apellidos_c` varchar(255) NOT NULL,
  `direccion_c` varchar(255) NOT NULL,
  `telefono_c` varchar(255) NOT NULL,
  `ciudad_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`id_conductor`, `cc_conductor`, `primer_nombre_c`, `segundo_nombre_c`, `apellidos_c`, `direccion_c`, `telefono_c`, `ciudad_c`) VALUES
(3, 42342, 'ethan', '', 'cardenas palomino', 'cll 56 sur 81 a 61', '3024899201', 'Bogota'),
(4, 1032455582, 'Michael', 'Daniel ', 'Cardenas', 'cr 51 81', '3123708407', 'Bogota'),
(7, 543543, 'andres', 'ghustao', 'narvaes', 'vv', '435345', 'dfsd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id_propietarios` int(11) NOT NULL,
  `cc_propietario` int(12) NOT NULL,
  `primer_nombre_p` varchar(255) NOT NULL,
  `segundo_nombre_p` varchar(255) NOT NULL,
  `apellidos_p` varchar(255) NOT NULL,
  `direccion_p` varchar(255) NOT NULL,
  `telefono_p` int(12) NOT NULL,
  `ciudad_p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id_propietarios`, `cc_propietario`, `primer_nombre_p`, `segundo_nombre_p`, `apellidos_p`, `direccion_p`, `telefono_p`, `ciudad_p`) VALUES
(10, 1030580587, 'Yeniffer palomino', '', 'cardenas', 'cll 56 sur 81 a 61', 2147483647, 'bogota'),
(11, 2147483647, 'michael', 'daniel', 'cardenas', 'cll 56 sur 81 01', 8070417, 'bogota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(20) UNSIGNED NOT NULL,
  `placa` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `tipo_vehiculo` varchar(255) NOT NULL,
  `propietarios_id` int(11) NOT NULL,
  `conductor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `placa`, `color`, `marca`, `tipo_vehiculo`, `propietarios_id`, `conductor_id`) VALUES
(1, 'ont 2867', 'negro', 'jaks', 'jklas', 10, 4),
(10, 'ont', 'negrito', 'renault', 'urbando', 10, 3),
(11, 'abc 123', 'negro', 'renaulr', 'urbando', 10, 3),
(12, 'abc 123', 'negro', 'renault', 'Particular', 11, 4),
(13, 'num 123', 'negro', 'mazda', 'Publico', 10, 3),
(123, 'acb 123', 'blanco', 'lamborhini', 'urbano', 11, 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista1`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista1` (
`placa` varchar(255)
,`color` varchar(255)
,`marca` varchar(255)
,`tipo_vehiculo` varchar(255)
,`primer_nombre_p` varchar(255)
,`primer_nombre_c` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista2`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista2` (
`placa` varchar(255)
,`color` varchar(255)
,`marca` varchar(255)
,`tipo_vehiculo` varchar(255)
,`primer_nombre_c` varchar(255)
,`primer_nombre_p` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista3`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista3` (
`placa` varchar(255)
,`color` varchar(255)
,`primer_nombre_p` varchar(255)
,`primer_nombre_c` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista4`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista4` (
`placa` varchar(255)
,`color` varchar(255)
,`marca` varchar(255)
,`tipo_vehiculo` varchar(255)
,`primer_nombre_p` varchar(255)
,`primer_nombre_c` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista5`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista5` (
`placa` varchar(255)
,`color` varchar(255)
,`marca` varchar(255)
,`tipo_vehiculo` varchar(255)
,`primer_nombre_p` varchar(255)
,`primer_nombre_c` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista6`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista6` (
`placa` varchar(255)
,`marca` varchar(255)
,`primer_nombre_p` varchar(255)
,`segundo_nombre_p` varchar(255)
,`apellidos_p` varchar(255)
,`primer_nombre_c` varchar(255)
,`segundo_nombre_c` varchar(255)
,`apellidos_c` varchar(255)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista1`
--
DROP TABLE IF EXISTS `vista1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista1`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`color` AS `color`, `vehiculos`.`marca` AS `marca`, `vehiculos`.`tipo_vehiculo` AS `tipo_vehiculo`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p`, `conductores`.`primer_nombre_c` AS `primer_nombre_c` FROM ((`vehiculos` join `propietarios`) join `conductores`)  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista2`
--
DROP TABLE IF EXISTS `vista2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista2`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`color` AS `color`, `vehiculos`.`marca` AS `marca`, `vehiculos`.`tipo_vehiculo` AS `tipo_vehiculo`, `conductores`.`primer_nombre_c` AS `primer_nombre_c`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p` FROM ((`conductores` join `propietarios`) join `vehiculos`) WHERE `vehiculos`.`id_vehiculo` = `propietarios`.`id_propietarios``id_propietarios`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista3`
--
DROP TABLE IF EXISTS `vista3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista3`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`color` AS `color`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p`, `conductores`.`primer_nombre_c` AS `primer_nombre_c` FROM ((`vehiculos` join `conductores`) join `propietarios`) WHERE `vehiculos`.`id_vehiculo` = `propietarios`.`id_propietarios` AND `vehiculos`.`id_vehiculo` = `conductores`.`id_conductor``id_conductor`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista4`
--
DROP TABLE IF EXISTS `vista4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista4`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`color` AS `color`, `vehiculos`.`marca` AS `marca`, `vehiculos`.`tipo_vehiculo` AS `tipo_vehiculo`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p`, `conductores`.`primer_nombre_c` AS `primer_nombre_c` FROM ((`vehiculos` join `conductores`) join `propietarios`) WHERE `vehiculos`.`id_vehiculo` = `propietarios`.`id_propietarios` AND `vehiculos`.`id_vehiculo` = `conductores`.`id_conductor``id_conductor`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista5`
--
DROP TABLE IF EXISTS `vista5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista5`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`color` AS `color`, `vehiculos`.`marca` AS `marca`, `vehiculos`.`tipo_vehiculo` AS `tipo_vehiculo`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p`, `conductores`.`primer_nombre_c` AS `primer_nombre_c` FROM ((`vehiculos` join `conductores`) join `propietarios`) WHERE `vehiculos`.`propietarios_id` = `propietarios`.`id_propietarios` AND `vehiculos`.`conductor_id` = `conductores`.`id_conductor``id_conductor`  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista6`
--
DROP TABLE IF EXISTS `vista6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista6`  AS SELECT `vehiculos`.`placa` AS `placa`, `vehiculos`.`marca` AS `marca`, `propietarios`.`primer_nombre_p` AS `primer_nombre_p`, `propietarios`.`segundo_nombre_p` AS `segundo_nombre_p`, `propietarios`.`apellidos_p` AS `apellidos_p`, `conductores`.`primer_nombre_c` AS `primer_nombre_c`, `conductores`.`segundo_nombre_c` AS `segundo_nombre_c`, `conductores`.`apellidos_c` AS `apellidos_c` FROM ((`vehiculos` join `conductores`) join `propietarios`) WHERE `vehiculos`.`propietarios_id` = `propietarios`.`id_propietarios` AND `vehiculos`.`conductor_id` = `conductores`.`id_conductor``id_conductor`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`id_conductor`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_propietarios`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD UNIQUE KEY `id_vehiculo` (`id_vehiculo`),
  ADD KEY `propietarios_id` (`propietarios_id`),
  ADD KEY `conductor_id` (`conductor_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_propietarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`propietarios_id`) REFERENCES `propietarios` (`id_propietarios`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`conductor_id`) REFERENCES `conductores` (`id_conductor`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
