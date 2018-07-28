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
define('DB_NAME', 'db_lwhh');

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
define('AUTH_KEY',         'yB4!WH V-S5X^pjEkb|LRN-YPf:2fe8)K>FI8L[yv(t.XPL+ZWdVIIQ*?<8Aq+VF');
define('SECURE_AUTH_KEY',  'f;GOSlUhijR~qPPOKh_KWFfLyYlsHG2P_hcqq|`pLaYKB>88tbi 8(@T<p!R[x?H');
define('LOGGED_IN_KEY',    '?ADi-)#w/8bPVs*xFJ6Kr(k/EN<S3a]IdzOk}Ir=TyfXo=&:%8{ZKi:B^_&XPJ@7');
define('NONCE_KEY',        '*8>vo0#<2T-*jq*,(*jXb/L9U7w-]s;Nw#}@MKF>v;uP>Pcd6(RdVqjrk~wp@!}B');
define('AUTH_SALT',        'NjbUdzn)H^)DK,4BXihxt|nJC,mg`p@pW]c#xvJ/6@:3wUh}H!*3D.iSKUH.m6W4');
define('SECURE_AUTH_SALT', '1=e8)+,``xu6X^::Dk%!t&hc-j&;E1L!xs`IMls4<5th9D.y`>-{02M,Kw?o.B?v');
define('LOGGED_IN_SALT',   'FSuMh7PDPaxx`[-?t-v#EmLqzAHWH5key2gBg0O5z*B1D9KZuQ=0TlRZX>I}A*BA');
define('NONCE_SALT',       'ldGm;l{6a=?nU#vV#S_W(n+/z-UpxlB~l1mGz>LuLpz3_]VX;)Kou+`0J}K&Q33~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lwhh_';

define('ACF_EARLY_ACCESS', '5');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
