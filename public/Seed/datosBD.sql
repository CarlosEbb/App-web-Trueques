INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);


INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 1, NULL, NULL, 1, '2020-10-27 23:00:00', '2020-10-27 23:00:00'),
(2, 'Cliente', 'cliente@cliente.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', NULL, 2, NULL, NULL, 1, '2020-10-27 23:00:00', '2020-10-27 23:00:00');


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Vehículos', 'Vehículos', 'vehiculos.png', '2020-10-16 03:19:02', '2020-10-27 07:44:19'),
(2, 'Tecnología', 'Tecnología', 'tecnologia.png', '2020-10-27 07:48:02', '2020-10-27 07:48:02'),
(3, 'Hogar y electrodomésticos', 'Hogar y electrodomésticos', 'hogar.jpg', '2020-10-27 07:48:35', '2020-10-27 07:48:35'),
(4, 'Deportes y aire libre', 'Deportes y aire libre', 'deportes.png', '2020-10-27 07:48:47', '2020-10-27 07:48:47'),
(5, 'Belleza y cuidado personal', 'Belleza y cuidado personal', 'belleza.png', '2020-10-27 07:49:01', '2020-10-27 07:49:01'),
(6, 'Accesorios para vehículos', 'Accesorios para vehículos', 'repuestos.png', '2020-10-27 07:49:20', '2020-10-27 07:49:20'),
(7, 'Juguetes y bebés', 'Juguetes y bebés', 'bebes.jpg', '2020-10-27 07:50:20', '2020-10-27 07:50:20'),
(8, 'Herramientas e industrias', 'Herramientas e industrias', 'herramientas.png', '2020-10-27 07:50:42', '2020-10-27 07:50:42'),
(9, 'Instrumentos Musicales', 'Instrumentos Musicales', 'musica.jpg', '2020-10-27 07:50:52', '2020-10-27 07:50:52'),
(10, 'Libros', 'Libros', 'libros.png', '2020-10-27 07:51:02', '2020-10-27 07:51:02'),
(11, 'inmuebles', 'inmuebles', 'inmueble.jpg', '2020-10-27 07:51:11', '2020-10-27 07:51:11'),
(12, 'Ropa y calzado', 'Ropa y calzado', 'ropa.png', '2020-10-27 07:51:19', '2020-10-27 07:51:19'),
(13, 'Arte, antigüedades y manualidades', 'Arte, antigüedades y manualidades', 'antiguedades.jpg', '2020-10-27 07:51:57', '2020-10-27 07:51:57'),
(14, 'Productos ecológicos', 'Productos ecológicos', 'ecologicos.png', '2020-10-27 07:52:15', '2020-10-27 07:52:15'),
(15, 'Otros', 'Otros', 'otros.jpg', '2020-10-27 07:52:23', '2020-10-27 07:52:23');


INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);

INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `municipio_id`, `departamento_id`, `precio_id`, `status`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Xiaomi', '3GB RAM 20GB Almacenamiento', '1', NULL, NULL, '5', '0', NULL, NULL);

