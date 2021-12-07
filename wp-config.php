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
define( 'DB_NAME', 'flightsimworksdownloads_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bEz[)NRXeY(1(=f4*x,X0AtoX`&L$+H|/W/HoBh,Sp/!_KC-pW&7!QISUOHi|@QN' );
define( 'SECURE_AUTH_KEY',  ';3+l{l/.IJ;Vomg6.93a_jZKkfx5&{w@#etM-~Mk1:xA=.sO^B-<uM9=.Z&~}Yo{' );
define( 'LOGGED_IN_KEY',    '1xF/MyuWgYy6(378LkCNcZ?hgGC#=pDB]r4N3MILIIQ/0q,:H^T%YgL:Ij*[b-s!' );
define( 'NONCE_KEY',        'Wc>rWa?g{W@8i3], Ss2Vum1wIA`mo<T.w9<n)*2g:e#%{5`;P|M34/FRPSiD6q]' );
define( 'AUTH_SALT',        'KG+}lX!=Cr<JZ6exnk.JosH~~9S2zSMJ]Uji#&^^SsD9*b3trbv|s^_M#0Yc-PJi' );
define( 'SECURE_AUTH_SALT', 'qcl^MY!+M>KAFaFq&`uaof/Mxb!k{.7FABXy^>nPWM/1(JPBGC+}5P:h{Mx: uDP' );
define( 'LOGGED_IN_SALT',   'TSpj=2 vx:*&oD}1ne*gee7CM4vH~8wVOf>8Tl-IJ/!|>?WC bG8zRDYG%BU^AA~' );
define( 'NONCE_SALT',       'lq7}!Hb@=xG++gYac+*LPecU!n(N3BzP(*$Y~{L4[Ojt1r6|Hqa>Q2[O55!<f_Db' );

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
