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
define( 'DB_NAME', 'tcc' );

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
define( 'AUTH_KEY',         'e?1j4J(GIy2c,Dkg$eD3w1)wHEBIP^`mm3~$xEEX$4n;NAwcn+tvVR?ZQ:]@5|Q<' );
define( 'SECURE_AUTH_KEY',  '1caB[p-ZJR*x%@j8ElHszRN>~m>Pk@Y#X2_oXFN]>wX}fnss1Po^gubI?5)&-SiH' );
define( 'LOGGED_IN_KEY',    '4n8G4<kQH>wDRY|u3s?s*Nn1h_37vvzZw#:?<aT[G+.-_l8E>w!%A}@T|59~X m4' );
define( 'NONCE_KEY',        'D}l|$5c_YW>vz&V][U^_4?h[($DDa9V$&wTa)RNb2X2j]BO5n zm1xv&aj&9OKrc' );
define( 'AUTH_SALT',        'u?a7h|8a{.i+:9:Cla$:0k%~B+8h:&mpi:b?;,-xXss(4nK:=yP?]o`_Dr-=1^sr' );
define( 'SECURE_AUTH_SALT', 'NzhwT{ *6I.5Q1;?zCOGS<mge0YX}_]0&(Azkg4A<{$d;1@00^z,G)_jWvJN6*G&' );
define( 'LOGGED_IN_SALT',   'UwQMO(_xn/G197}-W2YAkEq:NT0IK@;tBLUCm=IQa6]EeEYQBSP[Ro]]3W?!nM2x' );
define( 'NONCE_SALT',       'b=kjaT4HpN^f)Wi:`o5*cfzEmADvg:FXfiR(H2r4{m3do!b,Z6iz;Ba+;JOnq0bJ' );

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
