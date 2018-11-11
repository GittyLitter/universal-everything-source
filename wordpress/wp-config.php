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
define('AUTH_KEY',         '<4E$A:`|SXhv:h1%,*VYlF[zFs/JShoys{-ZK6+6)]aWh,G}EX-&hU+*gCt &aT6');
define('SECURE_AUTH_KEY',  'Rj5[}J,|udf{LP=v!-|w(,[.yBTQ|uK%|sicH=sOJ94*q1lT4+[r3RgF@G`qDch[');
define('LOGGED_IN_KEY',    '5&}1DyD}`WB f6hKs|ajVIl{bJeafaMmgL(+,tFmb-mn>+pgu_TeN7`--6xGuSnr');
define('NONCE_KEY',        '?2QBjW%H==+J *jiF57pZuw*0}`A1TtKY<L*&wSGJT50L?Y4Y#~q?8@}<lc9cG8/');
define('AUTH_SALT',        'q4),r|@OkcYMEl-,m.-d)t/jPkfP+k>A(gb#[oV@+`/f9U8~%-T;dBPuhi*#Q*{0');
define('SECURE_AUTH_SALT', 'rIH2Pc:n|;T0FSH?!TY$x|hKmR1Q]=S]6{ Pb@-/@nZzM9z_4o{sY<1CP5^Ei!c`');
define('LOGGED_IN_SALT',   '4&g]niAScq3pATIpWD.L%S?L9+Er|x<B=H.+-c+({2_363aKhyhBNi9Px{dR:2Uy');
define('NONCE_SALT',       'K)m|ee`}H:j/J16V Q%1N+n0+@ki7=i *+e+cd!cvp(;,;7mVa#26Ey+d]/xk@hi');


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
