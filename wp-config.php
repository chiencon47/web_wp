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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '>[EI&tW_lI$a>B?szMKY4}r(;ow]rdL5AQ#G`41c?l]5jQ9WA9f`*<I@M!Rp/eX,' );
define( 'SECURE_AUTH_KEY',  'egP%Fkp$AY_kK$b=L2QQ-Px)m`HzWEq#BsCt@|YqfswE+;-L0Q`dq;MoJI+E_OU9' );
define( 'LOGGED_IN_KEY',    'i7/r3I 8Y0u5Px,P-LOlwx+l4L8] (1aMhHjz@22mw6SO{`A_INZV sD:[0C-tv5' );
define( 'NONCE_KEY',        'Zr=HP3DVVZ;[8DTd@jqDx3x2f|6]MG0X_B/j{NF4Sk(Cn0%5plO~N;9`WJZSAagZ' );
define( 'AUTH_SALT',        'v>b/T2Y}Gt?KQ2^J-VSU :|WtWDYHS>JL,#Mbzkd!(]m5OV=^(D`MEqXNhT4tAxz' );
define( 'SECURE_AUTH_SALT', 'uYap=Dl!Q-raG5Sk#cAx =/cHX*SIUGy(@7dwkFIsd~^TJ oyc]*8`T.~^)Xz>p:' );
define( 'LOGGED_IN_SALT',   'JrQ+Dx{Brb0ghk6Lrac4_$L`3BK[qUY*FfKy0/>R95hP*v3+dmmHa_`NH $(^4~t' );
define( 'NONCE_SALT',       'k}%k@26tyfKHb$498<xW:wIGp IvwKlydFPJA0[V}J_W8yS#sBy78T]`M3&Nf[~A' );

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
