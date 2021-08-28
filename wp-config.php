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
define( 'DB_NAME', 'megalaptopwpdb' );

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
define( 'AUTH_KEY',         ':`E!B<FC0]O6@PavZ0)1,wqQUz/0l:S0;B=*[2C$K@}xc^|Bl6/TWI7:e1Ke([o4' );
define( 'SECURE_AUTH_KEY',  'Fcz26-.HV]% 1SN[_oQKe[,EGTXzk9w[;G^A 7whwq]pj/K[uL}5m+zMaS~rOw4t' );
define( 'LOGGED_IN_KEY',    '-j(SyYTN-fO)uSMzqN>z7-LYp auRWBz.k`<F(Yi)l{v;h^WOi@}HW)L#(8.4KCs' );
define( 'NONCE_KEY',        '^j/jnh_{HJk@a;W9F@fX]yQKyCmj0n544J7T,]=*?|sHz}|1X1nulEyvsg{]mQKB' );
define( 'AUTH_SALT',        '4fHAS8oQ?[T?~W2xAtb&}FV)[9]G3|x@[MAt.2Q;X!bg(ovr!gzsna$#PZh[/^V3' );
define( 'SECURE_AUTH_SALT', ' {0R>!2P</}Cn/9m]dyTz?/}ah3g*0$5)~51K@z KcDlqt=Ww>pl:A3/f@PDGo%#' );
define( 'LOGGED_IN_SALT',   '[]ivG@Dr>hp71j1n$gaL&Oh=M)yejBJF[6vix&m4YT&[G$=*C{qJw5iUi;D]Q%{T' );
define( 'NONCE_SALT',       'Lg2A9JQ~Go>d`V1,T1DyDgTh-<6K#qk[A>Kt3!JZ}*^<:ao$8a4tjif<)ds7UjY_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'afa110_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
