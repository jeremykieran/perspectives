<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'perspectives');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`e9gZtmWGhIVK(kyc=$|_ln+JXbUU:?a3-}3>Y/{H[(a^+)?+p:W^lT_fF+ 2v/=');
define('SECURE_AUTH_KEY',  'X^uzdS6c|%eU4f-<L2-U%F1+u^/}L##f($kQV8GL^qsxR78|Pi$;F(:G=biS%X)}');
define('LOGGED_IN_KEY',    ' pCNc/rj<m>StlksOcEC-LSl${H#aRRRgKlZi{$RN,tDT%ayJi] lq2:V~!t^ReD');
define('NONCE_KEY',        '.:jN_?A|`CMsL+(`h%0dG8k(N3c7goe FBcS29{u0|Y:~14iZD6N.(Z2(csiJacF');
define('AUTH_SALT',        'Wp=_&*@`:/`c.6/6IIQR[ytK5k3+@%^6<:p_2h>YC[TD52X1`,Yo4@5.k5w-TZYc');
define('SECURE_AUTH_SALT', '5eJHXe$d*Y>.[C!zu_r(A=#N6ZqvQV-!WE#Al{qj;Z0^et3!lqTK[n!T$S+2V|(U');
define('LOGGED_IN_SALT',   'ugRObD=w~2XJkr?YKJi$u1}wkSn{4@/Mp*x%O;6d]>3u+t;1>O2{v[zxW|8w~(`j');
define('NONCE_SALT',       'h6W}~K!u|cK-<*^wJHUg)x+|Jw@|T ]|kdZd:|+RZNH!bm(z)L,MR+8z2|sw^E=u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pff_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
