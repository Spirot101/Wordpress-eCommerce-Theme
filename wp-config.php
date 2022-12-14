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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         '8Du_3py)&|g$uY5{A$ln,RfxnhmeApwaTU0~GX!vTfj-c5}48F/rQ#?]k$E:%q(M' );
define( 'SECURE_AUTH_KEY',  '?=fnaNaonh2.Qr#Bm5NDHzc/bdM2fMWWb+qAhL-B}){s7m>4Q:>(^?=p1$FCG=iA' );
define( 'LOGGED_IN_KEY',    '~X8h6~wovZAB;zKgS%f;ZdV&dOpb;5.nP!+acJOSL]6dEx`s*~ Yc;F|sq=<cWG2' );
define( 'NONCE_KEY',        '=&$f=F0Qj&4YNYxVED#4fx&%=/j?4<_tS-;w|i#,)VY8xf6PUiVi.&h]x(v09pAz' );
define( 'AUTH_SALT',        '3CJ:zF%++ ovJ9C-2zQYHw6:/YAt=Dn??3.T[H|btc#v8Xt>6Kq &@ u34jK!?zO' );
define( 'SECURE_AUTH_SALT', 'k^`NLR$AEtXBfNG}2ym1)V6nzSa8c(IKUU5Q9BZb3 [.>JNceqtF*(g @`v(]b?J' );
define( 'LOGGED_IN_SALT',   '^X,z.jZ#[ki|Qf51C8BWzx@XH_{#O?HJ?pQ>d}Y9q6(04W5yi>u6QkB1;jbP]r1#' );
define( 'NONCE_SALT',       '-K;wc^ecS<V7;Q;[1ll05~m/)}Zn2sFJ6]4O.BLlkcf@7;R%~-!(/%*UR6QqfHN/' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
