<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'T.lA4-]ZvL>b_lc!3Ii[gwJzl>3cKaL!oXh4Kd]bPXt;21Ni}Txj<%C{}#^*4x|S' );
define( 'SECURE_AUTH_KEY',   'P{}c3fZp>*,CQqNBJhjd-&p* MJp2=OF08=hE2p1 +.6f#eLU?q.krEYICp~`<30' );
define( 'LOGGED_IN_KEY',     '_<Dnt,wqN5/~pM6;j*[`U^g;.BZZ52Xf;7:r 1O6P`GAY/4}m>8}<mwB6dAkzj^i' );
define( 'NONCE_KEY',         'gW+Qkb05S`T#0/SStt@1~p25{uU-F}Ne6`-dNxgpk!1W,e Hh-/UjX]WcR!^H:P:' );
define( 'AUTH_SALT',         'l&A_isuT OkGA 9~xalG;x+CIQBcj^2;)=Qku!E%paW!5J(-5tj*@#Y/`-}jw$?v' );
define( 'SECURE_AUTH_SALT',  'o){/tt#hq<z=:MPv^68W~q;qjxGrQfj+rIewn{O^a4N=30`7(7O#W<3TLSKO H?n' );
define( 'LOGGED_IN_SALT',    '1HV.+V5yw-9DPVt7g:Cb~7%U+`:nUxbG3L 7H4S>h>:OKM_MeYDyRv>/LZ2@]gYj' );
define( 'NONCE_SALT',        '2=ui._}d){A $NxEn06#:v}a^;CkI L+H%!ni8?ZlBgCvHGS_/M!^sRLU9Pd3Z.z' );
define( 'WP_CACHE_KEY_SALT', '~_f[)Fyk&*`>Vn%Im/1{ZVf&%ts![*~?rL^T,,ZV:5]nNvI+0>y<wLZ2~H-;6P<Y' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
