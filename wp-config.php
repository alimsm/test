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
define( 'DB_NAME', 'alim' );

/** MySQL database username */
define( 'DB_USER', 'dalim' );

/** MySQL database password */
define( 'DB_PASSWORD', '(.QtShdKM_BK_KAh' );

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
define( 'AUTH_KEY',         'iL~>gJj/oTt[ZKn$1bQ#7wyt5=@}rU=0i|<kISxtAXUzv)2}?Bd[p_>]K2~7d{O=' );
define( 'SECURE_AUTH_KEY',  'MB](>H._=ji^1P!k/gnI!9l0.}9yuNC#<km23B)y2O!X9SRO(%K9]}~&9;aWRG q' );
define( 'LOGGED_IN_KEY',    'wwVgj2W]CP9fZH4s_-HuZa>^b3NRKs`U(f/Y8PRqmLR>=aAFJVgD.a@+BT;.q=/6' );
define( 'NONCE_KEY',        '(SqV6Rp?8$QN9v9^Blsd:}7Jq:6^s^}U_[tWp%rW{i|vQenB){Tnhp31+U2|rob1' );
define( 'AUTH_SALT',        'XZS-M2F01SzSV++b!EeDti$gi1~mU)+?Mp,`EuC:*v#E]v4I[3~lY/gF~& GZ4km' );
define( 'SECURE_AUTH_SALT', 'Q[T2J{}fZ>^#phPf01?cs7..YyVRHZ8ON8fg~8hR[EX)J7YFDF6=2v?HvZGc8A|B' );
define( 'LOGGED_IN_SALT',   'w/S~=gHr=JTi53vEnM_e0SNv|T9JuWyO,tKT;.:J^w{ JM_^}_cu[.2zmguHw[cK' );
define( 'NONCE_SALT',       'o/BHTimKa I03Mr;&/[,YVqiyj];3-|ACF#Q (}v+mY{w0={TR#w3oy.HYp|PKRC' );

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
