<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ikat-fabrics_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>WYgysgb$-FONsLQ%(C:)e!@PcPmlr$_ZU~C1=CD:R1dIdj}{pTo_MFS%-ku,G2w' );
define( 'SECURE_AUTH_KEY',  '3S7$Ld =(~)g[lv8UFRzObl]D/FFX!=K*6d|!u`h/+jwj-eSdaTqOmn*K:R`%SMZ' );
define( 'LOGGED_IN_KEY',    'H*-`(![NiZoc&|03nltwl_Z.+LK*N&J9YH.6Q2TSw7@4:^u5%eKP;`y3#<-5Q)r#' );
define( 'NONCE_KEY',        '@Jr^E*|tm`!W:U=AT>^dl.R6.[qGg`T!Y2@QN1eJ}qn5mi.J.bKf1jl.[30S K4A' );
define( 'AUTH_SALT',        '<h/j(MD9|w`6ad% m=V=}|jZRU}D?L0zucH;ssQaK}T >8~H?#v:r$uqb%vn.(o[' );
define( 'SECURE_AUTH_SALT', '3B;|1J}79qUGhbUK00:;uyIy;bOC?+a:jsiX2;rJ4~.:m~RvWw #oZ7sN=YE(}K~' );
define( 'LOGGED_IN_SALT',   ') FF(Z{%d/kGts},H(WW,y42]~A}D+I_dbX9[2bBc]tE%FGNyhqBc<& n!~OQ~M%' );
define( 'NONCE_SALT',       'UJkIS{f+[[dfEVzz><mT{:D8{|E&NN81#O&pKf*)NfN}ys<&!Z^8SY:58`cK$4$_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
