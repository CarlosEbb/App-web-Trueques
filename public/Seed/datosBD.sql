INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00');



INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', '/uploads/categorias/vehiculos.png', '2020-10-16 07:19:02', '2020-10-27 12:44:19'),
(2, 'Tecnología', 'Tecnología', '/uploads/categorias/tecnologia.png', '2020-10-27 12:48:02', '2020-10-27 12:48:02'),
(3, 'Muebles - Hogar - Jardin', 'Muebles - Hogar - Jardin', '/uploads/categorias/hogar.jpg', '2020-10-27 12:48:35', '2020-10-27 12:48:35'),
(4, 'Deportes y aire libre', 'Deportes y aire libre', '/uploads/categorias/deportes.png', '2020-10-27 12:48:47', '2020-10-27 12:48:47'),
(5, 'Moda - Belleza', 'Belleza y cuidado personal', '/uploads/categorias/belleza.png', '2020-10-27 12:49:01', '2020-10-27 12:49:01'),
(7, 'Juguetes y bebés', 'Juguetes y bebés', '/uploads/categorias/bebes.jpg', '2020-10-27 12:50:20', '2020-10-27 12:50:20'),
(8, 'Herramientas e industrias', 'Herramientas e industrias', '/uploads/categorias/herramientas.png', '2020-10-27 12:50:42', '2020-10-27 12:50:42'),
(9, 'Hobbies - Música - Arte - Libros', 'Instrumentos Musicales', '/uploads/categorias/musica.jpg', '2020-10-27 12:50:52', '2020-10-27 12:50:52'),

(15, 'Otros', 'Otros', '/uploads/categorias/otros.jpg', '2020-10-27 12:52:23', '2020-10-27 12:52:23'),
(16, 'Electrodomésticos', 'Electrodomésticos', '/uploads/categorias/electrodomesticos.jpg', NULL, NULL),
(17, 'Propiedades - Inmuebles', 'Propiedades - Inmuebles', '/uploads/categorias/inmueble.jpg', NULL, NULL);

INSERT INTO `sub_categorias` (`id`, `nombre`, `categoria_id`, `created_at`, `updated_at`) VALUES
(8, 'Carros', 1, NULL, NULL),
(9, 'Motos', 1, NULL, NULL),
(10, 'Accesorios para carros', 1, NULL, NULL),
(11, 'Accesorios para motos', 1, NULL, NULL),
(12, 'Camiones - Vehículos Comerciales', 1, NULL, NULL),
(13, 'Barcos - Aviones', 1, NULL, NULL),
(14, 'Otros Vehículos', 1, NULL, NULL),
(15, 'Muebles', 3, NULL, NULL),
(16, 'Almacenes - Oficinas', 3, NULL, NULL),
(17, 'Decoración', 3, NULL, NULL),
(18, 'Jardines - Exteriores', 3, NULL, NULL),
(19, 'Accesorios - Otros', 3, NULL, NULL),
(20, 'Bricolaje - Mejorar tu casa', 3, NULL, NULL),
(21, 'Cocina', 16, NULL, NULL),
(22, 'Neveras - Congeladores', 16, NULL, NULL),
(23, 'Lavadoras - Secadoras', 16, NULL, NULL),
(24, 'Aires acondicionados - Ventiladores', 16, NULL, NULL),
(25, 'Calefacción', 16, NULL, NULL),
(26, 'Otros electrodomésticos', 16, NULL, NULL),
(27, 'Gimnasio - Fitness', 4, NULL, NULL),
(28, 'Bicicletas - Ciclismo', 4, NULL, NULL),
(29, 'Fútbol', 4, NULL, NULL),
(30, 'Otros deportes - Equipos', 4, NULL, NULL),
(31, 'Teléfonos - Celulares', 2, NULL, NULL),
(32, 'Tablets', 2, NULL, NULL),
(33, 'Accesorios para celulares', 2, NULL, NULL),
(34, 'Consolas', 2, NULL, NULL),
(35, 'Video juegos', 2, NULL, NULL),
(36, 'Accesorios - Otros', 2, NULL, NULL),
(44, 'Apartamentos - Casas - VENTA', 17, NULL, NULL),
(45, 'Apartamentos - Casas - ARRIENDO', 17, NULL, NULL),
(46, 'Alojamiento vacacional - ARRIENDO', 17, NULL, NULL),
(47, 'Inmuebles comerciales - VENTA', 17, NULL, NULL),
(48, 'Inmuebles comerciales - ARRIENDO', 17, NULL, NULL),
(49, 'Lotes - VENTA', 17, NULL, NULL),
(50, 'VIVIENDA NUEVA', 17, NULL, NULL),
(51, 'Ropa', 5, NULL, NULL),
(52, 'Belleza', 5, NULL, NULL),
(53, 'Zapatos', 5, NULL, NULL),
(54, 'Accesorios', 5, NULL, NULL),
(55, 'Maquinaria industrial', 8, NULL, NULL),
(56, 'Maquinaria agrícola', 8, NULL, NULL),
(57, 'Herramientas', 8, NULL, NULL),
(58, 'Cunas - Cama cunas', 7, NULL, NULL),
(59, 'Cochecitos', 7, NULL, NULL),
(60, 'Juegos - Juguetes', 7, NULL, NULL),
(61, 'Ropa', 7, NULL, NULL),
(62, 'Calzado', 7, NULL, NULL),
(63, 'Otros\r\n', 7, NULL, NULL),
(64, 'Instrumentos Musicales', 9, NULL, NULL),
(65, 'Juegos - Actividades de Ocio', 9, NULL, NULL),
(66, 'Libros - CDs - DVDs', 9, NULL, NULL),
(67, 'Arte - Antigüedades', 9, NULL, NULL),
(68, 'Manualidades', 9, NULL, NULL),
(69, 'Otros', 15, NULL, NULL);

INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);

INSERT INTO `tipo_anuncio` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (NULL, 'Venta', 'Artículos dirigidos a la venta, con una compensación monetaria', NULL, NULL), (NULL, 'Trueque', 'Artículo dirigido al cambio, con una compensación de un objeto de interés o de igual valor', NULL, NULL);


INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `municipio_id`, `departamento_id`, `precio`, `status`, `created_at`, `updated_at`, `tipo_id`, `sub_categoria_id`) VALUES
(2, 2, 'Tensiómetro Digital De Muñeca', 'Excelente calidad garantizada', 2, 16, 44, '10000', 1, '2020-10-28 23:20:14', '2020-10-28 23:20:14', 1, 19),
(4, 2, 'Volskwagen Escarabajo Sincrónico', 'Volkswagen año 69, en optimas condiciones, restaurado 100% con piezas originales Alemanas, juego de 5 cauchos nuevos, banda blanca farestone.', 1, 16, 41, '30000', 1, '2020-10-28 23:27:47', '2020-10-28 23:27:47', 2, 8),
(5, 2, 'Cuadros Minimalistas Abstractos Modernos', '\"\"DECORA TU HOGAR\"\" CON \"BELLOS CUADROS DECORATIVOS CALIDAD AL MEJOR TRUEQUE\"\"', 3, 8, 13, '20000', 1, '2020-10-28 23:37:06', '2020-10-28 23:37:06', 1, 17),
(6, 2, 'Yston Lente Mirror Para Natacion Adulto Ss99', 'LENTE MIRROR PARA NATACIÓN y TAPAOIDOS\r\nMarca: Yston\r\nTalla: Adulto\r\nColor: Aguamarina, Rosado, Azul Rey y Plateado.\r\n- Incluye tapaoidos\r\n- Cristal Mirror (Espejo)', 4, 1, 5, '10000', 1, '2020-10-28 23:40:14', '2020-10-28 23:40:14', 2, 30);


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
