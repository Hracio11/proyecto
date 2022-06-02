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
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@.+53@uEM8w#GMf@Km#[^7McWuW|&V@!DkuB,#Pzr;m.3-eCrL6_@<*j4h9U.77u' );
define( 'SECURE_AUTH_KEY',  '-h!BezQ93o*Mc]n<{d|TbR@t87!3bAJ&Z)}=?JoVm<j]`s>DVxdh*sJ]{mxo%?L,' );
define( 'LOGGED_IN_KEY',    'r%`z[;vC.g[}ObKe4$Xik /((Ge,!#*d_!`|xjmHXRWnJa/`by}W e6T7K/7x!Zw' );
define( 'NONCE_KEY',        'OY)H.pIaMJ&c-L!PIR!PLnt!$RMh^fGNChcnL3:q; !Q|=&U9@@WiFkF:UCBAAI.' );
define( 'AUTH_SALT',        '$6 u@O1OAx#</f,Q,2c[ftw?8NoWU)nKY@23GNd`ctBrUOsh^+^Nk@TuR^keOOx>' );
define( 'SECURE_AUTH_SALT', 'BivTk%HF4|K9&R}xPqbOyns`or.?sThhKfZx<Sq9x7n5[VkT/x>87p]uN=nyS2@d' );
define( 'LOGGED_IN_SALT',   '>Cck2X+!{~kJ7i1z,],dQ7m9=k{i|meluL2KdFq#pb_8OtyJ.FP<m|R-G##H$3xO' );
define( 'NONCE_SALT',       'xAJPq,v2m#EOE0?YN*$Y D&wRm~I.o!]]WK_ r|R:tg_KIA.zb:[_l)jD#y_:F>6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
