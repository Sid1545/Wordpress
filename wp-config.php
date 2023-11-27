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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sid' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cxkfclepkl63.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'I8I(G9D@-*-q@3U(S-Q$p3q7!zjG|LGWC`_{gs&r93iS+-8?+4UJ@Az>EOIbGh,#' );
define( 'SECURE_AUTH_KEY',  '$ck-5]MRrCnzs^OWjN.;a9*irTw+)qSw8,-Dw(q*%<_X`hWC!t-{~JSH%1M|JsDu' );
define( 'LOGGED_IN_KEY',    'tD4q1>ced?+-li{}=%mDZ!*+uLJD3},mbV<3~151qIh~A^!?Qr.8LJYL-|mV2+]q' );
define( 'NONCE_KEY',        'Z:Pl+qg}x82m?.H0R#0~DcoQzcN^f_o6gFeYzD# -EI+#6?KG<Ul9(Ha^)GRzZWM' );
define( 'AUTH_SALT',        '/M-X9|:5xHPFOSZL#~]zbi~G^^AjTfi _@)l_.:f[zs|;AY]SQ[ hLI/Y)_FwBKl' );
define( 'SECURE_AUTH_SALT', 'wa7g+{Avd8qn,|P0]#nUE8G<(GAuwGEMzh?K1UZn#C<-AM?GLY>yz~5S1ak.?8eP' );
define( 'LOGGED_IN_SALT',   'SdX+;Y$XQCZ]|406K-7YGh#0.gnac;*!BZM*B{~.&4[u82_>d3;Hj{/t9w9IT%Go' );
define( 'NONCE_SALT',       'dK,P++u7CC_4|WvzBj<&n(Y<VgYOmYk!o| !pb-9O|:nY&jOCNp*GF|^Bi5ma|@s' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
