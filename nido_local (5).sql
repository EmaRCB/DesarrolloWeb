-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 12-12-2022 a las 23:18:58
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nido_local`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllMusicProjects` ()   BEGIN
	SELECT * FROM proyectos WHERE categoria = "MUSICA";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerProyectosArtesanias` ()   BEGIN
	SELECT * FROM proyectos WHERE categoria = "ARTESANIAS";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerProyectosDanza` ()   BEGIN
	SELECT * FROM proyectos WHERE categoria = "DANZA";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerProyectosMusicos` ()   BEGIN
	SELECT * FROM proyectos WHERE categoria = "MUSICA";
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ObtenerProyectosPintura` ()   BEGIN
	SELECT * FROM proyectos WHERE categoria = "PINTURA";
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idEvento` int(11) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_Ubicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idEvento`, `nombreEvento`, `fecha`, `id_Ubicacion`) VALUES
(1, 'El Sonido de la Musica', '2022-12-22', 1),
(2, 'Exposición de Artesanias', '2022-12-27', 2),
(3, 'EL PODER DE LA NAVIDAD', '2022-12-24', 3),
(4, 'Festival Año Nuevo 2022', '2022-12-31', 4),
(5, 'Festival de las Luces 2022', '2023-01-05', 5),
(6, 'Festival de las Luces 2022', '2022-12-29', 6),
(7, 'Festival de las Luces 2022', '2023-01-02', 7),
(8, 'Arts Productions Inclusivo 2022', '2022-12-09', 8),
(9, 'Arts Productions Inclusivo 2023', '2023-01-11', 8),
(10, 'Otra Danza', '2022-12-16', 9),
(11, 'Nacimiento del arte: espectáculo cultural', '2023-02-23', 9),
(12, 'Exposición Remedios Varo', '2023-02-03', 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacioneventos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informacioneventos` (
`idEvento` int(11)
,`nombreEvento` varchar(100)
,`fecha` date
,`id_Ubicacion` int(11)
,`idUbicacion` int(11)
,`nombreLugar` varchar(100)
,`latitud` double
,`longitud` double
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacionusuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `informacionusuarios` (
`id_perfil` int(100)
,`foto` varchar(1000)
,`idUsuario` int(100)
,`id_usuario` int(11)
,`usuario` varchar(10)
,`contrasena` varchar(10)
,`nombre` varchar(100)
,`email` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `idUsuario` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `foto`, `idUsuario`) VALUES
(1, 'https://github.com/EmaRCB/DesarrolloWeb/blob/main/Recursos/PEREZ_JAMART.jpeg?raw=true', 3),
(2, 'https://i0.wp.com/www.homosensual.com/wp-content/uploads/2022/06/marina-diamandis-corona-capital-2022-aliados-aliados-lgbt.jpg', 1),
(3, 'https://scontent.fcjs3-1.fna.fbcdn.net/v/t1.6435-9/31494307_924010611103448_7906677145714294784_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=q5wbucIvt2IAX_0Iu9R&_nc_ht=scontent.fcjs3-1.fna&oh=00_AfDFjqkL-guqwluBJXW6UJ7oS4ORcJWyxJo7tc89KLE2-g&oe=63B0E71F', 2),
(4, 'https://scontent.fcjs3-1.fna.fbcdn.net/v/t39.30808-6/310219208_5815303471860343_4043708723812321164_n.jpg?stp=cp6_dst-jpg&_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=wCwzTRhOy08AX8YlM7O&_nc_ht=scontent.fcjs3-1.fna&oh=00_AfDjUpYsm19jc4oh3zneYcwlczEKojjF_pzQZP0wxYLE4A&oe=63907B13', 4),
(5, 'https://github.com/EmaRCB/DesarrolloWeb/blob/main/Recursos/BAUTISTA_KARYME.jpg?raw=true', 5),
(6, 'https://i.pinimg.com/736x/f0/4e/12/f04e12f69857f3bdc44151425707e708.jpg', 6),
(7, 'https://scontent.fcjs3-2.fna.fbcdn.net/v/t1.6435-9/66736616_2321965501225126_1433211504135503872_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=xgddKKJIqssAX-WEVXz&tn=RE1bkkE7F9k4yE7p&_nc_ht=scontent.fcjs3-2.fna&oh=00_AfCdHyw16Eyx8iY5jQEP1AXH1Wf7biHIBz5w72JXpxCvQQ&oe=63B0E030', 7),
(8, 'https://static01.nyt.com/images/2021/09/27/obituaries/01overlooked-varo-ESP-1/Overlooked-Varo-mediumSquareAt3X.jpg', 8),
(9, 'https://pyxis.nymag.com/v1/imgs/8a9/962/f6b03e2ce3a9dd011075d489559f5b7f7c-halsey.rsquare.w700.jpg', 9),
(10, 'https://i1.sndcdn.com/artworks-PLz7zBM2XfWX6JGh-RIBEmA-t500x500.jpg', 10),
(11, 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `nombreProyecto` varchar(100) NOT NULL,
  `linkFoto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `idPerfil`, `categoria`, `nombreProyecto`, `linkFoto`) VALUES
(1, 2, 'MUSICA', 'FROOT', 'https://images.genius.com/ef097dc8ff3128003cc7279183445368.1000x563x1.jpg'),
(2, 1, 'MUSICA', 'MUSICA LIGERA', 'https://scontent.fcjs3-2.fna.fbcdn.net/v/t1.6435-9/66736616_2321965501225126_1433211504135503872_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=xgddKKJIqssAX-WEVXz&tn=RE1bkkE7F9k4yE7p&_nc_ht=scontent.fcjs3-2.fna&oh=00_AfCdHyw16Eyx8iY5jQEP1AXH1Wf7biHIBz5w72JXpxCvQQ&oe=63B0E030'),
(3, 1, 'MUSICA', 'OJITOS LINDOS', 'https://www.auxmagazine.com/wp-content/uploads/2022/06/BombaEstereo.jpg'),
(4, 4, 'MUSICA', 'Begin Again', 'https://i.ytimg.com/vi/cMPEd8m79Hw/maxresdefault.jpg'),
(5, 5, 'ARTESANIAS', 'Muñecas LELE', 'https://www.turismomexico.es/wp-content/uploads/2019/01/munecas_mexicanas.jpg'),
(6, 3, 'ARTESANIAS', 'BALEROS INCREIBLES', 'https://i.blogs.es/e9d563/juguetes-artesanales-mexicanos/1366_2000.jpg'),
(7, 7, 'MUSICA', 'DEPARTAMENTO', 'https://www.elsoldemexico.com.mx/gossip/mgfqb-jodorowsky.jpg/ALTERNATES/LANDSCAPE_1140/jodorowsky.jpg'),
(8, 6, 'DANZA', 'SERENATA YUCATECA', 'https://upload.wikimedia.org/wikipedia/commons/2/23/Serenata_Yucateca_2.jpg'),
(9, 6, 'ARTESANIAS', 'GUITARRAS DEL MUSICO', 'https://definicion.de/wp-content/uploads/2020/06/jarana.jpg'),
(10, 8, 'PINTURA', 'MUJER SALIENDO DEL PSICOANALISTA', 'https://www.mexicodesconocido.com.mx/wp-content/uploads/2019/12/remedios-varo-expo-mam.jpg'),
(12, 8, 'PINTURA', 'LA CREACION DE LAS AVES', 'https://totenart.com/noticias/wp-content/uploads/2021/09/totenart-remedios-varo.jpg'),
(13, 8, 'PINTURA', 'LA LLAMADA', 'https://totenart.com/noticias/wp-content/uploads/2021/09/la-llamada-remedios-varo.jpg'),
(14, 4, 'MUSICA', 'E MO TION', 'http://pilerats.com/assets/Uploads/carly-rae-jepsen-emotion-five-years.jpeg'),
(15, 6, 'PINTURA', 'LAS DOS FRIDAS', 'https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydGlzdFwvaW1hZ2VGaWxlXC82ODkwMDUyNDU4X2QyNDljNTIwZDBfby5qcGciLCJyZXNpemVDcm9wLDQwMCw0MDAsQ1JPUF9FTlRST1BZIl19.v3ysqXdrMy-YUoX7nqd6pGfgztJhLYvqz69Bze/XNbxk.jpg'),
(16, 6, 'PINTURA', 'DIEGO EN MIS PENSAMIENTOS', 'https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvNjIxNmEzNzlhOTRlOS5qcGciLCJyZXNpemUsMjAwMCwyMDAwIl19.r1N1VgANvvv2kZ2idbymLGt8vc-gsrd4tGdKEPW1_5M.jpg'),
(17, 5, 'DANZA', 'EL FERROCARRIL', 'https://i0.wp.com/asiesmerida.com/storage/2021/07/El-origen-de-la-jarana-yucateca.png'),
(18, 2, 'DANZA', 'LA DANZA DE LA CINTA', 'https://i.ytimg.com/vi/EjkZ92W8Br0/maxresdefault.jpg'),
(20, 5, 'DANZA', 'BAILARINA SOFIA PISTE LEAL', 'https://scontent.fcjs3-1.fna.fbcdn.net/v/t1.18169-9/18921977_1351623348257285_2765285019408364197_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=GTkwTh1RPVQAX9f5D3F&tn=RE1bkkE7F9k4yE7p&_nc_ht=scontent.fcjs3-1.fna&oh=00_AfDdr5vgjftUYipXKSJND4SAccywsW1FKvgXeVnBBkC5bw&oe=63B35F4C'),
(21, 6, 'DANZA', 'GirlGroup TWICE', 'https://www.noraemagazine.com/wp-content/uploads/2018/09/TWICE-INTEGRANTES.jpg'),
(22, 6, 'DANZA', 'GirlGroup BLACKPINK', 'https://6.viki.io/image/f1db2d0b145e4e49991550376fecb3de/dummy.png?s=900x600&e=t'),
(23, 2, 'DANZA', 'ADIEL HERRERA', 'https://thomasjefferson.edu.pe/wp-content/uploads/2018/11/Imagen-web-Talleres-de-Verano-danza-k-pop-2019.jpg'),
(24, 1, 'ARTESANIAS', 'YOYO SISI', 'https://i.pinimg.com/originals/7b/b8/76/7bb876a9a5ea7ede47335853c8f9dd57.jpg'),
(25, 5, 'DANZA', 'OTRA RAIZ', 'https://isla.merida.gob.mx/serviciosinternet/siiw2/administrador/sce/filessce/16593752423968.jpg'),
(26, 2, 'DANZA', 'Concierto Sones Yucatecos y algo mas', 'https://isla.merida.gob.mx/serviciosinternet/siiw2/administrador/sce/filessce/16693059128053.jpg'),
(27, 5, 'ARTESANIAS', 'Juegos Infantiles', 'https://isla.merida.gob.mx/serviciosinternet/siiw2/administrador/sce/filessce/16693920252503.jpg'),
(28, 4, 'MUSICA', 'Dealer', 'https://www.coupdemainmagazine.com/sites/default/files/styles/hero_image/public/article/17992/hero-17992-1755000415.jpg?itok=frGmWze7'),
(31, 6, 'ARTESANIAS', 'HERMOSAS HAMACAS', 'https://www.poresto.net/u/fotografias/m/2021/1/21/f1280x720-47026_178701_5050.png'),
(35, 8, 'PINTURA', 'OJOS SOBRE LA MESA', 'https://historia-arte.com/_/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvNjI2ZDEzYzU2MGMxYi5qcGciLCJyZXNpemUsODAwIl19.z4JOFtLKrRG-EPPHrSgh9aCYcqKJWs3OWj3zTgO8rMU.jpg'),
(36, 8, 'PINTURA', 'CATS PARADISE', 'https://ih1.redbubble.net/image.3054107059.9534/flat,750x,075,f-pad,750x1000,f8f8f8.jpg'),
(37, 4, 'ARTESANIAS', 'MANDALAS', 'https://pbs.twimg.com/media/DwvGa3SWoAI4ZzC.jpg'),
(38, 7, 'DANZA', 'CHUNTARO STYLE', 'https://pbs.twimg.com/media/EbA2gIdXQAAPNSe.jpg'),
(39, 2, 'ARTESANIAS', 'VAJILLA DE CERAMICA', 'https://magazine.velasresorts.com/wp-content/uploads/2020/09/17068.jpg'),
(40, 9, 'MUSICA', 'Badlands', 'https://thehoneypop.com/ezoimgfmt/i0.wp.com/thehoneypop.com/wp-content/uploads/2020/08/Untitled-design-2020-08-19T003316.045.png?w=1200&ssl=1&ezimgfmt=ngcb1/notWebP'),
(42, 10, 'PINTURA', 'Ancient Dreams in a Modern Land', 'https://studybreaks.com/wp-content/uploads/2021/07/Marinas-new-album-Ancient-Dreams-in-a-Modern-Land.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `idUbicacion` int(11) NOT NULL,
  `nombreLugar` varchar(100) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`idUbicacion`, `nombreLugar`, `latitud`, `longitud`) VALUES
(1, 'Palacio de la Música', 20.9686266, -89.6239164),
(2, 'Mercado \'San Benito\'', 20.9620263, -89.6229024),
(3, 'Centro Comercial Gran Plaza', 21.0303525, -89.6264705),
(4, 'Palacio de Gobierno del Estado de Yucatán', 20.9676, -89.6254581),
(5, 'Centro Cultural El Olimpo', 20.9674835, -89.626692),
(6, 'Convento de San Bernardino de Siena', 20.6859089, -88.2120181),
(7, 'Parque Benito Juarez, Tekax', 20.2031299, -89.289729),
(8, 'Biblioteca Jose Martí', 20.9876511, -89.637496),
(9, 'Palacio Municipal de Mérida', 20.9672078, -89.6266518),
(10, 'Centro Comercial La Isla', 21.0562578, -89.598851);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `contrasena` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `nombre`, `email`, `foto`) VALUES
(1, 'admin', 'admin', 'Administrador Demo', 'admin@hotmail.com', NULL),
(2, 'usuario', 'usuario', 'Un Usuario', 'user@hotmail.com', NULL),
(3, 'jamart', 'yamrat', 'Jamart Perez', 'jamart@hotmail.com', NULL),
(4, 'emanuel', 'taylorswif', 'Emanuel Rafael Chavez Bagundo', 'bluewhize55@outlook.com', NULL),
(5, 'karyme', 'karyme2002', 'Karyme Bautista', 'karyme@outlook.com', NULL),
(6, 'userweird', 'juan23', 'Juan', 'eee@outlook.com', NULL),
(7, 'gabocastul', 'gabo', 'Gabo Castul Lazo', 'GaboPro@outlook.com', NULL),
(8, 'remediosva', 'remediosso', 'Remedios Varo', 'rmv@yahoo.com', NULL),
(9, 'halsey', 'halsey', 'Ashley Frangipane', 'halsey@outlook.com', NULL),
(10, 'MARINA', 'marina', 'Marina Diamandis', 'marina@outlook.com', NULL),
(14, 'CryBaby', 'k12mel', 'Melanie Martinez', 'mmcrybaby@hotmail.com', NULL);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `addUserProfile` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN
INSERT INTO perfiles (id_perfil, foto, idUsuario) VALUES (NULL, "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png", 15);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `deleteUserProfile` AFTER DELETE ON `usuarios` FOR EACH ROW BEGIN
DELETE FROM perfiles
    WHERE perfiles.idUsuario = usuarios.id_usuario;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacioneventos`
--
DROP TABLE IF EXISTS `informacioneventos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacioneventos`  AS SELECT `e`.`idEvento` AS `idEvento`, `e`.`nombreEvento` AS `nombreEvento`, `e`.`fecha` AS `fecha`, `e`.`id_Ubicacion` AS `id_Ubicacion`, `u`.`idUbicacion` AS `idUbicacion`, `u`.`nombreLugar` AS `nombreLugar`, `u`.`latitud` AS `latitud`, `u`.`longitud` AS `longitud` FROM (`eventos` `e` join `ubicaciones` `u` on(`e`.`id_Ubicacion` = `u`.`idUbicacion`))  ;

-- --------------------------------------------------------

--
-- Estructura para la vista `informacionusuarios`
--
DROP TABLE IF EXISTS `informacionusuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacionusuarios`  AS SELECT `p`.`id_perfil` AS `id_perfil`, `p`.`foto` AS `foto`, `p`.`idUsuario` AS `idUsuario`, `u`.`id_usuario` AS `id_usuario`, `u`.`usuario` AS `usuario`, `u`.`contrasena` AS `contrasena`, `u`.`nombre` AS `nombre`, `u`.`email` AS `email` FROM (`perfiles` `p` join `usuarios` `u` on(`p`.`idUsuario` = `u`.`id_usuario`))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `id_Ubicacion` (`id_Ubicacion`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_Ubicacion`) REFERENCES `ubicaciones` (`idUbicacion`);

--
-- Filtros para la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD CONSTRAINT `perfiles_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
