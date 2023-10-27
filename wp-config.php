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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'Nw5yv1?U8Xhca3z7$MP?2hxNV3pPeO|B3u3I)RVL7AK^I$Op-Y$ARev*LW#+s^,V' );
define( 'SECURE_AUTH_KEY',  '{rn^j*@Udf9lRaU?qS~v^m)M(f,dkriG;FHPNDx(euBr3Wdy?sufxOe_&]iRn[w9' );
define( 'LOGGED_IN_KEY',    'PU9VNT}Kc7fuk&kD,aHod_rp+#+glI*}?dAbz:mOET?+TKZ@~*H]xo6-]j@~4Rd{' );
define( 'NONCE_KEY',        'K=AiaA;_arA;Af1| &1sDcfuc`!Fa)u2XBNc=f=le9zrLLoD1ek>zV<JL2(z~uqW' );
define( 'AUTH_SALT',        '.UR$rO7&@~;5VyX)K%D|u}~P06y%}`k6Mk)z%R-CyPKTN Hl$}vHH6TG6#!2mEM{' );
define( 'SECURE_AUTH_SALT', '_`8fI+Ry:sb-BF$Em`~>5X.[yQ_ Se-` Z=?n)11ljCtfj->,|Kvl83`6d@6+!j%' );
define( 'LOGGED_IN_SALT',   'P4G,=>dU}!apgyM1}J>W19L!YO2vjJ?1B=MA Bt@]Ac<S&bTGROYDC9J!4M8TKIZ' );
define( 'NONCE_SALT',       '&<UwjW(rf>L-uM*RP-GsrV,BGKOzrLFLP;jRD?eF)-.~/bZ77X:o~/W=~`]a=+rU' );

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
