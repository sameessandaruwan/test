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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6aae:q a>a?XJZl[}dpjwlnm,wZKB*Wk2gn+$.J-DIRU8&9yRX5DI[@x:luR{u:{');
define('SECURE_AUTH_KEY',  '$U:@/9t&Bng2U.. Z#]UA1d0TGuCa7I)[yhtd5})fO|9Kdx$}Ppl47I/nF$j[TmV');
define('LOGGED_IN_KEY',    'P$xvyAgFV?ysa bhM5]:To>[!Y?ReQEO]7&p^Do04n6HflJ~AH},M$fNs*hyCP:i');
define('NONCE_KEY',        'b&{f[<+b`zf9UM<R)J4C-&C/6K-]~V_EK<J~^U,P)>/;s=O7nxekR^]`|Moi:]&N');
define('AUTH_SALT',        'whl4 EBk>g=i`Ij)Y^WA2J)Pk}RZek !6+7.#JBj`.v3I6QTR}|Jb]?YEA,`jEl$');
define('SECURE_AUTH_SALT', 'J>a(}YQIal&#8f1UXWpYRZWp(/[_Ub2MV?[ZOUD|bm.}4)|dbx:LuNGv(mes>5yS');
define('LOGGED_IN_SALT',   'xz,yk?_$.>}Qq0 M:2gJ+f{x)t]C 4;BkXHE=j%lE;9Z,Cx_AE`YEqP|Q,!Ew6z&');
define('NONCE_SALT',       'FUM>]Et5.lB~PS.LKxv6t;^!lviqJ_|zc,,A5eA~dzWOowbvWPIV5<`iSX{K/hcT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
