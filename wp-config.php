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
define( 'AUTH_KEY',         'G8f1]9+jE@.,8{vi55m6J+vEx9%e$w>BCm3k}@tBdX5BSwZ+&VHu_5laNQX>>8.)' );
define( 'SECURE_AUTH_KEY',  'SjNH ./Xp]o8|^x#?#!H8o!6-hawj5ot`zw`%;v2mg.^FxBSNa406Z*c<=eq;O;B' );
define( 'LOGGED_IN_KEY',    'UYyS:58g4]n/k3czIl6Sumqw0,r+/U=GyI}m|~<qMxak|+`Er?l)Z.T2#:NA4Nn0' );
define( 'NONCE_KEY',        '.p@:hVjYDKAiC <[DE,pi^!w:F%T[_UcYf38Dx]ti(VYR2[MXh/UF}DXqsQ.roc$' );
define( 'AUTH_SALT',        '}RTQS.WQ35b @mbs)x~>]:x(Afn4o~zcP3hc`yvZf5O|Lu^D{#F]?YzM:YdYh2@x' );
define( 'SECURE_AUTH_SALT', '7)h8 *XSEq-fH/f hbH^.`<VSYPBG;FL~x=!y_%0#g?^*joFT-GSI%y GwwH*4#;' );
define( 'LOGGED_IN_SALT',   '& ?/ANfJ``{H2:ne~80j[FnAvR._RNmZ[^ v$F9,K9zhW;97u!7_0t#&2-a}#y[$' );
define( 'NONCE_SALT',       'aK5<5]o#I$oh#~yQ>KJ=vmtZ70R7#M#cK<zFi`~Tb0p{;6lw.{ACu{s9E-8oowY%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mj_';

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
