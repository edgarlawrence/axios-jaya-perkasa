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
define( 'DB_NAME', 'project_hino_db' );

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
define( 'AUTH_KEY',         'vDYEuu}CyQz$A5v|rC|&`EMoY8>ELKHY#r*,V ]t5=C4f3(jCYe5X6Mf+drYS#r4' );
define( 'SECURE_AUTH_KEY',  'PrW?GZo]}^vlp}wMUiTn#RjI1-NFBVYAHDtA`sI_Ltod;$L4 UXw{8V [sz,$v#2' );
define( 'LOGGED_IN_KEY',    'u|e9&cXy7)lH+u5 }/8(2X#0qrWulB#o*])pjToV$nZwmjv.C^4GIQ!XU%Ac8IJ:' );
define( 'NONCE_KEY',        'V[`QzkgEa7M2O8,W?X`Pf^._;,8O;X%R>X*c#,-1($dk}Q4lK*drfJ^_h/i_`so%' );
define( 'AUTH_SALT',        'Mp0JT@RwOW+J<gt{{8o%}xSgt_7-6PcX`)~}oqFbdL}#[(s2jJ.O-RrGJvudsIKh' );
define( 'SECURE_AUTH_SALT', '740jpsl/$E[fAV@I5s3R^7-43pA%|Ou1U<R0pw(Bh3$q4IAaYVSO/H4cwlf3uodv' );
define( 'LOGGED_IN_SALT',   'FR;OL=$v=DH&c.j}Yg{=A/F7{6XB~|Vld8p=DyXu~a:Mq)<E6Gz$r%$hrvw#/uBY' );
define( 'NONCE_SALT',       'hX#@UbY1#|_j+A8)skm8z:Zipg;k@l7$XulrT)>OkxUB~}to!{DE<p@V^a@zh!Ze' );

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
