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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ui!}xCYQq78d;ox(.:RLL,+)D3.8e-5E%`c/O&b=IcE3*Oe@.at^}Y5rw;OZh>l|');
define('SECURE_AUTH_KEY',  'ts]Ffhif<],>`-}aiRW8i/`(LYY}[%:X4paw~PtNML=[NS(S8|TdW!:#rmTSf$3^');
define('LOGGED_IN_KEY',    '5[@:z&i%S:o^rx]2X}^%UWjUjXCfoamunV3|YyL.9+c8O;;Wqzg4glqd~y{>@i@N');
define('NONCE_KEY',        '|@;g~s_21;cTPFk)d6IlzvCb}b!T{Xn{ozun7KZYu-ro1]`F:dZRsQJ|2}v6 nx=');
define('AUTH_SALT',        'AOOOcts)xR:8s: C/!Ap(&!ge@y-ag`x#yAm#M P&;FKhZ?5!;O(oVMB?&?29_]J');
define('SECURE_AUTH_SALT', 'jH&}Q(.>g,G_!,[t#+LM:uJleW&SQ%2c92P/rRV=q)T%=pc.M7K~9cw)k`d 55*O');
define('LOGGED_IN_SALT',   'ocKV7,%6Wc51:H;v^Vu R[?#Dx@q(7@+DS2p0.V9y~M~J(@#`;io{OR9.{0HMLT@');
define('NONCE_SALT',       '1ZBfC.|?n->.5|I@Z%+< &H//VedeE4F}w?>_pG|M@ABD77j`8WQriKqzp6+3Sto');

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
