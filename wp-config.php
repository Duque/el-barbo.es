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
define('DB_NAME', 'el-barbo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'contraseña');

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
define('AUTH_KEY', 'JvkKtB{o;L^BR@e GYFF8`g.Lm$5tNkk>zjC@+hDQ(bV3|+7q}Ubafag@E@Aw@d>');
define('SECURE_AUTH_KEY', '87?$H.Ln^LUX`*4I-;)?<znF<HS|__c+`ON@Sw%SX%XnhkCHziA8Jr:1,(+&jhq^');
define('LOGGED_IN_KEY', 'w/.OrZjI={L,D(54$W@y.${WkS&0|H/YN:`[roX j1qcV@*@@PV@3TkRT|c9O($Z');
define('NONCE_KEY', 'n3mf<bNi]je}eh&pp4)kDQCkVYG1$t/fkQJ:gKIgYhs$Nw~-v8yqEKo~>s*DcSyi');
define('AUTH_SALT', 'em<bEB>5r81bE@Oo7~jRPl>8CnT#(4@s2KiIU@u$(}*z.9qq%b2d.UWu^QN+i-Vc');
define('SECURE_AUTH_SALT', '5M]*RFQl4p:N 7mD!ZP#KvlE =hO(5jt f8%$1|{ >WMM=A(m%bRA7ta?)l_-]kU');
define('LOGGED_IN_SALT', ',AzhQF~p9<R{rejaC6{pOy,FpC_qmE~Yo#A<}wzsExY|-MWi!WjYMY<iwurkVvm=');
define('NONCE_SALT', 'Izgw9.Nwm^_5m|DcHJbqoynEsA~(/{hWt*Z3XYd<]HWkM>q@n&/0zb)U 5GD=3^M');

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

