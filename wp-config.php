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
define('DB_NAME', 'testowawordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3307');

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
define('AUTH_KEY',         'RoG]Q3#s13km$}/1Z ofLIeE:a52A,2c -IG yi2DI~PmD+.h,[mvSr}D6Q?pU9%');
define('SECURE_AUTH_KEY',  'gv8`g|(vI06voc<+RdFrZDN?6OHXNOa_()+DcF#s~16m+o<]:5bL5bZzxqR~B6sr');
define('LOGGED_IN_KEY',    ';~rx&jxv.b753.&2-$J?I}&,DV|!]k#y}Uf3DbUFk!jfulCp%[tY}9t@;W*kUk5w');
define('NONCE_KEY',        'sR^i S{:Gj?P<6Z_Oxy&(%loU8!_t!T?I!m vxcS/JIMq!*X`Qx*%P41D_E|m&iM');
define('AUTH_SALT',        'vPzFsufVEgy75ld=qI3E`5l[MEw~-|m0Uwu0YA.X[gG;!h0k]f_S <?;plxBkre{');
define('SECURE_AUTH_SALT', '[D?C)q<H=?u)19x%-geTYcT4+-D*_,wz]xpT3{7tk;4`HU7+b:(*2|Z2$t[T-]xc');
define('LOGGED_IN_SALT',   '%O}_6!25dneAq>_V7$mTk?936_B{zg{<2d05Y})+]LNJ,)3kKZ`n<`~h/CdNL!`v');
define('NONCE_SALT',       '*E3t!8opXq0;RsoAUD5uK_%3|;ky[43vA@|bS)|zqTJa@`NH<O{=0i^2%o3)d0x5');

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
