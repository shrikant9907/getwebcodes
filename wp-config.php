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
define( 'FS_METHOD', 'direct' );
define( 'WP_HOME', 'http://localhost/getwebcodes' );
define( 'WP_SITEURL', 'http://localhost/getwebcodes' );

define( 'DB_NAME', 'allprograms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6rpSXhSJ?X=J@u+c!z]Qq7 p,aH3pqGg!R+@~WdSQf+`rTGKc*/lDGNtJ^$)Ly2l' );
define( 'SECURE_AUTH_KEY',  'e+ FPLE-JC!YW)^v|*EeyEa+ays3nX%lmJIIbrY}N2 Bfm/{{w%Lt`fRd j3/h h' );
define( 'LOGGED_IN_KEY',    '$O=^iR3dg!}BwNR&|jgjA(>[,xL1}B+BB/*B$Av]~vDvnt*Kg0z%@53^WIG+<~*&' );
define( 'NONCE_KEY',        ':I(^pZ~dz6#)ito3YTXoYkO<a)#^@{!i8N^e76!a|jQ;4J[S~/O<N4Q3rl<e(.*p' );
define( 'AUTH_SALT',        'oJfIYJ=z`*|^-<i6Sr=~2Bc[k%gF$Wa`kQ,W_UQsi,~WYmlA|GL(HJmGjW3By89s' );
define( 'SECURE_AUTH_SALT', 'e:%TPjU:|8(z71X0jVVK#RBV]_Jp%NOx+.PB_9NqIvCi0d BS<W$`PZtOPJWS`4 ' );
define( 'LOGGED_IN_SALT',   'I4<oknVn.>j_wCJ7fM,}&Z ihRREd4mIITD;N.G,l8Fr4Z)()?Xq#;^Qs`d#KIjg' );
define( 'NONCE_SALT',       '8{0mK`an~I`yo P/LV~YP7]X/]qSDEqt^,moU<JtZy nY1<taBD7+~n]k AaCWx?' );

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
