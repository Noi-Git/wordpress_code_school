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
define('DB_NAME', 'codeberkeley');

/** MySQL database username */
define('DB_USER', 'JAdmin');

/** MySQL database password */
define('DB_PASSWORD', 'fYXOlXdqlQoqiZqu');

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
define('AUTH_KEY',         '=zXiAqlO(-O*_[Lg:6QDN@NUIfY)QA;4|V$r3p8[Z;^M5w|[C^~Uy+aou;]cxr}S');
define('SECURE_AUTH_KEY',  'I!R`4}(3]*U6dWtURouZQqk!BVrMVG@O^(@dE#eUB!yb%_#NZQpT-qP|am[y? _8');
define('LOGGED_IN_KEY',    'ndQ;BRm<N%^+n?S6bh>+7&,i1L2?Jg>&B/o`4:^=@/Hc%w`(NRGw.pPinNy+|-l<');
define('NONCE_KEY',        'L$bF9GdTg1WDbB#n{!]y>>o@.5geO+Ueo5U9#|xG;c@u-jCYriI1<Hxi#u%:/)3V');
define('AUTH_SALT',        'z8bs goEi5> ,y(MOnF-0$mg(2T12$+YDH=bsI}eSY]<Q}&Ao7qav^bu`KIy@it*');
define('SECURE_AUTH_SALT', '$_GO:]||7AD.*+}8]L=&jW{O`M~EE)Ws2*Lm kdUw7qT#.C`hYN.ekg]&flg+6a]');
define('LOGGED_IN_SALT',   'a-J.7Xn+Um)LWL%8O/?IGClgL~MsbX|@m@;D<%ke;EqJm[z)nUN6=RC}1$=0Lb6>');
define('NONCE_SALT',       'EDyS^:x--g}VX_lg+<DiL/=M={ZK2`G=GJow~TF]{;{2EMi98Jsh_u||:,%*p0jj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbcb_';

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
