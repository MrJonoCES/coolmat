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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'coolmat' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?:'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?: ':Ql.c$(Pxx~ZCScUSZry_]2ydlisy]~thhyL*MeDw!%h/:GV{nP$5w0$:2Ve?#b|' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'X47!M/L$1oD3}l +9+-N &|cK1OI+a|>.@z7,MleZtV#v(_?DAK);R2oeXA,7]ar' );
define( 'LOGGED_IN_KEY',  getenv('LOGGED_IN_KEY') ?: '7P0!I@dL4Gq0<AJ_s1]PAsQv^VczMK+fsa~]F`3GO*[9A[lD+6b=,HsB~QZ$&F_-' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?: '|:k2tUp=fT5a(x>e>c,mvL[}S=Twi&@=;o9H GA56[-99U>&)Yi8>ApLzqGB+:fh' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?: '5XsW}J?e)w4!yr6E7_h:@vpJPKn0yZL0o^iQ^&Y%.~lzIUNw]Oyb7?U-^2lA-~Kx' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?:'AO@oi-C||&_zIz-neh=eO4UPbNk$sl[.JdZ]B{6gfo}|ul! R?b-tQ*vAFO@o]&8' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'Y0?7XC;&vv_^YWL7BuOB^q-Dt!wa;gePxNJd@Dm==0>8_73R)2:>#|l@y>(&;-he' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?: 'fIL*RE0E9Sh4;:7s84C/j@sJAZG5ZkwO[g~]R7cSPk#*o=-;49v[L*fJ}b}/ChZZ' );

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
