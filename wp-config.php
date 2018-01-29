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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vongtayam');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&ZmpH0$C?d*i:V&44GCt#FH2r%2s^zfr1FP4#KwORUKEl$zXM2P4}:!>hN=tf;`K');
define('SECURE_AUTH_KEY',  '.xF,oexT(?X9~}3ci],J-c1 /dkgQ]V(_gX?^}]TYDhzuC$g?u?$H3J~0-P42bHA');
define('LOGGED_IN_KEY',    'KF{1k%>@<a@>0bV[-L({nI<c{;JUG9Jk3|Nv4&2mhj`VvWCL/Qwqk7:C!u@x@tda');
define('NONCE_KEY',        'G5n6XHn,}9F^xQ%9;&nZ [Qnusschs5*D75@q,dXxd@`w/^X8P&lXMKx!7vS#@^`');
define('AUTH_SALT',        'jM4c-PJS([sv3pR5j71,~9i+1wi-a{d^RvF!E+uQ8i7@X,|*4qhiSwxHIuGmsQ-k');
define('SECURE_AUTH_SALT', '!%.!D0J4)wj@OUvM)g*}*&KuuM*u8Qblf/h1;O{s+73E)}xep? O0NlTkhUUwcov');
define('LOGGED_IN_SALT',   'mlcB7?G@n&h{=W[3p,cIN*V<5^WSb]I&r!,o^gV6h(<ue5i$~)hQ+:w.`(2kv@N}');
define('NONCE_SALT',       'rYK{ksQ}!( hAG%vd$9hZPd:tbT-cg2FxC`-3n-[O! 81gh=E6A1x-vaJ)/q,mWS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vta_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
