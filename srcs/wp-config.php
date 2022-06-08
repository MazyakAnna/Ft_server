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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bmaegan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lolkek' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3}@P8joEi8/hA+F^LgB@}^Lahno Ip&|VX1f{!7w_Zi}^ZB$VxncW<o6NY1*P]rN');
define('SECURE_AUTH_KEY',  'B>-+/Xn**y 8rD~er^nT/v{_#r1fx201(<^0tUbjQh3?9-;.|gj(-XC-v=Mqv%XZ');
define('LOGGED_IN_KEY',    ')$s3YTc+c5<1J*{B@pqe#Pe~/Ee~pl,;WFQpsH9Od0s>j(%6}]osYCV|02)0[7Y1');
define('NONCE_KEY',        'U||n_PGUv:hP-+B0;R(x<o1C?LIL;0-34lt-Q~J+_8~FadLt=W/[u_~0/E7$%j_|');
define('AUTH_SALT',        'H*rx-&u4[nO/}h8}5)1b|#?h/T;1!uNdJ)UZf_x[a<6uLf%-Z&_Ly%m&Wd;lSf@`');
define('SECURE_AUTH_SALT', 'T&b&)ysz##81>H`gP8)m+.=qM<Lm mM|<!R^79sk^}[=O+aFl[C|Kr,#}E<9k!,L');
define('LOGGED_IN_SALT',   ';r@FHX0DJ4yliqvTK.)zkwn+h#J&_*2/_Vs1?BwQ *W+r_3s*!wR7 y Ly7QWiz.');
define('NONCE_SALT',       '_Mwk.[i]EQ-c6 ZU-DH#JV#&0qt ;h8=G%*35r!zU?qI|HD{xz_^R.~4v#23Odgn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
