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
define( 'DB_NAME', 'mastersicdb' );

/** Database username */
define( 'DB_USER', 'student' );

/** Database password */
define( 'DB_PASSWORD', 'pariSorbonne@2024' );

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
define( 'AUTH_KEY',         '/bFc%;IQr[+VtFOb0u{6?`LF%}J~XbFgrB-hU2o&$i]YGgm}c|nS,`X}jF/tBZ0?' );
define( 'SECURE_AUTH_KEY',  'wk%;wRy2o;Ng/X<VWD43M,x8APa}^ OvW@%&wR?i292ixCqHT}4f7;DIMIA%,8%>' );
define( 'LOGGED_IN_KEY',    'QZ:^106xVB]0J:3cJOS@T!([i?ygO&dcPD`~_Y&)9z7|:E_@Va@qM(]uKy=^Chb*' );
define( 'NONCE_KEY',        'uZGe- r ^1l$j(,CD[~X:oCa)+L5^n$)kAdyb;!V{yLEM6}*:+tzhc|Nv}(]=+m/' );
define( 'AUTH_SALT',        'wD:s(8i~1>|NYXwa[<dCCPlIfILZhVd+H%Ojr2sU`-Mg*R&X~n99:1,f9BtR)Vv_' );
define( 'SECURE_AUTH_SALT', '+IQ4ZV1W>-slM!j+-d%6wD8?LveC]=v% k{vn~$.Q:gKTd=mVFN#hYl$sh)WXFf.' );
define( 'LOGGED_IN_SALT',   'TwXe?I?4}p,=6Y;jv-e^z;u[QU3@+$<v}zSk<Hv96(Z5D(?y,Nc*3&}@j1*!k4kn' );
define( 'NONCE_SALT',       'ea:~(X)v:O1~QXHH&[hP&((ryaI&QE)WIan+Zda,MR<9S$Oz%9SNNEvC6h]HwV!d' );

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
