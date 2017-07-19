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
define('DB_NAME', 'startwordpress');

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
 define('AUTH_KEY',         'grJo(Tho.bqiCR}I2wud,RI~6Y#-zhMqnQnW>:(}OQgZ>#q/bY58G]o/<WP6E,z{');
 define('SECURE_AUTH_KEY',  'a+6Ce:F-mk~DzKg&5,.6,t*T>;(O#-tgS%9^+g-pPtyQq0.}_{W0k;YOzFz- &j~');
 define('LOGGED_IN_KEY',    'O+x^P7_Kbh(q]nE#6PJ.h__4X% {5-Yn#/|32^!s.,E*114NMo-H&W<[X2F|<dT4');
 define('NONCE_KEY',        '_M EWsbe^,LD+F8.m+Yr&5r@^(M;Tu3 #,4f45.DF9 t&U63{[<ZnA4J61pM(xd%');
 define('AUTH_SALT',        'O+@t%uB+Su kpa+?Uio6mjat*d(,:7]8 &tv^$?SLcj*h|,2m,=hvJ^wx)3%}7KZ');
 define('SECURE_AUTH_SALT', 'C)3~YI%]+|IHp88$bIWBvK6L&C_H0x|dKU|&j[-eB:XKLm{$}G5n~#zn,|g9C%`)');
 define('LOGGED_IN_SALT',   '|]7%k= u6oc,9|Nl):w(u0AkL-2*JA@?v#K<{Qe$x!i-PR@+$_ ,%W3p+T,8zpaS');
 define('NONCE_SALT',       ' sI^a,Rfro<F|4`pasa~KvW,Utr14,T]/a3e7]]t`>vH5UKs%UBd8a?GQiGtZI54');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz77_';

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
