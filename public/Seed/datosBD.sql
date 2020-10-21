INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Administrador', 'Usuario tipo administrador', '1', NULL, NULL);
INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'Cliente', 'Usuario tipo cliente', '1', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rol_id`, `ciudad`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES (NULL, 'administrador', 'admin@admin.com', '$2y$10$RGfpQ643xb1.KYiRm5NWoujC3P/3ARhHAb6xJk0da.qAdrFIr.Y4C', '1', NULL, NULL, '1', NULL, NULL);


INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Celulares y Teléfonos', 'Teléfonos móvil, smartphone', '2020-10-16 07:19:02', '2020-10-16 07:19:02');

INSERT INTO `monedas` (`id`, `nombre`, `simbolo`, `created_at`, `updated_at`) VALUES (NULL, 'pesos', '$', NULL, NULL);

INSERT INTO `precios` (`id`, `de`, `hasta`, `moneda_id`, `created_at`, `updated_at`) VALUES (NULL, '0', '10000', '1', NULL, NULL), (NULL, '10000', '20000', '1', NULL, NULL), (NULL, '20000', '40000', '1', NULL, NULL), (NULL, '40000', '60000', '1', NULL, NULL), (NULL, '60000', '100000', '1', NULL, NULL);

INSERT INTO `productos` (`id`, `user_id`, `nombre`, `descripcion`, `categoria_id`, `municipio_id`, `departamento_id`, `precio_id`, `status`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Xiaomi', '3GB RAM 20GB Almacenamiento', '1', NULL, NULL, '5', '0', NULL, NULL);