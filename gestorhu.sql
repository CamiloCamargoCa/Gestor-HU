-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2019 a las 05:22:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorhu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE `criterios` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_historia` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `criterios`
--

INSERT INTO `criterios` (`id`, `id_proyecto`, `id_historia`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '- La mercancía debe estar registrada para recibo en base de datos\r\n- Al de recibo se debe entregar un registro donde se muestren todo los productos\r\n- El producto debe tener una marca de identificación si es un producto refrigerante, o de bodega', '2019-10-09 03:42:02', '2019-10-09 03:56:37', NULL),
(2, 2, 2, '- El producto nuevo debe aumentar el inventario registrado e base de datos\r\n- El producto almacenado debe coincidir  con el recibido\r\n- El producto de refrigeración debe ir en nevera\r\n- El producto debe estar listo para ser expuesto en el punto', '2019-10-09 03:56:27', '2019-10-09 03:56:27', NULL),
(3, 2, 3, '- La venta debe quedar registrado código, precio, cantidad de producto, total.\r\n- Si es un domicilio, el producto debe ir sellado y entregado al domiciliario', '2019-10-09 03:59:04', '2019-10-09 03:59:04', NULL),
(4, 1, 4, '- El domiciliario debe ir a punto a recoger el domicilio\r\n- El domiciliario solo puede entregar producto al cliente y dirección registrada en sistema\r\n- El domiciliario deberá informar producto cancelado y devolver producto al punto de venta', '2019-10-09 04:01:46', '2019-10-09 04:01:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias_detalle`
--

CREATE TABLE `historias_detalle` (
  `id` int(11) NOT NULL,
  `id_historia` int(11) DEFAULT NULL,
  `tamaño` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esfuerzo_horas` int(11) DEFAULT NULL,
  `num_sprint` int(11) DEFAULT NULL,
  `num_release` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_desarrollador` int(11) DEFAULT NULL,
  `id_tester` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historias_usuarios`
--

CREATE TABLE `historias_usuarios` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `tipo_historia` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_historia` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_id` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `reque_interfaz` text COLLATE utf8mb4_unicode_ci,
  `dependencia` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historias_usuarios`
--

INSERT INTO `historias_usuarios` (`id`, `id_proyecto`, `tipo_historia`, `titulo_historia`, `roll_id`, `descripcion`, `reque_interfaz`, `dependencia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Funcional', 'Recivo de Mercancia', 7, 'La persona de Recibo necesita revivir y registrar mercancía de proveedores, para garantizar tener materia prima para la generación de productos que serán vendidos', 'imagen.jpg', NULL, '2019-10-09 03:32:23', '2019-10-09 03:41:44', NULL),
(2, 2, 'Funcional', 'Registro y almacen de producto', 4, 'El surtidor debe registrar y almacenar los productos que llegan al punto de venta, para poder tener organizados y listo los productos para poder vender', 'imagen2.jpg', 1, '2019-10-09 03:40:18', '2019-10-09 03:40:18', NULL),
(3, 2, 'Funcional', 'Venta de Producto', 5, 'El vendedor de producto requiere hacer una venta para poder generar ganancias al punto de venta', 'imagen3.jpg', 2, '2019-10-09 03:46:17', '2019-10-09 03:46:17', NULL),
(4, 2, 'Funcional', 'Reparto de producto', 6, 'Como Domiciliario requiere repartir un producto para consolidar una venta y generar una ganancia propia', 'imagen4.jpg', 3, '2019-10-09 03:49:20', '2019-10-09 03:49:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2019_10_06_001546_create_criterios_table', 1),
(17, '2019_10_06_001546_create_historias_detalle_table', 1),
(18, '2019_10_06_001546_create_historias_usuarios_table', 1),
(19, '2019_10_06_001546_create_proyectos_table', 1),
(20, '2019_10_06_001546_create_rolles_table', 1),
(21, '2019_10_06_001546_create_usuarios_table', 1),
(22, '2019_10_06_001548_add_foreign_keys_to_criterios_table', 1),
(23, '2019_10_06_001548_add_foreign_keys_to_historias_detalle_table', 1),
(24, '2019_10_06_001548_add_foreign_keys_to_historias_usuarios_table', 1),
(25, '2019_10_06_001548_add_foreign_keys_to_rolles_table', 1),
(26, '2019_10_06_001548_add_foreign_keys_to_usuarios_table', 1),
(30, '2019_10_06_225539_create_password_resets_table', 0),
(33, '2019_10_06_225539_create_users_table', 0),
(42, '2019_10_06_225539_create_criterios_table', 2),
(43, '2019_10_06_225539_create_historias_detalle_table', 2),
(44, '2019_10_06_225539_create_historias_usuarios_table', 2),
(45, '2019_10_06_225539_create_proyectos_table', 2),
(46, '2019_10_06_225539_create_rolles_table', 2),
(47, '2019_10_06_225539_create_usuarios_table', 2),
(48, '2019_10_06_225541_add_foreign_keys_to_criterios_table', 2),
(49, '2019_10_06_225541_add_foreign_keys_to_historias_detalle_table', 2),
(50, '2019_10_06_225541_add_foreign_keys_to_historias_usuarios_table', 2),
(51, '2019_10_06_225541_add_foreign_keys_to_rolles_table', 2),
(52, '2019_10_06_225541_add_foreign_keys_to_usuarios_table', 2),
(56, '2019_10_08_215613_create_password_resets_table', 0),
(59, '2019_10_08_215613_create_users_table', 0),
(66, '2014_10_12_000000_create_users_table', 3),
(67, '2014_10_12_100000_create_password_resets_table', 3),
(68, '2019_10_08_215613_create_criterios_table', 3),
(69, '2019_10_08_215613_create_historias_detalle_table', 3),
(70, '2019_10_08_215613_create_historias_usuarios_table', 3),
(71, '2019_10_08_215613_create_proyectos_table', 3),
(72, '2019_10_08_215613_create_rolles_table', 3),
(73, '2019_10_08_215613_create_usuarios_table', 3),
(74, '2019_10_08_215615_add_foreign_keys_to_criterios_table', 3),
(75, '2019_10_08_215615_add_foreign_keys_to_historias_detalle_table', 3),
(76, '2019_10_08_215615_add_foreign_keys_to_historias_usuarios_table', 3),
(77, '2019_10_08_215615_add_foreign_keys_to_rolles_table', 3),
(78, '2019_10_08_215615_add_foreign_keys_to_usuarios_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Domicity', '2019-10-09 03:08:41', '2019-10-09 03:08:52', NULL),
(2, 'Yutcomidas', '2019-10-09 03:08:57', '2019-10-09 03:08:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolles`
--

CREATE TABLE `rolles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rolles`
--

INSERT INTO `rolles` (`id`, `nombre`, `id_proyecto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cajero', 1, '2019-10-09 03:10:41', '2019-10-09 03:10:41', NULL),
(2, 'Despachador', 1, '2019-10-09 03:10:51', '2019-10-09 03:10:51', NULL),
(3, 'Mensajero', 1, '2019-10-09 03:11:01', '2019-10-09 03:11:01', NULL),
(4, 'Surtidor', 2, '2019-10-09 03:11:37', '2019-10-09 03:11:37', NULL),
(5, 'Vendedor', 2, '2019-10-09 03:11:46', '2019-10-09 03:11:46', NULL),
(6, 'Domiciliario', 2, '2019-10-09 03:12:02', '2019-10-09 03:12:57', NULL),
(7, 'Recivo', 2, '2019-10-09 03:15:59', '2019-10-09 03:15:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Camilo Andres Camargo Cardenas', 'admin@mail.com', NULL, '$2y$10$8yQXgCP2P/218QaZWT01z.DvGVGNTOg9BYTfJLQxWpkk6aSbbQ7vm', NULL, '2019-10-09 03:06:54', '2019-10-09 03:06:54', NULL),
(2, 'Juan David Dominguez', 'admin1@mail.com', NULL, '$2y$10$8yQXgCP2P/218QaZWT01z.DvGVGNTOg9BYTfJLQxWpkk6aSbbQ7vm', NULL, '2019-10-09 04:47:09', '2019-10-09 04:47:09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `operatividad` tinyint(1) DEFAULT NULL,
  `roll_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_id`, `operatividad`, `roll_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 6, '2019-10-09 06:12:31', '2019-10-09 07:45:29', NULL),
(2, 2, 2, 2, '2019-10-09 07:45:45', '2019-10-09 07:45:53', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_historia` (`id_historia`);

--
-- Indices de la tabla `historias_detalle`
--
ALTER TABLE `historias_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_historia` (`id_historia`);

--
-- Indices de la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `roll_id` (`roll_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rolles`
--
ALTER TABLE `rolles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roll_id` (`roll_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historias_detalle`
--
ALTER TABLE `historias_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rolles`
--
ALTER TABLE `rolles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD CONSTRAINT `criterios_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `criterios_ibfk_2` FOREIGN KEY (`id_historia`) REFERENCES `historias_usuarios` (`id`);

--
-- Filtros para la tabla `historias_detalle`
--
ALTER TABLE `historias_detalle`
  ADD CONSTRAINT `historias_detalle_ibfk_1` FOREIGN KEY (`id_historia`) REFERENCES `historias_usuarios` (`id`);

--
-- Filtros para la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  ADD CONSTRAINT `historias_usuarios_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `historias_usuarios_ibfk_3` FOREIGN KEY (`roll_id`) REFERENCES `rolles` (`id`);

--
-- Filtros para la tabla `rolles`
--
ALTER TABLE `rolles`
  ADD CONSTRAINT `rolles_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`roll_id`) REFERENCES `rolles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
