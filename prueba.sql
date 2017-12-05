-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2017 a las 04:06:02
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
  `alumno_id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `permisos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alumno_id`, `nombre`, `telefono`, `email`, `pass`, `permisos`) VALUES
(2, 'Guillermo', '4615588', 'guillerosello@gmail.com', '12345', 'ADMIN'),
(7, 'YO', '46518987', 'yo@1234.com', '123', 'ADMIN'),
(9, 'Guillermo Rosello', '46155588', 'yo@123.com', '123', 'ALUMNO'),
(10, 'ADMIN', '12345', 'info@examinar.com', '123', 'ADMIN'),
(11, 'PROFESOR', '12345', 'profesor@examinar.com', '123', 'PROFESOR'),
(12, 'ALUMNO', '123456', 'alumno@examinar.com', '123', 'ALUMNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `contacto_id` int(4) NOT NULL,
  `contacto_nombre` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `contacto_email` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `contacto_asunto` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `contacto_mensaje` text COLLATE latin1_spanish_ci NOT NULL,
  `contacto_tel` varchar(60) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`contacto_id`, `contacto_nombre`, `contacto_email`, `contacto_asunto`, `contacto_mensaje`, `contacto_tel`) VALUES
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_alumno`
--

CREATE TABLE `examen_alumno` (
  `examen_id` int(4) NOT NULL,
  `alumno_id` int(4) NOT NULL,
  `mat_id` int(4) NOT NULL,
  `tema_id` int(4) NOT NULL,
  `examen_fecha` datetime NOT NULL,
  `examen_nota` tinyint(2) DEFAULT NULL,
  `estado_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_estado`
--

CREATE TABLE `examen_estado` (
  `estado_id` tinyint(1) NOT NULL,
  `estado_examen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_realizado`
--

CREATE TABLE `examen_realizado` (
  `resp_id` int(4) NOT NULL,
  `examen_id` int(4) NOT NULL,
  `preg_id` int(4) NOT NULL,
  `opc_id` int(4) NOT NULL,
  `opc_puntos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `mat_id` int(4) NOT NULL,
  `mat_nombre` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `tema_id` int(4) NOT NULL,
  `preg_id` int(11) NOT NULL,
  `opc_id` int(11) NOT NULL,
  `opcion` varchar(200) NOT NULL,
  `opc_puntos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `preg_id` int(4) NOT NULL,
  `preg_nombre` varchar(50) NOT NULL,
  `tema_id` int(4) NOT NULL
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
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `tema_id` int(4) NOT NULL,
  `tema_nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `mat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alumno_id`),
  ADD UNIQUE KEY `id_alumnos` (`alumno_id`),
  ADD UNIQUE KEY `id_alumnos_3` (`alumno_id`),
  ADD KEY `id_alumnos_2` (`alumno_id`),
  ADD KEY `id_alumnos_4` (`alumno_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`contacto_id`);

--
-- Indices de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD PRIMARY KEY (`examen_id`);

--
-- Indices de la tabla `examen_estado`
--
ALTER TABLE `examen_estado`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `examen_realizado`
--
ALTER TABLE `examen_realizado`
  ADD PRIMARY KEY (`resp_id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`preg_id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`tema_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `contacto_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  MODIFY `examen_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `examen_realizado`
--
ALTER TABLE `examen_realizado`
  MODIFY `resp_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `mat_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `preg_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `tema_id` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
