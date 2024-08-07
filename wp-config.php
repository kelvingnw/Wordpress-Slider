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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'FY}hIF4WRZ^Kw&i9lBf;e)7?_TKH8tj]f;qc:yr {0y%U=h|lg=O:zz_W{N<Xn4v' );
define( 'SECURE_AUTH_KEY',  ';KYz{ esqeh;mZirb]W_wP8 Hqs[~p83dc&>iAk769Z.|hP@Z _#(&80UoB|<A-S' );
define( 'LOGGED_IN_KEY',    '2MeANdzgk7?*uwzN{aaJ~rgwA#Pz}R$R ^6@.<3_dWj3-Yxe}e#:AeY4[*h/pS1n' );
define( 'NONCE_KEY',        '+3j8^u[1..fSLFu |A(py`{k]m_jcEVaY&}U ]&%[8e&oQm%JjGLc]X[>(vd{g92' );
define( 'AUTH_SALT',        '!oQm10rXlc,!faV@~QUZ[.y3u+lY:YSF|{5V?bI^oNdN%]a:Xv&Yo{$_U%z&L{.4' );
define( 'SECURE_AUTH_SALT', ',w;,Y$~h`vp`yV#vy6u]@UNMr/$~|3Qy7@8(hbnZ%rySi~1yWy2,x|ghrh:>-*gk' );
define( 'LOGGED_IN_SALT',   '@99._3z^+A|2q+;(hkc-Ixhi|#@!Pg8/ W1.Qir&03x4NQ!g6mX<LB)1U}QIvYZ:' );
define( 'NONCE_SALT',       'eFE9<U<soP_DA0]}EW]{rYa{,}{;g~CjM&THotG@;Uy?8jGA?c{oDL|K?R*wIU|C' );

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
