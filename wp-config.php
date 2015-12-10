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
define('DB_NAME', 'wp_repo');

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
define('AUTH_KEY',         'nUk}hA{F*dlDA1giL&}6AeD|wfT Cb-rUuRvSvjy_lWP*URt08W+_xc.*XTrC7lp');
define('SECURE_AUTH_KEY',  'qLnSzl/OiMLRC)k#/-NVb; ]AOv5<rU tJ2|j-9/|!r}`F+!}mV*|=E@$;sTmM4K');
define('LOGGED_IN_KEY',    ':18vr,<M/|y`=f@c-/)nZ~icaiPm!TXF9LZ|nuyuTof 7fDA(NgT5].C]{U+:.0n');
define('NONCE_KEY',        '$%Hp|{_/A>[XG<_ldtau;(kXv*GN:3d{pc-zY$|$;mKaUt{p|~U2M)8i7<PZM*cT');
define('AUTH_SALT',        '#H4[VGq4q>9 >bT9*BFNA+jB9xv:Km/;Px|w~7<;:)!`jFeBu4Lqs -c31T5|Rz3');
define('SECURE_AUTH_SALT', 'CP@$j! P5]+}C#5I M+vP>-ih-}4eARQXt;0(:;k+[~x(OiOIbZH7P$Za?u}]}0`');
define('LOGGED_IN_SALT',   'g!fHN)CaL{,zo8lOB CZ_5!!/{FhF`J]LX*8FrHA;CWm@j6^$-&[m]*hc_r{-5FH');
define('NONCE_SALT',       '&pve|.b}ngKqo0Iq447QQ]-(f|`+^M4X6^|d3)~L1;-. B2jLT::!$X._LW?eIj ');

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
