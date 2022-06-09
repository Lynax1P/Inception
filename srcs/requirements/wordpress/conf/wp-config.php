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
define( 'DB_NAME', getenv('WP_DB_NAME'));
/** MySQL database username */
define( 'DB_USER', getenv('WP_USER'));
/** MySQL database password */
define('DB_PASSWORD', getenv('WP_USER_PASSWORD'));
/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_NAME'));
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Do not change this if in doubt. */
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
define('AUTH_KEY',         'R/`NN;XHSH;T-;CQyT`5D_H~xlmJDD&NN=|`SD&.19GjQNpABIpB>+FW.cP;c+-+');
define('SECURE_AUTH_KEY',  '[/%R+[pwN&n*qh=w0+ta]aKJAe8+ C4/n_`*Gn-EG%dxM_KJPS+)[Ux[ ]7M11~[');
define('LOGGED_IN_KEY',    'h`vY+_$&*zeYdZnpd@((T&F`L)%.?d/&()|UCeSHKQyzj4@H @B^CFe<yFrUxT}S');
define('NONCE_KEY',        '+~+Sb5C `)2:;<@R~sA=zQL$O2CbSe)#wSNe]-ce53D|H}*Qp?Yy=Vm:r*R+c:%r');
define('AUTH_SALT',        'lXS7U}+^c usR<PO9zoyc+^mN2ak3xN --l@fP1:{[+ToHee<kW?@q3f]K1k9%V)');
define('SECURE_AUTH_SALT', 'W.jk?]3o2%R9Nk-`Op9Y/Y#vB#u%|-h|]y=E)>+S4%h+LBBfHzF5OW}Pm@-O<{nz');
define('LOGGED_IN_SALT',   'x+Y+rTh4+}a|Mt.23}d?z`-oK%@|bela>RWg{-6A7XG.cBGU~I*;-pMi]Nra5UW@');
define('NONCE_SALT',       '[!5FdQE_Trq?M$}aw~-yR0Rb{dp#+X0,HN@@f9imDI%Q53.+1@h<][)<EJz]n4Wn');

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

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';