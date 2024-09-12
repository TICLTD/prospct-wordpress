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
define( 'DB_NAME', 'prospct' );

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
define( 'AUTH_KEY',         '|[z!Y*3:-(AW^FD$vGYJmx)R/D/1d@>It[#xZ-xCk8`OGzb+o#a)|aom,<;=J;6z' );
define( 'SECURE_AUTH_KEY',  '4ntj7*32=yvWeXB;==bZR8[7Jp2mSSc3}?%EX4mg@tkMVih}pZ`1<?tU[eJiGfZ}' );
define( 'LOGGED_IN_KEY',    ']mD/{bG|LDmbJkJiKndoxj:p[=_Vf<0K>lNxInPf@4y?G[L#83ymjx*:&8=B#Q%m' );
define( 'NONCE_KEY',        '4!;#KOl?c!D5Gq&4ZNX7w7mU[t1Ws:A--_Lx(:F1#um(U^sJJ4b*jXAR2}dNF087' );
define( 'AUTH_SALT',        '}xk.+E`^s+s:?(i(Y nLi5Ue<A}HT+9:^{&5*f@+Q<9%6(&m tK {bFE7{QCrni&' );
define( 'SECURE_AUTH_SALT', '}~(M?1/sc &S-!,+gS9WgQ&} kL]R,urLw c*xXP7>riBi=n*M|Z/TA?g`@}>}gY' );
define( 'LOGGED_IN_SALT',   'lrT6;F bXS/D/dvm(zx^#b/c^loDoq)fQR]226hs@1$AH+YS{nQs}h7u}g4Bl[za' );
define( 'NONCE_SALT',       'F@eF7%qwm%6f|m$D#:Qy05oW1d5}otHySYrvEk]O:/l(Nxl4*^.Mc,t]Vw}D25By' );

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
