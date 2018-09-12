<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */


require __DIR__ . '/vendor/vlucas/phpdotenv/src/Dotenv.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Loader.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Validator.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Exception/ExceptionInterface.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Exception/InvalidCallbackException.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Exception/InvalidFileException.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Exception/InvalidPathException.php';
require __DIR__ . '/vendor/vlucas/phpdotenv/src/Exception/ValidationException.php';

$dotenv = new Dotenv\Dotenv( ABSPATH );
$dotenv->load();
header('X-Frame-Options: SAMEORIGIN');
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', getenv('DB_WP_NAME'));

/** Tu nombre de usuario de MySQL */
define('DB_USER', getenv('DB_WP_USER'));

/** Tu contraseña de MySQL */
define('DB_PASSWORD', getenv('DB_WP_PASSWORD'));

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', getenv('DB_WP_HOST'));

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'pon aquí tu frase aleatoria'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = getenv('DB_WP_PREFIX');


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', filter_var(getenv( 'APP_DEBUG' ), FILTER_VALIDATE_BOOLEAN) );
define('WP_HOME', 'https://' . getenv( 'HOST_NAME'));
define('WP_SITEURL', 'https://' . getenv( 'HOST_NAME'));
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', getenv( 'HOST_NAME' ));
define('RELOCATE', true);
define('WP_MEMORY_LIMIT', '256M');
define('FS_METHOD', 'direct');

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

