-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2019 a las 09:48:46
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas_ci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(14, 'Medicamentos', 'algunos de los medicamentos que se ofrecen en  nuestra farmacia', 1),
(22, 'Cuidado Personal', 'Articulos de cuidado personal', 1),
(25, 'Suplemento alimenticio', 'Cosas para comer', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf32_spanish_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `ruc` varchar(20) COLLATE utf32_spanish_ci DEFAULT NULL,
  `empresa` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `telefono`, `direccion`, `ruc`, `empresa`, `estado`) VALUES
(2, 'potato', 'potato', '938465834', 'potato', '12397384-2', 'potato-corp', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `venta_id` int(11) DEFAULT NULL,
  `precio` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `cantidad` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `importe` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) COLLATE utf32_spanish_ci NOT NULL,
  `codigo_prod` varchar(100) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `rut`, `codigo_prod`) VALUES
(0, '123456789', '73478345'),
(0, '123456789', '13245678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_domicilio`
--

CREATE TABLE `pedidos_domicilio` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(64) COLLATE utf32_spanish_ci NOT NULL,
  `apellidos` varchar(80) COLLATE utf32_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `ciudad` varchar(80) COLLATE utf32_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `mail` varchar(100) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_sucursal`
--

CREATE TABLE `pedidos_sucursal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) COLLATE utf32_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `sucursal` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `ciudad` varchar(64) COLLATE utf32_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `rut` varchar(10) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos_sucursal`
--

INSERT INTO `pedidos_sucursal` (`id`, `nombre`, `apellidos`, `sucursal`, `ciudad`, `mail`, `rut`) VALUES
(1, 'patricio', 'Hinojosa', 'Sucursal2', 'Valparaiso', 'patriciohg@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `precio` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `descripcion`, `precio`, `stock`, `categoria_id`, `imagen`, `estado`) VALUES
(22, '73478345', 'shampoo shoulders', 'shampoo muy loquito', '2000', 65, 22, 'shampoo_shoulders.jpg', 1),
(26, '132654687', 'Suplemento', 'Suplemento para comer', '13245', 12, 25, 'Suplemento.jpg', 1),
(28, '13245678', 'Paracetamol', 'Sirve para todo que nadie diga lo contrario', '3000', 200, 14, 'Paracetamol.jpg', 1),
(29, '1326546', 'viadil', 'util para controlar el dolor de estomago', '10000', 32, 14, 'viadil.jpg', 1),
(30, '65468', 'Aspirina', 'Ayuda a combatir los dolores de cabeza', '5000', 20, 14, 'Aspirina.jpg', 1),
(31, '46547', 'Acondicionador', 'Para cuidarse el pelo', '10000', 50, 22, 'Acondicionador.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'superadmin', 'Control total'),
(2, 'admin', 'Control total'),
(3, 'usuario', 'solo cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf32_spanish_ci DEFAULT NULL,
  `direccion` varchar(32) COLLATE utf32_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf32_spanish_ci DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `telefono`, `direccion`, `email`, `username`, `password`, `rol_id`, `estado`) VALUES
(1, 'Patricio Raul', 'Hinojosa Godoy', '97883251', 'Micasa 123', 'Patriciohg97@gmail.com', 'patriciohg', '772d5aa33658d11d30f3ac40b18087b7aecb990c', 1, NULL),
(2, 'potato', 'Inojosa Gomez', '12354678', 'miksa en maincrah 123', 'potatohg@gmail.com', 'potatohg', '772d5aa33658d11d30f3ac40b18087b7aecb990c', 3, 1),
(3, '', '', '', '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 3, 1),
(4, 'Usuario', 'Usuario', '12345678', 'asdasd 1234', 'usuario@gmail.com', 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 3, 1),
(5, 'admin', 'admin', '12354678', 'asdasd 4561', 'admin@admin.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `subtotal` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `igv` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `descuento` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `total` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL,
  `tipo_documento_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `num_documento` varchar(45) COLLATE utf32_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruc_UNIQUE` (`ruc`),
  ADD UNIQUE KEY `empresa_UNIQUE` (`empresa`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_venta_detalle_idx` (`venta_id`),
  ADD KEY `fk_producto_detalle_idx` (`producto_id`);

--
-- Indices de la tabla `pedidos_domicilio`
--
ALTER TABLE `pedidos_domicilio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos_sucursal`
--
ALTER TABLE `pedidos_sucursal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_categoria_producto_idx` (`categoria_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_rol_usuarios_idx` (`rol_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `num_documento_UNIQUE` (`num_documento`),
  ADD KEY `fk_usuario_venta_idx` (`usuario_id`),
  ADD KEY `fk_cliente_venta_idx` (`cliente_id`),
  ADD KEY `fk_tipo_documento_venta_idx` (`tipo_documento_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos_domicilio`
--
ALTER TABLE `pedidos_domicilio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos_sucursal`
--
ALTER TABLE `pedidos_sucursal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_producto_detalle` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_detalle` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos_domicilio`
--
ALTER TABLE `pedidos_domicilio`
  ADD CONSTRAINT `pedidos_domicilio_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `pedido` (`rut`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol_usuarios` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_cliente_venta` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_documento_venta` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_venta` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
