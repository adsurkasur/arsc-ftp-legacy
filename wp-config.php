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
define( 'AUTH_KEY',          'T[&8ZUG(;1;/DW5.MU}<Wl3NCSvg@4fR-P]2nX(9/M%u!19l`DokcV:g)H/;;(nL' );
define( 'SECURE_AUTH_KEY',   'lrjrPvJ%$ril|$e&OB/X~$)g[6pH)d0kXqbt}i#qmmmhx(]5|X^>9Haa%yvgKy0 ' );
define( 'LOGGED_IN_KEY',     'Y?0mU3vZC5fJU|i)#ml56TL7N01rGgwF$[]+^8bN[sh58K&Vf<&RAk8nyz>)j(YC' );
define( 'NONCE_KEY',         ';dU$3}@7tuq,zoNw9,4|NkauNa%%3*Ijc;7{$6LQKu7?<It>-_!r@vE^z`Ane}D*' );
define( 'AUTH_SALT',         '~unFN1]T26]%*:t0:8Q{GaAXE;lsa&*LVOSKr<e~q_n^)d71]?--eF/8}7119i0 ' );
define( 'SECURE_AUTH_SALT',  'R`X4WKr1pgEXYP<LWSvJ]T[ptn9Ts^o0^xmVhP`N;}*q&]o.5m=RtEJZ*Tg[3lG=' );
define( 'LOGGED_IN_SALT',    'dWe`ty5E}j3v>^z|DJx%u)W^~@2b+KA:pF38vn&>rkzX~<>1)mvX.:My<Zn{hF0^' );
define( 'NONCE_SALT',        ':%kd&O^ljN]WNF~VJrDygWvckCwL?%]0/s4;65(8J}f=S2)`4nWC-q{}!k{jv9^Q' );
define( 'WP_CACHE_KEY_SALT', 'r9@H!@;N~,GO9<z.b)9Fqu#wSsoB;m7@#sp)Jg@1$yO%lix l6Q[_{2FL%5aE>y/' );


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
