INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 22:00:00', '2020-10-27 22:00:00');


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', '/uploads/categorias/vehiculos.png', '2020-10-16 01:19:02', '2020-10-27 06:44:19'),
(2, 'Tecnología', 'Tecnología', '/uploads/categorias/tecnologia.png', '2020-10-27 06:48:02', '2020-10-27 06:48:02'),
(3, 'Hogar y electrodomésticos', 'Hogar y electrodomésticos', '/uploads/categorias/hogar.jpg', '2020-10-27 06:48:35', '2020-10-27 06:48:35'),
(4, 'Deportes y aire libre', 'Deportes y aire libre', '/uploads/categorias/deportes.png', '2020-10-27 06:48:47', '2020-10-27 06:48:47'),
(5, 'Belleza y cuidado personal', 'Belleza y cuidado personal', '/uploads/categorias/belleza.png', '2020-10-27 06:49:01', '2020-10-27 06:49:01'),
(6, 'Accesorios para vehículos', 'Accesorios para vehículos', '/uploads/categorias/repuestos.png', '2020-10-27 06:49:20', '2020-10-27 06:49:20'),
(7, 'Juguetes y bebés', 'Juguetes y bebés', '/uploads/categorias/bebes.jpg', '2020-10-27 06:50:20', '2020-10-27 06:50:20'),
(8, 'Herramientas e industrias', 'Herramientas e industrias', '/uploads/categorias/herramientas.png', '2020-10-27 06:50:42', '2020-10-27 06:50:42'),
(9, 'Instrumentos Musicales', 'Instrumentos Musicales', '/uploads/categorias/musica.jpg', '2020-10-27 06:50:52', '2020-10-27 06:50:52'),
(10, 'Libros', 'Libros', '/uploads/categorias/libros.png', '2020-10-27 06:51:02', '2020-10-27 06:51:02'),
(11, 'inmuebles', 'inmuebles', '/uploads/categorias/inmueble.jpg', '2020-10-27 06:51:11', '2020-10-27 06:51:11'),
(12, 'Ropa y calzado', 'Ropa y calzado', '/uploads/categorias/ropa.png', '2020-10-27 06:51:19', '2020-10-27 06:51:19'),
(13, 'Arte, antigüedades y manualidades', 'Arte, antigüedades y manualidades', '/uploads/categorias/antiguedades.jpg', '2020-10-27 06:51:57', '2020-10-27 06:51:57'),
(14, 'Productos ecológicos', 'Productos ecológicos', '/uploads/categorias/ecologicos.png', '2020-10-27 06:52:15', '2020-10-27 06:52:15'),
(15, 'Otros', 'Otros', '/uploads/categorias/otros.jpg', '2020-10-27 06:52:23', '2020-10-27 06:52:23');

INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);


INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `municipio_id`, `departamento_id`, `precio_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Tensiómetro Digital De Muñeca', 'Excelente calidad garantizada', 2, 16, 44, 3, 1, '2020-10-28 23:20:14', '2020-10-28 23:20:14'),
(4, 2, 'Volskwagen Escarabajo Sincrónico', 'Volkswagen año 69, en optimas condiciones, restaurado 100% con piezas originales Alemanas, juego de 5 cauchos nuevos, banda blanca farestone.', 1, 16, 41, 5, 1, '2020-10-28 23:27:47', '2020-10-28 23:27:47'),
(5, 2, 'Cuadros Minimalistas Abstractos Modernos', '\"\"DECORA TU HOGAR\"\" CON \"BELLOS CUADROS DECORATIVOS CALIDAD AL MEJOR TRUEQUE\"\"', 3, 8, 13, 4, 1, '2020-10-28 23:37:06', '2020-10-28 23:37:06'),
(6, 2, 'Yston Lente Mirror Para Natacion Adulto Ss99', 'LENTE MIRROR PARA NATACIÓN y TAPAOIDOS\r\nMarca: Yston\r\nTalla: Adulto\r\nColor: Aguamarina, Rosado, Azul Rey y Plateado.\r\n- Incluye tapaoidos\r\n- Cristal Mirror (Espejo)', 4, 1, 5, 1, 1, '2020-10-28 23:40:14', '2020-10-28 23:40:14');



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
