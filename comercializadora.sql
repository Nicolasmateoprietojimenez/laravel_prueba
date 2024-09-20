-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2024 a las 01:35:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercializadora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_19_231902_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `pais_origen` varchar(255) NOT NULL,
  `presentacion` varchar(255) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `pais_origen`, `presentacion`, `precio`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Gas', 'gas pequeño', 'Venezuela', 'Unidad', 50000.00, 70, '2024-09-20 04:32:01', '2024-09-20 04:32:01'),
(2, 'Teclado Mecánico', 'Teclado mecánico RGB para gaming', 'China', 'Caja', 80.50, 50, NULL, NULL),
(3, 'Mouse Inalámbrico', 'Mouse inalámbrico con sensor óptico', 'Estados Unidos', 'Blister', 25.99, 120, NULL, NULL),
(4, 'Monitor 24 pulgadas', 'Monitor LED de 24 pulgadas con resolución Full HD', 'Corea del Sur', 'Caja', 150.00, 30, NULL, NULL),
(5, 'Auriculares Bluetooth', 'Auriculares inalámbricos con cancelación de ruido', 'Japón', 'Caja', 60.00, 85, NULL, NULL),
(6, 'Laptop Ultrabook', 'Laptop ultradelgada con procesador Intel i7', 'China', 'Caja', 1200.00, 15, NULL, NULL),
(7, 'Memoria USB 64GB', 'Memoria USB de 64GB con alta velocidad', 'Taiwán', 'Blister', 10.50, 300, NULL, NULL),
(8, 'Disco Duro Externo 1TB', 'Disco duro externo con USB 3.0 de 1TB', 'Tailandia', 'Caja', 75.00, 60, NULL, NULL),
(9, 'Cámara Web 1080p', 'Cámara web Full HD con micrófono integrado', 'Estados Unidos', 'Caja', 45.99, 100, NULL, NULL),
(10, 'Router Wi-Fi 6', 'Router inalámbrico con soporte Wi-Fi 6', 'Corea del Sur', 'Caja', 99.99, 40, NULL, NULL),
(11, 'Tarjeta Gráfica', 'Tarjeta gráfica para gaming con 8GB de VRAM', 'China', 'Caja', 450.00, 20, NULL, NULL),
(12, 'Impresora Multifuncional', 'Impresora multifuncional con escáner y copiadora', 'México', 'Caja', 120.00, 25, NULL, NULL),
(13, 'Cable HDMI 2m', 'Cable HDMI de 2 metros compatible con 4K', 'China', 'Blister', 12.99, 500, NULL, NULL),
(14, 'Smartwatch', 'Reloj inteligente con monitoreo de salud', 'Estados Unidos', 'Caja', 199.99, 60, NULL, NULL),
(15, 'Tablet 10 pulgadas', 'Tablet de 10 pulgadas con Android', 'India', 'Caja', 300.00, 35, NULL, NULL),
(16, 'Altavoz Bluetooth', 'Altavoz portátil con Bluetooth y batería de larga duración', 'Brasil', 'Caja', 75.00, 150, NULL, NULL),
(17, 'SSD 500GB', 'Disco SSD de 500GB con velocidad de lectura alta', 'Japón', 'Caja', 85.00, 90, NULL, NULL),
(18, 'Smartphone 128GB', 'Teléfono inteligente con 128GB de almacenamiento', 'Corea del Sur', 'Caja', 800.00, 45, NULL, NULL),
(19, 'Cargador Rápido USB-C', 'Cargador rápido USB-C compatible con múltiples dispositivos', 'China', 'Blister', 19.99, 250, NULL, NULL),
(20, 'Micrófono USB', 'Micrófono de condensador con conexión USB', 'Estados Unidos', 'Caja', 60.00, 70, NULL, NULL),
(21, 'Cámara de Seguridad', 'Cámara de seguridad con visión nocturna', 'Taiwán', 'Caja', 150.00, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
