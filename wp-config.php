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
define('DB_NAME', 'wy-pfs-catalog');

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
define('AUTH_KEY',         '`P]Tapi!CI^4<{-50%D6-BGsP:K@;1+0POd{?[RFoyx!:6LF`{K?WqoVv@C,!`s~');
define('SECURE_AUTH_KEY',  '5B#%,kOA @=b.&eq3be2^>2H-7kM0wgxq&7=]uVWAU?5ppAd^:6D:^YvTJCMd;^V');
define('LOGGED_IN_KEY',    '02Ml<206!;ajmbzeS9.9Pkf(:~j9H |.BrbJ.NcsR9oImWG+0(ei$-)mP68yXj~3');
define('NONCE_KEY',        'YY&f3<&wqen$L1,-/^d%RVfnz4H6}hF6.bdQ%:eTajV2+{-h(FRVd:pRf*!nz$vR');
define('AUTH_SALT',        'BjO,fKC,>}[]AiNPqt6GVBck_0B2bcL0I[AGGh[3VWo^6X*eeLW-ER)vGlo@xzZ{');
define('SECURE_AUTH_SALT', 'F+mIGN6Le1ZlcC26)h|O4LdMQPzB^@ VK(9bqqO)<(i?h4}8/zgbn.OZB71(aa^6');
define('LOGGED_IN_SALT',   'q#t93l5>Z5sz]XDO]7cgf>@aPHTqBO9<ao7UZP2h(Uumw=W+w3r$X^yr1o?S?Sz,');
define('NONCE_SALT',       '_2GY&bYOYBND7q6R_}EUyy~-V6C:v*p7~1o:#d:Y9$R*m_xrnJqKJ2TEfrYIq@Rz');

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
