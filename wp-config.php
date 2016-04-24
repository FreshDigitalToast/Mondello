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
define('DB_NAME', 'freshdi1_mondello');

/** MySQL database username */
define('DB_USER', 'freshdi1_admin');

/** MySQL database password */
define('DB_PASSWORD', '8}78/aZnCD');

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
define('AUTH_KEY',         '!ZH{ F5X@}~.w8e&d^+ra&JQ./%uX*N.SAW0()v_-+T-p^0Qi|,WBu4zOnq-0Z7u');
define('SECURE_AUTH_KEY',  'H1MC{y_N#^FusHR0yCX2W._6xH?Eh-:R.93(|;k>eDldyw3hZVbUB=d{qn*m,_;n');
define('LOGGED_IN_KEY',    ':E),byf|1aJme3e)4#+I$p(srfbo-d|+X)kjf*Ujyjf#I9+PCZd * 2cbG<r4@E|');
define('NONCE_KEY',        '. SfKeL||sl32A%|_OmDhd@637ZEn=U+]cpSHHQ/02#]M7+Y)f TvcGR|lD~l So');
define('AUTH_SALT',        'X|W,9n.{ /2DiC:69_:W7IS-MDjy;d)fe1_~p]B|`Tq2JRJ^4p7v [-|#]hW/>Ol');
define('SECURE_AUTH_SALT', 't4+OwaML./[&oAJqq~:RxTK-|fV<3.vMO_<5N^@fWv:B@18;0&/?yt{6%K[b7^l+');
define('LOGGED_IN_SALT',   '}rd8|vb72DXOi+J6EtjTc?OEiq+vxtD~|^bNfq8*vLZ*|ymE_Ao4m>k)h#/o[2%g');
define('NONCE_SALT',       'O=+EnA!.A=:LjW ykS>{bN~dIC`O5684Z[4,FZTWA$ZgI6.y-]3CP@0Pl?tI9Y%:');

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
