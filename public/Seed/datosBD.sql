INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00');






INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES
(1, 0, 50000, 1, NULL, NULL),
(2, 50000, 100000, 1, NULL, NULL),
(3, 100000, 200000, 1, NULL, NULL),
(4, 200000, 500000, 1, NULL, NULL),
(5, 500000, 1000000, 1, NULL, NULL),
(6, 1000000, 5000000, 1, NULL, NULL),
(7, 5000000, -1, 1, NULL, NULL);


INSERT INTO `tipo_anuncio` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (NULL, 'Venta', 'Artículos dirigidos a la venta, con una compensación monetaria', NULL, NULL), (NULL, 'Trueque', 'Artículo dirigido al cambio, con una compensación de un objeto de interés o de igual valor', NULL, NULL);


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `icon`, `foto`, `color`, `orden`, `orden_populares`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', '/uploads/iconos/php575B.tmp.svg', NULL, 'palevioletred', 12, NULL, 1, '2020-12-18 12:35:54', '2021-01-08 11:41:33'),
(2, 'Propiedades', 'Propiedades', '/uploads/iconos/phpA9D1.tmp.svg', NULL, 'palevioletred', 17, NULL, 1, '2020-12-18 12:36:07', '2021-01-08 11:43:00'),
(3, 'Tecnología', 'Tecnología', '/uploads/iconos/phpB987.tmp.svg', '/uploads/categorias/php6116.tmp.svg', 'palevioletred', 1, 4, 1, '2020-12-18 12:36:15', '2021-02-18 06:02:51'),
(4, 'Hogar', 'Hogar', '/uploads/iconos/phpB156.tmp.svg', NULL, 'palevioletred', 5, NULL, 1, '2020-12-18 12:36:23', '2021-01-08 11:39:45'),
(5, 'Servicios', 'Servicios', '/uploads/iconos/php8581.tmp.svg', NULL, 'palevioletred', 13, NULL, 1, '2020-12-18 12:36:30', '2021-01-08 11:41:45'),
(6, 'Deportes', 'Deportes', '/uploads/iconos/php7761.tmp.svg', '/uploads/categorias/php8A69.tmp.svg', 'palevioletred', 9, 2, 1, '2020-12-18 12:36:39', '2021-02-18 06:03:01'),
(7, 'Electrodomésticos', 'Electrodomésticos', '/uploads/iconos/php2DD9.tmp.svg', NULL, 'palevioletred', 11, NULL, 1, '2020-12-18 12:36:47', '2021-01-08 11:41:23'),
(8, 'Moda - Belleza', 'Moda - Belleza', '/uploads/iconos/php7C1C.tmp.svg', NULL, 'palevioletred', 4, NULL, 1, '2020-12-18 12:36:54', '2021-01-08 11:39:32'),
(9, 'Consolas y videojuegos', 'Consolas y videojuegos', '/uploads/iconos/php8CC5.tmp.svg', '/uploads/categorias/phpE04B.tmp.svg', 'palevioletred', 8, 1, 1, '2020-12-18 12:37:02', '2021-02-18 06:03:23'),
(10, 'Mascotas', 'Mascotas', '/uploads/iconos/phpA726.tmp.svg', NULL, 'palevioletred', 2, NULL, 1, '2020-12-18 12:37:15', '2021-01-08 11:38:37'),
(11, 'Máquinas - Herramientas', 'Máquinas - Herramientas', '/uploads/iconos/php43.tmp.svg', NULL, 'palevioletred', 3, NULL, 1, '2020-12-18 12:37:25', '2021-01-08 11:39:00'),
(12, 'Juegos y bebés', 'Juegos y bebés', '/uploads/iconos/phpBDF7.tmp.svg', NULL, 'palevioletred', 14, NULL, 1, '2020-12-18 12:37:33', '2021-01-08 11:42:00'),
(13, 'Música, cine y arte', 'Música, cine y arte', '/uploads/iconos/php4DC7.tmp.svg', NULL, 'palevioletred', 7, NULL, 1, '2020-12-18 12:37:40', '2021-01-08 11:40:25'),
(14, 'Libros', 'Libros', '/uploads/iconos/phpD7C8.tmp.svg', '/uploads/categorias/phpAB7.tmp.svg', 'palevioletred', 18, 3, 1, '2020-12-18 12:37:47', '2021-02-18 06:03:34'),
(15, 'Salud y terapia', 'Salud y terapia', '/uploads/iconos/php8149.tmp.svg', NULL, 'palevioletred', 16, NULL, 1, '2020-12-18 12:37:55', '2021-01-08 11:42:49'),
(16, 'Útiles escolares', 'Útiles escolares', '/uploads/iconos/phpFBAE.tmp.svg', NULL, 'palevioletred', 6, NULL, 1, '2020-12-18 12:38:02', '2021-01-08 11:40:05'),
(17, 'Bonos y suscripciones', 'Bonos y suscripciones', '/uploads/iconos/phpF5F0.tmp.svg', NULL, 'palevioletred', 10, NULL, 1, '2020-12-18 12:38:09', '2021-01-08 11:41:08'),
(18, 'Instrumentos musicales', 'Instrumentos musicales', '/uploads/iconos/php3CB.tmp.svg', NULL, 'palevioletred', 15, NULL, 1, '2020-12-18 12:38:18', '2021-01-08 11:42:17'),
(19, 'Recibo Propuestas', 'Recibo Propuestas', NULL, NULL, 'palevioletred', NULL, NULL, 0, '2020-12-18 12:38:18', '2021-01-08 11:42:17');


INSERT INTO `sub_categorias` (`id`, `nombre`, `descripcion`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Carros', 'Carros', 1, '2020-12-17 22:38:45', '2020-12-17 22:38:45'),
(2, 'Motos', 'Motos', 1, '2020-12-17 22:38:52', '2020-12-17 22:38:52'),
(3, 'Accesorios para carros', 'Accesorios para carros', 1, '2020-12-17 22:38:57', '2020-12-17 22:38:57'),
(4, 'Accesorios para motos', 'Accesorios para motos', 1, '2020-12-17 22:39:05', '2020-12-17 22:39:05'),
(5, 'Patinetas eléctricas', 'Patinetas eléctricas', 1, '2020-12-17 22:39:12', '2020-12-17 22:39:12'),
(6, 'Otros Vehículos', 'Otros Vehículos', 1, '2020-12-17 22:39:22', '2020-12-17 22:39:22'),
(7, 'Apartamentos', 'Apartamentos', 2, '2020-12-17 22:40:27', '2020-12-17 22:40:27'),
(8, 'Casas', 'Casas', 2, '2020-12-17 22:40:33', '2020-12-17 22:40:33'),
(9, 'Inmuebles recreacionales', 'Inmuebles recreacionales', 2, '2020-12-17 22:40:39', '2020-12-17 22:40:39'),
(10, 'Locales comerciales', 'Locales comerciales', 2, '2020-12-17 22:40:46', '2020-12-17 22:40:46'),
(11, 'Lotes', 'Lotes', 2, '2020-12-17 22:40:52', '2020-12-17 22:40:52'),
(12, 'Otros', 'Otros', 2, '2020-12-17 22:41:00', '2020-12-17 22:41:00'),
(13, 'Celulares', 'Celulares', 3, '2020-12-17 22:41:13', '2020-12-17 22:41:13'),
(14, 'Accesorios tecnológicos', 'Accesorios tecnológicos', 3, '2020-12-17 22:41:22', '2020-12-17 22:41:22'),
(15, 'Tablets', 'Tablets', 3, '2020-12-17 22:41:30', '2020-12-17 22:41:30'),
(16, 'Televisores', 'Televisores', 3, '2020-12-17 22:41:37', '2020-12-17 22:41:37'),
(17, 'Computadores y portátiles', 'Computadores y portátiles', 3, '2020-12-17 22:41:43', '2020-12-17 22:41:43'),
(18, 'Parlantes', 'Parlantes', 3, '2020-12-17 22:41:50', '2020-12-17 22:41:50'),
(19, 'Proyectores', 'Proyectores', 3, '2020-12-17 22:41:57', '2020-12-17 22:41:57'),
(20, 'Cámaras', 'Cámaras', 3, '2020-12-17 22:42:05', '2020-12-17 22:42:05'),
(21, 'Reproductores de música', 'Reproductores de música', 3, '2020-12-17 22:42:11', '2020-12-17 22:42:11'),
(22, 'Drones', 'Drones', 3, '2020-12-17 22:42:18', '2020-12-17 22:42:18'),
(24, 'Otros', 'Otros', 3, '2020-12-17 22:42:32', '2020-12-17 22:42:32'),
(25, 'Muebles', 'Muebles', 4, '2020-12-17 22:42:57', '2020-12-17 22:42:57'),
(26, 'Decoración', 'Decoración', 4, '2020-12-17 22:43:07', '2020-12-17 22:43:07'),
(27, 'Cocina y mesa', 'Cocina y mesa', 4, '2020-12-17 22:43:14', '2020-12-17 22:43:14'),
(28, 'Jardín y exteriores', 'Jardín y exteriores', 4, '2020-12-17 22:43:20', '2020-12-17 22:43:20'),
(29, 'Accesorios', 'Accesorios', 4, '2020-12-17 22:43:34', '2020-12-17 22:43:34'),
(30, 'Baño', 'Baño', 4, '2020-12-17 22:43:41', '2020-12-17 22:43:41'),
(31, 'Otros', 'Otros', 4, '2020-12-17 22:43:49', '2020-12-17 22:43:49'),
(32, 'Bicicletas', 'Bicicletas', 6, '2020-12-17 22:44:05', '2020-12-17 22:44:05'),
(33, 'Gimnasio', 'Gimnasio', 6, '2020-12-17 22:44:10', '2020-12-17 22:44:10'),
(34, 'Patinaje', 'Patinaje', 6, '2020-12-17 22:44:17', '2020-12-17 22:44:17'),
(35, 'Fútbol', 'Fútbol', 6, '2020-12-17 22:44:23', '2020-12-17 22:44:23'),
(36, 'Tenis', 'Tenis', 6, '2020-12-17 22:44:31', '2020-12-17 22:44:31'),
(37, 'Baseball', 'Baseball', 6, '2020-12-17 22:44:37', '2020-12-17 22:44:37'),
(38, 'Accesorios', 'Accesorios', 6, '2020-12-17 22:44:43', '2020-12-17 22:44:43'),
(39, 'Otros deportes', 'Otros deportes', 6, '2020-12-17 22:44:51', '2020-12-17 22:44:51'),
(40, 'Cocina', 'Cocina', 7, '2020-12-17 22:45:02', '2020-12-17 22:45:02'),
(41, 'Neveras', 'Neveras', 7, '2020-12-17 22:45:09', '2020-12-17 22:45:09'),
(42, 'Lavadoras - Secadoras', 'Lavadoras - Secadoras', 7, '2020-12-17 22:45:16', '2020-12-17 22:45:16'),
(43, 'Aires acondicionados', 'Aires acondicionados', 7, '2020-12-17 22:45:22', '2020-12-17 22:45:22'),
(44, 'Ventiladores', 'Ventiladores', 7, '2020-12-17 22:45:28', '2020-12-17 22:45:28'),
(45, 'Calefacción', 'Calefacción', 7, '2020-12-17 22:45:37', '2020-12-17 22:45:37'),
(46, 'Otros electrodomésticos', 'Otros electrodomésticos', 7, '2020-12-17 22:45:42', '2020-12-17 22:45:42'),
(47, 'Ropa', 'Ropa', 8, '2020-12-17 22:46:00', '2020-12-17 22:46:00'),
(48, 'Zapatos', 'Zapatos', 8, '2020-12-17 22:46:06', '2020-12-17 22:46:06'),
(49, 'Accesorios de belleza', 'Accesorios de belleza', 8, '2020-12-17 22:46:16', '2020-12-17 22:46:16'),
(50, 'Accesorios de vestir', 'Accesorios de vestir', 8, '2020-12-17 22:46:22', '2020-12-17 22:46:22'),
(51, 'Otros', 'Otros', 8, '2020-12-17 22:46:28', '2020-12-17 22:46:28'),
(52, 'Consolas', 'Consolas', 9, '2020-12-17 22:46:45', '2020-12-17 22:46:45'),
(53, 'Video juegos', 'Video juegos', 9, '2020-12-17 22:46:52', '2020-12-17 22:46:52'),
(54, 'Accesorios - Otros', 'Accesorios - Otros', 9, '2020-12-17 22:46:59', '2020-12-17 22:46:59'),
(55, 'Perros', 'Perros', 10, '2020-12-17 22:47:11', '2020-12-17 22:47:11'),
(56, 'Gatos', 'Gatos', 10, '2020-12-17 22:47:16', '2020-12-17 22:47:16'),
(57, 'Otras mascotas', 'Otras mascotas', 10, '2020-12-17 22:47:21', '2020-12-17 22:47:21'),
(58, 'Accesorios', 'Accesorios', 10, '2020-12-17 22:47:27', '2020-12-17 22:47:27'),
(59, 'Máquinas', 'Máquinas', 11, '2020-12-17 22:47:42', '2020-12-17 22:47:42'),
(60, 'Herramientas', 'Herramientas', 11, '2020-12-17 22:47:48', '2020-12-17 22:47:48'),
(61, 'Cunas', 'Cunas', 12, '2020-12-17 22:47:59', '2020-12-17 22:47:59'),
(62, 'Coches', 'Coches', 12, '2020-12-17 22:48:04', '2020-12-17 22:48:04'),
(63, 'Juegos de mesa', 'Juegos de mesa', 12, '2020-12-17 22:48:11', '2020-12-17 22:48:11'),
(64, 'Juguetes', 'Juguetes', 12, '2020-12-17 22:48:16', '2020-12-17 22:48:16'),
(65, 'Ropa', 'Ropa', 12, '2020-12-17 22:48:22', '2020-12-17 22:48:22'),
(66, 'Calzado', 'Calzado', 12, '2020-12-17 22:48:29', '2020-12-17 22:48:29'),
(67, 'Otros', 'Otros', 12, '2020-12-17 22:48:35', '2020-12-17 22:48:35'),
(68, 'CDs', 'CDs', 13, '2020-12-17 22:48:48', '2020-12-17 22:48:48'),
(69, 'DVDs', 'DVDs', 13, '2020-12-17 22:48:54', '2020-12-17 22:48:54'),
(70, 'Arte - Antigüedades', 'Arte - Antigüedades', 13, '2020-12-17 22:49:03', '2020-12-17 22:49:03'),
(71, 'Manualidades', 'Manualidades', 13, '2020-12-17 22:49:09', '2020-12-17 22:49:09'),
(72, 'Otros', 'Otros', 13, '2020-12-17 22:49:16', '2020-12-17 22:49:16'),
(73, 'Recibo Propuestas', 'Recibo Propuestas', 19, '2020-12-17 22:49:16', '2020-12-17 22:49:16'),
(74, 'Bonos y suscripciones', 'Bonos y suscripciones', 17, '2021-02-04 13:29:57', '2021-02-04 13:29:57'),
(75, 'Instrumentos musicales', 'Instrumentos musicales', 18, '2021-02-04 13:30:05', '2021-02-04 13:30:05'),
(76, 'Libros', 'Libros', 14, '2021-02-04 13:30:24', '2021-02-04 13:30:24'),
(77, 'Salud y terapia', 'Salud y terapia', 15, '2021-02-04 13:32:07', '2021-02-04 13:32:07'),
(78, 'Útiles escolares', 'Útiles escolares', 16, '2021-02-04 13:32:18', '2021-02-04 13:32:18'),
(79, 'Servicios', 'Servicios', 5, '2021-02-04 13:32:42', '2021-02-04 13:32:42');


INSERT INTO `condicion` (`id`, `nombre`, `created_at`, `updated_at`) VALUES (NULL, 'Nuevo', NULL, NULL), (NULL, 'Como nuevo', NULL, NULL), (NULL, 'Bueno', NULL, NULL), (NULL, 'Aceptable', NULL, NULL), (NULL, 'Lo ha dado todo', NULL, NULL);



INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `sub_categoria_id`, `tipo_id`, `municipio_id`, `departamento_id`, `precio`, `condicion_id`, `categoria1`, `subCategoria1`, `categoria2`, `subCategoria2`, `categoria3`, `subCategoria3`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Camara cannon 23 MP', 'en perfecto estado', 3, 20, 2, 733, 17, 2, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, '2021-01-07 18:12:52', '2021-01-07 18:12:52'),
(2, 2, 'audifonos genericos', 'estado optimo', 3, 14, 2, 341, 6, 1, NULL, 13, 68, NULL, NULL, NULL, NULL, 1, '2021-01-07 18:15:17', '2021-01-07 18:15:17'),
(3, 2, 'Bateria GGHHSS', 'Nueva en su paquete, se cambia por no usar', 3, 13, 2, 710, 16, 3, NULL, 12, 63, NULL, NULL, NULL, NULL, 1, '2021-01-07 18:19:11', '2021-01-07 18:19:11');


INSERT INTO `fotos` (`id`, `ruta`, `producto_id`, `principal`, `created_at`, `updated_at`) VALUES
(1, '/uploads/productos/phpD53E.tmp.png', 1, 0, '2021-01-07 18:12:54', '2021-01-07 18:12:54'),
(2, '/uploads/productos/php67F0.tmp.png', 2, 0, '2021-01-07 18:15:18', '2021-01-07 18:15:18'),
(3, '/uploads/productos/php5E98.tmp.png', 3, 0, '2021-01-07 18:19:11', '2021-01-07 18:19:11');


