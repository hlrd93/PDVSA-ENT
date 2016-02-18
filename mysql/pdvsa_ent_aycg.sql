-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-02-2016 a las 21:25:21
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdvsa_ent_aycg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analista`
--

CREATE TABLE `analista` (
  `id_analista` int(11) NOT NULL,
  `nombre_analista` varchar(45) COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre del analista',
  `apellido_analista` varchar(45) COLLATE utf8_spanish_ci NOT NULL COMMENT 'apellido del analista',
  `telefono_analista` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'telefono de contacto corporativo del analista',
  `correo_analista` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'correo corporativo @pdvsa.com',
  `sede_id_sede` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Usuarios quienes controlan la flota en las sedes';

--
-- Volcado de datos para la tabla `analista`
--

INSERT INTO `analista` (`id_analista`, `nombre_analista`, `apellido_analista`, `telefono_analista`, `correo_analista`, `sede_id_sede`) VALUES
(1, 'Carlos', 'Parra', NULL, NULL, 'andes_ev'),
(2, 'Migceli', 'Castillo', NULL, NULL, 'andes_lf'),
(3, 'Jaime', 'Molina', NULL, NULL, 'andes_sc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion_tanque`
--

CREATE TABLE `camion_tanque` (
  `id_camion_tanque` int(11) NOT NULL,
  `placa_camion_tanque` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa vieja del camion tanque',
  `placa_nueva_camion_tanque` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa nueva del camion tanque',
  `serial_carroceria_camion_tanque` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'serial de carroceria del camion tanque',
  `serial_motor_camion_tanque` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'serial del motor del camion tanque',
  `marca_camion_tanque` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'marca de camion tanque',
  `tipo_camion_tanque` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'tipo de camion tanque',
  `modelo_camion_tanque` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'modelo del camion tanque',
  `a_o_camion_tanque` int(8) DEFAULT NULL COMMENT 'año del camion tanque',
  `color_camion_tanque` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'colores del camion tanque',
  `nro_ejes_camion_tanque` int(8) DEFAULT NULL COMMENT 'numero de ejes de la camion tanque',
  `capacidad_1erc_camion_tanque` int(8) DEFAULT NULL COMMENT 'capacidad del primer compartimiento en litros',
  `capacidad_2doc_camion_tanque` int(8) DEFAULT NULL COMMENT 'capacidad del segundo compartimiento en litros',
  `capacidad_3erc_camion_tanque` int(8) DEFAULT NULL COMMENT 'capacidad del tercer compartimiento en litros',
  `capacidad_totalc_camion_tanque` int(8) DEFAULT NULL COMMENT 'capacidad total del camion tanque en litros',
  `observacion_camion_tanque_estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'observacion del camion tanque',
  `fecha_camion_tanque_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL COMMENT 'fecha del camion tanque',
  `id_sede_camion_tanque` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_camion_tanque_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='data de camiones con tanque incorporado';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion_tanque_estado`
--

CREATE TABLE `camion_tanque_estado` (
  `id_camion_tanque_estado` int(11) NOT NULL,
  `camion_tanque_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estados y observaciones del camion tanque';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chuto`
--

CREATE TABLE `chuto` (
  `id_chuto` int(11) NOT NULL,
  `placa_chuto` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa vieja del chuto',
  `placa_nueva_chuto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa nueva del chuto',
  `serial_carroceria_chuto` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'serial de carroceria del chuto',
  `serial_motor_chuto` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'serial del motor del chuto',
  `marca_chuto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'marca de chuto',
  `tipo_chuto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'tipo de chuto',
  `modelo_chuto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'modelo del chuto',
  `a_o_chuto` int(8) DEFAULT NULL COMMENT 'año del chuto',
  `color_chuto` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'colores del chuto',
  `observacion_chuto_estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_chuto_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `id_sede_chuto` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_chuto_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='data de camiones';

--
-- Volcado de datos para la tabla `chuto`
--

INSERT INTO `chuto` (`id_chuto`, `placa_chuto`, `placa_nueva_chuto`, `serial_carroceria_chuto`, `serial_motor_chuto`, `marca_chuto`, `tipo_chuto`, `modelo_chuto`, `a_o_chuto`, `color_chuto`, `observacion_chuto_estado`, `fecha_chuto_estado`, `id_sede_chuto`, `id_chuto_estado`) VALUES
(1, '745899', 'DA745899', 'LZZ5CLVB7DA745899', '130417020747', 'SINOTRUCK', '420', 'HOWO/A7', 2013, 'BLANCO', 'activo solucion de legalidad', '03/05/2016', 'andes_ev', 1),
(2, '723862', 'DA723862', 'LZZ5CLVB6DA723862', '120717015117', 'SINOTRUCK', '420', 'HOWO A7', 2012, 'BLANCO', 'activo', '07/05/2016', 'andes_lf', 2),
(3, '723919', 'DA723919', 'LZZ5CLVB9DA723919', '120717016697', 'SINOTRUCK', '420', 'HOWO/A7', 2012, 'BLANCO', 'Ya fue reparado', '05/05/2016', 'andes_sc', 2);

--
-- Disparadores `chuto`
--
DELIMITER $$
CREATE TRIGGER `chuto_BUPD` BEFORE UPDATE ON `chuto` FOR EACH ROW BEGIN
	IF OLD.id_chuto_estado<>NEW.id_chuto_estado or OLD.observacion_chuto_estado<>NEW.observacion_chuto_estado or OLD.fecha_chuto_estado<>NEW.fecha_chuto_estado
	THEN  
		INSERT INTO chuto_estado_modificaciones(nro_chuto_estado, id_chuto_estado, observacion_chuto_estado,fecha_chuto_estado) values(NULL, OLD.id_chuto_estado, OLD.observacion_chuto_estado, OLD.fecha_chuto_estado);
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chuto_estado`
--

CREATE TABLE `chuto_estado` (
  `id_chuto_estado` int(11) NOT NULL,
  `chuto_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estado y observaciones de los chutos, (Activo, A desincorporar, Desincorporado, En Fiscalia, En Estacionamiento, Vaccum)';

--
-- Volcado de datos para la tabla `chuto_estado`
--

INSERT INTO `chuto_estado` (`id_chuto_estado`, `chuto_estado`) VALUES
(1, 'Activo'),
(2, 'Desincorporado'),
(3, 'Estacionamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chuto_estado_modificaciones`
--

CREATE TABLE `chuto_estado_modificaciones` (
  `nro_chuto_estado` int(5) NOT NULL,
  `id_chuto_estado` int(11) NOT NULL,
  `observacion_chuto_estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_chuto_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Antiguos estados y observaciones de los chutos';

--
-- Volcado de datos para la tabla `chuto_estado_modificaciones`
--

INSERT INTO `chuto_estado_modificaciones` (`nro_chuto_estado`, `id_chuto_estado`, `observacion_chuto_estado`, `fecha_chuto_estado`) VALUES
(5, 1, 'Se desincorporo por delito', '03/05/2016'),
(6, 2, 'Activo y Circulando', '04/05/2016'),
(7, 3, 'En estacionamiento', '05/05/2016'),
(8, 2, 'activo solucion de legalidad', '03/05/2016'),
(9, 3, 'Se accidento', '04/05/2016'),
(10, 3, 'Se reparo', '04/05/2016'),
(11, 2, 'activo solucion de legalidad', '03/05/2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cisterna`
--

CREATE TABLE `cisterna` (
  `id_cisterna` int(11) NOT NULL COMMENT 'identificador de cisterna',
  `placa_cisterna` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa vieja',
  `placa_nueva_cisterna` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'placa nueva',
  `serial_carroceria_cisterna` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT ' serial de carroceria',
  `marca_cisterna` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'marca de la cisterna',
  `tipo_cisterna` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'tipo de cisterna',
  `modelo_cisterna` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'modelo de la cisterna',
  `a_o_cisterna` int(8) DEFAULT NULL COMMENT 'año de origen de la cisterna',
  `color_cisterna` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'colores de la cisterna',
  `nro_ejes_cisterna` int(8) DEFAULT NULL COMMENT 'numero de ejes de la cisterna',
  `capacidad_1erc_cisterna` int(8) DEFAULT NULL COMMENT 'capacidad del primer compartimiento en litros',
  `capacidad_2doc_cisterna` int(8) DEFAULT NULL COMMENT 'capacidad del segundo compartimiento en litros',
  `capacidad_3erc_cisterna` int(8) DEFAULT NULL COMMENT 'capacidad del tercer compartimiento en litros',
  `capacidad_totalc_cisterna` int(8) DEFAULT NULL COMMENT 'capacidad total de la cisterna en litros',
  `observacion_cisterna_estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_cisterna_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `id_sede_cisterna` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `id_cisterna_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='data de tanques';

--
-- Volcado de datos para la tabla `cisterna`
--

INSERT INTO `cisterna` (`id_cisterna`, `placa_cisterna`, `placa_nueva_cisterna`, `serial_carroceria_cisterna`, `marca_cisterna`, `tipo_cisterna`, `modelo_cisterna`, `a_o_cisterna`, `color_cisterna`, `nro_ejes_cisterna`, `capacidad_1erc_cisterna`, `capacidad_2doc_cisterna`, `capacidad_3erc_cisterna`, `capacidad_totalc_cisterna`, `observacion_cisterna_estado`, `fecha_cisterna_estado`, `id_sede_cisterna`, `id_cisterna_estado`) VALUES
(1, 'LJ2474', 'D2002474', 'LJRT11272D2002474', 'CIMC THT', 'CHINO', 'THT9350GYY', 2013, 'GRIS Y ROJO', 2, 14000, 10000, 14000, 38000, 'activo', '04/05/2016', 'pdvsa_andes', 1);

--
-- Disparadores `cisterna`
--
DELIMITER $$
CREATE TRIGGER `cisterna_BUPD` BEFORE UPDATE ON `cisterna` FOR EACH ROW BEGIN
	IF OLD.id_cisterna_estado<>NEW.id_cisterna_estado OR OLD.observacion_cisterna_estado<>NEW.observacion_cisterna_estado OR OLD.fecha_cisterna_estado<>NEW.fecha_cisterna_estado
	THEN 
		INSERT INTO cisterna_estado_modificaciones(nro_cisterna_estado, id_cisterna_estado, observacion_cisterna_estado, fecha_cisterna_estado) values (NULL, OLD.id_cisterna_estado, OLD.observacion_cisterna_estado, OLD.fecha_cisterna_estado); 
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cisterna_estado`
--

CREATE TABLE `cisterna_estado` (
  `id_cisterna_estado` int(11) NOT NULL,
  `cisterna_estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Estados y observaciones de las cisternas.';

--
-- Volcado de datos para la tabla `cisterna_estado`
--

INSERT INTO `cisterna_estado` (`id_cisterna_estado`, `cisterna_estado`) VALUES
(1, 'Activo'),
(2, 'Estacionamiento'),
(3, 'Vaccum');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cisterna_estado_modificaciones`
--

CREATE TABLE `cisterna_estado_modificaciones` (
  `nro_cisterna_estado` int(5) NOT NULL,
  `id_cisterna_estado` int(11) NOT NULL,
  `observacion_cisterna_estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_cisterna_estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Antiguos estados y observaciones de las cisternas';

--
-- Volcado de datos para la tabla `cisterna_estado_modificaciones`
--

INSERT INTO `cisterna_estado_modificaciones` (`nro_cisterna_estado`, `id_cisterna_estado`, `observacion_cisterna_estado`, `fecha_cisterna_estado`) VALUES
(1, 1, 'activo en funcionamiento', '03/05/2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id_distrito` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_distrito` varchar(10) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del distrito'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Distritos (Andes) nota diseñado desde escala de distritos para posible futura implementacion a nivel nacional.';

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id_distrito`, `nombre_distrito`) VALUES
('pdvsa_andes', 'ANDES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_sede` varchar(45) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre de la sede',
  `id_distrito_sede` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Sedes (San Cristobal, El Vigia, La Fria)';

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `nombre_sede`, `id_distrito_sede`) VALUES
('andes_ev', 'El Vigia', 'pdvsa_andes'),
('andes_lf', 'La Fria', 'pdvsa_andes'),
('andes_sc', 'San Cristobal', 'pdvsa_andes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analista`
--
ALTER TABLE `analista`
  ADD PRIMARY KEY (`id_analista`),
  ADD KEY `fk_analista_sede1_idx` (`sede_id_sede`);

--
-- Indices de la tabla `camion_tanque`
--
ALTER TABLE `camion_tanque`
  ADD PRIMARY KEY (`id_camion_tanque`),
  ADD KEY `fk_camion_tanque_sede1_idx` (`id_sede_camion_tanque`),
  ADD KEY `fk_camion_tanque_camion_tanque_estado1_idx` (`id_camion_tanque_estado`);

--
-- Indices de la tabla `camion_tanque_estado`
--
ALTER TABLE `camion_tanque_estado`
  ADD PRIMARY KEY (`id_camion_tanque_estado`);

--
-- Indices de la tabla `chuto`
--
ALTER TABLE `chuto`
  ADD PRIMARY KEY (`id_chuto`),
  ADD KEY `fk_chuto_sede1_idx` (`id_sede_chuto`),
  ADD KEY `fk_chuto_chuto_estado1_idx` (`id_chuto_estado`);

--
-- Indices de la tabla `chuto_estado`
--
ALTER TABLE `chuto_estado`
  ADD PRIMARY KEY (`id_chuto_estado`);

--
-- Indices de la tabla `chuto_estado_modificaciones`
--
ALTER TABLE `chuto_estado_modificaciones`
  ADD PRIMARY KEY (`nro_chuto_estado`);

--
-- Indices de la tabla `cisterna`
--
ALTER TABLE `cisterna`
  ADD PRIMARY KEY (`id_cisterna`),
  ADD KEY `fk_cisterna_sede1_idx` (`id_sede_cisterna`),
  ADD KEY `fk_cisterna_cisterna_estado1_idx` (`id_cisterna_estado`);

--
-- Indices de la tabla `cisterna_estado`
--
ALTER TABLE `cisterna_estado`
  ADD PRIMARY KEY (`id_cisterna_estado`);

--
-- Indices de la tabla `cisterna_estado_modificaciones`
--
ALTER TABLE `cisterna_estado_modificaciones`
  ADD PRIMARY KEY (`nro_cisterna_estado`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id_distrito`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `fk_sede_distritos_idx` (`id_distrito_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analista`
--
ALTER TABLE `analista`
  MODIFY `id_analista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `chuto`
--
ALTER TABLE `chuto`
  MODIFY `id_chuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `chuto_estado_modificaciones`
--
ALTER TABLE `chuto_estado_modificaciones`
  MODIFY `nro_chuto_estado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `cisterna`
--
ALTER TABLE `cisterna`
  MODIFY `id_cisterna` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de cisterna', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cisterna_estado_modificaciones`
--
ALTER TABLE `cisterna_estado_modificaciones`
  MODIFY `nro_cisterna_estado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analista`
--
ALTER TABLE `analista`
  ADD CONSTRAINT `fk_analista_sede1` FOREIGN KEY (`sede_id_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `camion_tanque`
--
ALTER TABLE `camion_tanque`
  ADD CONSTRAINT `fk_camion_tanque_camion_tanque_estado1` FOREIGN KEY (`id_camion_tanque_estado`) REFERENCES `camion_tanque_estado` (`id_camion_tanque_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_camion_tanque_sede1` FOREIGN KEY (`id_sede_camion_tanque`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `chuto`
--
ALTER TABLE `chuto`
  ADD CONSTRAINT `fk_chuto_chuto_estado1` FOREIGN KEY (`id_chuto_estado`) REFERENCES `chuto_estado` (`id_chuto_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chuto_sede1` FOREIGN KEY (`id_sede_chuto`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cisterna`
--
ALTER TABLE `cisterna`
  ADD CONSTRAINT `fk_cisterna_cisterna_estado1` FOREIGN KEY (`id_cisterna_estado`) REFERENCES `cisterna_estado` (`id_cisterna_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cisterna_sede1` FOREIGN KEY (`id_sede_cisterna`) REFERENCES `sede` (`id_distrito_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_sede_distritos` FOREIGN KEY (`id_distrito_sede`) REFERENCES `distrito` (`id_distrito`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
