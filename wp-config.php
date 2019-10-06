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
define( 'DB_NAME', 'coach_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'FM<p4<*7YyUDc>O?bP1G3.@vx#ZZGlXICUUg99#oxcf2,9OYeoU4(B&f^UBXsK0H' );
define( 'SECURE_AUTH_KEY',  '5|$-9*yX=AJ<!u?:@s954#-W`*R_R}HJh2w=a!Z2/%+f23Y&7P$X 97~O=}sWu]:' );
define( 'LOGGED_IN_KEY',    'ey_D`CkiW~1>LHOl>L?x+z3.8PpY[-rzo){FSKUS<L^?paZ(^E*@LGm-pa|!1`xV' );
define( 'NONCE_KEY',        '72,jKp)<+Lx$j){,M`Xlr20QC`Z.TsaiQOvT#<@:ahF&0Y_MYw^EU0680y3~%LTI' );
define( 'AUTH_SALT',        '9|XH*io/zv=rg}1);g$78w+8WTt^&=D&aLGg;:Tg|?~w,wur:O$n.Wu(To1Ck@G.' );
define( 'SECURE_AUTH_SALT', 'U]/k/C|G~;3pLJgx00!{6F[5Eyb|y*_K1a6bB*l89Gk*nq]DJWzy;V:no^rsnZRI' );
define( 'LOGGED_IN_SALT',   'Qc0Q<I,*KP1VpJXvx{Y,n.(x{A9}*l8H-@o_iiQ;2*!^eA?}mqEJW`Sf_we0 ,m<' );
define( 'NONCE_SALT',       'tGG/H)jK}iv.LP6N[E}v@L$ )+gq.c@O9j $LY8C`OJ5Qh|g=56xgfm*^Zsy}IO3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'coach_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
