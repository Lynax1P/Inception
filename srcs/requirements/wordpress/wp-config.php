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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));
/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER'));
/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Do not change this if in doubt. */
define( 'DB_COLLATE', '' );


define( 'WP_ALLOW_REPAIR', true );
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
define('AUTH_KEY',         'uvN[[ETr-*]kMnzCcXprj~/~HUA~lLf.0XuDpp(i% dv|8h`~)bvh@.7Op}]aj:3');
define('SECURE_AUTH_KEY',  'Gqbgk!z:W396T~Ikg}+CVwHelq;[hc69>{/i,>Wjf?Lfnrb||Ig+jo245s*5j68g');
define('LOGGED_IN_KEY',    'q=[wKUK^V{oX83ICf{-<-TRkjpPT#ZppvmCdCRV0%_iva,s|n#UOV3so>p:)AHUq');
define('NONCE_KEY',        'N4qo?z5rr[-y%)`Hkm?^_.;@l,n,{3,6ZDA![bUy%E6Jufg7rqG<`vj4gS%*6-MB');
define('AUTH_SALT',        'PC0Ux^!(d59R u-HV%(j*j_>ilG.*u4B;[$OXp|I]W&P*,gCl/SqEXRu)?^lq[9{');
define('SECURE_AUTH_SALT', 'LcwJ!hUGUeegadyGi;5es/E&R-=O(o_=@Vm+(bViO%a^EAu#Ym]]MeQ0J0&+~Jh}');
define('LOGGED_IN_SALT',   '#B{R?NP-}e<QZJC_wAiJ9K>x_Y*T]|FNotPf<$(0Q!*6[C8!2*:qj~C/ HW~udTq');
define('NONCE_SALT',       'mQ9,.abtwurQ;0|h}[_.g0.a6n-MRtGRX9/,<kq!{<2?-A(zvf,,A?%]f,-Tg}Qv');
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
