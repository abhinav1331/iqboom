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
define('DB_NAME', 'iqboom');

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
define('AUTH_KEY',         'Ak:i ^ZaN=2<z6EC[+e)B(^)g_TFWAG%Pq4bxi0x-V-C*4%l!<+4+/:jn}5m}pq6');
define('SECURE_AUTH_KEY',  '^O$zNVPt.T%$pt``e`4n Sa0{Noy^&CZ~)#eVeC[S|,aTJl RVvS74$AR4;7h15-');
define('LOGGED_IN_KEY',    '9DJ.!KmO>ERioFdjKg7$n@~5,[)ieR4>I$M~K%=!QcZ:=yD!]3r8uQo0y~Q3z$UX');
define('NONCE_KEY',        'Ozm+njH`z$Z*;|!rdh!irm`To,j$@b!.{+5WRMvax:OMf ar6Q#8vNRvEGTIJCFV');
define('AUTH_SALT',        'y5,m_so[WHcOaF,^E7/@!s[PBGdIw/HnW[uW#*w%$*@xPx5zA] zAw.6W1>?xUcA');
define('SECURE_AUTH_SALT', 'y6;46F`H|]}EVk);3pjvi>Y7])@|%9}9:D~(Oo@~@*k#mxI.d%pQ3X&p!@(1Z*Hu');
define('LOGGED_IN_SALT',   ':O;6H0N#nG1I*{Iu$OE6]Va%A_kVe4,SUo~Aiy0r`eN3}AEi[Lalgk3>!45Y,a%S');
define('NONCE_SALT',       'Du`DqIUQ:e?Y4;{5q)&UZ3KZ$S[Fi6xT8]>/+I+c L0/y+Jn5kqNB=_SIHf$y|Cr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
