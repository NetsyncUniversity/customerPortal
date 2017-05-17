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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<5`xM|G%?`)d0e>zT8xzgrLD(c4J:xG43w0@_a|=L+>wB12aV>n_|6tC|D9;Hry+');
define('SECURE_AUTH_KEY',  'B1#rE;C:%2Wr?krWGIF[|=VR$(:|{BL7BqR-CtU/|Z5~KtkBkz-qKK^AXO|hcQn%');
define('LOGGED_IN_KEY',    'Gc(<@|+|A6;+-j(0-Ek5q}B9wxo~/2bN#|];uYO2-uGC <3Y#<[d:I@*7a}zXa<~');
define('NONCE_KEY',        '%*THeB-rsa-N^^`DsL|J~yKyJ9_6l;JM8xH<%OR$IN/tZe{d_X_B2YM[Q2#YY_@V');
define('AUTH_SALT',        'h^+P{IlAUUA>0vwJrv32-l`tt7S:3A$<>cS97o|st]z]-zk(u8JD9!4(3]{+7W5:');
define('SECURE_AUTH_SALT', 'L~ZL@XOjWD@C0XRum=`q]8;-X:1P84wf{R9w6O*ul]xh-f: +VNpC7/]<Rgog{gK');
define('LOGGED_IN_SALT',   'h_Ne-Ji_U=SDabx*5 @?~7teWBnfl=#<NT]@E~^}Mu-8c(Xky%O,Hu5[$D6VaYV8');
define('NONCE_SALT',       'Q|7Qe@:K+T)Y#hp13<d*#=CF}a5vYUH(E@~}` d1<k|)OOEUV8@~[+4Z<j?u7b_Z');

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
