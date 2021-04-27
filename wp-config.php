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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'mXVscZ #};sD$6k&%c,NPab}l^8Gt w14KKx`SEz77=T7~ob]<o< crh#/5ED]ux' );
define( 'SECURE_AUTH_KEY',  '7bgi=$hH ktQZ8+t#b]Q6b4?mN%nuQT+ K`M=]LcI9y+_5R7FRFJ0-`Byo#)0lPb' );
define( 'LOGGED_IN_KEY',    'aoR%=PS#?YT_6B,X^#=B71S*,r7Yc#??!.K[V1<tzga(IE4UKleDEqRK(Qfc$)Iq' );
define( 'NONCE_KEY',        'GX:Dx6rd6Ml)^bz#MYglYZH0{km# WbN|&q %/NRwuY8E3~*6)K?EF&GhRCAV3bC' );
define( 'AUTH_SALT',        '7OYnV5?vewaH/1OwJ*&$vZ_s!FE3Lo5;2iX%}0S1c+k6B5*OAPT`qRy<#@F^g!8x' );
define( 'SECURE_AUTH_SALT', 'GdRW Pxa:u|t]TGq0S./jRB?C^2{<z%!,yEDFfAaTn$A)Uwmx-&n&Yw%|ZnmEe^t' );
define( 'LOGGED_IN_SALT',   'J. )78zaPa4hnH:}I!sHe/)lkDaf?TMZ$?+LLMMIl8B~&$EB}.4i;ZE!b{pwczl&' );
define( 'NONCE_SALT',       '0X7WFN,}c985oz9Xo%,_N{S5DSV&Okr@D2[#yh07SizpP&W~0C6WHZ!=AE-%8;](' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'turbz_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
