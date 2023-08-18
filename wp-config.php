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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9(T=:i}o<f|Vh9-t,e},)B=(Q+th_U)<(*o58bG5i4)(NCC?c@bJM#a&}!cBP%<^' );
define( 'SECURE_AUTH_KEY',  '}(s=t:$h=~A6OOt+btTo$c!ff2mBfxP;flppDuw<0l^y95(nXz_;5{R*k0DQ7FYP' );
define( 'LOGGED_IN_KEY',    'I<0f3rQWv:vYw <JetO;l~*o_&hm53WdygTHlKEVo[X`yURgvDS[c1m$U4#^+-yO' );
define( 'NONCE_KEY',        'EKX!&faak/9Zsqtg13TjH[r<IT<}J20}$3d>$X=iH){AA1nU2zwz7OA7/PWM+ [k' );
define( 'AUTH_SALT',        'S))ny?a0q9$f}P;v^Bh,H &EF?OuAC{P[RouF<Kb36tH$6q[u9i==OlScI8E&/sg' );
define( 'SECURE_AUTH_SALT', '$UXvZN $rzaHhlP60F]@mTm|}-? 4d&w,o#^0N<Hb?57qT`J2 /}91&nLm|lHn<w' );
define( 'LOGGED_IN_SALT',   '8Q]l5MihqrL4@Ppmdhtr9Yoa;@Q[:Et~IH`s})!S?zH%Q}[JB&7INQ7%sA5NST<|' );
define( 'NONCE_SALT',       '84(6oYYl[87.a}K<JdyN[x.P)j4U~TS2N*S3wL)+6P60se/{d*raF_$:{`rCMb2k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
