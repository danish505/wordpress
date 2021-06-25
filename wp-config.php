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
define( 'DB_PASSWORD', 'Admin_505' );

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
define( 'AUTH_KEY',         'e;IUH|z8<7Rj@;p(r)UOF;kZAnF2.=Oe6`#pr*hex%qy{Yf3[d%MHR]DC=|`x*[5' );
define( 'SECURE_AUTH_KEY',  '3?i>{zM$l99e_[{XJf#PYSeag0Y_pWBu4S::5oF@yO%v|uCO6~,K/w?N~q>48k49' );
define( 'LOGGED_IN_KEY',    '5%%PYpA+WZNjZdwcQL:U-bWn?Rw$ruxu)`])|_ t0NBW@_1bJIkd Baqq;]aHmF!' );
define( 'NONCE_KEY',        'J$IB:{}J(QhI/;3/#-aYUsZ)x+n2#%m:y20fFhJ]HZ|jNE`?&X:fBM[H&l/Tp1uG' );
define( 'AUTH_SALT',        'kqE%)V?,wwIt0Afz!W3B7u.1a({}>YGM4tM|upWIAI4/ S{T/H!b(Ac$h- @sm?T' );
define( 'SECURE_AUTH_SALT', '4PJwsJ7!~J2Ba^P=T)L-;ALk~?u<_TmZiwAOiZg0dbs~`kIChX^xT>aM1w<bG2;E' );
define( 'LOGGED_IN_SALT',   'w`Oyj*|E%8O$-%FV8{ZAY6}1?VC)gp C7tEs{I+/6R(V)d>sJC+dD_@n,{wQta&a' );
define( 'NONCE_SALT',       '+@=sjmDsa9cWEs%Gv:|J{*7Azx(g{WT[*ENg]/D>3?i%]ktwQ4#`ZxN!DPGi2@-0' );

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
