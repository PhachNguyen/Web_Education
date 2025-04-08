<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news_cntt' );

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
define( 'AUTH_KEY',         'H?jL9QQ,H+wxl&1U~xq>*{x #Q)|a=#$2~U!rlcOab{&A])gZ(R_,R<Zd)..w0xz' );
define( 'SECURE_AUTH_KEY',  'A{!P1_U(nBsxcvEFQL&.MAf_q~0eh%*O@mJJfN)sK*|2`ScKyV*FTd/@Y!w_e4_n' );
define( 'LOGGED_IN_KEY',    'B@V`b:Y0ecsg.C`7Zm^#(`TMAiFomx^Mw ZvzVHzVS:EMldGZ3$LPgA/~d|kVZ_O' );
define( 'NONCE_KEY',        '}JuQx4B)!!}FYcF]]KZ1vss<4k68`hO9l`Y01 vIoZ/*{}EH~IUR5;H5:Ssw7c.a' );
define( 'AUTH_SALT',        'YQ=u][GC<bFYy/n3Y$6 n.]~E&tt=jg}39N75,.#>q76yj[wsQY:zg?pZ:eW|Gf;' );
define( 'SECURE_AUTH_SALT', '$+csK/ojIh;V]W5,Rk.TOte# G%Op< Q@RiE*D|-}pb aZ(<av |v.r1<2jEy0:Y' );
define( 'LOGGED_IN_SALT',   '&ab{d<sn@,k^Y;}{^Z)M.g~G7(RFej>n+Nn^F2lf>y.zT_sUO26?P),V:_uzTD9Q' );
define( 'NONCE_SALT',       'lZS[a<W*y/$xTOf^nVxZ1tGYUI.uG?@`BzNG}}+GhArjBygH|N?<6K%LcTW);6V@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
