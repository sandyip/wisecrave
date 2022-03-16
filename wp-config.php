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
define( 'DB_NAME', 'wcevs' );

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
define( 'AUTH_KEY',         'l6e>EJYPxN!8h-t-H/zn~Z;k{XO[gJF^-eh~MeqH^qJRKI`&/Hg}rQD]{n.DAt*B' );
define( 'SECURE_AUTH_KEY',  ':/Xa*[H_I1&!h(6p]^hrN:@WfDlA_Piei7[Ba%_@RItO^gH={@tY(2:}:<gEYK6i' );
define( 'LOGGED_IN_KEY',    'oD?GZ<Z]chRFU&YYV~{8[&aq?gt)wXMWIn[Ug8|9!]^T&Gl u}KzAa=OAMb%!GSB' );
define( 'NONCE_KEY',        'XLY<3,O]i+mqPyA{]]S4C%?3Zst}p53fye1t1m^$AikR|+HG tA-`Xs#,3^/x)kF' );
define( 'AUTH_SALT',        'fXrfNrYI{6sSW.PJ=T;-?Qsi*O/l/{fn7bXJ 6)f<+W:pM5o/=-OTP;_:5[NCU!)' );
define( 'SECURE_AUTH_SALT', '_+U2{MLQDAE_s#CZq(S%?u-N>I8q_EMBT~;0l&[BPy7M/A,*)6TvM0xVECuUsrsI' );
define( 'LOGGED_IN_SALT',   'Z7%H7`GMPht,%dRfbfUD<z2mP9sv<k6o<9A<V]Vq@DYBnN|9sA3?q%JmG*`n7VYx' );
define( 'NONCE_SALT',       'b+kjv|9w0m>QokIC,ch:Mo;=ROt!T@ec-`%jXimQc3<hdB/?_xYeO+_.4/Ejvd;D' );

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
