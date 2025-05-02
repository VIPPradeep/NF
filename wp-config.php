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
define( 'AUTH_KEY',          '};_tH.2+ZAxDtS#zU8HJJ^[Eu,p~J6aQ|&ivMo{Luh&kTY>ty@tS`<E^;Jqf^>Fu' );
define( 'SECURE_AUTH_KEY',   'rb*Aco)9()W4)%wUBTmj1:=E#))woH}a#z?]wKQ2jQULl?~xl04l^r_*|*`c];?g' );
define( 'LOGGED_IN_KEY',     'o<}Ow$daB8gX/*xasIwHgWo[a9L}A)Narg/|QP[s119/r+iP/zi]^/&^14%gl)OL' );
define( 'NONCE_KEY',         '-Y0 AV@2RshkKD)[GR~x12PFD]H|cp9351d}wRkA|JcJn5fFF}_dgl#>Fx1m$*s(' );
define( 'AUTH_SALT',         '6hXp%doMs@#:-?$BiL[VWN2:.ICz3re*;u1j$9NX)]t.?iOX^S<ktyh+n2Z1HAdD' );
define( 'SECURE_AUTH_SALT',  'rVBx@B!|X.|Vhm^6}p4I:GtW1dL.ed1CR0=O5nYmUwSSd Ty8wU,K{4n{NB+*CJ/' );
define( 'LOGGED_IN_SALT',    '9#`0}Bs{xwR~g. f79HrXL6q~f9*2E;!^vKM1)`16tfSVBdjC#s|98*lx=4@nuz-' );
define( 'NONCE_SALT',        't^/%?kJQY>e>hY+/+V,QTHrk?r%i%Q*Pd;{=e`R2q`: 6x*:SGPNND?IA1Y.K4mv' );
define( 'WP_CACHE_KEY_SALT', 'S8QEO,ed|!=w 0&;rx,%;szRCNzID0cax1`/,/5y_zU<Mp|Y-hU.,CyA,EoFdv^1' );


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
