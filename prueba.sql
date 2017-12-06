-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2017 a las 08:42:01
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
  `estado_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen_alumno`
--

INSERT INTO `examen_alumno` (`examen_id`, `alumno_id`, `mat_id`, `tema_id`, `examen_fecha`, `examen_nota`, `estado_id`) VALUES
(1, 2, 1, 1, '2017-12-13 00:00:00', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_estado`
--

CREATE TABLE `examen_estado` (
  `estado_id` tinyint(1) NOT NULL,
  `examen_estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen_estado`
--

INSERT INTO `examen_estado` (`estado_id`, `examen_estado`) VALUES
(0, 'Pendiente'),
(1, 'Finalizado');

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

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`mat_id`, `mat_nombre`) VALUES
(1, 'PHP'),
(2, 'MySQL'),
(3, 'Matematica'),
(4, 'Fisica');

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

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`tema_id`, `preg_id`, `opc_id`, `opcion`, `opc_puntos`) VALUES
(0, 1, 1, 'Opcion 1-1', 1),
(0, 1, 2, 'Opcion 1-2', 0),
(0, 1, 3, 'Opcion 1-3', 0),
(0, 2, 1, 'Opcion 2-1', 1),
(0, 2, 2, 'Opcion 2-2', 0),
(0, 2, 3, 'Opcion 2-3', 0),
(0, 3, 1, 'Opcion 3-1', 1),
(0, 3, 2, 'Opcion 3-2', 0),
(0, 3, 3, 'Opcion 3-3', 0),
(0, 4, 1, 'Opcion 4-1', 1),
(0, 4, 2, 'Opcion 4-2', 0),
(0, 4, 3, 'Opcion 4-3', 0),
(0, 5, 1, 'Opcion 5-1', 1),
(0, 5, 2, 'Opcion 5-2', 0),
(0, 5, 3, 'Opcion 5-3', 0),
(0, 6, 1, 'Opcion 6-1', 1),
(0, 6, 2, 'Opcion 6-2', 0),
(0, 6, 3, 'Opcion 6-3', 0),
(0, 7, 1, 'Opcion 7-1', 1),
(0, 7, 2, 'Opcion 7-2', 0),
(0, 7, 3, 'Opcion 7-3', 0),
(0, 8, 1, 'Opcion 8-1', 1),
(0, 8, 2, 'Opcion 8-2', 0),
(0, 8, 3, 'Opcion 8-3', 0),
(0, 9, 1, 'Opcion 9-1', 1),
(0, 9, 2, 'Opcion 9-2', 0),
(0, 9, 3, 'Opcion 9-3', 0),
(0, 10, 1, 'Opcion 10-1', 1),
(0, 10, 2, 'Opcion 10-2', 0),
(0, 10, 3, 'Opcion 10-3', 0),
(0, 11, 1, 'Opcion 11-1', 1),
(0, 11, 2, 'Opcion 11-2', 0),
(0, 11, 3, 'Opcion 11-3', 0),
(0, 12, 1, 'Opcion 12-1', 1),
(0, 12, 2, 'Opcion 12-2', 0),
(0, 12, 3, 'Opcion 12-3', 0),
(0, 13, 1, 'Opcion 13-1', 1),
(0, 13, 2, 'Opcion 13-2', 0),
(0, 13, 3, 'Opcion 13-3', 0),
(0, 14, 1, 'Opcion 14-1', 1),
(0, 14, 2, 'Opcion 14-2', 0),
(0, 14, 3, 'Opcion 14-3', 0),
(0, 15, 1, 'Opcion 15-1', 1),
(0, 15, 2, 'Opcion 15-2', 0),
(0, 15, 3, 'Opcion 15-3', 0),
(0, 16, 1, 'Opcion 16-1', 1),
(0, 16, 2, 'Opcion 16-2', 0),
(0, 16, 3, 'Opcion 16-3', 0),
(0, 17, 1, 'Opcion 17-1', 1),
(0, 17, 2, 'Opcion 17-2', 0),
(0, 17, 3, 'Opcion 17-3', 0),
(0, 18, 1, 'Opcion 18-1', 1),
(0, 18, 2, 'Opcion 18-2', 0),
(0, 18, 3, 'Opcion 18-3', 0),
(0, 19, 1, 'Opcion 19-1', 1),
(0, 19, 2, 'Opcion 19-2', 0),
(0, 19, 3, 'Opcion 19-3', 0),
(0, 20, 1, 'Opcion 20-1', 1),
(0, 20, 2, 'Opcion 20-2', 0),
(0, 20, 3, 'Opcion 20-3', 0),
(0, 21, 1, 'Opcion 21-1', 1),
(0, 21, 2, 'Opcion 21-2', 0),
(0, 21, 3, 'Opcion 21-3', 0),
(0, 22, 1, 'Opcion 22-1', 1),
(0, 22, 2, 'Opcion 22-2', 0),
(0, 22, 3, 'Opcion 22-3', 0),
(0, 23, 1, 'Opcion 23-1', 1),
(0, 23, 2, 'Opcion 23-2', 0),
(0, 23, 3, 'Opcion 23-3', 0),
(0, 24, 1, 'Opcion 24-1', 1),
(0, 24, 2, 'Opcion 24-2', 0),
(0, 24, 3, 'Opcion 24-3', 0),
(0, 25, 1, 'Opcion 25-1', 1),
(0, 25, 2, 'Opcion 25-2', 0),
(0, 25, 3, 'Opcion 25-3', 0),
(0, 26, 1, 'Opcion 26-1', 1),
(0, 26, 2, 'Opcion 26-2', 0),
(0, 26, 3, 'Opcion 26-3', 0),
(0, 27, 1, 'Opcion 27-1', 1),
(0, 27, 2, 'Opcion 27-2', 0),
(0, 27, 3, 'Opcion 27-3', 0),
(0, 28, 1, 'Opcion 28-1', 1),
(0, 28, 2, 'Opcion 28-2', 0),
(0, 28, 3, 'Opcion 28-3', 0),
(0, 29, 1, 'Opcion 29-1', 1),
(0, 29, 2, 'Opcion 29-2', 0),
(0, 29, 3, 'Opcion 29-3', 0),
(0, 30, 1, 'Opcion 30-1', 1),
(0, 30, 2, 'Opcion 30-2', 0),
(0, 30, 3, 'Opcion 30-3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `preg_id` int(4) NOT NULL,
  `preg_nombre` varchar(50) NOT NULL,
  `tema_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`preg_id`, `preg_nombre`, `tema_id`) VALUES
(1, 'Pregunta 1', 0),
(2, 'Pregunta 2', 0),
(3, 'Pregunta 3', 0),
(4, 'Pregunta 4', 0),
(5, 'Pregunta 5', 0),
(6, 'Pregunta 6', 0),
(7, 'Pregunta 7', 0),
(8, 'Pregunta 8', 0),
(9, 'Pregunta 9', 0),
(10, 'Pregunta 10', 0),
(11, 'Pregunta 11', 0),
(12, 'Pregunta 12', 0),
(13, 'Pregunta 13', 0),
(14, 'Pregunta 14', 0),
(15, 'Pregunta 15', 0),
(16, 'Pregunta 16', 0),
(17, 'Pregunta 17', 0),
(18, 'Pregunta 18', 0),
(19, 'Pregunta 19', 0),
(20, 'Pregunta 20', 0),
(21, 'Pregunta 21', 0),
(22, 'Pregunta 22', 0),
(23, 'Pregunta 23', 0),
(24, 'Pregunta 24', 0),
(25, 'Pregunta 25', 0),
(26, 'Pregunta 26', 0),
(27, 'Pregunta 27', 0),
(28, 'Pregunta 28', 0),
(29, 'Pregunta 29', 0),
(30, 'Pregunta 30', 0);

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
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`tema_id`, `tema_nombre`, `mat_id`) VALUES
(1, 'Fracciones', 3),
(2, 'Consultas', 2),
(3, 'Prueba', 3),
(4, 'Cuantica', 4);

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
  MODIFY `examen_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `examen_realizado`
--
ALTER TABLE `examen_realizado`
  MODIFY `resp_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `mat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `preg_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `tema_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
