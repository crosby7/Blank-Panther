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
define( 'AUTH_KEY',          '_SqFc(~#S1ZJc?B`-a..D)i[I`[BMC&MY]EwN0?)J#hhCMB9!9Y,>6,f9eFC~Nv!' );
define( 'SECURE_AUTH_KEY',   'DB3X%N^y==.U$ykgKQ9{kQEsr6t>6Z%1dK_>d4{ztz2[Z#3dax2QD ivGunKdjOM' );
define( 'LOGGED_IN_KEY',     'VrB*_4v+*Oi}CyCRV~E2Pt`F^J4pbLT{DN-79<zy1je5E`b7<i6`{li*~(Yc/|^r' );
define( 'NONCE_KEY',         ')1?bfMxn2XX]5dZq>XM<SmF-ycwZ5(#1a.6QP[%QmUJ/5o,%M0:ZF4w52s2_ m2{' );
define( 'AUTH_SALT',         'V&BpY-QM*VJRHl}+l[n@_S3WGkN|oAPBzK.{HzB)lV3F1A9<CcCaOKkzVI:fy.R:' );
define( 'SECURE_AUTH_SALT',  'Wx7s.,p9?d}2ZH.n;%{6ig2nUb=pi6S{v`4}zu8?*}/44Mlh6XauY%4u{DJC&v*P' );
define( 'LOGGED_IN_SALT',    '$zmi}y@qh6X0Dtt~<+/ qypYEr]i[x#}dWwBn.e~q4<?Ap!m3:.29NzDXM6c]h90' );
define( 'NONCE_SALT',        'LFDd&c/U-|N=G0jhN{|,nzTwh_=A HE(L;hyM;Mb.037p|xnKjl@v}([,;Wc0]k1' );
define( 'WP_CACHE_KEY_SALT', 'SbzFq{4l !L?wN8D+zHfpC~D0I-h)XZ%cFqqUzA/voduEc~iGP+nubk (M%|CbzG' );


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
