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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'DCAdxf}s`b+^?p|+LS 6[j[PQi+xo)W]o+2)+!u)KO8Jnb^~oV+y-qyhHiJJJ-8%');
define('SECURE_AUTH_KEY',  '2Ljvv<_$-#Ry, c8|@iAdM*Bz8!.6m{9MKREoOwWtpHS0yi7@=}/mkrd]LylVmln');
define('LOGGED_IN_KEY',    '_7&yB!uM`:cAW_i|+obx=C?brJ*|A=X?v0Lz+<TX2D(LM`+?UYo]w.FWQN?oJI`M');
define('NONCE_KEY',        'gpmEI{PklJ+oYG#2RSm.0tv7&SK]F@M$z`[9eyX>X-]mHV_i!y@@gyFy`P1+Sg6f');
define('AUTH_SALT',        ']A^=%d`,v*1_EU-++ewQ:f^<Tkq.3hnp2YGr`=P*;1*e[}I+zZPg:lKH:wn?(@k_');
define('SECURE_AUTH_SALT', 'Ai@S;}gC?HB}e5ZIk(*zK@~iw*?Nhw-hBh^>b>o2z~vuFB?=R|dZzPr&q+.bBEl{');
define('LOGGED_IN_SALT',   'es-@?}KVW_A;# 2TkE~mS4=$zNQ4;27nlcPE4h-=!B`?qu@X{vdI;9/|k25C22D[');
define('NONCE_SALT',       'k`Pg@h,`pCRmpwaH(!fh7N4E6qm4MUbPe1Pce|]_t(k86A(Wo/~~y=r?uf+QriPv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
