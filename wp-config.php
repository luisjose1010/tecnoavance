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
define( 'DB_NAME', 'tecnoavances' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>&L=L>LsMX/!MGt=pM)aRz*R!A4T.7iDX!g^DL7U?*x/Wcm:ApPcJ,7GpdmBm3o<' );
define( 'SECURE_AUTH_KEY',  'eI&!;CbBQ3BrF[JFe=9l%8hci=SX9i=%(o1VjKPY?,6=j[?_ti EI8_oT%3ysD!F' );
define( 'LOGGED_IN_KEY',    'fbOm_ga9;iE@1}8`Vyy_h#Xu`Lq#k;zIwObe-fZQY/-.%V9H|s[#Wy!KV(h9%/fu' );
define( 'NONCE_KEY',        '4_9&q&nMUZB|I^uw+[S;K8NH.]B.9^lRq`&mfdVJg>r1LJ8U;(OOJ}JOJ0uN*VLP' );
define( 'AUTH_SALT',        '$t%9Cl6Ei&|VAwbX6#7Zb>W_XvCJ{jhw;M88Z,=;RUB@z.N7BPpc1}rQf(]q+!!3' );
define( 'SECURE_AUTH_SALT', '(mv,v1K(dMmQ.G!K)e/V%Rzu(v|X=:3ujx7Jxk|jK@a/p:R>n+b)sUMVomel#SdB' );
define( 'LOGGED_IN_SALT',   'm3Yt_x4_Tk%}1,=(&69y93- UY[v{.J.}e_Z*f+zjKQ?-WzmQK2q.1@CM#MG[3&)' );
define( 'NONCE_SALT',       '10_a$yo[w*j7f&Ol5af/O/mLp80n{`INUK1guXZW7`KlhwA_14h`6.NfSSy47Qg,' );

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
