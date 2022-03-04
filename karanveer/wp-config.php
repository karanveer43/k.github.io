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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\karanveer\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'karanveer' );

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
define( 'AUTH_KEY',         '|N)GPf2Aq(B$UR3*gn)u!#oRra)g-pkt}lU4`@C^l5:`sGw3$5c $5m`XV;8L+_P' );
define( 'SECURE_AUTH_KEY',  '?~ isV2|o_<_>V%WL.!,>WY|^|O+[ZX!%d;:=o^Oa9U1r6Q7B|SijpUESV/V9eOK' );
define( 'LOGGED_IN_KEY',    'qLfS(5x?rzl|h7+e2L{@n:YiRSvYG}(=-{%[%WNgD}m0+1IdbsK+_LYJ$hCxAKM{' );
define( 'NONCE_KEY',        '5Q*a$*^Lw-s}9W ;a[d~(F7dNBd}|kLFPZ%([;rcI(qzB74<A1FpW3G|5*2uVGn>' );
define( 'AUTH_SALT',        '|&F1R9M1A5$sDC+cTbK] W]@*3Rj=JFu.IN}=6dRUcUZc(^9DLh-cv9sJ -E}4Nr' );
define( 'SECURE_AUTH_SALT', 'J[t~c.c[J__@rj;D8P]Jxs0^uVq)4=g;go;G[]f5_YjI_|P<K|=7u@=2XNC|e%4b' );
define( 'LOGGED_IN_SALT',   ']!RClD1+_k(kqjG.RpGr;J-1@YY5Qe@UUpj0nD|lqr,YJ5-iG.Tjw`A+q|25MHYS' );
define( 'NONCE_SALT',       ';2d=Xi>XYmE0Af2KQqX[qbFO.i(IeF%uM3)n2#55tcqd01BF%USuZ.EC]Y|jCC;q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
