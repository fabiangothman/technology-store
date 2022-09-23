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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technostore' );

/** Database username */
define( 'DB_USER', 'technostore' );

/** Database password */
define( 'DB_PASSWORD', 'technostore' );

/** Database hostname */
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
define( 'AUTH_KEY',         '`U+LH1EV2fVEB]&,c3mAQKIF+Qh#9O,7#n*u;)H(]&ZSc+QCt[x67# FQ%* Ys}c' );
define( 'SECURE_AUTH_KEY',  'TP#d6Q*^O,c_h|XX bH*LkZw#>-,:SP9&Z~LklYqq8S~VQU<6$V VSnt<}nqn0df' );
define( 'LOGGED_IN_KEY',    '%78%E15&*Y:Bm%E:>kx_l&k5!K:A>p{4=i7zTL8F% Pb]jO0nqh.yAzf50wZA>Ee' );
define( 'NONCE_KEY',        'eo0r{^&$Gw*u;d)2e-V>^,M&BvGK)+t/v/!%o7P_6nAqo-kiEbTtU-60`jR4_Ga%' );
define( 'AUTH_SALT',        'M2O~H;`lt2:Y/)m&XbHgbq0[/Vy^9lzsIkZQ_cxif[vS$7DFEol4:+p>RJJc%frJ' );
define( 'SECURE_AUTH_SALT', 'w7kmKVFRRB(hOk`)o>!!rVXQt<*yf9Mu*%1^5AUT]/$v5_H](dOL3:99H6W@(jZM' );
define( 'LOGGED_IN_SALT',   '9c:d!*i=1N9axbRmRb %yd[?h,?tqg+pojIZ`Q agf9NI+]!giQ`=)r0zo8`{STp' );
define( 'NONCE_SALT',       '3qft?@,F_hH[E;~J2**Q1 3qb+w([9%#p>%f^,yqODN6D;?q/t2p~I4eI.GBkf}.' );

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
