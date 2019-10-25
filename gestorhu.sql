-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 23:40:24
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
(1, 1, 1, '-Solo se debe recibir los producto que indique el manifiesto de recibo\r\n-Los productos que requieren refrigeración debe ir en la CAVA\r\n-Los productos debe rotar dejando abajo los producto mas nuevo y dejando encima y a la mano los producto con fecha mas reciente para su vencimiento', '2019-10-25 21:34:08', '2019-10-25 21:34:08', NULL),
(2, 1, 2, '-Solo se debe  procurar surtir mercancía con fecha mas próxima a vencimiento\r\n-Se debe garantizar no dejar huecos en puntos de exhibición', '2019-10-25 21:35:36', '2019-10-25 21:35:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salario` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `id_roll` int(11) DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `cedula`, `nombre`, `salario`, `Estado`, `id_roll`, `id_proyecto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1013456789, 'Juan  Carlos Sanchez', '1200000', 1, 1, 1, '2019-10-25 21:39:23', '2019-10-25 21:39:23', NULL);

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

--
-- Volcado de datos para la tabla `historias_detalle`
--

INSERT INTO `historias_detalle` (`id`, `id_historia`, `tamaño`, `esfuerzo_horas`, `num_sprint`, `num_release`, `id_usuario`, `id_desarrollador`, `id_tester`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'S', 16, 1, 1, 4, 1, 2, 2, '2019-10-25 21:38:30', '2019-10-25 21:38:30', NULL),
(2, 2, 'S', 16, 2, 1, 4, 3, 2, 1, '2019-10-25 21:38:59', '2019-10-25 21:38:59', NULL);

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
(1, 1, 'Funcional', 'Almacenamiento de Mercancía', 1, 'Como Bodeguero requiero recibir, organizar y almacenar los productos en las diferentes bodegas, para tener mercancía lista por si se necesita surtir punto de venta', 'RequeInterfaz/1/lpd4kZo8tQ783nPQGa6iOuv8aC28lVZCUhFbgXCo.docx', NULL, '2019-10-25 21:25:59', '2019-10-25 21:25:59', NULL),
(2, 1, 'Funcional', 'Surtir Punto de Venta', 2, 'Como Surtidor requiero poner en exhibición los producto de bodega para poder mostrar al publico los producto que se encuentran a la venta en el punto o sede del negocio', NULL, 1, '2019-10-25 21:32:08', '2019-10-25 21:32:08', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_20_192907_create_criterios_table', 1),
(4, '2019_10_20_192907_create_empleados_table', 1),
(5, '2019_10_20_192907_create_historias_detalle_table', 1),
(6, '2019_10_20_192907_create_historias_usuarios_table', 1),
(7, '2019_10_20_192907_create_proyectos_table', 1),
(8, '2019_10_20_192907_create_rolles_table', 1),
(9, '2019_10_20_192907_create_usuarios_table', 1),
(10, '2019_10_20_192909_add_foreign_keys_to_criterios_table', 1),
(11, '2019_10_20_192909_add_foreign_keys_to_empleados_table', 1),
(12, '2019_10_20_192909_add_foreign_keys_to_historias_detalle_table', 1),
(13, '2019_10_20_192909_add_foreign_keys_to_historias_usuarios_table', 1),
(14, '2019_10_20_192909_add_foreign_keys_to_rolles_table', 1);

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
(1, 'Yutcomidas', '2019-10-25 21:06:25', '2019-10-25 21:06:25', NULL),
(2, 'Domicity', '2019-10-25 21:06:31', '2019-10-25 21:06:31', NULL),
(3, 'Domicilios.com', '2019-10-25 21:06:47', '2019-10-25 21:06:47', NULL),
(4, 'D1', '2019-10-25 21:06:55', '2019-10-25 21:06:55', NULL);

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
(1, 'Bodeguero', 1, '2019-10-25 21:13:42', '2019-10-25 21:29:56', NULL),
(2, 'Surtidor', 1, '2019-10-25 21:14:36', '2019-10-25 21:14:36', NULL),
(3, 'Vendedor', 1, '2019-10-25 21:14:52', '2019-10-25 21:14:52', NULL),
(4, 'Cajero', 1, '2019-10-25 21:15:03', '2019-10-25 21:15:03', NULL),
(5, 'Empacador', 1, '2019-10-25 21:15:17', '2019-10-25 21:15:17', NULL),
(6, 'Domiciliario', 1, '2019-10-25 21:15:34', '2019-10-25 21:15:34', NULL),
(7, 'Asesor', 2, '2019-10-25 21:20:07', '2019-10-25 21:20:07', NULL),
(8, 'Despachador', 2, '2019-10-25 21:20:19', '2019-10-25 21:20:19', NULL),
(9, 'Mensajero', 2, '2019-10-25 21:20:33', '2019-10-25 21:20:33', NULL),
(10, 'Recibo', 4, '2019-10-25 21:20:51', '2019-10-25 21:20:59', NULL),
(11, 'Punto Tienda', 4, '2019-10-25 21:21:16', '2019-10-25 21:21:16', NULL),
(12, 'Cajero Empacador', 4, '2019-10-25 21:21:33', '2019-10-25 21:21:33', NULL),
(13, 'Cordinador', 3, '2019-10-25 21:21:54', '2019-10-25 21:21:54', NULL),
(14, 'Repartidor', 3, '2019-10-25 21:22:08', '2019-10-25 21:22:08', NULL);

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
(1, 'Camilo Andres Camargo Cardenas', 'admin@mail.com', NULL, '$2y$10$.z08r21wSm0OSDDtTJEzIu44q4em8dSnls.7j7Mj1EfezjAxYqxOO', NULL, '2019-10-25 20:20:52', '2019-10-25 20:20:52', NULL),
(2, 'Lina Maria Martinez', 'admin1@mail.com', NULL, '$2y$10$W0Y4DFBJc8XkAOKFYCrB6OsEIr5QtkFL92zptnQpV0OSSRAZgnb46', NULL, '2019-10-25 20:22:22', '2019-10-25 20:22:22', NULL),
(3, 'Juan David Dominguez', 'admin2@mail.com', NULL, '$2y$10$099F0GSwi1HNUqtQr7IN7.4E0SxTK0ciZWH2a8pTH57gMXqQAly/G', NULL, '2019-10-25 20:23:24', '2019-10-25 20:23:24', NULL),
(4, 'Sebastiano Barroco', 'admin3@mail.com', NULL, '$2y$10$WZPJx88gabeQSK0iqvEN4u63bGKY71ShZamq5MKH7Em3pohnM.QKi', NULL, '2019-10-25 21:05:07', '2019-10-25 21:05:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `operatividad` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_id`, `operatividad`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2019-10-25 21:05:26', '2019-10-25 21:05:26', NULL),
(2, 2, 2, '2019-10-25 21:05:37', '2019-10-25 21:06:07', NULL),
(3, 3, 1, '2019-10-25 21:05:45', '2019-10-25 21:06:15', NULL),
(4, 4, 1, '2019-10-25 21:05:52', '2019-10-25 21:05:52', NULL);

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
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_roll` (`id_roll`),
  ADD KEY `id_proyecto` (`id_proyecto`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historias_detalle`
--
ALTER TABLE `historias_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historias_usuarios`
--
ALTER TABLE `historias_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rolles`
--
ALTER TABLE `rolles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`id_roll`) REFERENCES `rolles` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
