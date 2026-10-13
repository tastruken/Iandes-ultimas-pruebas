<?php
/**
 * config.php
 * Configuración de credenciales SMTP y correos de destino para mail.php
 */

declare(strict_types=1);

// Servidor SMTP (ejemplo: smtp.gmail.com, mail.iandes.cl, etc.)
define('SMTP_HOST', 'smtp.gmail.com');

// Usuario del correo de envío (ejemplo: contacto@iandes.cl)
define('SMTP_USER', 'notificaciones.iandes@gmail.com');

// Contraseña del correo SMTP
define('SMTP_PASS', 'mailer.contactoiandes.cl');

// Puerto SMTP (587 para TLS/STARTTLS o 465 para SSL)
define('SMTP_PORT', 587);

// Remitente del correo (Debe coincidir o estar autorizado por el servidor SMTP)
define('SMTP_FROM_EMAIL', 'notificaciones.iandes@gmail.com');
define('SMTP_FROM_NAME', 'Inmobiliaria Iandes');

// Correo de destino donde llegarán las consultas del formulario web
define('DESTINO_EMAIL', 'cvalencia@boosted.cl');
define('DESTINO_NOMBRE', 'Equipo Boosted / Iandes');
