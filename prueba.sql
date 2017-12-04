-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 04:25:05
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumnos` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `permisos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumnos`, `nombre`, `telefono`, `email`, `pass`, `permisos`) VALUES
(2, 'Guillermo', '4615588', 'guillerosello@gmail.com', '12345', 'ADMIN'),
(7, 'YO', '46518987', 'yo@1234.com', '123', 'ADMIN'),
(9, 'Guillermo Rosello', '46155588', 'yo@123.com', '123', 'ALUMNO'),
(10, 'ADMIN', '12345', 'info@examinar.com', '123', 'ADMIN'),
(11, 'PROFESOR', '12345', 'profesor@examinar.com', '123', 'PROFESOR'),
(12, 'ALUMNO', '123456', 'alumno@examinar.com', '123', 'ALUMNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id_exam` int(11) NOT NULL,
  `tema` int(255) NOT NULL,
  `nombre` text NOT NULL,
  `duracion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_alumno`
--

CREATE TABLE `examen_alumno` (
  `id_exam` int(11) NOT NULL,
  `id_alumnos` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_preg` int(11) NOT NULL,
  `id_opcion` int(90) NOT NULL,
  `es_resp` tinyint(1) NOT NULL,
  `opcion` text NOT NULL,
  `id_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_preg`, `id_opcion`, `es_resp`, `opcion`, `id_exam`) VALUES
(1, 1, 0, 'Opcion1-1', 0),
(1, 2, 1, 'Opcion1-2', 0),
(1, 3, 0, 'Opcion1-3', 0),
(2, 1, 0, 'Opcion2-1', 0),
(2, 2, 1, 'Opcion2-2', 0),
(2, 3, 0, 'Opcion2-3', 0),
(3, 1, 0, 'Opcion3-1', 0),
(3, 2, 1, 'Opcion3-2', 0),
(3, 3, 0, 'Opcion3-3', 0),
(4, 1, 0, 'Opcion4-1', 0),
(4, 2, 1, 'Opcion4-2', 0),
(4, 3, 0, 'Opcion4-3', 0),
(5, 1, 0, 'Opcion5-1', 0),
(5, 2, 1, 'Opcion5-2', 0),
(5, 3, 0, 'Opcion5-3', 0),
(6, 1, 0, 'Opcion6-1', 0),
(6, 2, 1, 'Opcion6-2', 0),
(6, 3, 0, 'Opcion6-3', 0),
(7, 1, 0, 'Opcion7-1', 0),
(7, 2, 1, 'Opcion7-2', 0),
(7, 3, 0, 'Opcion7-3', 0),
(8, 1, 0, 'Opcion8-1', 0),
(8, 2, 1, 'Opcion8-2', 0),
(8, 3, 0, 'Opcion8-3', 0),
(9, 1, 0, 'Opcion9-1', 0),
(9, 2, 1, 'Opcion9-2', 0),
(9, 3, 0, 'Opcion9-3', 0),
(10, 1, 0, 'Opcion10-1', 0),
(10, 2, 1, 'Opcion10-2', 0),
(10, 3, 0, 'Opcion10-3', 0),
(11, 1, 0, 'Opcion11-1', 0),
(11, 2, 1, 'Opcion11-2', 0),
(11, 3, 0, 'Opcion11-3', 0),
(12, 1, 0, 'Opcion12-1', 0),
(12, 2, 1, 'Opcion12-2', 0),
(12, 3, 0, 'Opcion12-3', 0),
(13, 1, 0, 'Opcion13-1', 0),
(13, 2, 1, 'Opcion13-2', 0),
(13, 3, 0, 'Opcion13-3', 0),
(14, 1, 0, 'Opcion14-1', 0),
(14, 2, 1, 'Opcion14-2', 0),
(14, 3, 0, 'Opcion14-3', 0),
(15, 1, 0, 'Opcion15-1', 0),
(15, 2, 1, 'Opcion15-2', 0),
(15, 3, 0, 'Opcion15-3', 0),
(16, 1, 0, 'Opcion16-1', 0),
(16, 2, 1, 'Opcion16-2', 0),
(16, 3, 0, 'Opcion16-3', 0),
(17, 1, 0, 'Opcion17-1', 0),
(17, 2, 1, 'Opcion17-2', 0),
(17, 3, 0, 'Opcion17-3', 0),
(18, 1, 0, 'Opcion18-1', 0),
(18, 2, 1, 'Opcion18-2', 0),
(18, 3, 0, 'Opcion18-3', 0),
(19, 1, 0, 'Opcion19-1', 0),
(19, 2, 1, 'Opcion19-2', 0),
(19, 3, 0, 'Opcion19-3', 0),
(20, 1, 0, 'Opcion20-1', 0),
(20, 2, 1, 'Opcion20-2', 0),
(20, 3, 0, 'Opcion20-3', 0),
(21, 1, 0, 'Opcion21-1', 0),
(21, 2, 1, 'Opcion21-2', 0),
(21, 3, 0, 'Opcion21-3', 0),
(22, 1, 0, 'Opcion22-1', 0),
(22, 2, 1, 'Opcion22-2', 0),
(22, 3, 0, 'Opcion22-3', 0),
(23, 1, 0, 'Opcion23-1', 0),
(23, 2, 1, 'Opcion23-2', 0),
(23, 3, 0, 'Opcion23-3', 0),
(24, 1, 0, 'Opcion24-1', 0),
(24, 2, 1, 'Opcion24-2', 0),
(24, 3, 0, 'Opcion24-3', 0),
(25, 1, 0, 'Opcion25-1', 0),
(25, 2, 1, 'Opcion25-2', 0),
(25, 3, 0, 'Opcion25-3', 0),
(26, 1, 0, 'Opcion26-1', 0),
(26, 2, 1, 'Opcion26-2', 0),
(26, 3, 0, 'Opcion26-3', 0),
(27, 1, 0, 'Opcion27-1', 0),
(27, 2, 1, 'Opcion27-2', 0),
(27, 3, 0, 'Opcion27-3', 0),
(28, 1, 0, 'Opcion28-1', 0),
(28, 2, 1, 'Opcion28-2', 0),
(28, 3, 0, 'Opcion28-3', 0),
(29, 1, 0, 'Opcion29-1', 0),
(29, 2, 1, 'Opcion29-2', 0),
(29, 3, 0, 'Opcion29-3', 0),
(30, 1, 0, 'Opcion30-1', 0),
(30, 2, 1, 'Opcion30-2', 0),
(30, 3, 0, 'Opcion30-3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preg` int(11) NOT NULL,
  `preg` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `id_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_preg`, `preg`, `id_exam`) VALUES
(1, '¿De que color era el Caballo Blanco de San Martin?', 0),
(2, '¿De que color es el cielo?', 0),
(3, '¿Aprobamos LGI?', 0),
(4, 'pregunta4', 0),
(5, 'Pregunta5', 0),
(6, 'Pregunta6', 0),
(7, 'Pregunta7', 0),
(8, 'Pregunta8', 0),
(9, 'Pregunta9', 0),
(10, 'Pregunta10', 0),
(11, 'Pregunta11', 0),
(12, 'Pregunta12', 0),
(13, 'Pregunta13', 0),
(14, 'pregunta 14', 0),
(15, 'la que faltaba', 0),
(16, 'Pregunta16', 0),
(17, 'Pregunta17', 0),
(18, 'Pregunta18', 0),
(19, 'Pregunta19', 0),
(20, 'Pregunta20', 0),
(21, 'Pregunta21', 0),
(22, 'Pregunta22', 0),
(23, 'Pregunta23', 0),
(24, 'Pregunta24', 0),
(25, 'Pregunta25', 0),
(26, 'Pregunta26', 0),
(27, 'Pregunta27', 0),
(28, 'Pregunta28', 0),
(29, 'Pregunta29', 0),
(30, 'Pregunta 30', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_examen`
--

CREATE TABLE `pregunta_examen` (
  `id_exam` int(11) NOT NULL,
  `id_preg` int(11) NOT NULL,
  `tema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `detalle` text COLLATE latin1_spanish_ci NOT NULL,
  `img` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `nombre`, `detalle`, `img`) VALUES
(1, 'Mega Ofertas en 1 Pago', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', 'Mega Ofertas en 1 Pago.jpg'),
(2, '12 Cuotas MercadoPago', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', '12 Cuotas MercadoPago.png'),
(3, '12 Cuotas TodoPago', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', '12 Cuotas TodoPago.png'),
(4, 'Promo ScotiaCard', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', 'Promo ScotiaCard.jpg'),
(5, '50% OFF Super Sale', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', '50OFF Super Sale.jpg'),
(6, '70% OFF Ciber Monday', 'En el marco de esta alianza, ambas empresas unen fuerzas para ofrecer varios beneficios a sus clientes:\r\n\r\nA aquellos que aÃºn no son usuarios de Uber, al registrarse en la aplicaciÃ³n con su tarjeta de dÃ©bito Visa Scotiabank e ingresar el cÃ³digo DEBITOSCOTIA se les darÃ¡n tres viajes gratis de regalo y 20% de ahorro en los viajes subsiguientes.\r\nQuienes ya son usuarios de la plataforma, al ingresar como medio de pago su tarjeta de dÃ©bito Scotiabank se les otorgarÃ¡ un 20% de ahorro en todos sus viajes.*\r\n* El cÃ³digo de la promociÃ³n es DEBITOSCOTIA y estarÃ¡ disponible hasta el 21 de Septiembre de 2017.', '70OFF Ciber Monday.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_alumno`
--

CREATE TABLE `respuesta_alumno` (
  `id_resp` int(11) NOT NULL,
  `id_alumnos` int(11) NOT NULL,
  `id_exam` int(11) NOT NULL,
  `id_preg` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cform`
--

CREATE TABLE `tb_cform` (
  `ID` int(11) NOT NULL,
  `u_name` text COLLATE latin1_spanish_ci NOT NULL,
  `u_email` text COLLATE latin1_spanish_ci NOT NULL,
  `subj` text COLLATE latin1_spanish_ci NOT NULL,
  `message` text COLLATE latin1_spanish_ci NOT NULL,
  `phone` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tb_cform`
--

INSERT INTO `tb_cform` (`ID`, `u_name`, `u_email`, `subj`, `message`, `phone`) VALUES
(1, 'Pablo', 'pablonoviello@hotmail.com', 'Prueba', 'Contacto de prueba', ''),
(2, 'dwfsdfdsfs', 'dsfsdfs@goog.com', 'sfdsfs', 'sfsdfs', ''),
(3, 'dwfsdfdsfs', 'dsfsdfs@goog.com', 'sfdsfs', 'fdsfsdfsdsadadsa', ''),
(4, 'Pablo', 'prueba@mail.com', 'Test Full power', 'Campo de texto', ''),
(9, 'safgsdfg', 'sdfgsdfg@asdfas.asdf', 'sdfgs', 'dfg', ''),
(13, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(14, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(15, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(16, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(17, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(18, 'fghjfghj', 'fghjfghj', 'fghjfghj', '', 'fghjfghj'),
(19, 'fghjfghj', 'fghjfghj', 'fghjfghj', 'fghjfghj', ''),
(20, 'fghjfghj', 'fghjfghj', 'fghjfghj', 'sdfsdf', 'sdfsdfsdfsdf'),
(21, 'fasdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdf'),
(22, 'fghjgfghj', 'asdfasdf', 'zxcvzxcv', 'bnm,bnm', 'hjklhjkl'),
(23, 'adsfasdf', 'asdfasdf', 'asdffdasdf@asd.ASD', 'asdfasdfa', 'asdfasdfasdf'),
(24, 'dfghdfgh', 'fdghdfgh@sdfgsdf.sdfg', 'sdfgasdfg', 'sdfgsdfg', 'dfghdfgh'),
(25, 'adsfasdf', 'asdffdasdf@asd.ASD', 'asdfasdfa', 'asdfasdfasdf', 'asdfasdf'),
(26, 'rtyurtyu', 'asdfgadsf@asdf.asdf', 'asdkkljk;''', 'sdfghdfghdfg', 'opyuioyui'),
(27, 'Nombre', '`sdrfg@asdfas.com', 'sdfgsdfgsdf', 'l.kjhlhjklhjk', 'sdfgsdfgsdfg'),
(28, '[poasjdp;ohsad', 'dsfgds@sfasdf.asdf', 'dfgsdfg', 'gdsfgsdfgsdfgsdfgsdfgsdf', 'kj;ljdfghjghfd'),
(29, 'fgsdfgsdf', 'sdfgsdfg@asdfas.asdf', 'sdfghdfgh', 'dfghfdhgjghj', 'fgsdfgsdfg'),
(30, 'sdfgsd', 'asdffdasdf@asd.ASD', 'zxcvzxcv', 'sdfgdsfgdsfg', 'sdgfsdfg'),
(31, 'adsfasdf', 'asdfasdf@sadfasd.asdf', 'bnm,bnm', 'sadfsdf', 'dfghd'),
(34, 'hola', 'asdf@sdfasd.asdf', 'asdfasdf', 'DSFASDFASD', '646546874'),
(35, 'Prueba', 'prueba@examinar.com', 'prueba', 'prueba', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumnos`),
  ADD UNIQUE KEY `id_alumnos` (`id_alumnos`),
  ADD UNIQUE KEY `id_alumnos_3` (`id_alumnos`),
  ADD KEY `id_alumnos_2` (`id_alumnos`),
  ADD KEY `id_alumnos_4` (`id_alumnos`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id_exam`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indices de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD KEY `id_exam` (`id_exam`),
  ADD KEY `id_alumnos` (`id_alumnos`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD KEY `id_preg_2` (`id_preg`),
  ADD KEY `id_preg` (`id_preg`) USING BTREE,
  ADD KEY `id_preg_3` (`id_preg`) USING BTREE,
  ADD KEY `id_opcion` (`id_opcion`),
  ADD KEY `id_opcion_2` (`id_opcion`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_preg`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indices de la tabla `pregunta_examen`
--
ALTER TABLE `pregunta_examen`
  ADD KEY `id_exam` (`id_exam`),
  ADD KEY `id_preg` (`id_preg`),
  ADD KEY `tema` (`tema`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuesta_alumno`
--
ALTER TABLE `respuesta_alumno`
  ADD PRIMARY KEY (`id_resp`),
  ADD UNIQUE KEY `id_exam` (`id_exam`),
  ADD UNIQUE KEY `id_opcion` (`id_opcion`),
  ADD KEY `id_alumnos` (`id_alumnos`),
  ADD KEY `id_preg` (`id_preg`);

--
-- Indices de la tabla `tb_cform`
--
ALTER TABLE `tb_cform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `respuesta_alumno`
--
ALTER TABLE `respuesta_alumno`
  MODIFY `id_resp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tb_cform`
--
ALTER TABLE `tb_cform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
