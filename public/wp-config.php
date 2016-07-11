<?php
//load dotenv package to load the .env file from the directory just above the current.
require_once(__DIR__ . '/../vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__.'/../'))->load();

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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '=d!7<Q-K$j6j!tj I,]&,TZL|mi7V+8:>/RIF$J+#5V|=]`kltqW4.]9B&We,Cs.');
define('SECURE_AUTH_KEY',  'y-FltB{###!1{Yuxe1f~.j5U&wSbgAQp8@A*yr{{LONTIE[PqM4h1K+_-W7XLV#H');
define('LOGGED_IN_KEY',    'Jyy^*w0`rx7O,a8p_7fhn_$vvFa>t;,-}(|,Ip|q[@_[+%2+H,?_$iAT6e@wmbw8');
define('NONCE_KEY',        'w|;RX)=`@[O>J.a{rQ/DZXc&c>uPU;5wOOX_l:p_F=MSk*mZL)EnF{F]#NbwccJQ');
define('AUTH_SALT',        'w$@5e$gHW[.]0A!8bowC^M]=#/~m?>>vSU^>kU_2,ym-;XIngZ$F<Z^+ydC7FSY6');
define('SECURE_AUTH_SALT', 'w%x~W6Y%*>*f8K1I_f[}~+Ow].MfaSW~Uy0bo9;ryBd2~Tf Gkg,#N-2h#I3>:lD');
define('LOGGED_IN_SALT',   'rP<T@(&$[vQ7^]bzeDw}LmM`;qjm:YYDJ#t#<g3Js~|c[xiB`p:~:=D@$417z_C$');
define('NONCE_SALT',       ';RStZ_`hF9!TY,@:jj-y3rAWO{miL6Oc@:K0Ykab9g+MFcE0>1C,RYcGY_`2*?Iz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_PREFIX');

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
