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
define( 'DB_NAME', 'myBlog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '!<]zP#2>nS`ueCQPV( EZw!RqVXl):JhUjiL1AEq6lSgIY};GRrY jN9s=)pISp8' );
define( 'SECURE_AUTH_KEY',  '^6BU7}f<Wn~[B,0n)-K;K9<r[>DJbI}ylwLhtU-JJG;Das1e.VVBW28=7$Ozq/|:' );
define( 'LOGGED_IN_KEY',    'MUA-yz^FHE*[v]e@F`SF&[AsD9R;D3xtl8!CV%>kvP3pRu3h [#I=207,vV}7t P' );
define( 'NONCE_KEY',        '/pyT3EGn)z|$Qj*LR,vo$@9SDgn4t9J>S~/}?+zHPaF4(/K{ct#_Yu-)c(hj#C:w' );
define( 'AUTH_SALT',        '#zMh^4Y @U#F^f/f~yv|I6U|Ksh 1Sze~M{nCbPSv}Jz:gv;K1d5u;U)-4a7KnRG' );
define( 'SECURE_AUTH_SALT', ',zE5VeMH8>Xx<-lS,&Dz0bs(>x.|O(h}t$WJSX1z4@jJ(h#15I`:d^YO#p0cH;V%' );
define( 'LOGGED_IN_SALT',   'ATG7+S8Em%F7>.5vxXdY8dxn<B^BhV8r<t_mCnXjQS[SeH]%PAu$r/a6[vd!9,ZB' );
define( 'NONCE_SALT',       '7KZs)IdqAF Py6n9:]F4l*NqIh(omGJ!Ub6tGd2q?7dQ# x]5Dql@7$`N$,X&^QM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myBlog_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
