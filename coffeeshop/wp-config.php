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
define( 'DB_NAME', 'coffeeshop' );

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
define( 'AUTH_KEY',         'l_H7+@$J2Oi4,MP9W0AZ0</HUhYEwX1-:,-dM%yALP>08U[I-$1;f&>z=^6`=i+>' );
define( 'SECURE_AUTH_KEY',  'Cb%(^RbR&?UK)Dyc~c7MM,MoX`.iYm#38UdLxa&J%WMGQ.W4Cn[5{`V>)hGdgS&5' );
define( 'LOGGED_IN_KEY',    '6,o&]<b7o)PbJ#y,0X`X<^d?a,iO|]ss.`>32d8WrOG-45Up}uRWN<+*Lx6;8_Oj' );
define( 'NONCE_KEY',        'to64B3n*c#u&jKFKm9[PCw.7?M!P6? EQ!VvN4~}b_;ChLb2>Zwr^-cY_>i8dGpb' );
define( 'AUTH_SALT',        'sQs<j[~X?o6@ONl5T}>$/7#>hj{{I:W0^QyxsR3k~^kJk])_0+~6WevW{MY73TA?' );
define( 'SECURE_AUTH_SALT', '.e8Q0z=/=vngMG&$zC([#Rz$|5M/jH#n&qvUKB x!a(>yu?_U-m1Q <(pN#tIbp%' );
define( 'LOGGED_IN_SALT',   '$^&$~G ngoVr4lc$|dQdZXT6W?(,yVD3WCZe.t!|bI{qaWbggp?SRd}wTe}Q$z$F' );
define( 'NONCE_SALT',       'eb~rt6> bWX=+=3n&F_byvun2*GS<1v~UG2M}mC=-Ubj5@n4T@y.fq1ukI2i?eDK' );

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
