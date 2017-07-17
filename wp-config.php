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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         'Tf?pS*&z*w7wm0K*1aRur;VCQHYi>d5.~dM`-$<$IvH$8a4m.]u,,.--8Sy}W3,O');
 define('SECURE_AUTH_KEY',  ':<I *(PH22uV$;|{3_/|S9AKtnS(`*l;Lj`-C1v?dK6TpA7*@|%)a^8Rm+s<[QkT');
 define('LOGGED_IN_KEY',    ';[;v|CDV! t<=@P /x-SQYfRqlo8h6Fb{yN#%xToEUD]aKO_&X.(dja$Q(`wK2QI');
 define('NONCE_KEY',        '%R!Gj]eaeU.[re pMqMnI_?Zjw+~dP^|0q;,wgTehm59$8{)+r[Y3+| U*Y-gzDA');
 define('AUTH_SALT',        'PvpK;,cHAvw~jttG=Ad2<_:n.B4Ahw.Jh8v/UIaLxxleXgD_k)7T!bD9uM,@=(Yx');
 define('SECURE_AUTH_SALT', 'e9Saz=fM<4-v-j!,Y-F|c6~}Y4YXj,n,w|[+/Ou`|LjPKlC?y(r)1eZN*4-Nr.YR');
 define('LOGGED_IN_SALT',   '3<03e+A=/Dy6-,z!5DjNln;rn[pzg-ogmwhANrW<MXW<&~wb+NRwN^UA7L=xqrwu');
 define('NONCE_SALT',       '82LqoU}<2T^ LijVwr<?8Q+V;x2SmZ#^C@-9G_>wIS,4++R0{kP62^U(!@0k@w-J');

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
