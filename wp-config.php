<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':VKQCO [?-#DQ,P$|:4N`QQq24FpR,3}APg[#dWx3-,t!]i1hxgM-Tb67;e-cea`' );
define( 'SECURE_AUTH_KEY',  'Sr/t zhl~(oT-j>#{}:uU%F`fqt{SS/9d&w#;ifCR4$y?cRUAn;0&rfGql?lWeA&' );
define( 'LOGGED_IN_KEY',    'Rh2)?F`yA|cIxibfr$tU{FCfSm2Sj:/t94E^X!U3?,K5n!mp<#Y~MeSc~ge0e6-4' );
define( 'NONCE_KEY',        'F;+vIsy1OWORVuzpqT==q?F5c*7k]F:<u$Nv`crk$PIQBc:GTdqq3ll7(>Vo}fM~' );
define( 'AUTH_SALT',        '~!Q4;N2Q@tf#!DmK1ute[j<Y!{DZ 0E$#x|plvXJr|+#s3w Bc}$Gq%(R.|WV8`Y' );
define( 'SECURE_AUTH_SALT', 'N,nx2vU~.PP0HO+oT]IR%g?>y1rN^0j6[aN^.{q^%Alf%+N0 wB6^}n8fmhIKW-t' );
define( 'LOGGED_IN_SALT',   'Mq]Xdd1(PIU}HEr&2{F|CjR?b#a,^q)SAA1j}=ZRw2/z6ZrgJXdW4ziZWXYJ1V{-' );
define( 'NONCE_SALT',       '%`nU1c._fDzd|Y>V!/&*JYI+;c9ld_n:fuzDJ!1W4F^+MN12a6;b40%q<%W Apra' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
