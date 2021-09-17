<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>Ec$vx]dKh4>q~iH}yJ_P7/)&PZF{L+D 1@l5F/*gK!n0h:tJqMKnFr=6Gj_Tplz' );
define( 'SECURE_AUTH_KEY',  'Ls+M[=O;?JQl7Fi`CZ0e1Cw9EZS.kh0>b@(}PLW[]];i$CxwK=*IT7|&|mO+H X9' );
define( 'LOGGED_IN_KEY',    'Gq #ILxIiBSA&jG@f?-gJ]_v1g53/[Z$K#0hiNG8{E[D+p$7vUz%P[Y?cdk?36Oz' );
define( 'NONCE_KEY',        '<ja&ZAw8#p}e]AR._,9m<.SVtOi$7[}x(d~Tt%[Uby|~3g!XLb|PTTd*f6-z@,yS' );
define( 'AUTH_SALT',        'GKF5>ldW<fx+CcX04Wz(9`+8D+fj_FHPn/AIhQYzPDwgGpgX:#J>d%n{c<0TyOi_' );
define( 'SECURE_AUTH_SALT', 'Kh 4q}kE?=ps~7KtZpQ2}8*DK^:C?8]66Sr`0y[:ky6Mw*S2#yrA.rR91&0yA&|y' );
define( 'LOGGED_IN_SALT',   'lF-@lM6g~$cj2Acrx4[*,}T#d][`vk[m[j&.BWSZzdN PeF#l#RtZe5CN!gP6kJt' );
define( 'NONCE_SALT',       '-e[Kh$qFyIX1|p;s -Prs)|]YD6DD-ZQEp(<b$;tfraNRCxae$.!B`DzSF.@GAta' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
