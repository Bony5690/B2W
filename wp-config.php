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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'jbony');

/** MySQL database password */
define('DB_PASSWORD', '9pDvZpCuKz2tun48');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         '18|!E:-A)JS!Q8h~p}e;kTv:!|@lG&|O21M>sn23Rnk(5mJ;)*KG7D[hN4s!2j#O');
 define('SECURE_AUTH_KEY',  'R-kK<lNO/?eYbxs:W|7mhh`Jgq^h([/=+)s 6aerY,CRX)[reCWB$uK:g$>lB<CU');
 define('LOGGED_IN_KEY',    '@tT:kQ4_NF(`BomOz>zuER{i~>[%mWs$-5?|,+`-W9y8Gj5k$.5=@E=EWYj3E)e#');
 define('NONCE_KEY',        '4/]ZC-n+^3*E@g&TP!_8+b-mBWn.<BrZFL#jSLWD;:|ibM1alBj@c#A@jIhd:>`;');
 define('AUTH_SALT',        ' ;6cHV]c.aVUas*cYg~g-DJ%:FJ63v w|$_@W2Y{yVXw6;P*HPnEc%;R@|,^||hS');
 define('SECURE_AUTH_SALT', 'ix!]?^8`Z<^]PnI>+F,m|%b:1JI/s6nV:^p|yU5fN%AwpXx .g)KwR9N`PZ9YOK;');
 define('LOGGED_IN_SALT',   'F<d[I};(+%*h+qbu7[+%bM/./s(..WgJWb:~J<HxVc{<!A2, i-p;S}qoRi|gi5K');
 define('NONCE_SALT',       'q`}4z-GNuWsOOL`M=!LF8P]g~._{g,X>v$Q0w# )rIAsNvHO59m+tM?hS6-$OTP#');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
