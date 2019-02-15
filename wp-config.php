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
define('DB_NAME', 'wsn');

/** MySQL database username */
define('DB_USER', 'wsn');

/** MySQL database password */
define('DB_PASSWORD', 'Tieuch@u1902');

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
define('AUTH_KEY',         '#O:[q.9RE}a|ztom4W~k42rsa9~(BXoVn?|*X32^_r[L]@iIlNEy_%+S^3YMM~W[');
define('SECURE_AUTH_KEY',  ',a<J^#GZP+oU#;TQ?D&UOj[2Wz_F_A8}u+3c(kNI]u^7eub>VlgYYE18LU6YAhYP');
define('LOGGED_IN_KEY',    '5fo#(*2IV)=@?q*TckOhk+zSN3lPbU!p%t@F{Cr!-:C0LyzMW;8+vybR)}^)&TIm');
define('NONCE_KEY',        '=ox9?, (U2!-rDzXbc-gT|%g)E8+0GbT@6vK2*#h?D7U<C/XHt>56Rd}e AycOP=');
define('AUTH_SALT',        '.9=2|m9S&`4/--(Om-?0k3x+5[E+lMN!FVEPrx-$a.HaL#$g,Nm31P c[Jflk<QV');
define('SECURE_AUTH_SALT', 'iKzx>jc>.)@Y(8^.n%WpaJT2Hh/aCmp[eLZD-!nCpW)iaj0=y:JFD1}k|{1+2;s!');
define('LOGGED_IN_SALT',   'j-1z-+=0]?FUl4&Q-5Pk5K+SA7;8VSMjp s7v4wnzi~~(+r(C%_5)3ucd?ci8pzi');
define('NONCE_SALT',       'QAY}n:919218U#T`p:i@*(27EcaH4kPhscGK:irz&:|0;,,UB+>T)+HCVjQ=aR>#');

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
define('FS_METHOD', 'direct');
