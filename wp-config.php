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
define( 'DB_NAME', 'skillbook' );

/** MySQL database username */
define( 'DB_USER', 'skillbooku' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'm5h+!M+#,+dJ^c$VSP+4u4=3ag]tdBcx+k:[QaKJLd9RIR|J4z)Pc@P{V38rM_m{');
define('SECURE_AUTH_KEY',  '3/l*|w=E}zg??.B%{-t70zKnmNMxC5+OBWI=kJ]NcjKkZ]-.F}`^KaZ{Ii1edY0B');
define('LOGGED_IN_KEY',    'P~<C=#-nJTr~9^#i39!q|YWa(jEvhj|<HNQtvdYy*+D|5}-%KXdpVdcN?HS+Q@(3');
define('NONCE_KEY',        'DrK%.VBK)$8Vu )EL~AGOnq6/-|J-hto,z;]CEj8MpnjR+`v(o$:#=sA|N-;0-+@');
define('AUTH_SALT',        'JY;/WC|v4_?-Xm-}6<8oTQ`<[?OS0vDPW,B,6D0`HA*R(^OP1oDB4fPj-?V9ky}u');
define('SECURE_AUTH_SALT', 'r:x`?v$:X*itF+cDb2|)IGTm|!y/5u+.mA!)+rISK=zQ!,*+;+a@t+.V5wZ2l3l^');
define('LOGGED_IN_SALT',   '_D$@McE?mh~n]6_]gjmSTY?f#YDOig1vSr^()x/jy9U,@5$Z]8`z<Fv!hL@wKg0[');
define('NONCE_SALT',       'IS:<3,>qp]9!*q+@Gj$?{^|cfPUK*<hR)<?q-9seR$h$27q[$n/h7n]a`YS<fM:>');

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

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
