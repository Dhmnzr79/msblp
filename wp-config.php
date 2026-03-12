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
define( 'DB_NAME', 'u2150284_wp_kamprogram' );

/** Database username */
define( 'DB_USER', 'u2150284' );

/** Database password */
define( 'DB_PASSWORD', 'LlqPxpRrHVxEaX6' );

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
define( 'AUTH_KEY',         '>_lADr~:U`*<Lg/y,6WQS>}@`Vs6kLR4`B>T&B&S[`Yy<`PI%+YJv:&zp7)i<)|n' );
define( 'SECURE_AUTH_KEY',  '33Gk3`jP?u&+9S|{}#LhSD3ztwj5^+nLCkc0xRoUmaP_=h<+)NHsSKy~L4^E4=@A' );
define( 'LOGGED_IN_KEY',    'OM<T_DW!N3WS&67CFt1IborpCU(EAQre;NulDSX4E$fwh5KDs6}<<eA42&LO9VjZ' );
define( 'NONCE_KEY',        '~YH%AUX/*$]lM!y=mLffvPT?V n+2o7r:R,XT6DuXEq-;r`5)pMs_T:i>N$j+a7#' );
define( 'AUTH_SALT',        '0{*s<5jYc7c!Q;VeMgt#2_5(G]_3ja= Ns1A,XVqwB^q%Vb}`sft.X[wMD&_ZtE0' );
define( 'SECURE_AUTH_SALT', '_rHT7c09thG!J_?jy2iMb g0*0=pa_%l2 =B?g.1c=LQp}?h&!oem:7dSt,jR3JF' );
define( 'LOGGED_IN_SALT',   '&c_`%y*d2r.[iKNANTlT6ltF[Yt3$yjwE#4I:h_grG<91}d GV%NN`(NyHNRcz|m' );
define( 'NONCE_SALT',       'nX<FeZBE}`!4$)1Y$5t.9}Suig8]4u{i(j%zg,fSJKaqvz29B]2O&$bS%`1XgCth' );

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
