<?php
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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123456');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '2[m&eSR>;l0N/f+2yvt&M%;kZoCq![(LWFSI23A-19B2=R7_*kap!ch8Ot4{R>>c');
define('SECURE_AUTH_KEY', '8Edz%nB[2 sFj/(wEC|C>$b*y#krGW=;vQO6GW!#} &@4^#eL0Ppo=(qV ajB1K[');
define('LOGGED_IN_KEY', 'o/&.5dIC_AUajOnjzn.bIo3G~nu )u#^=UF6rBl}SXZxOP7H_D&!28!4^S%~1){U');
define('NONCE_KEY', '(/&^PB52Xiz)[rFM/zHVnnoTf+*zo9jKUFg]t:kQ,AK]@u)~9b%zo&BuG307@j!E');
define('AUTH_SALT', '1olkW0h(aCY/Mi%R.+X<xMGVkE0M54reB[`g[Zg.K_^iY*<|g{!*<4sl=o_&M]Z:');
define('SECURE_AUTH_SALT', 'N{hYMT_0~L.;cOoJ:^;A4)@vw@ny/`nGd8;;|?[Z%[`Cls(bM??,eaazD,ZG>%+t');
define('LOGGED_IN_SALT', 'yx{n[>7y^}E@WFnqabD2B`37Ig=A&3Z*))Y:>;&{#:C| z%AvBlg}5Kt1lLn#]|/');
define('NONCE_SALT', '#h3B6UOFi0g%=7{^^NuCa$$ajhYANJ=PiMV&?8X~YDIqY_;[X1b}=kXGp{4T&E3_');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

