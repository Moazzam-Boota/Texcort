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
define( 'DB_NAME', 'kang' );

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
define( 'AUTH_KEY',         'QJRRHOhIAVFGLnu2>}B2D:<+}2~T?l}kki2|:C}imQXW6d6ydrPn4ku.;INQ#-+@' );
define( 'SECURE_AUTH_KEY',  'H:OJiI-T+>qi,]h*$;z##xk- |y5R&qZI~EJhxA?)1|K!3|kMm;~65y#,}gZUO[>' );
define( 'LOGGED_IN_KEY',    'LsF@(|bzq#:V16jQvikC^K4)qz7>ea;`81SH8TY13IQ)ZNN?DO%WK_*2Jg%&zea)' );
define( 'NONCE_KEY',        'zwrpMrop(--coMVT{@M$B>a56_t]_v1*p#WEYEZ6w%V2XHWeK.;.nd)7HU.,[xu7' );
define( 'AUTH_SALT',        'S-UFRKr%3VFT/%j~?(,p=@)g{s*CM=;jO`NB{<@pzchldh]H`+?o]tarspCYz?a#' );
define( 'SECURE_AUTH_SALT', 't^93jwLpKH[=T]B [%L&HKXa~iR9)CtSm*kTJ8-/*^,*acx38~#HN`{}+N$B[P`}' );
define( 'LOGGED_IN_SALT',   'r6r#AEx(%/PfrmQ#[3c/`gnUU,U{/ Gi*;77+O82QF^y#Za%3wUeTUN7>>D~&?-6' );
define( 'NONCE_SALT',       'LTq/_H(PX?BK*($GX0-)49ZDAbJs4q{HmfA9VI)2|Vznb?Yd^akX*gSl}8TB=K0{' );

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
