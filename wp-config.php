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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'n2+X1kSs@s)r[E8?IQM2~8lf->Y /}8PPVOsVo9D%c;^1!Cnx5o2-/26Jffp|>Ph' );
define( 'SECURE_AUTH_KEY',  'W:.&stKXH;omoAmp?U-wr34B]:e7oB.Hz^lg[{Oc8deh-/k(M3.V:{7.{-zg|0^$' );
define( 'LOGGED_IN_KEY',    'nn4Z6/A::5)si>I,caz+]nSyIZiE>Ad41n._WH5~Ji#U!|+LCeAZVr:%u&ra!X$5' );
define( 'NONCE_KEY',        'q(cuT!X<j([dDT&=IAe.@l.o8uM4#T@,c/a4>_{F7JI3HrGPPvWLaL(7y(|?Y}/n' );
define( 'AUTH_SALT',        '7;gjRa/O,c&VtH,4e+yTsY^gm,Witt<{7TjNZ~l<=Mk}>TH,t=J:QZ0Sa+OSX7C!' );
define( 'SECURE_AUTH_SALT', '0|oR+b)*Rx>M9nYC&^${d8kaEc}~ F4V.8wK8l;GXqq4m.r`k^TL] @Y<ISF^mv+' );
define( 'LOGGED_IN_SALT',   'CAHfh5IA^rT(b@~nN]nWmn:{dWEgiI0q-mFWO)CHP7KaU+t=p;.nhE&yye8NQ=Dy' );
define( 'NONCE_SALT',       'NFDK2,uFU>lyPWCDWMb%43(XALNf%/dX~(Lu4QL4cv j0J.:2FLUKmcX{+0{G02R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_entrr';

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
