INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00');






INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);

INSERT INTO `tipo_anuncio` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (NULL, 'Venta', 'Artículos dirigidos a la venta, con una compensación monetaria', NULL, NULL), (NULL, 'Trueque', 'Artículo dirigido al cambio, con una compensación de un objeto de interés o de igual valor', NULL, NULL);


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', '/uploads/categorias/php8554.tmp.png', '2020-12-01 02:12:12', '2020-12-01 02:12:12'),
(2, 'Propiedades - Inmuebles', 'Propiedades - Inmuebles', '/uploads/categorias/phpCE84.tmp.jpg', '2020-12-01 02:12:31', '2020-12-01 02:12:31'),
(3, 'Tecnología', 'Tecnología', '/uploads/categorias/php61EB.tmp.png', '2020-12-01 02:13:08', '2020-12-01 02:13:08'),
(4, 'Muebles - Hogar - Jardin', 'Muebles - Hogar - Jardin', '/uploads/categorias/phpA445.tmp.jpg', '2020-12-01 02:13:25', '2020-12-01 02:13:25'),
(5, 'Deportes - Bicicletas', 'Deportes - Bicicletas', '/uploads/categorias/php19E3.tmp.png', '2020-12-01 02:13:56', '2020-12-01 02:13:56'),
(6, 'Electrodomésticos', 'Electrodomésticos', '/uploads/categorias/php5DB3.tmp.jpg', '2020-12-01 02:14:13', '2020-12-01 02:14:13'),
(7, 'Moda - Belleza', 'Moda - Belleza', '/uploads/categorias/phpBEFF.tmp.png', '2020-12-01 02:14:38', '2020-12-01 02:14:38');

INSERT INTO `sub_categorias` (`id`, `nombre`, `descripcion`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Carros', NULL, 1, '2020-12-01 02:14:52', '2020-12-01 02:14:52'),
(2, 'Motos', NULL, 1, '2020-12-01 02:14:59', '2020-12-01 02:14:59'),
(3, 'Accesorios para carros', NULL, 1, '2020-12-01 02:15:06', '2020-12-01 02:15:06'),
(4, 'Accesorios para motos', NULL, 1, '2020-12-01 02:15:12', '2020-12-01 02:15:12'),
(5, 'Camiones - Vehículos Comerciales', NULL, 1, '2020-12-01 02:15:17', '2020-12-01 02:15:17'),
(6, 'Barcos - Aviones', NULL, 1, '2020-12-01 02:15:23', '2020-12-01 02:15:23'),
(7, 'Otros Vehículos', NULL, 1, '2020-12-01 02:15:27', '2020-12-01 02:15:27'),
(8, 'Apartamentos - Casas - VENTA', NULL, 2, '2020-12-01 02:15:58', '2020-12-01 02:15:58'),
(9, 'Apartamentos - Casas - ARRIENDO', NULL, 2, '2020-12-01 02:16:04', '2020-12-01 02:16:04'),
(10, 'Alojamiento vacacional - ARRIENDO', NULL, 2, '2020-12-01 02:16:10', '2020-12-01 02:16:10'),
(11, 'Inmuebles comerciales - VENTA', NULL, 2, '2020-12-01 02:16:16', '2020-12-01 02:16:16'),
(12, 'Inmuebles comerciales - ARRIENDO', NULL, 2, '2020-12-01 02:16:21', '2020-12-01 02:16:21'),
(13, 'Lotes - VENTA', NULL, 2, '2020-12-01 02:16:33', '2020-12-01 02:16:33'),
(14, 'VIVIENDA NUEVA', NULL, 2, '2020-12-01 02:16:39', '2020-12-01 02:16:39'),
(15, 'Teléfonos - Celulares', NULL, 3, '2020-12-01 02:16:57', '2020-12-01 02:16:57'),
(16, 'Tablets', NULL, 3, '2020-12-01 02:17:03', '2020-12-01 02:17:03'),
(17, 'Accesorios para celulares', NULL, 3, '2020-12-01 02:17:08', '2020-12-01 02:17:08'),
(18, 'Computadoras de escritorio', NULL, 3, '2020-12-01 02:17:18', '2020-12-01 02:17:18'),
(19, 'Accesorios - Componentes - Otros', NULL, 3, '2020-12-01 02:17:25', '2020-12-01 02:17:25'),
(20, 'Muebles', NULL, 4, '2020-12-01 02:17:43', '2020-12-01 02:17:43'),
(21, 'Almacenes - Oficinas', NULL, 4, '2020-12-01 02:17:51', '2020-12-01 02:17:51'),
(22, 'Decoración', NULL, 4, '2020-12-01 02:17:56', '2020-12-01 02:17:56'),
(23, 'Jardines - Exteriores', NULL, 4, '2020-12-01 02:18:03', '2020-12-01 02:18:03'),
(24, 'Accesorios - Otros', NULL, 4, '2020-12-01 02:18:08', '2020-12-01 02:18:08'),
(25, 'Bricolaje - Mejorar tu casa', NULL, 4, '2020-12-01 02:18:15', '2020-12-01 02:18:15'),
(26, 'Bicicletas - Ciclismo', NULL, 5, '2020-12-01 02:18:29', '2020-12-01 02:18:29'),
(27, 'Gimnasio - Fitness', NULL, 5, '2020-12-01 02:18:35', '2020-12-01 02:18:35'),
(28, 'Fútbol', NULL, 5, '2020-12-01 02:18:40', '2020-12-01 02:18:40'),
(29, 'Otros deportes - Equipos', NULL, 5, '2020-12-01 02:18:48', '2020-12-01 02:18:48'),
(30, 'Cocina', NULL, 6, '2020-12-01 02:19:17', '2020-12-01 02:19:17'),
(31, 'Neveras - Congeladores', NULL, 6, '2020-12-01 02:19:25', '2020-12-01 02:19:25'),
(32, 'Lavadoras - Secadoras', NULL, 6, '2020-12-01 02:19:30', '2020-12-01 02:19:30'),
(33, 'Aires acondicionados - Ventiladores', NULL, 6, '2020-12-01 02:19:38', '2020-12-01 02:19:38'),
(34, 'Calefacción', NULL, 6, '2020-12-01 02:19:44', '2020-12-01 02:19:44'),
(35, 'Otros electrodomésticos', NULL, 6, '2020-12-01 02:19:49', '2020-12-01 02:19:49'),
(36, 'Ropa', NULL, 7, '2020-12-01 02:20:25', '2020-12-01 02:20:25'),
(37, 'Belleza', NULL, 7, '2020-12-01 02:20:31', '2020-12-01 02:20:31'),
(38, 'Zapatos', NULL, 7, '2020-12-01 02:20:41', '2020-12-01 02:20:41'),
(39, 'Accesorios', NULL, 7, '2020-12-01 02:20:59', '2020-12-01 02:20:59');


INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `sub_categoria_id`, `tipo_id`, `municipio_id`, `departamento_id`, `precio`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Tensiómetro Digital De Muñeca', 'Excelente calidad garantizada', 3, 19, 1, 1, 44, '10000', 1, '2020-10-29 05:20:14', '2020-10-29 05:20:14'),
(4, 2, 'Volskwagen Escarabajo Sincrónico', 'Volkswagen año 69, en optimas condiciones, restaurado 100% con piezas originales Alemanas, juego de 5 cauchos nuevos, banda blanca farestone.', 1, 1, 2, 1, 41, '30000', 1, '2020-10-29 05:27:47', '2020-10-29 05:27:47'),
(5, 2, 'Cuadros Minimalistas Abstractos Modernos', '\"\"DECORA TU HOGAR\"\" CON \"BELLOS CUADROS DECORATIVOS CALIDAD AL MEJOR TRUEQUE\"\"', 4, 25, 1, 1, 13, '20000', 1, '2020-10-29 05:37:06', '2020-10-29 05:37:06'),
(6, 2, 'Yston Lente Mirror Para Natacion Adulto Ss99', 'LENTE MIRROR PARA NATACIÓN y TAPAOIDOS\r\nMarca: Yston\r\nTalla: Adulto\r\nColor: Aguamarina, Rosado, Azul Rey y Plateado.\r\n- Incluye tapaoidos\r\n- Cristal Mirror (Espejo)', 5, 29, 2, 1, 5, '10000', 1, '2020-10-29 05:40:14', '2020-10-29 05:40:14');


INSERT INTO `fotos` (`id`, `ruta`, `producto_id`, `principal`, `created_at`, `updated_at`) VALUES
(1, '\\uploads\\productos\\phpI4SOqU.webp', 2, 0, '2020-10-28 23:20:14', '2020-10-28 23:20:14'),
(2, '\\uploads\\productos\\php13xDof.webp', 2, 0, '2020-10-28 23:20:14', '2020-10-28 23:20:14'),
(3, '\\uploads\\productos\\phpIcEG8A.webp', 2, 0, '2020-10-28 23:20:14', '2020-10-28 23:20:14'),
(4, '\\uploads\\productos\\phpS38TPW.webp', 2, 0, '2020-10-28 23:20:14', '2020-10-28 23:20:14'),
(12, '\\uploads\\productos\\phpaDFkam.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(13, '\\uploads\\productos\\phpjkD4wM.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(14, '\\uploads\\productos\\php3blckj.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(15, '\\uploads\\productos\\phpYcVcwq.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(16, '\\uploads\\productos\\php8wDPx0.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(17, '\\uploads\\productos\\php3kMIMa.webp', 4, 0, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(18, '\\uploads\\productos\\phpxrShqv.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(19, '\\uploads\\productos\\phpconuRT.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(20, '\\uploads\\productos\\phpeGovGB.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(21, '\\uploads\\productos\\phpV2ku7l.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(22, '\\uploads\\productos\\phpK5ZcT4.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(23, '\\uploads\\productos\\phpK0qSiQ.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(24, '\\uploads\\productos\\php8wgdEA.webp', 5, 0, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(25, '\\uploads\\productos\\phpID6rt3.webp', 6, 0, '2020-10-28 23:40:14', '2020-10-28 23:40:14'),
(26, '\\uploads\\productos\\php9iBt1T.webp', 6, 0, '2020-10-28 23:40:14', '2020-10-28 23:40:14'),
(27, '\\uploads\\productos\\php4IJ8jm.webp', 6, 0, '2020-10-28 23:40:14', '2020-10-28 23:40:14'),
(28, '\\uploads\\productos\\php8a9c2e.webp', 6, 0, '2020-10-28 23:40:14', '2020-10-28 23:40:14'),
(29, '\\uploads\\productos\\php4Zoc2I.webp', 6, 0, '2020-10-28 23:40:14', '2020-10-28 23:40:14');
