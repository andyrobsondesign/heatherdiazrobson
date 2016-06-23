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
define('DB_NAME', 'lisa_robson');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'v<g]nC06zcLwCKEJsJJ&sMp;*x;P0vYvfD(Jh8l#PHMWA|U;^&%BvnA^rJ[g=N3d');
define('SECURE_AUTH_KEY',  '8wy4|Q4cj<G;tH0r}tHrhpr&i&[G4!BEI]55:z9{[kLl#u{SvFr9qf<50w$Ybov^');
define('LOGGED_IN_KEY',    '?t~M+CuU0V_Q#7-!!)/&f}95-nV,jP(!xYU5!hNViB-7@V0-+35 %k)5WSPPij+w');
define('NONCE_KEY',        '>MDU:&%k#Pi!Tg)8Yor;gi>5,PsOzG]%FVyl E<lapDTUYU%~5RfjXv:nK}*cu4f');
define('AUTH_SALT',        ' dY^l|,?{NG*+AG)^}h~FdvZR}46yi^HhQmVM&A2qfIGvPpy<.EhNUv79VnLrs.I');
define('SECURE_AUTH_SALT', '6u5Dn>L>n-0_f1|^+c^(9nrYsA?%* %a6fz^!YE?>qIl>J#mv_qJi6VHVmaQ:~H6');
define('LOGGED_IN_SALT',   '``{TbI4BQ%n:<Bw[1XRdh]mw{!G+Xes+DCO/1$?DyUc77.d~q3.`W5LJn4fe!y]x');
define('NONCE_SALT',       'GN5zE.=hEH8#^uXJUc({E%Vc4 ?r.0}9gO7REA{jQsHI2`R)z^O,3t(`!w+B)gS%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
